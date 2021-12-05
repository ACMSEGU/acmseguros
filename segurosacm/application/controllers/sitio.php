<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {

	public function index()
	{
		$this->load->view('sitio/HyF/head.php');
		$this->load->view('sitio/index.php');
		$this->load->view('sitio/HyF/footer.php');
	}

	public function about()
	{	
		$this->load->view('sitio/HyF/headfund.php');
		$this->load->view('sitio/fundador.php');
		$this->load->view('sitio/HyF/footerfund.php');
	}

	public function resume()
	{	
		$this->load->view('sitio/HyF/head.php');
		$this->load->view('sitio/empresas.php');
		$this->load->view('sitio/HyF/footer.php');
	}

	public function services()
	{	
		$this->load->view('sitio/HyF/head.php');
		$this->load->view('sitio/servicios.php');
		$this->load->view('sitio/HyF/footer.php');
	}

	public function testimonials()
	{	
		$this->load->view('sitio/HyF/head.php');
		$this->load->view('sitio/testimonios.php');
		$this->load->view('sitio/HyF/footer.php');
	}

	public function welcome()
	{	
		$this->load->view('sitio/HyF/head.php');
		$this->load->view('sitio/bienvenida.php');
		$this->load->view('sitio/HyF/footer.php');
	}

	public function works()
	{	
		$this->load->view('sitio/HyF/head.php');
		$this->load->view('sitio/seguros.php');
		$this->load->view('sitio/HyF/footer.php');
	}

	public function contactform()
	{
		$this->load->view('sitio/HyF/head.php');
		$this->load->view('sitio/contacto.php');
		$this->load->view('sitio/HyF/footer.php');
	}

	
}
