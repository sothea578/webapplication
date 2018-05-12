<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('category');
    }

    function index() {
        
    }

    public function show_category_data(){
    	$this->load->model('category');
        $data['cat']=$this->category->show_cat_data();
        $this->load->view('admin/header');
        $this->load->view('admin/category_data',$data);
        $this->load->view('admin/footer');
    }

    public function new_category($msg = NULL){
        $data['msg'] = $msg;
        $this->load->view('admin/header');
        $this->load->view('admin/new_category', $data);
        $this->load->view('admin/footer');
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
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->category->get_cat('', '', $id);;
        
        if($this->category->delete_cat($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Categories/show_category_data');  
        } 
    }
}
