<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_aseguradoras extends CI_Controller{

	public function __construct(){

			parent::__construct();
			$this->load->model('aseguradora_model');
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

	public function verasegura(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
		 	if ($this->session->userdata('idtipo') == '1') {
		$aseguradora = $this->aseguradora_model->getData();
		$data['aseguradora'] = $aseguradora;
		$this->load->view('admin/menu/menu');
		$this->load->view('admin/ver_aseguradora', $data);
		$this->load->view('admin/modales/agre_ase');
	  }
   }
   else{
	    redirect('login/index');
      }
	}
//-----------------------------------------------------------------------------------------------------------------------//

	public function agregarAseguradora(){
		$data['nombre']  = $_POST['nombre'];
		$data['razon_social']  = $_POST['razon_social'];
		$data['direccion'] = $_POST['direccion'];
		$data['contacto_fijo_aseguradora']  = $_POST['contacto_fijo_aseguradora'];
		$data['nombre_asesor_atendiente'] = $_POST['nombre_asesor_atendiente'];
		$data['contacto_asesor_atendiente'] = $_POST['contacto_asesor_atendiente'];
		$this->aseguradora_model->insert($data);
		redirect('registro_aseguradoras/verasegura');	
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function redireccion(){
		$this->index();
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function eliminar()
	{
		$id_aseguradora = $_GET['id_aseguradora'];
		$this->aseguradora_model->eliminar_aseguradora($id_aseguradora);
		redirect('registro_aseguradoras/verasegura');
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function accion(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '1'){	
		$id_aseguradora = $_GET['id_aseguradora'];
		$this->load->view('admin/menu/menu');
		
		$data['aseguradora']= $this->aseguradora_model->obtener($id_aseguradora);
		$this->load->view('admin/actualizar_aseguradora',$data);
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
		$data['id_aseguradora'] = $_POST['id_aseguradora'];
		$data['nombre']  = $_POST['nombre'];
		$data['razon_social']  = $_POST['razon_social'];
		$data['direccion'] = $_POST['direccion'];
		$data['contacto_fijo_aseguradora']  = $_POST['contacto_fijo_aseguradora'];
		$data['nombre_asesor_atendiente'] = $_POST['nombre_asesor_atendiente'];
		$data['contacto_asesor_atendiente'] = $_POST['contacto_asesor_atendiente'];

		
		$this->aseguradora_model->update($data);
		$this->verasegura();
	}
//-----------------------------------------------------------------------------------------------------------------------//

}

 ?>