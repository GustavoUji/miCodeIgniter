<?php
class Blog_model extends CI_Model {
        public $title;         
        public $content;         
        
        public function get_last_ten_entries()  {
             $query = $this->db->get('entries', 10);
             return $query->result();
        }

        public function insert_entry()   {
             $this->title    = $this->input->post('title');
             $this->content  = $this->input->post('content');
        
             $this->db->insert('entries', $this);       
        }

        public function update_entry()  {
             $this->title    = $this->input->post('title');
             $this->content  = $this->input->post('content');
        
             $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

    public function subconsulta() {
        $original="SELECT * FROM productos WHERE id NOT IN (SELECT productoID FROM ventas)";

        $sub_query_from = '(SELECT id, product FROM product ) as product';
        $this->db->select();
        $this->db->from($sub_query_from);
        $query = $this->db->get();

  /*      $subquery = 'SELECT productoID FROM ventas';
        $this->db->select('*');
        $this->db->where_not_in('id', $subquery);
        $this->db->from('productos');
        $query = $this->db->get();
        */
        return $query->result();
    }
}
?>