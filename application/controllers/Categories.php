<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('category');
    }

    function index() {
        
    }

    public function show_category_data(){
        if($this->session->userdata('admin_id')){
            $config = array();
            // Bootstrap 4 Pagination fix
            $config['full_tag_open']    = '<ul class="pagination justify-content-end">';
            $config['full_tag_close']   = '</ul>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
            // $config['next_tag_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tag_close']  = '</span></li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tag_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tag_close']  = '</span></li>';

            $config['base_url'] = base_url() . 'Categories/show_category_data';
            $config['num_links'] = 3;
            $config['total_rows'] = $this->category->get_count();
            $config['per_page'] = 5;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();

            $data['cat']=$this->category->show_cat_data($config['per_page'], $page);
            $this->load->view('admin/header');
            $this->load->view('admin/category_data',$data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_category($msg = NULL){
        if($this->session->userdata('admin_id')){
            $data['msg'] = $msg;
            $this->load->view('admin/header');
            $this->load->view('admin/new_category', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_category(){
        $this->load->library('form_validation');
        $this->load->model('category');
        $this->category->add_category();
        redirect('Categories/show_category_data');
    }

    public function category_detail(){
        $id =intval($this->input->get('id'));
        $this->load->model('category');
        $data['cat']=$this->category->get_category($id);
        $this->load->view('admin/header');
        $this->load->view('admin/category_detail',$data);
        $this->load->view('admin/footer');
    }

    public function update_category(){
        $id=intval($this->input->get('id'));
        $this->load->model('category');
        $this->category->update_category($id);
        redirect('Categories/show_category_data');
    }

    public function delete_category(){
        $id =intval($this->input->get('id'));
        if($this->category->delete_cat($id)){
            redirect('Categories/show_category_data');  
        } 
    }
}
