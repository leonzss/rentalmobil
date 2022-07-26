<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();

        if ( $this->session->userdata("login_status") == FALSE)
        {
            $this->session->set_flashdata("message","access denied");
            redirect("admin/login",'refresh');
        }
    }

    public function index(){
        $data['judul'] = "HOME";
        $tmp['konten'] = $this->load->view('admin/home/home',$data,TRUE);
        $this->load->view('admin/header');
		$this->load->view('admin/template',$tmp);
    }
}