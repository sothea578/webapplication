<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
		$this->load->helper(array('url'));
    }

    public function index(){
    	
    }

    public function contact_us(){
		require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object
        $foot = new Users();  //create object
        $aObj->category(); //call function
		$this->load->view('contact_us');
        $foot->footer(); //call function
    }

    public function contact_data(){
		if($this->session->userdata('admin_id')){
			$this->load->model('contact');
        	$data['result']=$this->contact->show_contact_data();
        	$this->load->view('admin/header');
        	$this->load->view('admin/contact_data',$data);
        	$this->load->view('admin/footer');
        } else redirect('Admin/login');
	}

	public function contact_detail(){
		$id =intval($this->input->get('id'));
		$this->load->model('contact');
		$data['result']=$this->contact->get_contact($id);
		$this->load->view('admin/header');
        $this->load->view('admin/contact_detail',$data);
        $this->load->view('admin/footer');
	}

	public function create_contact(){
		$this->load->library('form_validation');
		$this->load->model('contact');
   		$this->contact->add_contact();
   		redirect('Contacts/contact_us');
 	}

 	public function update_contact_stt(){
 		$id =intval($this->input->get('id'));
		$this->load->model('contact');
        $this->contact->update_contact($id);
        redirect('Contacts/contact_data');
 	}

 	public function delete_contact(){
        $id =intval($this->input->get('id'));
        if (empty($id))
        {
            show_404();
        }
        $this->load->model('contact');       
        $news_item = $this->contact->get_contact('', '', '', '', '', '', '', $id);;
        
        if($this->contact->delete_contact($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Contacts/contact_data');  
        } 
    }

}

?>