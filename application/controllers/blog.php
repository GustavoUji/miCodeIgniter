<?php 
class Blog extends CI_Controller {
 function index() { 
 	echo '<h1>Hello World!</h1>'; 
 } 

 function comments() { 
 	echo 'Mira esto!'; 
 }
 function multiplica($p1, $p2) {
 	echo $p1*$p2;
 	$this->index();
 }
 function _invisible($p1) {
 	return 3*$p1;
 }
 function multiplica3($p1, $p2) {
 	echo $p1 *  $this->_invisible($p2);
 }
 function tabla() {
 	$this->load->library('table');
	$this->table->clear();
$template = array(
        'table_open'            => '<table border="1" cellpadding="8" cellspacing="2">',
        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',
        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',
        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',
        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',
        'table_close'           => '</table>'
);

	$this->table->set_template($template);

$data = array(
        array('Name', 'Color', 'Size'),
        array('Fred', 'Blue', 'Small'),
        array('Mary', 'Red', 'Large'),
        array('John', 'Green', 'Medium')
);

echo $this->table->generate($data);

 }
 
 function tabla2() {
 	$this->load->library('table');
	$this->table->clear();
	$template = array(
        'table_open'            => '<table border="4" cellpadding="4" cellspacing="1" style="width:100%">',
        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',
        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',
        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',
        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',
        'table_close'           => '</table>'
	);

	$this->table->set_template($template);
	$this->load->view('tabla2');
 }
} 
?>
