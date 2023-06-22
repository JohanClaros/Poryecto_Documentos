<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // Traer

    public function cargar_contactos()
    {
        $resultado = $this->db->get('contactenos');

        return $resultado->result();
    }


    public function verificar($codigo)
    {
        $sql = "SELECT MAX(CAST(SUBSTRING(DOC_CODIGO, LENGTH(DOC_CODIGO)) AS UNSIGNED)) AS max_numero
        FROM doc_documento
        WHERE DOC_CODIGO LIKE ?
        ";

        $query = $this->db->query($sql, [$codigo]);

        if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}

    }






    
    public function procesos(){
        $sql= "SELECT * FROM pro_proceso";

        $query=$this->db->query($sql);

        return $query->result();
    }
    
    public function busq($new_codigo){
        $sql= "SELECT DOC_CODIGO FROM doc_documentos WHERE DOC_CODIGO=?";

        $query=$this->db->query($sql,[$new_codigo]);

        return $query->raw();
    }


    
    public function procesos_id($id){
        $sql= "SELECT * FROM pro_proceso WHERE PRO_ID=?" ;

        $query=$this->db->query($sql,[$id]);

        if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}

    }

    public function tipo_id($id){
        $this->db->where("TIP_ID",$id);
        return $this->db->get("tid_tipo_doc")->row();

    }


    public function insertar($data){
        return $this->db->insert("doc_documento", $data);
    }

    public function update($data,$id){
        $this->db->where("DOC_ID",$id);
        return $this->db->update("doc_documento", $data);
    }

    public function delete($id){
        $this->db->where("DOC_ID",$id);
        return $this->db->delete("doc_documento");
    }
    
    public function tipo(){
        return $this->db->get("tid_tipo_doc")->result();
    }


    public function documentos(){
        $this->db->where("DOC_ESTADO","1");
        $this->db->select("d.*,t.TIP_NOMBRE,p.PRO_NOMBRE");
        $this->db->from("doc_documento d");
        $this->db->join("tid_tipo_doc t","d.DOC_ID_TIPO=t.TIP_ID");
        $this->db->join("pro_proceso p","d.DOC_ID_PROCESO=p.PRO_ID");


        return $this->db->get()->result();

    }





}
