<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class service extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_count()
    {
        return $this->db->count_all('service');
    }

    public function get_serv()
    {
        $this->db->select("serv_id, serv_type");
        $this->db->from('service');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_dropdown()
    {
        $results = $this->db->select('serv_id, serv_type')
            ->get('service')
            ->result_array();

        return array_column($results, 'serv_type', 'serv_id');
    }

    public function get_service($id)
    {
        $this->db->select("serv_id, serv_type");
        $this->db->from('service');
        $this->db->where('serv_id', $id);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function show_service_data($limit, $start)
    {
        $this->db->select("serv_id, serv_type")
            ->from('service')
            ->order_by('serv_id', 'asc')
            ->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function add_service()
    {
        $data = array(
            'serv_type' => $this->input->post('serv_type')
        );
        $this->db->insert('service', $data);
    }

    public function delete_service($id)
    {
        $this->db->where('serv_id', $id);
        return $this->db->delete('service');
    }

    public function update_service($id)
    {
        $data = array(
            'serv_type' => $this->input->post('name')
        );
        $this->db->where('serv_id', $id);
        $this->db->update('service', $data);
    }
}

?>