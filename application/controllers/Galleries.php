<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleries extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
        $this->load->model('gallery');
    }

    public function index()
    {

    }

    public function showGallery()
    {
        $this->load->model('gallery');
        $data['gal'] = $this->gallery->get_gallery();
        $this->load->model('category');
        $data['result'] = $this->category->get_cat();
        require_once(APPPATH . 'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $foot = new Users();  //create object
        $this->load->view('gallery', $data);
        $foot->footer(); //call function
    }

    public function show_each_gallery()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('category');
        $data['result'] = $this->category->get_cat();
        $this->load->model('gallery');
        $data['gal'] = $this->gallery->get_each_gal($id);
        require_once(APPPATH . 'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('gallery', $data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function show_gallery_data()
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

            $config['base_url'] = base_url() . 'Galleries/show_gallery_data';
            $config['num_links'] = 3;
            $config['total_rows'] = $this->gallery->get_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();

            $data['result'] = $this->gallery->show_gal_data($config['per_page'], $page);
            $this->load->view('admin/header');
            $this->load->view('admin/gallery_data', $data);
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function new_gallery($msg = NULL)
    {
        if ($this->session->userdata('admin_id')) {
            $data['msg'] = $msg;
            $this->load->model('category');
            $data['cat'] = $this->category->get_dropdown();
            $this->load->model('destination');
            $data['des'] = $this->destination->get_dropdown();
            $this->load->view('admin/header');
            $this->load->view('admin/new_gallery', $data, array('error' => ' '));
            $this->load->view('admin/footer');
        } else redirect('Admin/login');
    }

    public function create_gallery()
    {
        $this->load->library('form_validation');
        $this->load->model('gallery');
        $config['upload_path'] = './public/gal_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = '2048000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);
        $this->upload->do_upload('pic');
        $d = array('upload_data' => $this->upload->data());
        $image_name = $d['upload_data']['file_name'];
        $this->form_validation->set_rules('name', 'name', 'xss_clean|is_unique[gallery.gal_name]');
        if ($this->form_validation->run()) {
            $data = array(
                'picture' => $image_name,
                'id_des' => $this->input->post('id_des'),
                'id_cat' => $this->input->post('id_cat'),
                'gal_name' => $this->input->post('name')
            );
            $this->gallery->add_gallery($data);
            redirect('Galleries/show_gallery_data');
        } else {
            echo '<script>alert("Incorrect data input!");</script>';
            $this->new_gallery();
        }
    }

    public function gallery_detail()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('category');
        $data['cat'] = $this->category->get_dropdown();
        $this->load->model('destination');
        $data['des'] = $this->destination->get_dropdown();
        $this->load->model('gallery');
        $data['result'] = $this->gallery->get_gal_admin($id);
        $this->load->view('admin/header');
        $this->load->view('admin/gallery_detail', $data);
        $this->load->view('admin/footer');
    }

    public function update_gallery()
    {
        $id = intval($this->input->get('id'));
        $g_old = $this->input->post('old_pic');
        $config['upload_path'] = './public/gal_img/';
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
            $image_name = $g_old;
        }
        $data = array(
            'picture' => $image_name,
            'id_des' => $this->input->post('id_des'),
            'id_cat' => $this->input->post('id_cat'),
            'gal_name' => $this->input->post('name')
        );
        $this->load->model('gallery');
        $this->gallery->update_gal($id, $data);
        redirect('Galleries/show_gallery_data');
    }

    public function delete_gallery()
    {
        $id = intval($this->input->get('id'));
        if ($this->gallery->delete_gallery($id)) {
            redirect('Galleries/show_gallery_data');
        }
    }
}
