<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct() {
        parent::__construct();
        // Load model
        $this->load->model('Challan_model');
		$this->load->library('form_validation');

    }


	public function index()
	{
		$this->load->view('index');
	}

	public function about()
	{
		$this->load->view('about');
	}

	

	

	public function challan_form()
	{
		$this->load->view('challan_form');
	}

	public function challan_details()
	{
		$this->load->view('challan_details');
	}


	
	   // Process form submission and display challan details
	   public function check() {
        // Get vehicle number from form
        $vehicle_number = $this->input->post('vehicle_number');
        
        // Fetch challan details from model
        $data['challans'] = $this->Challan_model->get_challan_by_vehicle($vehicle_number);
        
        // Load view and pass challan data
        $this->load->view('challan_details', $data);
    }

	
	

	
	public function submit() {
        $data = array(
            'challan_number' => $this->input->post('challan_number'),
            'vehicle_number' => $this->input->post('vehicle_number'),
            'owner_name' => $this->input->post('owner_name'),
            'violation_type' => $this->input->post('violation_type'),
            'violation_date' => $this->input->post('violation_date'),
            'location' => $this->input->post('location'),
            'amount' => $this->input->post('amount'),
            'due_date' => $this->input->post('due_date'),
            'payment_status' => $this->input->post('payment_status')
        );

        // Model ko data pass karein aur save karein
        $inserted = $this->Challan_model->insert_challan($data);

        if ($inserted) {
            echo "Challan successfully added.";
        } else {
            echo "Error adding challan.";
        }
    }


}
