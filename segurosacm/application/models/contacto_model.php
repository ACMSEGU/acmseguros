<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_model extends CI_model{
	function getData()
	{
	   $this->db->get('contacto');
		$contacto = $this->db->query("SELECT ct.id_contacto,ct.nombre_completo,ct.correo_electronico,r.nombre,ct.marca,ct.modelo,ct.telefono_contacto,ct.anio_vehiculo,ct.direccion,ct.direccion,ct.suma_asegurada,ct.edad,ct.comentario FROM contacto ct INNER JOIN ramo r ON r.id_ramo = ct.id_ramo;");
		return $contacto->result();
	}

	public function insert($data){
		$this->db->set('nombre_completo', $data['nombre_completo']);
		$this->db->set('telefono_contacto', $data['telefono_contacto']);
		$this->db->set('correo_electronico', $data['correo_electronico']);
		$this->db->set('id_ramo', $data['id_ramo']);
		$this->db->set('marca', $data['marca']);
		$this->db->set('modelo', $data['modelo']);
		$this->db->set('anio_vehiculo', $data['anio_vehiculo']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->set('suma_asegurada', $data['suma_asegurada']);
		$this->db->set('edad', $data['edad']);
		$this->db->set('comentario', $data['comentario']);
		$this->db->insert('contacto');
	}

	public function eliminar_comentarios($id_contacto){
	
	$this->db->where('id_contacto', $id_contacto);
    $this->db->delete('contacto');

	}

	public function getRamo(){

		$ramo = $this->db->get('ramo');
		return $ramo->result_array(); 
	}

}
?>