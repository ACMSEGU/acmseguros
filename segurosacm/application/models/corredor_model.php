<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Corredor_model extends CI_model{
//--------------------------------------------------------------------------------------------------------------------//	
	function getData()
	{
	   $this->db->get('corredor');
		$corredor = $this->db->query("SELECT * from corredor");
		return $corredor->result();
	}

	//----------------------------------------------------------------------------------------------------------------//
	public function insert($data){
		$this->db->set('nombre_corredor_asesor', $data['nombre_corredor_asesor']);
		$this->db->set('apellido_corredor_asesor', $data['apellido_corredor_asesor']);
		$this->db->set('contacto', $data['contacto']);
		$this->db->insert('corredor');
	}
//-------------------------------------------------------------------------------------------------------------------//
	public function eliminar_usuarios($id_corredor){
	
	$this->db->where('id_corredor', $id_corredor);
    $this->db->delete('corredor');

	}
//-------------------------------------------------------------------------------------------------------------------//	
	public function obtener($id_corredor){

		$this->db->select('nombre_corredor_asesor,apellido_corredor_asesor,contacto,id_corredor');
		$this->db->from('corredor');
		$this->db->where('id_corredor = '.$id_corredor);
		$corredor =$this->db->get();
		return $corredor->row();

    }
//-------------------------------------------------------------------------------------------------------------------//
	public function update($data)
	{
		$this->db->set('nombre_corredor_asesor', $data['nombre']);
		$this->db->set('apellido_corredor_asesor', $data['apellido']);
		$this->db->set('contacto', $data['contacto']);
		
		$this->db->where('id_corredor', $data['id_corredor']);
		$this->db->update('corredor');
	}
//---------------------------------------------------------------------------------------------------------------------//
	public function validardatos($user, $pass)
	{
		$this->db->where('user', $user);
		$this->db->where('pass', $pass);
		$result = $this->db->get('usuario');
		$idtipo = $result->row()->idtipo;
			if ($result->num_rows() > 0){
				return $idtipo;
			}
			else{
				return 'fail';
			}
	}

//-----------------------------------------------------------------------------------------------------------------------//
public function get_id($user, $pass)
	{
		$this->db->where('user', $user);
		$this->db->where('pass', $pass);
		$result = $this->db->get('usuario');
		$idtipo = $result->row()->id;
			if ($result->num_rows() > 0){
				return $idtipo;
			}
			else{
				return 'fail';
			}
	}

//----------------------------------------------------------------------------------------------------------------------//

public function get_correo($correo)
{
	$resultado = $this->db->query("select * from usuarios where correo like '".$correo."'");
	if ($resultado->num_rows()>0) {
		return 1;
	}
	else{
		return 0;
	}
}

//------------------------------------------------------------------------------------------------------------------------//

public function get_usuario($user)
{
	$resultado = $this->db->query("select * from usuarios where user like '".$user."'");
	if ($resultado->num_rows()>0) {
		return 1;
	}
	else{
		return 0;
	}
}

//-----------------------------------------------------------------------------------------------------------------------//
public function selectTipo(){
         $tipo = $this->db->get('tipo');
		return $tipo->result_array();

}
//-----------------------------------------------------------------------------------------------------------------------//

  
 }
 
 ?>