<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
		$this->load->helper(array('url'));
    }

    public function index(){
    	
    }

    public function service(){
        $this->load->model('service');
        $data['result']=$this->service->show_service_data();
		require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
		$this->load->view('service', $data);
		$foot = new Users();  //create object 
        $foot->footer(); //call function
	}
}

?>
