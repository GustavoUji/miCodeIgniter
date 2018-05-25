<?php

class Form extends CI_Controller {

        public function index()  {
                $this->load->helper('url');

                $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Debes proporcionar un %s.'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Debes proporcionar un %s.') );

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('myform');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
}