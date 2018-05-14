<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleries extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('gallery');
    }

    public function index() {
        
    }

    public function showGallery(){
        $this->load->model('gallery');
        $data['result']=$this->gallery->get_gallery();
        require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('gallery',$data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function show_gallery_data(){
        if($this->session->userdata('admin_id')){
            $this->load->model('gallery');
            $data['result']=$this->gallery->show_gal_data();
            $this->load->view('admin/header');
            $this->load->view('admin/gallery_data',$data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_gallery($msg = NULL){
        if($this->session->userdata('admin_id')){
            $data['msg'] = $msg;
            $this->load->model('category');
            $data['cat']=$this->category->get_cat();
            $this->load->model('destination');
            $data['des']=$this->destination->get_des();
            $this->load->view('admin/header');
            $this->load->view('admin/new_gallery', $data, array('error' => ' ' ));
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_gallery(){
        $this->load->library('form_validation');
        $this->load->model('gallery');
        $this->gallery->add_gallery();
        redirect('Galleries/show_gallery_data');
    }

    public function gallery_detail(){
        $id =intval($this->input->get('id'));
        $this->load->model('category');
        $data['cat']=$this->category->get_cat();
        $this->load->model('destination');
        $data['des']=$this->destination->get_des();
        $this->load->model('gallery');
        $data['result']=$this->gallery->get_gal_admin($id);
        $this->load->view('admin/header');
        $this->load->view('admin/gallery_detail',$data);
        $this->load->view('admin/footer');
    }

    public function update_gallery(){
        $id=intval($this->input->get('id'));
        $this->load->model('gallery');
        $this->gallery->update_gallery($id);
        redirect('Galleries/show_gallery_data');
    }

    public function delete_gallery(){
        $id =intval($this->input->get('id'));
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->gallery->get_gallery('', '', '', $id);;
        
        if($this->gallery->delete_gallery($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Galleries/show_gallery_data');  
        } 
    }

    public function upload_gal_pic(){
        $config['upload_path']          = '../webapplication/public/gal_img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->Galleries->upload_gal_pic('pic')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('new_gallery', $error);
        }
        else{
            $data = array('upload_data' => $this->upload->data());
        }
    }
}
