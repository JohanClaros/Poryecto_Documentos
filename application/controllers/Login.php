<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
    }

    public function index()
	{		
		$this->load->view('login');
        
	}


    public function validar_user()
    {
        $user = $this->input->post("user");
        $pass = $this->input->post("pass");

        $result = $this->model_login->cuenta_user($user, $pass);

        if ($result->contar == 1) {
            $dato_usuario = $this->model_login->trae_user($user, $pass);

            $session_data = array(
                "ID" => $dato_usuario->id,
                "NOMBRE_USUARIO" => $dato_usuario->nombre,
                "USER" => $dato_usuario->user,
                "PASS" => $dato_usuario->pass,
                "is_logged_in" => TRUE
            );
            $this->session->set_userdata($session_data);

            if ($this->session->userdata('is_logged_in')) {
                redirect(base_url() . "index.php/Admin");
            } else {
                redirect(base_url() );
            }
        } else {
            $this->session->set_flashdata("error", "el usuario y/o contraseña son incorrectos");
            return redirect(base_url() . "Login");
        }
    }
    public function cerrarSession()
    {

        $session = array(
            "is_logged_in" => FALSE
        );
        $this->session->set_userdata($session);
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
