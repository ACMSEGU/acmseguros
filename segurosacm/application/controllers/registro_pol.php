<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_pol extends CI_Controller{

	public function __construct(){

			parent::__construct();
			$this->load->model('poliza_model');
	}
//----------------------------------------------------------------------------------------------------------------------//

	public function index(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '1'){
				redirect('login/iniciar_sesion');
		   }
		}
		else{
				$this->load->view('inicio/login_view');
		}
	}
//----------------------------------------------------------------------------------------------------------------------//

	public function verpoli(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
		 	if ($this->session->userdata('idtipo') == '1') {
		$poliza = $this->poliza_model->getData();
		$data['poliza'] = $poliza;
		$this->load->view('admin/menu/menu');
		$this->load->view('admin/ver_polizas', $data);
		$this->load->view('admin/modales/agre_pol');
	  }
   }
   else{
	    redirect('login/index');
      }
	}
//-----------------------------------------------------------------------------------------------------------------------//

	public function agregar(){
		$data['asegurado'] = $_POST['asegurado'];
		$data['nombre_contratante'] = $_POST['nombre_contratante'];
		$data['idAseguradora'] = $_POST['idAseguradora'];
		$data['numero_poliza'] = $_POST['numero_poliza'];
		$data['idRamo'] = $_POST['idRamo'];
		$data['plan_contratado'] = $_POST['plan_contratado'];
		$data['vigencia_inicial'] = $_POST['vigencia_inicial'];
		$data['vigencia_final'] = $_POST['vigencia_final'];
		$data['suma_asegurada'] = $_POST['suma_asegurada'];
		$data['deducible'] = $_POST['deducible'];
		$data['idModelo'] = $_POST['idModelo'];
		$data['anio'] = $_POST['anio'];
		$data['placa'] = $_POST['placa'];
		$data['prima_total'] = $_POST['prima_total'];
		$data['forma_pago'] = $_POST['forma_pago'];
		$data['valor_cuota'] = $_POST['valor_cuota'];
		$data['metodo_pago'] = $_POST['metodo_pago'];
		$data['tipo_tramite'] = $_POST['tipo_tramite'];
		$data['estado'] = 1;

		$this->poliza_model->insert($data);
		redirect('registro_pol/verpoli');	
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function redireccion(){
		$this->index();
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function eliminar()
	{
		$id_poliza = $_GET['id_poliza'];
		$this->poliza_model->eliminar_usuarios($id_poliza);
		redirect('Registro_pol/verpoli');
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function accion(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '1'){	
		$id_poliza = $_GET['id_poliza'];
		$this->load->view('admin/menu/menu');
		
		$data['poliza']= $this->poliza_model->obtener($id_poliza);
		$this->load->view('admin/actualizar_poliza',$data);
	}
	else{
			$id = $_GET['id'];
		$data['usuario']= $this->login_model->obtener($id);
		$this->load->view('root/menu2/menu2');
		$this->load->view('root/actualizar',$data);
	}
}
	else{
		redirect('login/iniciar_sesion');
	   }
     }
//-----------------------------------------------------------------------------------------------------------------------//
	public function editar(){
		$data['id_poliza'] = $_POST['id_poliza'];
		$data['asegurado'] = $_POST['asegurado'];
		$data['nombre_contratante'] = $_POST['nombre_contratante'];
		$data['idAseguradora'] = $_POST['idAseguradora'];
		$data['numero_poliza'] = $_POST['numero_poliza'];
		$data['idRamo'] = $_POST['idRamo'];
		$data['plan_contratado'] = $_POST['plan_contratado'];
		$data['vigencia_inicial'] = $_POST['vigencia_inicial'];
		$data['vigencia_final'] = $_POST['vigencia_final'];
		$data['suma_asegurada'] = $_POST['suma_asegurada'];
		$data['deducible'] = $_POST['deducible'];
		$data['idModelo'] = $_POST['idModelo'];
		$data['anio'] = $_POST['anio'];
		$data['placa'] = $_POST['placa'];
		$data['prima_total'] = $_POST['prima_total'];
		$data['forma_pago'] = $_POST['forma_pago'];
		$data['valor_cuota'] = $_POST['valor_cuota'];
		$data['metodo_pago'] = $_POST['metodo_pago'];
		$data['tipo_tramite'] = $_POST['tipo_tramite'];
		$data['estado1'] = $_POST['estado1'];
		
		$this->poliza_model->update($data);
		$this->verpoli();
	}
//---------------------------------------------------------------------------------------------------//

		public function get_cliente(){
		$cliente = $this->poliza_model->getCliente();
		echo "<option>Seleccione un cliente</option>";
		foreach ($cliente as $c) {

			echo "<option value= '";
			echo $c['id_cliente'];
			echo "'>";
			echo $c['nombre_cliente'];
			echo "</option>";
			
		}
	}

//---------------------------------------------------------------------------------------------------//

	public function get_aseguradora(){
		$ase = $this->poliza_model->getAseguradora();
		echo "<option>Seleccione una aseguradora</option>";
		foreach ($ase as $a) {

			echo "<option value= '";
			echo $a['id_aseguradora'];
			echo "'>";
			echo $a['nombre'];
			echo "</option>";
			
		}
	}

//---------------------------------------------------------------------------------------------------//

	public function get_ramo(){
		$ramo = $this->poliza_model->getRamo();
		echo "<option>Seleccione el ramo de la poliza</option>";
		foreach ($ramo as $r) {

			echo "<option value= '";
			echo $r['id_ramo'];
			echo "'>";
			echo $r['nombre'];
			echo "</option>";
			
		}
	}

//---------------------------------------------------------------------------------------------------//	

	public function get_marca(){
		$marca = $this->poliza_model->getMarca();
		echo "<option>Seleccione la marca del automovil</option>";
		foreach ($marca as $m) {
			echo "<option value='";
			echo $m['id_marca'];
			echo "'>";
			echo $m['nombre_marca'];
			echo "</option>";
		}
	}

//---------------------------------------------------------------------------------------------------//	
	public function marcModelo(){
		$modelo = $this->poliza_model->getModeloxMarca($this->input->get('id'));
		echo "<option>Seleccione el modelo del automovil</option>";
		foreach ($modelo as $md) {
			
			echo "<option value =' ";
			echo $md['id_modelo'];
			echo "'>";
			echo $md['decrip_modelo'];
			echo "</option>";
		}
	}

//---------------------------------------------------------------------------------------------------//

	public function optener_marca()
	{
		$marcar = $this->poliza_model->getMarca();
		foreach ($marcar as $mr) {
			echo "<option value='".$mr['id_marca']."'>".$mr['nombre_marca']."</option>";
		}
	}

//---------------------------------------------------------------------------------------------------//

	public function optener_modelo()
	{
		$modelor = $this->poliza_model->getModelor();
		foreach ($modelor as $md) {
			echo "<option value='".$md['id_modelo']."'>".$md['decrip_modelo']."</option>";
		}
	}

//---------------------------------------------------------------------------------------------------//

	public function optener_estados(){
		echo "<option value='1'>VIGENTE</option>";
		echo "<option value='2'>CANCELADO</option>";
	}

//---------------------------------------------------------------------------------------------------//

public function conteo1(){
		$ramo1=$this->poliza_model->conteo_pol_ramo1();
		foreach ($ramo1 as $r1) {
			echo $r1['cont_poliza_auto'];
	    }
	}

//--------------------------------------------------------------------------------------------------//

public function conteo2(){
	$ramo2 = $this->poliza_model->conteo_pol_ramo2();
		foreach ($ramo2 as $r2) {
		echo $r2['cont_poliza_medico'];
	}
}

//---------------------------------------------------------------------------------------------------//

public function conteo3(){
		$ramo3=$this->poliza_model->conteo_pol_ramo3();
		foreach ($ramo3 as $r3) {
			echo $r3['cont_poliza_incendio'];
	    }
	}

//---------------------------------------------------------------------------------------------------//

public function conteo4(){
		$ramo4 = $this->poliza_model->conteo_pol_ramo4();
		foreach ($ramo4 as $r4) {
			echo $r4['cont_poliza_multiple'];
	    }
	}

//---------------------------------------------------------------------------------------------------//

public function conteo5(){
		$ramo5 = $this->poliza_model->conteo_pol_ramo5();
		foreach ($ramo5 as $r5) {
			echo $r5['cont_poliza_residencial'];
	    }
	}

//---------------------------------------------------------------------------------------------------//

public function conteo6(){
		$ramo6 = $this->poliza_model->conteo_pol_ramo6();
		foreach ($ramo6 as $r6) {
			echo $r6['cont_poliza_finanzas'];
	    }
	}

}
 ?>