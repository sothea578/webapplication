<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
		$this->load->helper(array('url'));
        $this->load->helper('menu');
        $this->load->model('user');
    }

	public function index()
	{

	}

	public function category(){
		$this->load->model('category');
        $data['result']=$this->category->get_cat();
        $this->load->model('service');
        $data['serv']=$this->service->get_serv();
        $this->load->view('header',$data);
	}

	public function footer(){
		$this->load->model('category');
        $data['result']=$this->category->get_cat();
        $this->load->view('footer',$data);
	}

	public function home(){
		$this->load->model('gallery');
		$data['result'] = $this->gallery->get_gallery();
		$this->load->model('service');
        $data['service']=$this->service->show_service_data();
		$this->category();
		$this->load->view('home', $data);
		$this->footer();
	}

	public function about(){
		$this->load->model('service');
        $data['result']=$this->service->show_service_data();
		$this->category();
		$this->load->view('about_us', $data);
		$this->footer();
	}

	public function hotTour(){
		$this->category();
		$this->load->view('hot_tour');
		$this->footer();
	}

	public function search(){
		$name = $this->input->get('s');
		$this->load->model('destination');
		$data['result'] = $this->destination->get_search_destination($name);
		$this->category();
		$this->load->view('search', $data);
		$this->footer();
	}

	public function register_login($msg = NULL){
		if ($this->session->userdata('user_id')){
			redirect('Users/home');
		} else {
			$data['msg'] = $msg;
			$this->category();
			$this->load->view('register_login', $data);
			//$this->load->view('footer');
		}
	}

	public function personal_info(){
		if ($this->session->userdata('user_id')){
			$this->load->model('user');
  			$seid=$this->session->userdata('user_id');
        	$data['result']=$this->user->get_user($seid);
        	$this->load->model('booktour');
        	$data['book']=$this->booktour->get_booktour_info_this_user($seid);
        	$this->category();
        	$this->load->view('personal_info',$data);
        	$this->footer();
		} else redirect('Users/home');
	}

	public function edit_personal_info(){
		$id=$this->session->userdata('user_id');
		$this->load->model('user');
		$data['result']=$this->user->get_user($id);
		$this->category();
        $this->load->view('edit_personal_data',$data);
        $this->footer();
	}

	public function update_personal_info(){
 		$id =$this->session->userdata('user_id');
		$this->load->model('user');
        $this->user->update_user($id);
        redirect('Users/personal_info');
 	}

	public function user_login(){
		//$this->load->helper('form');
		//$this->load->library('form_validation');
		$this->load->model('user');
		$data['error'] = 0;
        if (!is_null($_POST)) {
            $data = [
                'user_name' => $_POST['username'],
                'password' => $_POST['password']
            ];
            $user = $this->user->login($data);
            if (!$user) {
                $data['error'] = 1;
            } else {
                $this->session->set_userdata('user_id', $user['user_id']);
                redirect('Users/personal_info');
            }
        }
        redirect('Users/register_login');
	}

	public function logout(){
        if (!$this->permission()) {
            redirect('Users/home');
        }
        $this->session->unset_userdata('user_id');
        redirect('Users/home');
    }

	public function user_register(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->load->model('user');
		$this->user->create_user();
        redirect('Users/register_login');
 	}

	public function delete_user(){
        $id =intval($this->input->get('id'));
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->user->get_users('', '', '', '', '', '', '', $id);;
        
        if($this->user->delete_user($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Admin/user_data');  
        } 
    }

    public function permission() {
        $user = $this->session->userdata('user_id');
        if (isset($user) && !empty($user)) {
            return true;
        }
    }
}

?>
