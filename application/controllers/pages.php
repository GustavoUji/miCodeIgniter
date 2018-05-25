<?php
class Pages extends CI_Controller {
    public function view($page = 'home')
    {
       	if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
       	{
            // La página no existe
            show_404();  // funcion de CodeIgniter
        }

        $data['title'] = ucfirst($page); // Pone en mayúsculas la primera letra

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}
?>