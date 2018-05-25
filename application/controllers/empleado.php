<?php

class Empleado extends CI_Controller {
        public function index() {
                $this->load->helper(array('form', 'url'));
                $this->load->view('formulario2');
        }

        public function nuevo_empleado()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]');
            $this->form_validation->set_rules('sueldo', 'Sueldo', 'required|numeric');
                
            if($this->form_validation->run() === true){
                //Si la validación es correcta, cogemos los datos de la variable POST
                //y los enviamos al modelo
                $nombre = $this->input->post('nombre');
                $sueldo = $this->input->post('sueldo');
                    
        //        $this->load->model('empleado_model');
        //        $this->empleado_model->insertar_empleado($nombre, $sueldo);
                echo "Nuevo empleado ".$nombre." insertado con exito";
            }
            $this->load->view("formulario2"); 

        }
}
?>