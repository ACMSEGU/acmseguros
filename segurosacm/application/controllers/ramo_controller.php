<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ramo_controller extends CI_Controller{

	public function __construct(){

			parent::__construct();
			$this->load->model('ramo_model');
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

	public function verramo(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
		 	if ($this->session->userdata('idtipo') == '1') {
		$ramo = $this->ramo_model->getData();
		$data['ramo'] = $ramo;
		$this->load->view('admin/menu/menu');
		$this->load->view('admin/ver_ramo', $data);
		$this->load->view('admin/modales/agre_ramo');
	  }
   }
   else{
	    redirect('login/index');
      }
	}

//-----------------------------------------------------------------------------------------------------------------------//

	public function agregar(){
		$data['nombre'] = $_POST['nombre'];
		$data['descripcion'] = $_POST['descripcion'];
		$this->ramo_model->insert($data);
		redirect('ramo_controller/verramo');	
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function redireccion(){
		$this->index();
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function eliminar()
	{
		$id_ramo = $_GET['id_ramo'];
		$this->ramo_model->eliminar_ramo($id_ramo);
		redirect('ramo_controller/verramo');
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function accion(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '1'){	
		$id_ramo = $_GET['id_ramo'];
		$this->load->view('admin/menu/menu');
		
		$data['ramo']= $this->ramo_model->obtener($id_ramo);
		$this->load->view('admin/actualizar_ramo',$data);
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
		$data['id_ramo'] = $_POST['id_ramo'];
		$data['nombre'] = $_POST['nombre'];
		$data['descripcion'] = $_POST['descripcion'];
		
		$this->ramo_model->update($data);
		$this->verramo();
	}
}

 ?>