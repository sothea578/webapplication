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
		if($this->session->userdata('admin_id')){
			$this->load->view('admin/header');
			$this->load->view('admin/main');
			$this->load->view('admin/footer');
		} else redirect('admin/login');
	}

	public function login(){
		$this->load->view('admin/login');
	}

	public function checkLogin(){
		$this->load->model('model_admin');
		$data['error'] = 0;
        if (!is_null($_POST)) {
            $data = [
                'username' => $this->input->post('admin_username'), //$_POST['admin_username'],
                'password' => $this->input->post('admin_password') //$_POST['admin_password']
            ];
            $admin = $this->model_admin->login($data);
            if (!$admin) {
                $data['error'] = 1;
            } else {
                $this->session->set_userdata('admin_id', $admin['admin_id']);
                redirect('Admin/main');
            }
        }
        redirect('Admin/login');
	}

	public function logout(){
        if (!$this->permission()) {
            redirect('Admin/main');
        }
        $this->session->unset_userdata('admin_id');
        redirect('Admin/login');
    }

	public function register(){
		$this->load->view('admin/register');
	}

	public function forgetPassword(){
		$this->load->view('admin/forget_password');
	}

	public function user_data(){
		if($this->session->userdata('admin_id')){
			$this->load->model('user');
        	$data['result']=$this->user->show_user();
        	$this->load->view('admin/header');
        	$this->load->view('admin/user_data',$data);
        	$this->load->view('admin/footer');
        } else redirect('Admin/login');
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
		if($this->session->userdata('admin_id')){
			$this->load->model('booktour');
        	$data['result']=$this->booktour->show_user_bookTour();
        	$this->load->view('admin/header');
        	$this->load->view('admin/bookTour_user_info',$data);
        	$this->load->view('admin/footer');
        } else redirect('Admin/login');
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
