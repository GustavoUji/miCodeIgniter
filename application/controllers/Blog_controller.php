<?php 
class Blog_controller extends CI_Controller {
        public function index()  {
        	$this->load->helper('form');
        	$this->load->view('blog');
        }

        public function blog()  {
           	$this->load->helper('form');
            $this->load->model('blog_model','',TRUE);
            $data['query'] = $this->blog_model->get_last_ten_entries();
            $this->load->view('blog', $data);
        }
        public function subconsulta()  {
            $this->load->helper('form');
            $this->load->model('blog_model','',TRUE);
            $data['query'] = $this->blog_model->subconsulta();
            var_dump($data['query']);
            //$this->load->view('blog', $data);
        }
               
}
?>