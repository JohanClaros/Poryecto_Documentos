<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('model_registro');

	}

	public function lastID()
	{
		return $this->db->insert_id();
	}

	public function cuenta_user($user, $pass){

        $sql="SELECT COUNT(*) AS contar
        FROM usuario WHERE user= ? AND
        pass = ? ;";
    
    $query =$this->db->query($sql,[$user, $pass]);

    return $query->row();

    }


    public function trae_user($user, $pass){

        $sql= "SELECT * FROM usuario u
        WHERE 
        user=? AND pass= ?;";

        $query=$this->db->query($sql, [$user, $pass]);

        return $query->row();
    }

    public function cargar_datos(){
        $idUsuario = $this->session->userdata('ID');
        $sql="SELECT id, nombre
        FROM usuario 
        WHERE id = ?";

        $query=$this->db->query($sql, [$idUsuario]);

        return $query->row();
    }

}