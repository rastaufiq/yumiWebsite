<?php
class Mdl_artikel extends ci_model{
	function select_all(){
		return $this->db->get('articles');
	}
}