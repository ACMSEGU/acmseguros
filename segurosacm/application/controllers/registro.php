 <?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Registro extends CI_controller
{
//------------------------------------------------------------------------------------------------------------------------//
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('login_model');
//-----------------------------------------------------------------------------------------------------------------------//		
	}

	public function index(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '1'){
				redirect('login/iniciar_sesion');
			}
			elseif ($this->session->userdata('idtipo') == '2') {
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
//------------------------------------------------------------------------------------------------------------------------//
	public function registro_user(){
		if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
			if ($this->session->userdata('idtipo') == '1') {
				$this->load->view('admin/menu/menu');
				$this->load->view('inicio/registro');
				
	 }
	  else{
		$this->load->view('root/registro');
	   }
     }
     else{
  	     redirect('login/index');
     }
   }
//-----------------------------------------------------------------------------------------------------------------------//
	public function registro(){
		 if ($this->session->userdata('user')!=NULL||$this->session->userdata('user')!='') {
		 	if ($this->session->userdata('idtipo') == '1') {
		$usuario = $this->login_model->getData();
		$data['usuario'] = $usuario;
		$this->load->view('admin/menu/menu');
		$this->load->view('admin/ver_user', $data);
		$this->load->view('admin/modales/agre_user');
	}
	else{
		redirect('registro/registro_root');
	 }
   }
   else{
	    redirect('login/index');
      }
    }
//-----------------------------------------------------------------------------------------------------------------------//
	
	public function agregar(){
		$data['nombre'] = $_POST['name'];
		$data['apellido'] = $_POST['apellido'];
		$data['correo'] = $_POST['correo'];
		$data['contacto'] = $_POST['contacto'];
		$data['user'] = $_POST['user'];
		$data['pass'] = $_POST['password'];
		$data['idtipo'] = $_POST['tipo'];

		$this->login_model->insert($data);
		redirect('registro/registro');	
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function redireccion(){
		$this->index();
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function eliminar()
	{
		$id_usuario = $_GET['id_usuario'];
		$this->login_model->eliminar_usuarios($id_usuario);
		redirect('Registro/registro');
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function accion(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '1'){	
		$id_usuario = $_GET['id_usuario'];
		$this->load->view('admin/menu/menu');
		$data['usuario']= $this->login_model->obtener($id_usuario);
		$this->load->view('inicio/actualizar',$data);
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
		$data['id_usuario'] = $_POST['id_usuario'];
		$data['nombre'] = $_POST['nombre'];
		$data['apellido'] = $_POST['apellido'];
		$data['correo'] = $_POST['correo'];
		$data['contacto'] = $_POST['contacto'];
		$data['user'] = $_POST['user'];
		
		$this->login_model->update($data);
		if ($this->session->userdata('id_usuario') == $data['id_usuario']) {
			redirect('login/cerrar_sesion');
		}
		else{
			redirect('registro/registro');
		}
		
	}
//-----------------------------------------------------------------------------------------------------------------------//
	public function inicio(){
		if ($this->session->userdata('idtipo')!=NULL||$this->session->userdata('user')!='') {
			if($this->session->userdata('idtipo') == '1'){
				$this->load->view('admin/menu/menu');
		$this->load->view('admin/admin');
	}
	else{
		redirect('login/root');
	    }
     }
     else{
     	redirect('login/index');
     }
 }
//-----------------------------------------------------------------------------------------------------------------------//
	public function ver_usuarios_user(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			if($this->session->userdata('idtipo') == '0'){
			$usuario = $this->login_model->getData();
		    $data['usuario'] = $usuario;
		    $this->load->view('usuario/menu/menu');
		$this->load->view('usuario/ver_user',$data);
	   }
	   else{
	   	redirect('login/login_view');
	     }
	   }
	   else{
		redirect('login/index');
	     }
      }
//------------------------------------------------------------------------------------------------------------------------//
	public function user(){
		if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
			$this->load->view('usuario/menu/menu');
		$this->load->view('usuario/usuario');
	}
	else{
		redirect('login/login_view');
	}

}

public function registro_root()
{
	if($this->session->userdata('user')!=0||$this->session->userdata('user')!=''){
	   $usuario = $this->login_model->getData();
		$data['usuario'] = $usuario;
		$this->load->view('root/menu2/menu2');
		$this->load->view('root/ver_user', $data);
		$this->load->view('admin/modales/agre_user');
     }
   else{
	redirect('login/index');
      }


}

public function validar_correo()
{
	$correo =trim($this->input->post('correo'));
	echo $this->login_model->get_correo($correo);
}

public function validar_usuario()
{
	$user = trim($this->input->post('user'));
	echo $this->login_model->get_usuario($user);
}
//----------------------------------------------------------------------------------------------------------------------//
public function tipo_get(){

  $tipo = $this->login_model->selectTipo();
 echo "<option value='";
    echo 0;
    echo "'>";
    echo "Seleccione un tipo de Usuario ";
    echo "</option>";
  foreach ($tipo as $t) {
   
    echo "<option value='";
    echo $t['id_tipo'];
    echo "'>";
    echo $t['tipo'];
    echo "</option>";
  }
 }
//-------------------------------------------------------------------------------------------------------------------//
 
}
?>