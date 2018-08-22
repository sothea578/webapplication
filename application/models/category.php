<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends CI_Model{
  function __construct() {
    parent::__construct();
    $this->load->database();
  }

    public function get_cat(){
    	$this->db->select("cat_id, cat_name");
  		$this->db->from('category');
  		$query = $this->db->get();
  		return $query->result();
    }

    public function get_category($id){
      $this->db->select("cat_id, cat_name");
      $this->db->from('category');
      $this->db->where('cat_id', $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function show_cat_data(){
      $this->db->select("cat_id, cat_name");
      $this->db->from('category');
      $query = $this->db->get();
      return $query->result();
    }

    public function update_category($id){
      $data = array(
            'cat_name' => $this->input->post('name')
      );
      $this->db->where('cat_id', $id);
      $this->db->update('category', $data); 
    }

    public function delete_cat($id){
      $this->db->where('cat_id', $id);
      return $this->db->delete('category');
    }

    public function add_category(){
      $data = array(
            'cat_name' => $this->input->post('cat_name')
      );
      $this->db->insert('category', $data);
    }
}
?>
