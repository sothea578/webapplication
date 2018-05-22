<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery extends CI_Model {
	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_gallery() {
      $this->db->select("gal_id, picture, gal_name");
  		$this->db->from('gallery');
  		$query = $this->db->get();
  		return $query->result();
    }

    public function get_each_gal($id){
      $this->db->select("*");
      $this->db->from('gallery');
      $this->db->where('id_cat', $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_gal_admin($id){
      $this->db->select("gal_id, picture, id_des, id_cat, gal_name");
      $this->db->from('gallery');
      $this->db->where('gal_id', $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function show_gal_data(){
      $this->db->
      select("a.gal_id, a.gal_name, a.picture, a.id_cat, a.id_des, b.des_id, b.des_name, c.cat_id, c.cat_name")
        ->from('gallery as a, destination as b, category as c')
        ->where('a.id_cat = c.cat_id AND a.id_des = b.des_id');
      $query = $this->db->get();
      return $query->result();
    }

    public function add_gallery(){
      $data = array(
            'picture' => $this->input->post('pic'),
            'id_des' => $this->input->post('id_des'),
            'id_cat' => $this->input->post('id_cat'),
            'gal_name' => $this->input->post('name')
      );
      $this->db->insert('gallery', $data);
    }

    public function update_gallery($id){
      $data = array(
            'picture' => $this->input->post('pic'),
            'id_des' => $this->input->post('id_des'),
            'id_cat' => $this->input->post('id_cat'),
            'gal_name' => $this->input->post('name')
      );
      $this->db->where('gal_id', $id);
      $this->db->update('gallery', $data); 
    }

    public function delete_gallery($id){
      $this->db->where('gal_id', $id);
      return $this->db->delete('gallery');
    }
}
?>
