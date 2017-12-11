<?php
ini_set("display_errors", FALSE);
defined('BASEPATH') OR exit('No direct script access allowed');
class SubCategoria extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
            redirect(base_url() . 'iniciar');
        }
        $notificaciontotal = $this->inventario_model->cantidadVencidos()->cantVencido + $this->inventario_model->cantidadXVencerse()->cuantovencerse + $this->inventario_model->cantidadAgotados()->agotados + $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse;

        // usamos la clase SubCategoria y llamamos al metodo que obtiene todas las Subcategorias
        $data['Subcategorias'] = $this->subcategoria_model->obtenerSubCategorias();
        $data['titulo'] = "Subcategoria";
        $data['totalNotificaciones'] = $notificaciontotal;
        $data['vencidos'] = $this->inventario_model->cantidadVencidos()->cantVencido;
        $data['porVencerse'] = $this->inventario_model->cantidadXVencerse()->cuantovencerse;
        $data['agotados'] = $this->inventario_model->cantidadAgotados()->agotados;
        $data['porAgotarse'] = $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse;
        $data ['perfil'] = $this->usuario_model->consultarPerfil($this->session->userdata('idUsuario'));
        // cargar la vista
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menu', $data);
        $this->load->view('SubCategoria/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function SubInCategoria() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
            redirect(base_url() . 'iniciar');
        }
        $notificaciontotal = $this->inventario_model->cantidadVencidos()->cantVencido + $this->inventario_model->cantidadXVencerse()->cuantovencerse + $this->inventario_model->cantidadAgotados()->agotados + $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse;

        $data = ['titulo' => 'agregar subcategoria',
            'codcategoria' => $this->uri->segment(3),
            'nombrecategoria' => 'sub',
            'es_usuario_normal' => FALSE,
             'totalNotificaciones' => $notificaciontotal,
            'vencidos' => $this->inventario_model->cantidadVencidos()->cantVencido,
            'porVencerse' => $this->inventario_model->cantidadXVencerse()->cuantovencerse,
            'agotados' => $this->inventario_model->cantidadAgotados()->agotados,
            'porAgotarse' => $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse,
            'perfil' => $this->usuario_model->consultarPerfil($this->session->userdata('idUsuario'))
        ];

        $this->form_validation->set_rules('NombreSubcategoria', 'subcategoria', 'required');
        $this->form_validation->set_rules('detalSubCategoria', 'detalle subcategoria', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/menu', $data);
            $this->load->view('SubCategoria/NuevaSubcategoria', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $multiInsert = ['NombreSubcategoria' => $this->input->post('NombreSubcategoria'),
                'detallesSub' => $this->input->post('detalSubCategoria'),
                'Categoria_idCategoria' => $this->input->post('codigoCategoria'),
                'Estado_estadoId' => 1
            ];

            $subinsert = $this->subcategoria_model->InsertSubcategoria($multiInsert);
            if ($subinsert === TRUE) {
                redirect('categoria');
            } else {
                redirect('subcategoria');
            }

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/menu', $data);
            $this->load->view('SubCategoria/NuevaSubcategoria', $data);
            $this->load->view('templates/admin/footer');
        }
    }

    public function editarSub() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
            redirect(base_url() . 'iniciar');
        }
        $notificaciontotal = $this->inventario_model->cantidadVencidos()->cantVencido + $this->inventario_model->cantidadXVencerse()->cuantovencerse + $this->inventario_model->cantidadAgotados()->agotados + $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse;

        $dato['titulo'] = " Editar SubCategoria";
        $dato['es_usuario_normal'] = FALSE;
        $dato['totalNotificaciones'] = $notificaciontotal;
        $dato['vencidos'] = $this->inventario_model->cantidadVencidos()->cantVencido;
        $dato['porVencerse'] = $this->inventario_model->cantidadXVencerse()->cuantovencerse;
        $dato['agotados'] = $this->inventario_model->cantidadAgotados()->agotados;
        $dato['porAgotarse'] = $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse;
        $dato['perfil'] = $this->usuario_model->consultarPerfil($this->session->userdata('idUsuario'));
        $idSubCategoria = $this->uri->segment(3);
        $obtenerSubCategoria = $this->subcategoria_model->modificar_subcategoria($idSubCategoria);

        if ($obtenerSubCategoria != FALSE) {
            foreach ($obtenerSubCategoria->result() as $fila) {
                $NombreSubCategoria = $fila->NombreSubcategoria;
                $detallesSub = $fila->detallesSub;
                $codCategoria = $fila->Categoria_idCategoria;
            }
            $data = array(
                'idSub' => $idSubCategoria,
                'NombreSub' => $NombreSubCategoria,
                'DetallesSub' => $detallesSub,
                'codCategoria' => $codCategoria
            );
        } else {
            $data = '';
            return FALSE;
        }
        $this->load->view('templates/admin/header', $dato);
        $this->load->view('templates/admin/menu', $dato);
        $this->load->view('SubCategoria/Actualizasubcategoria', $data);
        $this->load->view('templates/admin/footer');
    }

    public function actualizarsub() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
            redirect(base_url() . 'iniciar');
        }
        $idsub = $this->uri->segment(3);
        $subcategoria_a_modificar = array(
            'NombreSubcategoria' => $this->input->post('NombreSubcategoria'),
            'detallesSub' => $this->input->post('detalSubCategoria'),
            'Categoria_idCategoria' => $this->input->post('hdcodigoCategoria')
        );
        $act = $this->subcategoria_model->Actualizasubcategoria($idsub, $subcategoria_a_modificar);


        if ($act == true) {
            $this->session->set_flashdata('correcto', 'La Subcategoria fue actualizada correctamente');
        } else {
            $this->session->set_flashdata('incorrecto', 'La Subcategoria no se pudo actualizada correctamente');
        }


        redirect('categoria');
    }

    public function modalSub() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
            redirect(base_url() . 'iniciar');
        }
        $idsubCategoria = $this->uri->segment(3);
        $mostrarNombre = $this->subcategoria_model->nombresubcategoria($idsubCategoria);
        foreach ($mostrarNombre->result() as $fila) {
            $nombresubcategoria = $fila->NombreSubcategoria;
        }
        $info_modal = array(
            'id' => $idsubCategoria,
            'titulo_h1' => "SubCategoria a eliminar",
            'titulo' => "modal subcategoria",
            'nombresubcat' => $nombresubcategoria
        );

        $this->load->view('templates/admin/header', $info_modal);
        $this->load->view('subcategoria/modalSub', $info_modal);
    }

    public function InactivarSub() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
            redirect(base_url() . 'iniciar');
        }
        $idsub = $this->uri->segment(3);
        $inactivasub = $this->subcategoria_model->inactivarSubcategoria($idsub);
        if ($inactivasub == TRUE) {
            echo "<script>alert('subcategoria eliminada correctamente');</script>";
            redirect('categoria');
        } else {
            redirect('categoria');
        }
    }

}
