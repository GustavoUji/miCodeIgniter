<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tenis extends CI_Controller {

        public function index(){
                $this->load->helper("url");
                $this->load->view('galeria');
        }
        public function galeria() {
                $this->load->helper("url");
                $this->load->view('galeria');
        }
}
?>