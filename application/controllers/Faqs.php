<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller {

	public function index()
	{
		$tmp['konten'] = $this->load->view('Frontend/Faqs/faqs','',TRUE);
		$this->load->view('template', $tmp);
	}
}