<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Destinations extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
        $this->load->model('destination');
    }

    public function index() {
    	
    }

    public function showDestination(){
        $this->load->model('destination');
        $data['result']=$this->destination->get_des();
        require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('destination',$data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function new_destination($msg = NULL){
        if($this->session->userdata('admin_id')){
            $data['msg'] = $msg;
            $this->load->model('category');
            $data['cat']=$this->category->get_dropdown();
            $this->load->view('admin/header');
            $this->load->view('admin/new_destination', $data, array('error' => ' ' ));
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_destination(){
        $this->load->library('form_validation');
        $this->load->model('destination');
        $config['upload_path'] = './public/des_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = '2048000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->do_upload('pic');
        $d = array('upload_data' => $this->upload->data());
        $image_name = $d['upload_data']['file_name'];
        $this->form_validation->set_rules('name', 'name', 'xss_clean|is_unique[destination.des_name]');
        $this->form_validation->set_rules('price', 'price', 'is_money_multi');
        $d_price = $this->input->post('price').'$';
        if($this->form_validation->run()) {
            $data = array(
                'des_name' => $this->input->post('name'),
                'des_pic' => $image_name,
                'des_detail' => $this->input->post('detail'),
                'des_price' => $d_price,
                'id_cat' => $this->input->post('id_cat')
            );
            $this->destination->add_destination($data);
            redirect('Destinations/show_destination_data');
        } else {
            echo '<script>alert("Incorrect data input!");</script>';
            $this->new_destination();
        }
    }

    public function destination_detail(){
        $id =intval($this->input->get('id'));
        require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $data['result']=$this->destination->get_desDetail($id);
        $this->load->view('destination_detail',$data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
	}

    public function each_destination(){
        $id =intval($this->input->get('id'));
        $this->load->model('destination');
        $data['result']=$this->destination->get_each_des($id);
        require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('destination',$data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function des_detail_admin(){
        $id =intval($this->input->get('id'));
        $this->load->model('category');
        $data['cat']=$this->category->get_dropdown();
        $this->load->model('destination');
        $data['result']=$this->destination->get_desDetail($id);
        $this->load->view('admin/header');
        $this->load->view('admin/destination_detail',$data);
        $this->load->view('admin/footer');
    }

    public function show_destination_data(){
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

            $config['base_url'] = base_url() . 'Destinations/show_destination_data';
            $config['num_links'] = 3;
            $config['total_rows'] = $this->destination->get_count() - 1;
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();

            $data['result']=$this->destination->show_desInfo($config['per_page'], $page);
            $this->load->view('admin/header');
            $this->load->view('admin/destination_data',$data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function update_destination(){
        $this->load->library('form_validation');
        $this->load->model('destination');
        $id=intval($this->input->get('id'));
        $d_old = $this->input->post('old_pic');
        $config['upload_path'] = './public/des_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = '2048000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        if ($_FILES[pic]['name'] !== "") {
            $this->load->library('upload', $config);
            $this->upload->do_upload('pic');
            $d = array('upload_data' => $this->upload->data());
            $image_name = $d['upload_data']['file_name'];
        } else {
            $image_name = $d_old;
        }
        $this->form_validation->set_rules('price', 'price', 'is_money_multi');
        $d_price = $this->input->post('price').'$';
        if($this->form_validation->run()) {
            $data = array(
                'des_name' => $this->input->post('name'),
                'des_pic' => $image_name,
                'des_detail' => $this->input->post('detail'),
                'des_price' => $d_price,
                'id_cat' => $this->input->post('id_cat')
            );
            $this->destination->update_destination($id, $data);
            redirect('Destinations/show_destination_data');
        } else {
            echo '<script>alert("Incorrect data input!");</script>';
            $this->des_detail_admin();
        }
    }

    public function delete_destination(){
        $id =intval($this->input->get('id'));
        if($this->destination->delete_des($id)){
            redirect('Destinations/show_destination_data');  
        } 
    }
}
