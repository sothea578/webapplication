<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_admin extends CI_Model{
	function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function login_valid($username, $password) {
        $q = $this->db->where(['username' => $username, 'password' => $password])
                ->get('admin');
        if ($q->num_rows) {
                
            return $q->row()->id;
            //return TRUE;
        } else {
            return FALSE;
        }
    }

    function login_admin($data) {
        $query = $this->db->get_where('admin', $data);
        return $query->result('array');
    }

}
?>
