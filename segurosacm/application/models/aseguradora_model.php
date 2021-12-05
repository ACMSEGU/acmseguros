<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Aseguradora_model extends CI_model{
//----------------------------------------------------------------------------------------------------------------//	
	function getData()
	{
	   $this->db->get('aseguradora');
		$aseguradora = $this->db->query("SELECT * from aseguradora");
		return $aseguradora->result();
	}
		//----------------------------------------------------------------------------------------------------------------//
	public function insert($data){
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('razon_social', $data['razon_social']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->set('contacto_fijo_aseguradora', $data['contacto_fijo_aseguradora']);
		$this->db->set('nombre_asesor_atendiente', $data['nombre_asesor_atendiente']);
		$this->db->set('contacto_asesor_atendiente', $data['contacto_asesor_atendiente']);
		$this->db->insert('aseguradora');
	}
//-------------------------------------------------------------------------------------------------------------------//
	public function eliminar_aseguradora($id_aseguradora){
	
	$this->db->where('id_aseguradora', $id_aseguradora);
    $this->db->delete('aseguradora');

	}
//-------------------------------------------------------------------------------------------------------------------//	
	public function obtener($id_aseguradora){

		$this->db->select('nombre, razon_social, direccion, contacto_fijo_aseguradora, nombre_asesor_atendiente, contacto_asesor_atendiente, id_aseguradora');
		$this->db->from('aseguradora');
		$this->db->where('id_aseguradora = '.$id_aseguradora);
		$aseguradora =$this->db->get();
		return $aseguradora->row();

    }
//-------------------------------------------------------------------------------------------------------------------//
	public function update($data)
	{
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('razon_social', $data['razon_social']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->set('contacto_fijo_aseguradora', $data['contacto_fijo_aseguradora']);
		$this->db->set('nombre_asesor_atendiente', $data['nombre_asesor_atendiente']);
		$this->db->set('contacto_asesor_atendiente', $data['contacto_asesor_atendiente']);
		
		$this->db->where('id_aseguradora', $data['id_aseguradora']);
		$this->db->update('aseguradora');
	}
	//---------------------------------------------------------------------------------------------------------------------//
	
 }
 
 ?>