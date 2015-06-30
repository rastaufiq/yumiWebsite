<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {        
	    parent::__construct();
	}

	public function index(){
		$data['page_title'] = 'Home';
		$this->load->view("view_head");
		$this->load->view("view_header");
		$this->load->view("view_featured");
		$this->load->view("view_content");
		$this->load->view("view_footer");
	}
}