<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    // 1. fungsi untuk menampilkan data dari database
    public function index()
    {
        $data['judul'] = 'KONTAK KAMI';
        //ambil data dari database tabel kontak
        //load kontak_model
        $data['hasil'] = $this->kontak_model->get_all();

        //load file view
        $tmp['konten'] = $this->load->view('Frontend/Kontak/kontak',$data,TRUE);
        $this->load->view('template',$tmp);
    }
    // 2. fungsi untuk tambah data
    public function add()
    {
        if($_SERVER['REQUEST_METHOD']== "POST")
        {
            $this->form_validation->set_rules('nama','Nama Lengkap','trim|required|xss_clean');
			$this->form_validation->set_rules('subjek','Subject','trim|required|xss_clean');
			$this->form_validation->set_rules('pesan','Pesan','trim|required|xss_clean');
            if ($this->form_validation->run()==FALSE)
            {
                $data['err'] = validation_errors();
				$tmp['konten'] = $this->load->view("Frontend/Kontak/kontak",$data,TRUE);
                $this->load->view('template', $tmp);
            }
            else
            {
                $aksi = $this->kontak_model->add();
                if ($aksi)
                {
                    $this->session->set_flashdata("message",'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    Terima Kasih, Data Berhasil Disimpan.
                </div>');
                    redirect('kontak','refresh');
                }
            }
        }
        $data['judul'] = "KONTAK KAMI";

        //load template
        $tmp['konten'] = $this->load->view("Frontend/Kontak/kontak",$data,TRUE);
        $this->load->view('template', $tmp);
    }
}