<?php 
class basededatos extends CI_Controller {
 function index() { 
	$this->load->database();
	$query = $this->db->query('SELECT nombre, dni FROM persona');
	foreach ($query->result() as $row) {
	        echo $row->nombre; echo " ";
	        echo $row->dni;
	        echo "<br>";
	}
	echo 'Total Results: ' . $query->num_rows();
 }

 function consulta_array() { 
	$this->load->database();
	$query = $this->db->query('SELECT nombre, dni FROM persona');
	foreach ($query->result_array() as $row){
        echo $row['title']; echo " ";
        echo $row['name'];
        echo "<br>";
	}
	echo 'Total Results: ' . $query->num_rows();
 }
 function consulta_compleja() { 
	$this->load->database();
	$query = $this->db->query('SELECT nombre, dni FROM persona WHERE nombre="Gustavo Casañ"');
	foreach ($query->result() as $row) {
	        echo $row->nombre; echo " ";
	        echo $row->dni;
	        echo "<br>";
	}
	echo 'Total Results: ' . $query->num_rows();
 }


}
?>