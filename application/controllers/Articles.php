<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	public function __construct() {        
	    parent::__construct();
	    $this->load->model('mdl_artikel');
	    $data['idx_artikel'] = $this->mdl_artikel->select_all();
	}
	
	public function index(){
		$data['page_title'] = 'Artikel';
		$this->load->view("view_head");
		$this->load->view("view_header");
		echo "halaman artikel";
		$this->load->view("view_footer");
	}
}