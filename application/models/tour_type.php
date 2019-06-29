<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class tour_type extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_count()
    {
        return $this->db->count_all('tour_type');
    }

    public function get_tour_type()
    {
        $this->db->select("*");
        $this->db->from('tour_type');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_tour_type($id)
    {
        $this->db->select("t.tour_type_id, t.tour_code, t.id_des, t.people_amount, t.status, d.des_id, d.des_name");
        $this->db->from('tour_type as t, destination as d');
        $this->db->where('t.tour_type_id', $id)
            ->where('t.id_des = d.des_id');
        $query = $this->db->get();
        return $query->first_row();
    }

    public function get_dropdown()
    {
        $results = $this->db->select('tour_type_id, tour_code, people_amount')
            ->where('people_amount < 10')
            ->get('tour_type')
            ->result_array();

        return array_column($results, 'tour_code', 'tour_type_id');
    }

    public function show_tour_type_data($limit, $start)
    {
        $this->db->select("t.tour_type_id, t.tour_code, t.id_des, t.people_amount, t.status, d.des_id, d.des_name")
            ->from('tour_type as t, destination as d')
            ->where('t.id_des = d.des_id')
            ->order_by('t.tour_type_id', 'asc')
            ->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_tour_type($id)
    {
        $this->db->select("t.tour_type_id, t.tour_code, t.id_des, t.people_amount, t.status, b.id_booktour, b.tour_code, d.des_id, d.des_name");
        $this->db->from('tour_type as t, booktour as b, destination as d');
        $data = array(
            'tour_code' => $this->input->post('tour_code'),
            'people_amount' => $this->input->post('people_amount'),
            'status' => $this->input->post('status')
        );
        $this->db->where('tour_type_id', $id);
        $this->db->update('tour_type', $data);
    }

    public function delete_tour_type($id)
    {
        $this->db->where('tour_type_id', $id);
        return $this->db->delete('tour_type');
    }

    public function add_tour_type()
    {
        $data = array(
            'tour_code' => $this->input->post('tour_code'),
            'id_des' => $this->input->post('id_des'),
            'people_amount' => $this->input->post('people_amount'),
            'status' => 'pending'
        );
        $this->db->insert('tour_type', $data);
    }
}

?>
