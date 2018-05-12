<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
		$this->load->helper(array('url'));
    }

    public function index(){
    	
    }

	public function main(){
		$this->load->view('admin/header');
		$this->load->view('admin/main');
		$this->load->view('admin/footer');
	}

	public function login(){
		$this->load->view('admin/login');
	}

	public function checkLogin(){
		$username = $this->input->post('username');
        $password = $this->input->post('password');
 		$this->load->model('model_admin');
        $login_id = $this->model_admin->login_valid($username, $password);
        if ($login_id) {
            $this->session->set_userdata('admin_id', $login_id);
            redirect(base_url('Admin/main'));
        } else {
                $this->session->set_flashdata('login_failed', 'Invalid Username/Password');
                redirect('Admin/login');
        }
	}

	public function logout(){
        if (!$this->permission()) {
            redirect('Admin/login');
        }
        $this->session->sess_destroy();
        redirect('Admin/login','refresh');
    }

	public function register(){
		$this->load->view('admin/register');
	}

	public function forgetPassword(){
		$this->load->view('admin/forget_password');
	}

	public function user_data(){
		$this->load->model('user');
        $data['result']=$this->user->show_user();
        $this->load->view('admin/header');
        $this->load->view('admin/user_data',$data);
        $this->load->view('admin/footer');
	}

	public function user_detail(){
		$id =intval($this->input->get('id'));
		$this->load->model('user');
		$data['result']=$this->user->get_user($id);
		$this->load->view('admin/header');
        $this->load->view('admin/user_detail',$data);
        $this->load->view('admin/footer');
	}

	public function update_user()
	{
		$id=intval($this->input->get('id'));
        $this->load->model('user');
        $this->user->update_user($id);
        redirect('Admin/user_data');
	}

	public function bookTour_user_info(){
		$this->load->model('booktour');
        $data['result']=$this->booktour->show_user_bookTour();
        $this->load->view('admin/header');
        $this->load->view('admin/bookTour_user_info',$data);
        $this->load->view('admin/footer');
	}

	public function bookTour_user_detail(){
		$id =intval($this->input->get('id'));
		$this->load->model('booktour');
		$data['result']=$this->booktour->show_user_bookTour_detail($id);
		$this->load->view('admin/header');
        $this->load->view('admin/bookTour_detail',$data);
        $this->load->view('admin/footer');
	}

	public function navbar(){
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/footer');
	}

	public function chart(){
		$this->load->view('admin/header');
		$this->load->view('admin/chart');
		$this->load->view('admin/footer');
	}

	public function permission() {
        $admin = $this->session->userdata('admin_id');
        if (isset($admin) && !empty($admin)) {
            return true;
        }
    }	
}

?>
