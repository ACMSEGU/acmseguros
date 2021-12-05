<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Login_model');
	}
//----------------------------------------------------------------------------------------------------------------------//

	public function index(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
			if ($this->session->userdata('idtipo') == '1') {
				$this->load->view('admin/menu/menu');
				redirect('login/iniciar_sesion');
			}
			elseif($this->session->userdata('idtipo') == '2'){
				redirect('login/root');
			}
			else{
				redirect('login/usuario');
			}
		}
		else{
			$this->load->view('inicio/login_view');
		}
	}
//----------------------------------------------------------------------------------------------------------------------//

	public function iniciar_sesion(){
		if ($this->session->userdata('idtipo')!=0||$this->session->userdata('user')!='') {
			$this->load->view('admin/menu/menu');
			$this->load->view('admin/admin'); 
		}
		else{
			redirect('login/index');
		}
			
	}
//----------------------------------------------------------------------------------------------------------------------//

	public function root()
	{
		if ($this->session->userdata('idtipo')!=0||$this->session->userdata('user')!='') {
			$this->load->view('root/menu2/menu2');
			$this->load->view('root/root');
			
		}
		else{
			redirect('login/index');
		}
	}
//----------------------------------------------------------------------------------------------------------------------//

	public function usuario(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
			if ($this->session->userdata('idtipo') == '0') {
				$this->load->view('usuario/menu/menu');
				$this->load->view('usuario/usuario');
			}
			else{
				redirect('login/iniciar_sesion');
			}
		}
		else{
			redirect('login/index');
		}
		
	}

//----------------------------------------------------------------------------------------------------------------------//

	public function recuperar(){

		$this->load->view('inicio/recuperar_view');
	}

	public function validar(){
		$user = $this->input->post('user');
		$pass = sha1($this->input->post('pass'));
		$result = $this->Login_model->validardatos($user, $pass);
		if ($result != 'fail'){
			$this->session->set_userdata('user', $user);
			$this->session->set_userdata('idtipo', $result);
			$this->session->set_userdata('id',$this->Login_model->get_id($user, $pass));
			if($result == '1'){
				
				redirect('login/iniciar_sesion');
			}
			elseif($result == '2'){
				redirect('login/root');

			}
			else{
				redirect('login/usuario');
		}
	}
	else{
		$this->session->set_flashdata('error', 'usuario o contraseña invalidos');
		redirect('login/index');
	}	
	}

//----------------------------------------------------------------------------------------------------------------------//

	public function cerrar_sesion(){
		$this->session->sess_destroy();
		redirect('');
}
}
//----------------------------------------------------------------------------------------------------------------------//

?>