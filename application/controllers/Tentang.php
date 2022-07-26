<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function index()
	{
		$tmp['konten'] = $this->load->view('Frontend/Tentang/tentang','',TRUE);
		$this->load->view('template', $tmp);
	}
}