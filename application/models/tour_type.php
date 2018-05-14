<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tour_type extends CI_Model{
  function __construct() {
    parent::__construct();
    $this->load->database();
  }

    public function get_tour_type(){
        $this->db->select("*");
        $this->db->from('tour_type');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_tour_type($id){
        $this->db->select("t.tour_type_id, t.tour_code, t.id_des, t.people_amount, b.id_booktour, b.tour_code, d.des_id, d.des_name");
        $this->db->from('tour_type as t, booktour as b, destination as d');
        $this->db->where('t.tour_type_id', $id)
                ->where('t.tour_code = b.tour_code')
                ->where('t.id_des = d.des_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function show_tour_type_data(){
      $this->db->select("t.tour_type_id, t.tour_code, t.id_des, t.people_amount, d.des_id, d.des_name");
      $this->db->from('tour_type as t, destination as d');
      $this->db->where('t.id_des = d.des_id');
      $query = $this->db->get();
      return $query->result();
    }

    public function update_tour_type($id){
      $this->db->select("t.tour_type_id, t.tour_code, t.id_des, t.people_amount, b.id_booktour, b.tour_code, d.des_id, d.des_name");
      $this->db->from('tour_type as t, booktour as b, destination as d');
      $data = array(
            'tour_code' => $this->input->post('tour_code'),
            'people_amount' => $this->input->post('people_amount')
      );
      $this->db->where('tour_type_id', $id);
      $this->db->update('tour_type', $data); 
    }

    public function delete_tour_type($id){
      $this->db->where('tour_type_id', $id);
      return $this->db->delete('tour_type');
    }

    public function add_tour_type(){
      $data = array(
            'tour_code' => $this->input->post('tour_code'),
            'id_des' => $this->input->post('id_des'),
            'people_amount' => $this->input->post('people_amount')
      );
      $this->db->insert('tour_type', $data);
    }
}
?>
