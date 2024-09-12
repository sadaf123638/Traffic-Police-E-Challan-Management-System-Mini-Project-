<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Challan_model extends CI_Model {


    public function __construct() {
        parent::__construct();
        $this->load->database();  // Load database here
    
    }
   

    public function insert_challan($data) {
        return $this->db->insert('challans', $data);
    }

    // Function to get challan details by vehicle number
    public function get_challan_by_vehicle($vehicle_number) {
        $this->db->where('vehicle_number', $vehicle_number);
        $query = $this->db->get('challans');  // 'challans' is the table name
        return $query->result_array();
    }
}
