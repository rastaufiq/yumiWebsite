<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct() {        
	    parent::__construct();
	}
	
	public function index(){
		$data['page_title'] = 'Pencarian';
		$this->load->view("view_head");
		$this->load->view("view_header");
		echo "halaman pencarian";
		$this->load->view("view_footer");
}