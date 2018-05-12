<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Destinations extends CI_Controller {
    function __construct() {
        parent::__construct();
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
        $this->load->view('footer');
    }

    public function new_destination($msg = NULL){
        $data['msg'] = $msg;
        $this->load->model('category');
        $data['cat']=$this->category->get_cat();
        $this->load->view('admin/header');
        $this->load->view('admin/new_destination', $data, array('error' => ' ' ));
        $this->load->view('admin/footer');
    }

    public function create_destination(){
        $this->load->library('form_validation');
        $this->load->model('destination');
        $this->destination->add_destination();
        redirect('Destinations/show_destination_data');
    }

    public function destination_detail(){
        $id =intval($this->input->get('id'));
        require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $data['result']=$this->destination->get_desDetail($id);
        $this->load->view('destination_detail',$data);
        $this->load->view('footer');
	}

    public function each_destination(){
        $id =intval($this->input->get('id'));
        $this->load->model('destination');
        $data['result']=$this->destination->get_each_des($id);
        require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('destination',$data);
        $this->load->view('footer');
    }

    public function des_detail_admin(){
        $id =intval($this->input->get('id'));
        $this->load->model('category');
        $data['cat']=$this->category->get_cat();
        $this->load->model('destination');
        $data['result']=$this->destination->get_desDetail($id);
        $this->load->view('admin/header');
        $this->load->view('admin/destination_detail',$data);
        $this->load->view('admin/footer');
    }

    public function show_destination_data(){
        $this->load->model('destination');
        $data['result']=$this->destination->show_desInfo();
        $this->load->view('admin/header');
        $this->load->view('admin/destination_data',$data);
        $this->load->view('admin/footer');
    }

    public function update_destination(){
        $id=intval($this->input->get('id'));
        $this->load->model('destination');
        $this->destination->update_destination($id);
        redirect('Destinations/show_destination_data');
    }

    public function delete_destination(){
        $id =intval($this->input->get('id'));
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->destination->get_des('', '', '', '', '', $id);;
        
        if($this->destination->delete_des($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Destinations/show_destination_data');  
        } 
    }

    public function upload_des_pic(){
        $config['upload_path']          = '/webapplication/public/des_img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->Destinations->upload_des_pic('pic')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('new_destination', $error);
        }
        else{
            $data = array('upload_data' => $this->upload->data());
        }
    }
}
