<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function about()
	{
		$this->load->view('ui/about');
	}
    public function contact()
	{
		$this->load->view('ui/contact');
	}
    public function services()
	{
		$this->load->view('ui/services');
	}
}