<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
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
		$this->about();
	}

	public function about(){
		$this->load->view("view_head");
		$this->load->view("view_header");
		echo "halaman about";
		$this->load->view("view_footer");
	}
}