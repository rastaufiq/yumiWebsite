<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct() {        
	    parent::__construct();
	}

	/*public function _remap($method)
	{
	    if ($method == 'some_method')
	    {
	        $this->$method();
	    }
	    else
	    {
	        $this->default_method();
	    }
	}*/
	
	public function index(){
		$this->search();
	}

	public function search(){
		$this->load->view("view_head");
		$this->load->view("view_header");
		echo "halaman pencarian";
		$this->load->view("view_footer");
	}
}