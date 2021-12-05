<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Poliza_model extends CI_model{
//----------------------------------------------------------------------------------------------------------------//	
	function getData()
	{
		$usuario = $this->db->query('CALL lista_poliza();');
		return $usuario->result();
	}
	//----------------------------------------------------------------------------------------------------------------//
	public function insert($data){
		$this->db->set('asegurado', $data['asegurado']);
		$this->db->set('nombre_contratante' , $data['nombre_contratante']);
		$this->db->set('idAseguradora' , $data['idAseguradora']);
		$this->db->set('numero_poliza' , $data['numero_poliza']);
		$this->db->set('idRamo' , $data['idRamo']);
		$this->db->set('plan_contratado' , $data['plan_contratado']);
		$this->db->set('vigencia_inicial' , $data['vigencia_inicial']);
		$this->db->set('vigencia_final', $data['vigencia_final']);
		$this->db->set('suma_asegurada', $data['suma_asegurada']);
		$this->db->set('deducible', $data['deducible']);
		$this->db->set('idModelo' , $data['idModelo']);
		$this->db->set('anio', $data['anio']);
		$this->db->set('placa', $data['placa']);
		$this->db->set('prima_total', $data['prima_total']);
		$this->db->set('forma_pago', $data['forma_pago']);
		$this->db->set('valor_cuota', $data['valor_cuota']);
		$this->db->set('metodo_pago', $data['metodo_pago']);
		$this->db->set('tipo_tramite', $data['tipo_tramite']);
		$this->db->set('estado', $data['estado']);

				$this->db->insert('poliza');
	}
//-------------------------------------------------------------------------------------------------------------------//
	public function eliminar_usuarios($id_poliza){
	
	$this->db->where('id_poliza', $id_poliza);
    $this->db->delete('poliza');

	}
//-------------------------------------------------------------------------------------------------------------------//	
	public function obtener($id_poliza){

		$poliza = $this->db->query('SELECT p.*,c.nombre_cliente,a.nombre AS empresa,r.nombre AS rama_poliza,m.decrip_modelo,mr.nombre_marca FROM poliza p,cliente c,aseguradora a,ramo r,modelo m,marca mr WHERE p.idModelo = m.id_modelo AND m.id_marca = mr.id_marca AND p.id_poliza =' . $id_poliza);
		return $poliza->row();

    }
//-------------------------------------------------------------------------------------------------------------------//
	public function update($data)
	{
		$this->db->set('asegurado', $data['asegurado']);
		$this->db->set('nombre_contratante' , $data['nombre_contratante']);
		$this->db->set('idAseguradora' , $data['idAseguradora']);
		$this->db->set('numero_poliza' , $data['numero_poliza']);
		$this->db->set('idRamo' , $data['idRamo']);
		$this->db->set('plan_contratado' , $data['plan_contratado']);
		$this->db->set('vigencia_inicial' , $data['vigencia_inicial']);
		$this->db->set('vigencia_final', $data['vigencia_final']);
		$this->db->set('suma_asegurada', $data['suma_asegurada']);
		$this->db->set('deducible', $data['deducible']);
		$this->db->set('idModelo' , $data['idModelo']);
		$this->db->set('anio', $data['anio']);
		$this->db->set('placa', $data['placa']);
		$this->db->set('prima_total', $data['prima_total']);
		$this->db->set('forma_pago', $data['forma_pago']);
		$this->db->set('valor_cuota', $data['valor_cuota']);
		$this->db->set('metodo_pago', $data['metodo_pago']);
		$this->db->set('tipo_tramite', $data['tipo_tramite']);
		$this->db->set('estado', $data['estado1']);
		$this->db->where('id_poliza', $data['id_poliza']);
		$this->db->update('poliza');

	}

//------------------------------------------------------------------------------------------------------------------//

public function getCliente(){

		$cliente = $this->db->get('cliente');
		return $cliente->result_array(); 

	}

//-------------------------------------------------------------------------------------------------------------------//

	public function getAseguradora(){

		$aseguradora = $this->db->get('aseguradora');
		return $aseguradora->result_array(); 

	}


//-------------------------------------------------------------------------------------------------------------------//


	public function getRamo(){

		$ramo = $this->db->get('ramo');
		return $ramo->result_array(); 

	}

//-------------------------------------------------------------------------------------------------------------------//

  public function getMarca() {
  	$marca = $this->db->get('marca');
  	return $marca->result_array();
  }

 //-------------------------------------------------------------------------------------------------//

  public function getModelor(){
  	$modelor = $this->db->get('modelo');
  	return $modelor->result_array();
  }

 //----------------------------------------------------------------------------------------------------//

  public function getModeloxMarca($id){
  	$this->db->where('id_marca',$id);
  	$modelo = $this->db->get('modelo');
  	return $modelo->result_array();
  }

  //---------------------------------------------------------------------------------------------------//

 public function conteo_pol_ramo1(){
 	$ramo1 = $this->db->query('CALL num_pol_auto();');
 	return $ramo1->result_array();
 }

 //--------------------------------------------------------------------------------------------------//

public function conteo_pol_ramo2(){
 	$ramo2 = $this->db->query('CALL num_pol_medico();');
 	return $ramo2->result_array();
 }

 //--------------------------------------------------------------------------------------------------//

 public function conteo_pol_ramo3(){
 	$ramo3 = $this->db->query('CALL num_pol_incendio();');
 	return $ramo3->result_array();
 }

 //--------------------------------------------------------------------------------------------------//

  public function conteo_pol_ramo4(){
 	$ramo4 = $this->db->query('CALL num_pol_multiple();');
 	return $ramo4->result_array();
 }

 //-------------------------------------------------------------------------------------------------//

 public function conteo_pol_ramo5(){
 	$ramo5 = $this->db->query('CALL num_pol_residencial();');
 	return $ramo5->result_array();
 }

//---------------------------------------------------------------------------------------------------//

 public function conteo_pol_ramo6(){
 	$ramo6 = $this->db->query('CALL num_pol_finanzas();');
 	return $ramo6->result_array();
 }

} 
 ?>