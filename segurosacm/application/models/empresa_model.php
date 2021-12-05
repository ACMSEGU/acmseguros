<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empresa_model extends CI_model{

	public function insertar($data , $data2){

		$this->db->insert('configuracion');
	}
 public function imagen()
 {
 $this->db->select('logo');
 $this->db->where('id_configuracion=15');
 $logo=$this->db->get('configuracion');
 return$logo->result();
 }
 public function select_zona(){
 	return $this->db->get('zona_horaria')->result_array();

}

public function obtener_confi(){

		$this->db->select('nombre_empresa,direccion,telefono,moneda,zona_horaria,id_configuracion');
		$this->db->from('configuracion');
		$empresa = $this->db->get();
		return $empresa->row();
}
}
?>