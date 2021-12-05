<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactoC extends CI_Controller{

	public function __construct(){

			parent::__construct();
			$this->load->model('contacto_model');
	}

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

	public function vercontacto(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
		 	if ($this->session->userdata('idtipo') == '1') {
		$ramo = $this->contacto_model->getData();
		$data['ramo'] = $ramo;
		$this->load->view('admin/menu/menu');
		$this->load->view('admin/ver_contacto', $data);
	  }
   }
   else{
	    redirect('login/index');
      }
	}

	public function agregar(){
		$data['nombre_completo'] = $_POST['nombre_completo'];
		$data['telefono_contacto'] = $_POST['telefono_contacto'];
		$data['correo_electronico'] = $_POST['correo_electronico'];
		$data['id_ramo'] = $_POST['id_ramo'];
		$data['marca'] = $_POST['marca'];
		$data['modelo'] = $_POST['modelo'];
		$data['anio_vehiculo'] = $_POST['anio_vehiculo'];
		$data['direccion'] = $_POST['direccion'];
		$data['suma_asegurada'] = $_POST['suma_asegurada'];
		$data['edad'] = $_POST['edad'];
		$data['comentario'] = $_POST['comentario'];
		$this->contacto_model->insert($data);
		redirect('sitio/index');	
	}

	public function eliminar()
	{
		$id_contacto = $_GET['id_contacto'];
		$this->contacto_model->eliminar_comentarios($id_contacto);
		redirect('contactoC/vercontacto');
	}


		public function get_ramo(){
		$ramo = $this->contacto_model->getRamo();
		echo "<option>Seleccione un seguro de interes</option>";
		foreach ($ramo as $r) {

			echo "<option value= '";
			echo $r['id_ramo'];
			echo "'>";
			echo $r['nombre'];
			echo "</option>";
			
		}
	}
}