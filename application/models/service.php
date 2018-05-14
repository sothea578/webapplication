<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service extends CI_Model{
	function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function show_service_data(){
      	$this->db->select("*");
        $this->db->from('service');
        $query = $this->db->get();
     	  return $query->result();
    }
}
?>