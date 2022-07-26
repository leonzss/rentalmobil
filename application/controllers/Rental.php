<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {

    // 1. fungsi untuk menampilkan data dari database
    public function index()
    {
        $data['judul'] = 'FORM RENTAL MOBIL';
        //ambil data dari database tabel rental
        //load rental_model
        $data['hasil'] = $this->rental_model->get_all();

        //load file view
        $tmp['konten'] = $this->load->view('Frontend/Mobil/rental',$data,TRUE);
        $this->load->view('template',$tmp);
    }
    // 2. fungsi untuk tambah data
    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //start upload file
            //konfigurasi
            $config['upload_path'] = './uploaded_files/';
            $config['allowed_types'] = 'jpg|jpeg|png|bpm|gif';
            $config['max_size'] = '2048';
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image_trf'))
            {
                //jika upload file gagal, tampilkan pesan error
                $data ['err'] = $this->upload->display_errors();
                $tmp['konten'] = $this->load->view("Frontend/Mobil/rental",$data,TRUE);
                $this->load->view('template', $tmp);
            }
            else
            {
                //jika berhasil, maka ambil nama filenya
                $data_upload = $this->upload->data();
                $img_trf = $data_upload['file_name'];

                $aksi = $this->rental_model->add($img_trf);
                if ($aksi)
                {
                    $this->session->set_flashdata("message",'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    Terima Kasih, Data Berhasil Disimpan.
                </div>');
                    redirect('rental','refresh');
                }
            }
        }

        $data['judul'] = "FORM RENTAL MOBIL";

        //load template
        $tmp['konten'] = $this->load->view("Frontend/Mobil/rental",$data,TRUE);
        $this->load->view("template",$tmp);
    }
}