<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class booktour extends CI_Model{
	function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function show_user_bookTour(){
		$this->db->
			select("a.user_id, a.user_name, a.full_name, a.sex, a.email, a.phone_number, a.address, b.id_bookTour, b.id_user, b.id_tour_type, b.id_cat, b.id_des, b.status, b.booking_date, c.cat_id, c.cat_name, d.des_id, d.des_name, d.des_price, t.tour_type_id, t.tour_code")
  			->from('user as a, booktour as b, category as c, destination as d, tour_type as t')
  			->where('a.user_id = b.id_user AND b.id_cat = c.cat_id AND b.id_des = d.des_id AND b.id_tour_type = t.tour_type_id');
  		$query = $this->db->get();
  		return $query->result();
	 }

    public function get_booktour_info_this_user($id){
        //$d = intval($id);
        $this->db->
            select("b.id_bookTour, b.id_user, b.id_tour_type, b.id_cat, b.id_des, b.status, b.booking_date, c.cat_id, c.cat_name, d.des_id, d.des_name, d.des_price, t.tour_type_id, t.tour_code")
            ->from('booktour as b, category as c, destination as d, tour_type as t')
            ->where('b.id_user', $id)
            ->where('b.id_cat = c.cat_id')
            ->where('b.id_des = d.des_id')
            ->where('b.id_tour_type = t.tour_type_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function show_user_bookTour_detail($id){
        $this->db->
            select("a.user_id, a.user_name, a.full_name, a.sex, a.email, a.phone_number, a.address, b.id_bookTour, b.id_user, b.id_tour_type, b.status, b.booking_date, c.cat_id, c.cat_name, d.des_id, d.des_name, d.des_price, t.tour_type_id, t.tour_code")
            ->from('user as a, booktour as b, category as c, destination as d, tour_type as t')
            ->where('a.user_id = b.id_user')
            ->where('b.id_cat = c.cat_id')
            ->where('b.id_des = d.des_id')
            ->where('b.id_tour_type = t.tour_type_id')
            ->where('b.id_bookTour', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_booktour(){
        $this->db->select("id_bookTour, id_cat, id_user, id_tour_type, id_des, status, booking_date");
        $this->db->from('booktour');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_booktour_user_detail($iddes, $idcat){
        $id_user=$this->session->userdata('user_id');
        $this->db->select("a.user_id, a.user_name, a.full_name, a.sex, a.user_dob, a.email, a.phone_number, a.address, c.cat_id, c.cat_name, d.des_id, d.des_name, d.des_price")
            ->from('user as a, category as c, destination as d')
            ->where('a.user_id', $id_user)
            ->where('c.cat_id', $idcat)
            ->where('d.des_id', $iddes);
        $query = $this->db->get();
        return $query->result();
    }

    public function add_booktour($iddes, $idcat){
        $id_user=$this->session->userdata('user_id');
        $data = array(
            'id_cat' => $idcat,
            'id_user' => $id_user,
            'id_des' => $iddes,
            'id_tour_type' => '1',
            'status' => 'pending',
            'booking_date' => date('Y-m-d')
        );
        $this->db->insert('booktour', $data);
    }

    public function update_stt_book_tour($id){
        $data = array(
            'id_tour_type' => $this->input->post('id_tour_type'),
            'status' => $this->input->post('book_stt')
        );
        $this->db->where('id_bookTour', $id);
        $this->db->update('booktour', $data);
    }

    public function delete_book_tour($id){
        $this->db->where('id_bookTour', $id);
        return $this->db->delete('booktour');
    }
}
?>