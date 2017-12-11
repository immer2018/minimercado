<?php
ini_set("display_errors", FALSE);
defined('BASEPATH') OR exit('No direct script access allowed');
class ColaboradorController extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function index() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 2) {
            redirect(base_url() . 'iniciar');
        }
        $notificaciontotal = $this->inventario_model->cantidadVencidos()->cantVencido + $this->inventario_model->cantidadXVencerse()->cuantovencerse + $this->inventario_model->cantidadAgotados()->agotados + $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse;

        $data = ['titulo' => 'Colaborador', 'es_usuario_normal' => FALSE,
            'totalNotificaciones' => $notificaciontotal,
            'vencidos' => $this->inventario_model->cantidadVencidos()->cantVencido,
            'porVencerse' => $this->inventario_model->cantidadXVencerse()->cuantovencerse,
            'agotados' => $this->inventario_model->cantidadAgotados()->agotados,
            'porAgotarse' => $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse,
            'perfil' => $this->usuario_model->consultarPerfil($this->session->userdata('idUsuario'))];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menu', $data);
        $this->load->view('Colaborador/index');
        $this->load->view('templates/admin/footer');
    }

    public function mostrarPerfilColaborador() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 2) {
            redirect(base_url() . 'iniciar');
        }
        $notificaciontotal = $this->inventario_model->cantidadVencidos()->cantVencido + $this->inventario_model->cantidadXVencerse()->cuantovencerse + $this->inventario_model->cantidadAgotados()->agotados + $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse;

        $data = ['titulo' => 'perfil Colaborador',
            'es_usuario_normal' => FALSE,
            'totalNotificaciones' => $notificaciontotal,
            'vencidos' => $this->inventario_model->cantidadVencidos()->cantVencido,
            'porVencerse' => $this->inventario_model->cantidadXVencerse()->cuantovencerse,
            'agotados' => $this->inventario_model->cantidadAgotados()->agotados,
            'porAgotarse' => $this->inventario_model->cantidadXAgotarse()->cuantoAgotarse,
            'perfil' => $this->usuario_model->consultarPerfil($this->session->userdata('idUsuario')),
            'mrol' => $this->usuario_model->mostrarRol($this->session->userdata('rol')),
        ];

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menu', $data);
        $this->load->view('Admin/perfilAdmin', $data);
        $this->load->view('templates/admin/footer');
    }

    public function actualizarPerfilCola() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 2) {
            redirect(base_url() . 'iniciar');
        }

        $this->form_validation->set_rules('txtemail', 'correo', 'required|valid_email|is_unique[usuario.email]');
        $this->form_validation->set_rules('txtusuarioco', 'usuario', 'required|is_unique[usuario.NombreUsuario]');
        $this->form_validation->set_message('is_unique', 'El  campo %s ya existe en el sistema ');

        if ($this->form_validation->run() === FALSE) {
            $this->mostrarPerfilColaborador();
        } else {
            $actualizarco = array(
                'nombreCompleto' => $this->input->post('txtNombCompl'),
                'NombreUsuario' => $this->input->post('txtusuarioco'),
                'email' => $this->input->post('txtemail'),
            );
            $idUsuario = $this->input->post('idUsuario');
            $this->usuario_model->atualizarperfil($idUsuario, $actualizarco);
            redirect('colaborador');
        }
    }

}
