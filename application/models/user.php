<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_count() {
        return $this->db->count_all('user');
    }

    public function create_user()
    {
        $data = array(
            'user_name' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'full_name' => $this->input->post('fullname'),
            'sex' => $this->input->post('sex'),
            'user_dob' => $this->input->post('dob'),
            'email' => $this->input->post('email'),
            'phone_number' => $this->input->post('phone'),
            'address' => $this->input->post('address')
        );
        $this->db->insert('user', $data);
    }

    function login($data)
    {
        $query = $this->db->get_where('user', $data);
        return $query->first_row('array');
    }

    public function get_users()
    {
        $this->db->select("user_id, user_name, full_name, sex, user_dob, email, phone_number, address");
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_user($id)
    {
        $this->db->select("user_id, user_name, full_name, sex, user_dob, email, phone_number, address");
        $this->db->from('user');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function show_user($limit, $start)
    {
        $this->db->select("user_id, user_name, full_name, sex, user_dob, email, phone_number, address")
            ->from('user')
            ->order_by('user_id', 'asc')
            ->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_user($id)
    {
        $data = array(
            'user_name' => $this->input->post('uname'),
            'full_name' => $this->input->post('full_name'),
            'sex' => $this->input->post('sex'),
            'user_dob' => $this->input->post('dob'),
            'email' => $this->input->post('email'),
            'phone_number' => $this->input->post('tel'),
            'address' => $this->input->post('add')
        );
        $this->db->where('user_id', $id);
        $this->db->update('user', $data);
    }

    public function validate()
    {
        $u_name = $this->security->xss_clean($this->input->post('username'));
        $pw = $this->security->xss_clean($this->input->post('password'));
        $this->db->where('user_name', $u_name);
        $this->db->where('password', $pw);
        $query = $this->db->get('user');
        if ($query->num_rows == 1) {
            $row = $query->row();
            $data = array(
                'user_id' => $row->user_id,
                'user_name' => $row->username,
                'password' => $row->password,
                'full_name' => $row->full_name,
                'sex' => $row->sex,
                'email' => $row->email,
                'phone_number' => $row->phone_number,
                'address' => $row->address,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }

    public function delete_user($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->delete('user');
    }
}

?>
