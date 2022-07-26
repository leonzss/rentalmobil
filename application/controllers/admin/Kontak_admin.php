<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class Kontak_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // digunakan untuk memastikan bahwa halaman ini dapat diakses jika session bernilai TRUE
        if ( $this->session->userdata("login_status")== FALSE)
        {
            $this->session->set_flashdata("message","acces denied");
            redirect ("admin/login",'refresh');
        }
    }

    // 1. fungsi untuk menampilkan data dari database
    public function index()
    {
        $data['judul'] = 'HALAMAN FEEDBACK';
      
        $data['hasil'] = $this->kontak_model->get_all();

        //load file view
        $tmp['konten'] = $this->load->view('admin/feedback/home',$data,TRUE);
        $this->load->view('admin/header');
        $this->load->view('admin/template',$tmp);
    }

    //2. fungsi untuk hapus data
    public function delete($id=0)
    {
        // get data
        $data_kontak = $this->kontak_model->get_detail_by_id($id);
        if (count($data_kontak) > 0)
        {
            // hapus data dari database
            $aksi = $this->kontak_model->delete($id);

            if ($aksi)
            {
                // jika query berhasil
                $this->session->set_flashdata("message","data berhasil dihapus");
                redirect ('admin/kontak_admin','refresh');
            }
            else
            {
                // jika query gagal
                $this->session->set_flashdata("message","data gagal dihapus karena gagal query");
                redirect ('admin/kontak_admin','refresh');
            }
        }
        else
        {
            // jika tidak ditemukan data
            $this->session->set_flashdata("message","data gagal dihapus karena tidak ada datanya");
            redirect ('admin/kontak_admin','refresh');
        }
    }
}