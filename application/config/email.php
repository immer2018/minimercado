<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// mailgun
//$config['protocol'] = 'smtp';
//$config['smtp_host'] = 'ssl://smtp.mailgun.org';
//$config['smtp_port'] = '465';
//$config['smtp_user'] = 'postmaster@sandboxc7e3d3f3d3004612b796b1c5b5f5bf46.mailgun.org';
//$config['smtp_pass'] = 'd7311cb1acf7fd23a62412d7da43a806';
//$config['charset'] = 'utf-8';
//$config['mailtype'] = 'html';
//$config['wordwrap'] = TRUE;
//$config['newline'] = "\r\n";
// smtp gmail
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'immerpro2018@gmail.com';
$config['smtp_pass'] = 'Eleonore2018';
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['priority'] = 1;
$config['validate'] = TRUE;