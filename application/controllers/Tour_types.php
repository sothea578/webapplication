<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tour_types extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('tour_type');
    }

    function index()
    {

    }

    public function show_tour_type_data()
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

            $config['base_url'] = base_url() . 'Tour_types/show_tour_type_data';
            $config['num_links'] = 3;
            $config['total_rows'] = $this->tour_type->get_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();

            $data['tour'] = $this->tour_type->show_tour_type_data($config['per_page'], $page);
            $this->load->view('admin/header');
            $this->load->view('admin/tour_type_data', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_tour_type($msg = NULL)
    {
        if ($this->session->userdata('admin_id')) {
            $data['msg'] = $msg;
            $this->load->model('destination');
            $data['result'] = $this->destination->get_dropdown();
            $this->load->view('admin/header');
            $this->load->view('admin/new_tour_type', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_tour_type()
    {
        $this->load->library('form_validation');
        $this->load->model('tour_type');
        $this->form_validation->set_rules('tour_code', 'tour_code', 'trim|required|min_length[1]|max_length[5]');
        if ($this->form_validation->run() == FALSE) {
            echo '<script>alert("Incorrect data length!");</script>';
            redirect('Tour_types/new_tour_type');
        } else {
            $this->tour_type->add_tour_type();
            redirect('Tour_types/show_tour_type_data');
        }
    }

    public function tour_type_detail()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('tour_type');
        $data['tour'] = $this->tour_type->get_all_tour_type($id);
        $this->load->view('admin/header');
        $this->load->view('admin/tour_type_detail', $data);
        $this->load->view('admin/footer');
    }

    public function update_tour_type()
    {
        $id = intval($this->input->get('id'));
        $this->load->library('form_validation');
        $this->load->model('tour_type');
        $this->form_validation->set_rules('tour_code', 'tour_code', 'trim|required|min_length[1]|max_length[5]');
        $this->form_validation->set_rules('people_amount', 'people_amount', 'required|min_length[0]');
        if ($this->form_validation->run() == FALSE) {
            echo '<script>alert("Incorrect data length!");</script>';
        } else {
            $this->tour_type->update_tour_type($id);
            redirect('Tour_types/show_tour_type_data');
        }
    }

    public function delete_tour_type()
    {
        $id = intval($this->input->get('id'));
        if ($this->tour_type->delete_tour_type($id)) {
            redirect('Tour_types/show_tour_type_data');
        }
    }
}
