<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class BookingTour extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url', 'file'));
        $this->load->model('booktour');
    }

    public function show_booktour_info()
    {
        $id_des = intval($this->input->get('id_des'));
        $id_cat = intval($this->input->get('id_cat'));
        $this->load->model('booktour');
        $data['result'] = $this->booktour->get_booktour_user_detail($id_des, $id_cat);
        require_once(APPPATH . 'controllers/Users.php'); //include controller
        $aObj = new Users();  //create object 
        $aObj->category(); //call function
        $this->load->view('book_tour', $data);
        $foot = new Users();  //create object 
        $foot->footer(); //call function
    }

    public function booktour_process()
    {
        $id_des = intval($this->input->get('id_des'));
        $id_cat = intval($this->input->get('id_cat'));
        $this->load->model('booktour');
        $this->booktour->add_booktour($id_des, $id_cat);
        redirect('Users/personal_info');
    }

    public function update_book_tour()
    {
        $id = intval($this->input->get('id'));
        $id_tour = $this->input->post('id_tour_type');
        $this->load->model('booktour');
        $this->booktour->update_stt_book_tour($id, $id_tour);
        redirect('Admin/bookTour_user_info');
    }

    public function delete_book_tour()
    {
        $id = intval($this->input->get('id'));
        $this->load->model('booktour');
        if ($this->booktour->delete_book_tour($id)) {
            redirect('Admin/bookTour_user_info');
        }
    }

    public function bookingReport(){

    }

    public function exportCSV()
    {
        $storData = array();
        $metaData[] = array(
            'booking_id' => 'Booking ID',
            'username' => 'Username',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'destination' => 'Destination',
            'price' => 'Price',
            'date' => 'Date',
            'code' => 'Tour Code',
            'status' => 'Status'
        );

        $usersData = $this->booktour->getAllBookTour();
        foreach ($usersData as $key => $element) {
            $storData[] = array(
                'booking_id' => $element['id_bookTour'],
                'username' => $element['user_name'],
                'email' => $element['email'],
                'phone' => $element['phone_number'],
                'address' => $element['address'],
                'destination' => $element['des_name'],
                'price' => $element['des_price'],
                'date' => date('d-m-Y', strtotime($element['booking_date'])),
                'code' => $element['tour_code'],
                'status' => $element['status']
            );
        }
        $data = array_merge($metaData, $storData);
        $filename = 'users_' . date('Ymd') . '.csv';
        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=$filename");
        header("Pragma: no-cache");
        header("Expires: 0");
        $file = fopen('php://output', 'w');
        foreach ($data as $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }
}

?>
