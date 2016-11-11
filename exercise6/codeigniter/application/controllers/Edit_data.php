<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_data extends CI_Controller {
	
	function __construct() {
	parent::__construct();

	// Load url helper
	$this->load->helper('url');
	}

		
		
		
	
	public function index()
		{
			$this->load->view('edit_data_view');
		}
		
		
	
}