<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
		$this->load->helper(array('url'));
    }

    public function index(){
    	
    }

    public function service(){
        $this->load->model('service');
        $data['result']=$this->service->show_service_data();
		require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
		$this->load->view('service', $data);
		$foot = new Users();  //create object 
        $foot->footer(); //call function
	}

    public function showServicePackage(){
        $id =intval($this->input->get('id'));
        $this->load->model('service_package');
        $data['result']=$this->service_package->get_package($id);
        require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('service',$data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function servicePackageDetail()
    {
        $id =intval($this->input->get('id'));
        $this->load->model('service_package');
        $data['result']=$this->service_package->get_package_detail($id);
        require_once(APPPATH.'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('service_package_detail',$data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function serviceData(){
        if($this->session->userdata('admin_id')){
            $this->load->model('service');
            $data['serv']=$this->service->show_service_data();
            $this->load->view('admin/header');
            $this->load->view('admin/service_data',$data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_service($msg = NULL){
        if($this->session->userdata('admin_id')){
            $data['msg'] = $msg;
            $this->load->view('admin/header');
            $this->load->view('admin/new_service', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_service(){
        $this->load->library('form_validation');
        $this->load->model('service');
        $this->form_validation->set_rules('serv_type', 'serv_type', 'required|min_length[1]');
        if($this->form_validation->run() == FALSE){
            echo '<script>alert("Incorrect data length!");</script>';
        }
        else {
            $this->service->add_service();
            redirect('Services/serviceData');
        }
    }

    public function service_detail(){
        $id =intval($this->input->get('id'));
        $this->load->model('service');
        $data['serv']=$this->service->get_service($id);
        $this->load->view('admin/header');
        $this->load->view('admin/service_detail',$data);
        $this->load->view('admin/footer');
    }

    public function update_service(){
        $id=intval($this->input->get('id'));
        $this->load->model('service');
        $this->service->update_service($id);
        redirect('Services/serviceData');
    }

    public function delete_service(){
        $id =intval($this->input->get('id'));
        $this->load->model('service');
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->service->get_serv('', '', $id);;
        
        if($this->service->delete_service($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Services/serviceData');  
        } 
    }

    public function ServicePackageData(){
        if($this->session->userdata('admin_id')){
            $this->load->model('service_package');
            $data['package']=$this->service_package->show_serv_pkg_data();
            $this->load->view('admin/header');
            $this->load->view('admin/package_data',$data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_package($msg = NULL){
        if($this->session->userdata('admin_id')){
            $data['msg'] = $msg;
            $this->load->model('service');
            $data['serv']=$this->service->get_serv();
            $this->load->view('admin/header');
            $this->load->view('admin/new_package', $data, array('error' => ' ' ));
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_package(){
        $this->load->library('form_validation');
        $this->load->model('service_package');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[1]');
        if($this->form_validation->run() == FALSE){
            echo '<script>alert("Incorrect data length!");</script>';
        }
        else {
            $this->service_package->add_serv_pkg();
            redirect('Services/ServicePackageData');
        }
    }

    public function package_detail_admin(){
        $id =intval($this->input->get('id'));
        $this->load->model('service');
        $data['serv']=$this->service->get_serv();
        $this->load->model('service_package');
        $data['result']=$this->service_package->get_package_detail($id);
        $this->load->view('admin/header');
        $this->load->view('admin/package_detail',$data);
        $this->load->view('admin/footer');
    }

    public function update_package(){
        $id=intval($this->input->get('id'));
        $this->load->model('service_package');
        $this->service_package->update_package($id);
        redirect('Services/ServicePackageData');
    }

    public function upload_serv_pic(){
        $config['upload_path']          = '../public/serv_img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->Services->upload_serv_pic('pic')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('new_package', $error);
        }
        else{
            $data = array('upload_data' => $this->upload->data());
        }
    }

    public function delete_package(){
        $id =intval($this->input->get('id'));
        $this->load->model('service_package');
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->service_package->get_pkg('', '', '', '', '', $id);;
        
        if($this->service_package->delete_package($id)){
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Services/ServicePackageData');  
        } 
    }
}

?>
