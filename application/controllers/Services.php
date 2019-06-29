<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'pagination'));
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

    }

    public function service()
    {
        $this->load->model('service');
        $data['result'] = $this->service->show_service_data(20, 0);
        require_once(APPPATH . 'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('service', $data);
        $foot = new Users();  //create object
        $foot->footer(); //call function
    }

    public function showServicePackage()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('service_package');
        $data['result'] = $this->service_package->get_package($id);
        require_once(APPPATH . 'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('service', $data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function servicePackageDetail()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('service_package');
        $data['result'] = $this->service_package->get_package_detail($id);
        require_once(APPPATH . 'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('service_package_detail', $data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function serviceData()
    {
        if ($this->session->userdata('admin_id')) {
            $this->load->model('service');
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

            $config['base_url'] = base_url() . 'Services/serviceData';
            $config['num_links'] = 3;
            $config['total_rows'] = $this->service->get_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();

            $data['serv'] = $this->service->show_service_data($config['per_page'], $page);
            $this->load->view('admin/header');
            $this->load->view('admin/service_data', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_service($msg = NULL)
    {
        if ($this->session->userdata('admin_id')) {
            $data['msg'] = $msg;
            $this->load->view('admin/header');
            $this->load->view('admin/new_service', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_service()
    {
        $this->load->library('form_validation');
        $this->load->model('service');
        $this->form_validation->set_rules('serv_type', 'serv_type', 'numeric');
        if ($this->form_validation->run() == FALSE) {
            echo '<script>alert("Incorrect data input!");</script>';
            $this->new_service();
        } else {
            $this->service->add_service();
            redirect('Services/serviceData');
        }
    }

    public function service_detail()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('service');
        $data['serv'] = $this->service->get_service($id);
        $this->load->view('admin/header');
        $this->load->view('admin/service_detail', $data);
        $this->load->view('admin/footer');
    }

    public function update_service()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('service');
        $this->service->update_service($id);
        redirect('Services/serviceData');
    }

    public function delete_service()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('service');
        if (empty($id)) {
            show_404();
        }

        $news_item = $this->service->get_serv('', '', $id);;

        if ($this->service->delete_service($id)) {
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect('Services/serviceData');
        }
    }

    public function ServicePackageData()
    {
        if ($this->session->userdata('admin_id')) {
            $this->load->model('service_package');
            $data['package'] = $this->service_package->show_serv_pkg_data();
            $this->load->view('admin/header');
            $this->load->view('admin/package_data', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_package($msg = NULL)
    {
        if ($this->session->userdata('admin_id')) {
            $data['msg'] = $msg;
            $this->load->model('service');
            $data['serv'] = $this->service->get_dropdown();
            $this->load->view('admin/header');
            $this->load->view('admin/new_package', $data, array('error' => ' '));
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_package()
    {
        $this->load->library('form_validation');
        $this->load->model('service_package');
        $config['upload_path'] = './public/serv_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = '2048000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);
        $this->upload->do_upload('pic');
        $d = array('upload_data' => $this->upload->data());
        $image_name = $d['upload_data']['file_name'];
        $this->form_validation->set_rules('name', 'name', 'xss_clean|is_unique[service_package.pkg_name]');
        if ($this->form_validation->run()) {
            $data = array(
                'pkg_name' => $this->input->post('name'),
                'pkg_desc' => $this->input->post('desc'),
                'pkg_pic' => $image_name,
                'id_serv' => $this->input->post('id_serv')
            );
            $this->service_package->add_serv_pkg($data);
            redirect('Services/ServicePackageData');
        } else {
            echo '<script>alert("Incorrect data input!");</script>';
            $this->new_package();
        }
    }

    public function package_detail_admin()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('service');
        $data['serv'] = $this->service->get_dropdown();
        $this->load->model('service_package');
        $data['result'] = $this->service_package->get_package_detail($id);
        $this->load->view('admin/header');
        $this->load->view('admin/package_detail', $data);
        $this->load->view('admin/footer');
    }

    public function update_package()
    {
        $this->load->library('form_validation');
        $this->load->model('service_package');
        $id = intval($this->input->get('id'));
        $s_old = $this->input->post('old_pic');
        $config['upload_path'] = './public/serv_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = '2048000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        if ($_FILES[pic]['name'] !== "") {
            $this->load->library('upload', $config);
            $this->upload->do_upload('pic');
            $d = array('upload_data' => $this->upload->data());
            $image_name = $d['upload_data']['file_name'];
        } else {
            $image_name = $s_old;
        }
        $this->form_validation->set_rules('name', 'name', 'required');
        if ($this->form_validation->run()) {
            $data = array(
                'pkg_name' => $this->input->post('name'),
                'pkg_desc' => $this->input->post('desc'),
                'pkg_pic' => $image_name,
                'id_serv' => $this->input->post('id_serv')
            );
            $this->service_package->update_package($id, $data);
            redirect('Services/ServicePackageData');
        } else {
            echo '<script>alert("Incorrect data input!");</script>';
            $this->package_detail_admin();
        }
    }

    public function upload_serv_pic()
    {
        $config['upload_path'] = '/webapplication/public/serv_img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->Destinations->upload_des_pic('pic')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('new_package', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
    }

    public function delete_package()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('service_package');
        if ($this->service_package->delete_package($id)) {
            redirect('Services/ServicePackageData');
        }
    }
}

?>
