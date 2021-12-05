<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Ramo_model extends CI_model{
//--------------------------------------------------------------------------------------------------------------------//	
	function getData()
	{
	   $this->db->get('ramo');
		$ramo = $this->db->query("SELECT * from ramo");
		return $ramo->result();
	}

	//----------------------------------------------------------------------------------------------------------------//
	public function insert($data){
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('descripcion', $data['descripcion']);
		$this->db->insert('ramo');
	}
//-------------------------------------------------------------------------------------------------------------------//
	public function eliminar_ramo($id_ramo){
	
	$this->db->where('id_ramo', $id_ramo);
    $this->db->delete('ramo');

	}
//-------------------------------------------------------------------------------------------------------------------//	
	public function obtener($id_ramo){

		$this->db->select('nombre,descripcion,id_ramo');
		$this->db->from('ramo');
		$this->db->where('id_ramo = '.$id_ramo);
		$ramo =$this->db->get();
		return $ramo->row();

    }
//-------------------------------------------------------------------------------------------------------------------//
	public function update($data)
	{
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('descripcion', $data['descripcion']);
		
		
		$this->db->where('id_ramo', $data['id_ramo']);
		$this->db->update('ramo');
	}
}