<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tour_types extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('tour_type');
    }

    function index() {
        
    }

    public function show_tour_type_data(){
        if($this->session->userdata('admin_id')){
            $this->load->model('tour_type');
            $data['tour']=$this->tour_type->show_tour_type_data();
            $this->load->view('admin/header');
            $this->load->view('admin/tour_type_data',$data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_tour_type($msg = NULL){
        if($this->session->userdata('admin_id')){
            $data['msg'] = $msg;
            $this->load->model('destination');
            $data['result']=$this->destination->get_des();
            $this->load->view('admin/header');
            $this->load->view('admin/new_tour_type', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_tour_type(){
        $this->load->library('form_validation');
        $this->load->model('tour_type');
        $this->tour_type->add_tour_type();
        redirect('Tour_types/show_tour_type_data');
    }

    public function tour_type_detail(){
        $id =intval($this->input->get('id'));
        $this->load->model('tour_type');
        $data['tour']=$this->tour_type->get_all_tour_type($id);
        $this->load->view('admin/header');
        $this->load->view('admin/tour_type_detail',$data);
        $this->load->view('admin/footer');
    }

    public function update_tour_type(){
        $id=intval($this->input->get('id'));
        $this->load->model('tour_type');
        $this->tour_type->update_tour_type($id);
        redirect('Tour_types/show_tour_type_data');
    }

    public function delete_tour_type(){
        $id =intval($this->input->get('id'));
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->tour_type->get_tour_type('', '','','', $id);;
        
        if($this->tour_type->delete_tour_type($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Tour_types/show_tour_type_data');  
        } 
    }
}
