<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formularioestatico extends CI_Controller {	
	public function index()
	{
		$this->load->view('formularioestatico');
	}
	public function con_clases() {
		$this->load->helper('url');
		$this->load->view('formularioestatico_con_css');
	}
}
