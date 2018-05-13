<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_admin extends CI_Model{
	function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function login($data) {
        $query = $this->db->get_where('admin', $data);
        return $query->first_row('array');
    }

}
?>
