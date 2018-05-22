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

    public function loadArticle(){
      $this->db->order_by("id","desc");
      $query =  $this->db->get('tinymce');
      foreach ($query->result() as $row){
        $date = date_create($row->created);
        $date = date_format($date, 'l jS F Y');
        echo'<blockquote><h3>'.ucfirst($row->title).'</h3></blockquote><p>'.html_entity_decode($row->content).'</p><a href="#" class="btn btn-sm btn-warning">'.$date.'</a><hr/>';
      }
      exit;
    }
}
?>
