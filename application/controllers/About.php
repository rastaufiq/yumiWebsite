<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct() {        
	    parent::__construct();
	}
	
	public function index(){
		$data['page_title'] = 'About';
		$this->load->view("view_head");
		$this->load->view("view_header");
		echo "halaman about";
		$this->load->view("view_footer");
	}
}