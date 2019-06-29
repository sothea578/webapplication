<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'pagination'));
        $this->load->helper(array('url'));
    }

    public function index()
    {

    }

    public function main()
    {
        if ($this->session->userdata('admin_id')) {
            $this->load->model('booktour');
            $data['reports']=$this->booktour->getReport();
            $this->load->view('admin/header');
            $this->load->view('admin/main', $data);
            $this->load->view('admin/footer');
        } else redirect('admin/login');
    }

    public function login()
    {
        if ($this->session->userdata('admin_id')) {
            redirect('Admin/user_data');
        } else $this->load->view('admin/login');
    }

    public function checkLogin()
    {
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

    public function logout()
    {
        if (!$this->permission()) {
            redirect('Admin/user_data');
        }
        $this->session->unset_userdata('admin_id');
        redirect('Admin/login');
    }

    public function register()
    {
        $this->load->view('admin/register');
    }

    public function forgetPassword()
    {
        $this->load->view('admin/forget_password');
    }

    public function user_data()
    {
        if ($this->session->userdata('admin_id')) {
            $this->load->model('user');
            $config = array();
            // Bootstrap 4 Pagination fix
            $config['full_tag_open'] = '<ul class="pagination justify-content-end">';
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close'] = '</span></li>';
            $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['next_tag_close'] = '<span aria-hidden="true"></span></span></li>';
            // $config['next_tag_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['prev_tag_close'] = '</span></li>';
            $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['first_tag_close'] = '</span></li>';
            $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['last_tag_close'] = '</span></li>';

            $config['base_url'] = base_url() . 'Admin/user_data';
            $config['num_links'] = 3;
            $config['total_rows'] = $this->user->get_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();

            $data['result'] = $this->user->show_user($config['per_page'], $page);
            $this->load->view('admin/header');
            $this->load->view('admin/user_data', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function user_detail()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('user');
        $data['result'] = $this->user->get_user($id);
        $this->load->view('admin/header');
        $this->load->view('admin/user_detail', $data);
        $this->load->view('admin/footer');
    }

    public function update_user()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('user');
        $this->user->update_user($id);
        redirect('Admin/user_data');
    }

    public function bookTour_user_info()
    {
        if ($this->session->userdata('admin_id')) {
            $this->load->model('booktour');
            $config = array();
            // Bootstrap 4 Pagination fix
            $config['full_tag_open'] = '<ul class="pagination justify-content-end">';
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close'] = '</span></li>';
            $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['next_tag_close'] = '<span aria-hidden="true"></span></span></li>';
            // $config['next_tag_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['prev_tag_close'] = '</span></li>';
            $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['first_tag_close'] = '</span></li>';
            $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['last_tag_close'] = '</span></li>';

            $config['base_url'] = base_url() . 'Admin/bookTour_user_info';
            $config['num_links'] = 3;
            $config['total_rows'] = $this->booktour->get_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();

            $data['result'] = $this->booktour->show_user_bookTour($config['per_page'], $page);
            $this->load->view('admin/header');
            $this->load->view('admin/bookTour_user_info', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function bookTour_user_detail()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('booktour');
        $data['result'] = $this->booktour->show_user_bookTour_detail($id);
        $this->load->model('tour_type');
        $data['tour'] = $this->tour_type->get_dropdown();
        $this->load->view('admin/header');
        $this->load->view('admin/bookTour_detail', $data);
        $this->load->view('admin/footer');
    }

    public function navbar()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/footer');
    }

    public function chart()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/chart');
        $this->load->view('admin/footer');
    }

    public function permission()
    {
        $admin = $this->session->userdata('admin_id');
        if (isset($admin) && !empty($admin)) {
            return true;
        }
    }

    public function loadArticle()
    {
        $this->load->model('model_admin');
        $this->model_admin->loadArticle();
    }
}

?>
