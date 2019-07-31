<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function sdcaobe(){
		$this->load->view('includes/header');
		$this->load->view('projects/sdcaobe/index');
		$this->load->view('includes/footer');
	}
}
