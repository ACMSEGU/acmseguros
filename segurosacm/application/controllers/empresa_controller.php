<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_Controller extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('empresa_model');
	}
	public function index(){
    if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
 	if($this->session->userdata('idtipo')=='1'){
 		redirect('login/iniciar_session');
 	}
 	else{
 		redirect('login/usuario');
 	}
 	}else{
 		$this->load->view('inicio/login_view');
 	}
 
	}
	public function agregar_empresa(){
    if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
      $logo=$this->empresa_model->imagen();
      $data['logo']=$logo;
      $zona=$this->empresa_model->select_zona();
      $data['zona']=$zona;
        $this->load->view('admin/menu/menu');
      $this->load->view('admin/agregar_empresa',$data);

  }else{
    redirect('login/iniciar_session');
  }
  }
   public function registrar_empresa(){
   	$config['upload_path'] = './assets/img/';
    $config['allowed_types'] = 'gif|jpeg|jpg|png';
    $config['max_size'] = 10000000000;
    $this->load->library('upload', $config);
   if(!$this->upload->do_upload('logo')){
  /*Si al subirse hay algún error lo pongo en un array para pasárselo a la vista*/
    $error= $this->upload->display_errors();
            echo $error;
                }else{
    $datos=$this->upload->data();
    $data2 = array(
    'nombre' => strtoupper($this->input->post('logo')),
    'ruta' => "/assets/img/". $datos['file_name']);
 
    $data['nombre_empresa']=$_POST['nombre'];
   	$data['direccion']=$_POST['direccion'];
   	$data['telefono']=$_POST['telefono'];
   	$data['moneda']=$_POST['moneda'];
   	$data['zona']=$_POST['zona'];
   	$this->empresa_model->insertar($data, $data2);
    redirect('Empresa_Controller/agregar_empresa');
   }

}

public function accion_confi()
{
   if($this->session->userdata('user')!=NULL||$this->session->userdata('user')!=''){
        if($this->session->userdata('idtipo') == '1'){
    $data['configuracion'] = $this->empresa_model->obtener_confi();
    $this->load->view('admin/menu/menu');
    $this->load->view('admin/agregar_empresa',$data);
    }
    else{
    $data['configuracion']= $this->empresa_model->obtener_confi();
    $this->load->view('root/menu2/menu2');
    $this->load->view('root/agregar_empresa',$data);
        }
     }
     else{
      redirect('login/index');
     }
}
}
