<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_model{
//----------------------------------------------------------------------------------------------------------------//	
	public	function getData()
	{
		$cliente = $this->db->query('CALL lista_cliente();');
		return $cliente->result();
	}
	//----------------------------------------------------------------------------------------------------------------//
	public function insert($data){
		$this->db->set('nombre_cliente', $data['nombre_cliente']);
		$this->db->set('apellido_cliente', $data['apellido_cliente']);
		$this->db->set('dui', $data['dui']);
		$this->db->set('nit', $data['nit']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->set('id_municipio', $data['mun']);
		$this->db->set('fecha_nacimiento', $data['fecha_nacimiento']);
		$this->db->set('correo', $data['correo']);
		$this->db->set('telefono', $data['telefono']);
		$this->db->set('idCorredor', $data['idCorredor']);
		$this->db->insert('cliente');
	}
//-------------------------------------------------------------------------------------------------------------------//
	public function eliminar_cliente($id_cliente){
	
	$this->db->where('id_cliente', $id_cliente);
    $this->db->delete('cliente');

	}
//-------------------------------------------------------------------------------------------------------------------//	
	public function obtener($id_cliente){

$cliente = $this->db->query('SELECT a.*, b.municipio,c.nombre FROM cliente a,municipio b, departamento c WHERE a.id_municipio = b.id AND b.id_depto = c.id_departamento and a.id_cliente = ' . $id_cliente);

return $cliente->row();
}
//-------------------------------------------------------------------------------------------------------------------//
    public function update($data)
	{
		$this->db->set('nombre_cliente', $data['nombre_cliente']);
		$this->db->set('apellido_cliente', $data['apellido_cliente']);
		$this->db->set('dui', $data['dui']);
		$this->db->set('nit', $data['nit']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->set('id', $data['mun']);
		$this->db->set('fecha_nacimiento', $data['fecha_nacimiento']);
		$this->db->set('correo', $data['correo']);
		$this->db->set('telefono', $data['telefono']);
		
		$this->db->where('id_cliente', $data['id_cliente']);
		$this->db->update('cliente');
	}
//---------------------------------------------------------------------------------------------------------------------//

	public function getDepartamento(){

		$departamento = $this->db->get('departamento');
		return $departamento->result_array(); 
	}

//-------------------------------------------------------------------------------------------------//

	public function getCorredor(){

		$corredor = $this->db->get('corredor');
		return $corredor->result_array(); 
	}

//-------------------------------------------------------------------------------------------------//

	public function otherMunicipio(){
		$muni = $this->db->get('municipio');
		return $muni->result_array();
	}

//-------------------------------------------------------------------------------------------------//

	 public function getMunicipioxDepartamento($id){
		$this->db->where('id_depto',$id);
		$municipio = $this->db->get('municipio');
		return $municipio->result_array();
	}

//-------------------------------------------------------------------------------------------------//
	
	public function duiExt($dui)
 	{
 		$D = $this->db->query("select * from cliente where dui like'".$dui."'");
 		if ($D->num_rows()>0) {
 			return 1;
 		}
 		else{
 			return 0;
 		}
 	}

 //-------------------------------------------------------------------------------------------------//


 	public function nitExt($nit)
 	{
 		$N = $this->db->query("select * from cliente where nit like'".$nit."'");
 		if ($N->num_rows()>0){
 			return 1;

 		}
 		else{
 			return 0;
 		}
 	}

 //------------------------------------------------------------------------------------------------//


 	public function apeExt($apellido_cliente)
 	{
 		$CA = $this->db->query("select * from cliente where apellido_cliente like'".$apellido_cliente."'");
 		if ($CA->num_rows()>0) {
 			return 1;
 		}
 		else{
 			return 0;
 		}
 	}

 	public function telExt($telefono)
 	{
 		$CT = $this->db->query("select * from cliente where telefono like'".$telefono."'");
 		if ($CT->num_rows()>0) {
 			return 1;
 		}
 		else{
 			return 0;
 		}
 	}

 	public function correoExt($correo)
 	{
 		$CC = $this->db->query("select * from cliente where correo like'".$correo."'");
 		if ($CC->num_rows()>0) {
 			return 1;
 		}
 		else{
 			return 0;
 		}
 	}

 }


 
 ?>