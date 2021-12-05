<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_corredor extends CI_Controller{

	public function __construct(){

			parent::__construct();
			$this->load->model('corredor_model');
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

	public function vercorredor(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
		 	if ($this->session->userdata('idtipo') == '1') {
		$corredor = $this->corredor_model->getData();
		$data['corredor'] = $corredor;
		$this->load->view('admin/menu/menu');
		$this->load->view('admin/ver_corredor', $data);
		$this->load->view('admin/modales/agre_corre');
	  }
   }
   else{
	    redirect('login/index');
      }
	}

//-----------------------------------------------------------------------------------------------------------------------//

	public function agregar(){
		$data['nombre_corredor_asesor'] = $_POST['name'];
		$data['apellido_corredor_asesor'] = $_POST['apellido'];
		$data['contacto'] = $_POST['contacto'];
		$this->corredor_model->insert($data);
		redirect('registro_corredor/vercorredor');	
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function redireccion(){
		$this->index();
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function eliminar()
	{
		$id_corredor = $_GET['id_corredor'];
		$this->corredor_model->eliminar_usuarios($id_corredor);
		redirect('Registro_corredor/vercorredor');
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function accion(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '1'){	
		$id_corredor = $_GET['id_corredor'];
		$this->load->view('admin/menu/menu');
		
		$data['corredor']= $this->corredor_model->obtener($id_corredor);
		$this->load->view('admin/actualizar_corredor',$data);
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
		$data['id_corredor'] = $_POST['id_corredor'];
		$data['nombre'] = $_POST['nombre'];
		$data['apellido'] = $_POST['apellido'];
		$data['contacto'] = $_POST['contacto'];
		
		$this->corredor_model->update($data);
		$this->vercorredor();
	}
}

 ?>