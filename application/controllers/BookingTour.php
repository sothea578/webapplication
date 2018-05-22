<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BookingTour extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
		$this->load->helper(array('url'));
    }

    public function show_booktour_info(){
    	$id_des=intval($this->input->get('id_des'));
        $id_cat=intval($this->input->get('id_cat'));
    	$this->load->model('booktour');
    	$data['result']=$this->booktour->get_booktour_user_detail($id_des, $id_cat);
    	require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('book_tour', $data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function booktour_process(){
    	$id_des=intval($this->input->get('id_des'));
        $id_cat=intval($this->input->get('id_cat'));
        $this->load->model('booktour');
        $this->booktour->add_booktour($id_des, $id_cat);
        redirect('Users/personal_info');
    }

    public function update_book_tour(){
    	$id =intval($this->input->get('id'));
    	$this->load->model('booktour');
		$this->booktour->update_stt_book_tour($id);
		redirect('Admin/bookTour_user_info');
    }

    public function delete_book_tour(){
    	$id=intval($this->input->get('id'));
    	if (empty($id))
        {
            show_404();
        }
        $this->load->model('booktour');
        $news_item = $this->booktour->get_booktour('', '', '', '', '', '', $id);;
        if($this->booktour->delete_book_tour($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Admin/bookTour_user_info');  
        }
    }

}

?>
