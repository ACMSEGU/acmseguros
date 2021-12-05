<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model{
//----------------------------------------------------------------------------------------------------------------//	
	function getData()
	{
	   $this->db->get('usuario');
		$usuario = $this->db->query("SELECT * from usuario");
		return $usuario->result();
	}
//-------------------------------------------------------------------------------------------------------------------//
	public function insert($data){
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('apellido', $data['apellido']);
		$this->db->set('correo', $data['correo']);
		$this->db->set('contacto', $data['contacto']);
		$this->db->set('user', $data['user']);
		$this->db->set('pass', sha1($data['pass']));
		$this->db->set('idtipo', $data['idtipo']);
		$this->db->insert('usuario');
	}
//-------------------------------------------------------------------------------------------------------------------//
	public function eliminar_usuarios($id_usuario){
	
	$this->db->where('id_usuario', $id_usuario);
    $this->db->delete('usuario');

	}
//-------------------------------------------------------------------------------------------------------------------//	
	public function obtener($id_usuario){

		$this->db->select('nombre,apellido,correo,contacto,user,idTipo,id_usuario');
		$this->db->from('usuario');
		$this->db->where('id_usuario = '.$id_usuario);
		$usuario =$this->db->get();
		return $usuario->row();

    }
//-------------------------------------------------------------------------------------------------------------------//
	public function update($data)
	{
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('apellido', $data['apellido']);
		$this->db->set('correo', $data['correo']);
		$this->db->set('contacto', $data['contacto']);
		$this->db->set('user', $data['user']);
		
		$this->db->where('id_usuario', $data['id_usuario']);
		$this->db->update('usuario');
	}
//-------------------------------------------------------------------------------------------------------------------//
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

