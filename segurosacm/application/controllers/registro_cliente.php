<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_cliente extends CI_Controller{

	public function __construct(){

			parent::__construct();
			$this->load->model('cliente_model');
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

	public function vercliente(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
		 	if ($this->session->userdata('idtipo') == '1') {
		$cliente = $this->cliente_model->getData();
		$data['cliente'] = $cliente;
		$this->load->view('admin/menu/menu');
		$this->load->view('admin/ver_cliente', $data);
		$this->load->view('admin/modales/agre_cli');
	  }
   }
   else{
	    redirect('login/index');
      }
	}
//-----------------------------------------------------------------------------------------------------------------------//

	public function agregar(){
		$data['nombre_cliente'] = $_POST['nombre_cliente'];
		$data['apellido_cliente'] = $_POST['apellido_cliente'];
		$data['dui'] = $_POST['dui'];
		$data['nit'] = $_POST['nit'];
		$data['direccion'] = $_POST['direccion'];
		$data['mun'] = $_POST['mun'];
		$data['fecha_nacimiento'] = $_POST['fecha_nacimiento'];
		$data['correo'] = $_POST['correo'];
		$data['telefono'] = $_POST['telefono'];
		$data['idCorredor'] = $_POST['idCorredor'];
		$this->cliente_model->insert($data);
		redirect('registro_cliente/vercliente');	
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function redireccion(){
		$this->index();
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function eliminar()
	{
		$id_cliente = $_GET['id_cliente'];
		$this->cliente_model->eliminar_cliente($id_cliente);
		redirect('Registro_cliente/vercliente');
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function accion(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '1'){	
		$id_cliente = $_GET['id_cliente'];
		$this->load->view('admin/menu/menu');
		
		$data['cliente']= $this->cliente_model->obtener($id_cliente);
		$this->load->view('admin/actualizar_cliente',$data);
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
		$data['id_cliente'] = $_POST['id_cliente'];
		$data['nombre_cliente'] = $_POST['nombre_cliente'];
		$data['apellido_cliente'] = $_POST['apellido_cliente'];
		$data['dui'] = $_POST['dui'];
		$data['nit'] = $_POST['nit'];
		$data['direccion'] = $_POST['direccion'];
		$data['mun'] = $_POST['mun'];
		$data['fecha_nacimiento'] = $_POST['fecha_nacimiento'];
		$data['correo'] = $_POST['correo'];
		$data['telefono'] = $_POST['telefono'];
		
		$this->cliente_model->update($data);
		$this->vercliente();
	}

//--------------------------------------------------------------------------------------------------//

	public function get_departamento(){
		$departamento = $this->cliente_model->getDepartamento();
		echo "<option>Seleccione un departamento</option>";
		foreach ($departamento as $d) {

			echo "<option value= '";
			echo $d['id_departamento'];
			echo "'>";
			echo $d['nombre'];
			echo "</option>";
			
		}
	}

//-------------------------------------------------------------------------------------------------// 

	public function get_corredor(){
		$corredor = $this->cliente_model->getCorredor();
		echo "<option>Seleccione un corredor de seguro</option>";
		foreach ($corredor as $c) {

			echo "<option value= '";
			echo $c['id_corredor'];
			echo "'>";
			echo $c['nombre_corredor_asesor'];
			echo "</option>";
			
		}
	}

//-------------------------------------------------------------------------------------------------// 

	 public function depMunicipio(){
		$municipios = $this->cliente_model->getMunicipioxDepartamento($this->input->get('id'));
		echo "<option>Seleccione un municipio</option>";
		foreach ($municipios as $m) {

			echo "<option value = '";
			echo $m['id'];
			echo "'>";
			echo $m['municipio'];
			echo "</option>";
			
		}
	}

//--------------------------------------------------------------------------------------------------//

	public function optener_municipio()
	{
		$muni = $this->cliente_model->otherMunicipio();
		foreach ($muni as $mn) {
			echo "<option value='".$mn['id']."'>".$mn['municipio']."</option>";
		}
	}

//-------------------------------------------------------------------------------------------------//

	public function validardui(){
		$dui = trim($this->input->post('dui'));
		echo $this->cliente_model->duiExt($dui);
	}

	public function validarnit(){
		$nit = trim($this->input->post('nit'));
		echo $this->cliente_model->nitExt($nit);
	}

	public function validarapellido(){
		$apellido = trim($this->input->post('apellido_cliente'));
		echo $this->cliente_model->apeExt($apellido);
	}

	public function validartelefono(){
		$telefono = trim($this->input->post('telefono'));
		echo $this->cliente_model->telExt($telefono);
	}

	public function validarcorreo(){
		$correo = trim($this->input->post('correo'));
		echo $this->cliente_model->correoExt($correo);
	} 
}

 ?>

