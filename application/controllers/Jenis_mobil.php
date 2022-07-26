<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Jenis_mobil extends CI_Controller
{
    //digunakan untuk menampilkan jenis mobil
    public function index ()
    {
        $data['head'] = "Find Your Car";
        $data['hasil'] = $this->detail_mobil_model->get_all();
        $tmp['konten'] = $this->load->view('frontend/mobil/jenis_mobil',$data,TRUE);
        $this->load->view('template',$tmp);
    }

    //digunakan untuk menampilkan detail mobil
    public function detail($id=0)
	{
		$data['head'] = "Detail Mobil";
		$data['hasil'] = $this->detail_mobil_model->get_detail_by_id($id);	
		$tmp['konten'] = $this->load->view('frontend/mobil/detail_mobil',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}