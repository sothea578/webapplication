<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service_package extends CI_Model{
	function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_package($id){
    	$this->db->select("pkg_id, pkg_name, pkg_desc, pkg_pic, id_serv");
      	$this->db->from('service_package');
      	$this->db->where('id_serv', $id);
      	$query = $this->db->get();
      	return $query->result();
    }

    public function get_pkg(){
      $this->db->select("pkg_id, pkg_name, pkg_desc, pkg_pic, id_serv");
      $this->db->from('service_package');
      $query = $this->db->get();
      return $query->result();
    }

    public function show_serv_pkg_data(){
        $this->db->select("p.pkg_id, p.pkg_name, p.pkg_desc, p.pkg_pic, p.id_serv, s.serv_id, s.serv_type")
        ->from('service_package as p, service as s')
        ->where('p.id_serv = s.serv_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_package_detail($id){
    	$this->db->select("pkg_id, pkg_name, pkg_desc, pkg_pic, id_serv");
      	$this->db->from('service_package');
      	$this->db->where('pkg_id', $id);
      	$query = $this->db->get();
      	return $query->result();
    }

    public function add_serv_pkg(){
        $data = array(
            'pkg_name' => $this->input->post('name'),
            'pkg_desc' => $this->input->post('desc'),
            'pkg_pic' => $this->input->post('pic'),
            'id_serv' => $this->input->post('id_serv')
        );
        $this->db->insert('service_package', $data);
    }

    public function update_package($id){
        $data = array(
            'pkg_name' => $this->input->post('name'),
            'pkg_desc' => $this->input->post('desc'),
            'pkg_pic' => $this->input->post('pic'),
            'id_serv' => $this->input->post('id_serv')
        );
        $this->db->where('pkg_id', $id);
        $this->db->update('service_package', $data); 
    }

    public function delete_package($id){
        $this->db->where('pkg_id', $id);
        return $this->db->delete('service_package');
    }
}
?>