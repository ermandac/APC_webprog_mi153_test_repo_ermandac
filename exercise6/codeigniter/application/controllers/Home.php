<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() {
	parent::__construct();

	// Load url helper
	$this->load->helper('url');
	}

		
		
		
	
	public function index()
		{
			$this->load->view('home_view');
			$this->load->view('edit_data_view');
			$this->load->view('add_data_view');
		}
		
		
	
}


