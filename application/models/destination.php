<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class destination extends CI_Model {
	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_des() {
      $this->db->select("des_id, des_name, des_pic, des_detail, des_price");
  		$this->db->from('destination');
  		$query = $this->db->get();
  		return $query->result();
    }

    public function get_each_des($id){
      $this->db->select("des_id, des_name, des_pic, des_detail, des_price, id_cat");
      $this->db->from('destination');
      $this->db->where('id_cat', $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_desDetail($id){
      $this->db->select("des_id, des_name, des_pic, des_detail, des_price, id_cat");
      $this->db->from('destination');
      $this->db->where('des_id', $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_search_destination($name){
      $this->db->select("des_id, des_name, des_pic, des_detail, des_price, id_cat");
      $this->db->from('destination');
      $this->db->like('des_name',$name);
      $query = $this->db->get();
      return $query->result();
    }

    public function show_desInfo(){
      $this->db->
      select("a.des_id, a.des_name, a.des_pic, a.des_detail, a.des_price, a.id_cat, c.cat_id, c.cat_name")
        ->from('destination as a, category as c')
        ->where('a.id_cat = c.cat_id');
      $query = $this->db->get();
      return $query->result();
    }

    public function add_destination(){
      $data = array(
            'des_name' => $this->input->post('name'),
            'des_pic' => $this->input->post('pic'),
            'des_detail' => $this->input->post('detail'),
            'des_price' => $this->input->post('price'),
            'id_cat' => $this->input->post('id_cat')
      );
      $this->db->insert('destination', $data);
    }

    public function update_destination($id){
      $data = array(
            'des_name' => $this->input->post('name'),
            'des_pic' => $this->input->post('pic'),
            'des_detail' => $this->input->post('detail'),
            'des_price' => $this->input->post('price'),
            'id_cat' => $this->input->post('id_cat')
      );
      $this->db->where('des_id', $id);
      $this->db->update('destination', $data); 
    }

    public function delete_des($id){
      $this->db->where('des_id', $id);
      return $this->db->delete('destination');
    }
}
?>
