<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service extends CI_Model{
	function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_serv(){
      $this->db->select("serv_id, serv_type");
      $this->db->from('service');
      $query = $this->db->get();
      return $query->result();
    }

    public function get_service($id){
      $this->db->select("serv_id, serv_type");
      $this->db->from('service');
      $this->db->where('serv_id', $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function show_service_data(){
      $this->db->select("serv_id, serv_type");
      $this->db->from('service');
      $query = $this->db->get();
      return $query->result();
    }

    public function add_service(){
      $data = array(
            'serv_type' => $this->input->post('serv_type')
      );
      $this->db->insert('service', $data);
    }

    public function delete_service($id){
      $this->db->where('serv_id', $id);
      return $this->db->delete('service');
    }

    public function update_service($id){
      $data = array(
            'serv_type' => $this->input->post('name')
      );
      $this->db->where('serv_id', $id);
      $this->db->update('service', $data); 
    }
}
?>