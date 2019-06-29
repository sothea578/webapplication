<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_contact($id)
    {
        $this->db->select("*");
        $this->db->from('contact');
        $this->db->where('contact_id', $id);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function get_count() {
        return $this->db->count_all('contact');
    }

    public function show_contact_data($limit, $start)
    {
        $this->db->select("*")
            ->from('contact')
            ->order_by('contact_id', 'asc')
            ->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function add_contact()
    {
        $data = array(
            'full_name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone_num' => $this->input->post('phone'),
            'massage' => $this->input->post('content'),
            'contact_date' => date('Y-m-d'),
            'status' => 'pending'
        );
        $this->db->insert('contact', $data);
    }

    public function update_contact($id)
    {
        $data = array(
            'status' => $this->input->post('contact_stt')
        );
        $this->db->where('contact_id', $id);
        $this->db->update('contact', $data);
    }

    public function delete_contact($id)
    {
        $this->db->where('contact_id', $id);
        return $this->db->delete('contact');
    }

}

?>