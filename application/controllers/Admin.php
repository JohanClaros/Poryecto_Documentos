<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('is_logged_in')) {

            $this->load->model('model_login');
            $this->load->model('model_admin');
        } else {
            redirect(base_url() . "Login");
        }
    }

    // VISTAS
    public function index()
    {
        $result['perfil'] = $this->model_login->cargar_datos();
        $result['documentos'] = $this->model_admin->documentos();
        $result['proceso'] = $this->model_admin->procesos();
        $result['tipo'] = $this->model_admin->tipo();
        $this->load->view('admin/heade_admin', $result);
        $this->load->view('admin/inicio', $result);
    }



    // AÑADIR

    public function anadir()
    {
        $nombre = $this->input->post('nombre');
        $tipo = $this->input->post('tipo');
        $proceso = $this->input->post('proceso');
        $contenido = $this->input->post('contenido');

        $parte1 = $this->model_admin->procesos_id($proceso);
        $parte2 = $this->model_admin->tipo_id($tipo);

        $completo = $parte1->PRO_PREFIJO . "-" . $parte2->TIP_PREFIJO . "-%";


        $busq_ver = $this->model_admin->verificar($completo);


        if ($busq_ver != false) {
            $com = $parte1->PRO_PREFIJO . "-" . $parte2->TIP_PREFIJO . "-" . $busq_ver->max_numero + 1;
        } else {
            $com = $parte1->PRO_PREFIJO . "-" . $parte2->TIP_PREFIJO . "-1";
        }
        $data = array(
            "DOC_NOMBRE" => $nombre,
            "DOC_CODIGO" => $com,
            "DOC_ID_TIPO" => $tipo,
            "DOC_ID_PROCESO" => $proceso,
            "DOC_CONTENIDO" => $contenido,

        );
        $this->model_admin->insertar($data);
        $this->session->set_flashdata("error", "Formulario Guardado");
        return redirect(base_url() . "index.php/Admin");
    }

    // ACTUALIZAR

    public function update($id)
    {
        $nombre = $this->input->post('nombre');
        $tipo = $this->input->post('tipo');
        $proceso = $this->input->post('proceso');
        $contenido = $this->input->post('contenido');

        $parte1 = $this->model_admin->procesos_id($proceso);
        $parte2 = $this->model_admin->tipo_id($tipo);

        $completo = $parte1->PRO_PREFIJO . "-" . $parte2->TIP_PREFIJO . "-%";


        $busq_ver = $this->model_admin->verificar($completo);


        if ($busq_ver != false) {
            $com = $parte1->PRO_PREFIJO . "-" . $parte2->TIP_PREFIJO . "-" . $busq_ver->max_numero + 1;
        } else {
            $com = $parte1->PRO_PREFIJO . "-" . $parte2->TIP_PREFIJO . "-1";
        }
        $data = array(
            "DOC_NOMBRE" => $nombre,
            "DOC_CODIGO" => $com,
            "DOC_ID_TIPO" => $tipo,
            "DOC_ID_PROCESO" => $proceso,
            "DOC_CONTENIDO" => $contenido,

        );
        $this->model_admin->update($data, $id);
        $this->session->set_flashdata("error", "Documento Modificado");
        return redirect(base_url() . "index.php/Admin");
    }


    //ELIMINAR
    public function del($id)
    {
        $this->model_admin->delete($id);
        $this->session->set_flashdata("error", "Documento Modificado");
        return redirect(base_url() . "index.php/Admin");
    }

    //ELIMINAR
    public function del_escondido($id)
    {

        $data = array(
            "DOC_ESTADO"=>0,
        );


        $this->model_admin->update($data,$id);
        $this->session->set_flashdata("error", "Documento Eliminado");
        return redirect(base_url() . "index.php/Admin");
    }
}
