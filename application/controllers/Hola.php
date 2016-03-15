<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hola extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('index');
	}
	public function saludo()
	{
		$datos["titulo"]="mi titulo desde arreglo";
		$datos["texto"]="mi texto desde arreglo";
		$this->load->view('saludo',$datos);
	}
	public function otro()
	{
		$saludo="saludo desde vista otro";
		$texto="mi texto desde vista otro";
		$this->load->view('otro',compact('saludo','texto'));
	}
}
