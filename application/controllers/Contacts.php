<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'pagination'));
        $this->load->helper(array('url'));
        $this->load->model('contact');
    }

    public function index()
    {

    }

    public function contact_us()
    {
        require_once(APPPATH . 'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object
        $aObj->category(); //call function
        $this->load->view('contact_us');
        $foot = new Users();  //create object
        $foot->footer(); //call function
    }

    public function contact_data()
    {
        if ($this->session->userdata('admin_id')) {
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

            $config['base_url'] = base_url() . 'Contacts/contact_data';
            $config['num_links'] = 3;
            $config['total_rows'] = $this->contact->get_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();

            $data['result'] = $this->contact->show_contact_data($config['per_page'], $page);
            $this->load->view('admin/header');
            $this->load->view('admin/contact_data', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function contact_detail()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('contact');
        $data['result'] = $this->contact->get_contact($id);
        $this->load->view('admin/header');
        $this->load->view('admin/contact_detail', $data);
        $this->load->view('admin/footer');
    }

    public function create_contact()
    {
        $this->load->library('form_validation');
        $this->load->model('contact');
        $this->contact->add_contact();
        redirect('Contacts/contact_us');
    }

    public function update_contact_stt()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('contact');
        $this->contact->update_contact($id);
        redirect('Contacts/contact_data');
    }

    public function delete_contact()
    {
        $id = intval($this->input->get('id'));
        if ($this->contact->delete_contact($id)) {
            redirect('Contacts/contact_data');
        }
    }

}

?>