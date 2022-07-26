<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class Rental_admin extends CI_Controller
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
        $data['judul'] = 'HALAMAN RENTAL MOBIL';
       
        $data['hasil'] = $this->rental_model->get_all();

        //load file view
        $tmp['konten'] = $this->load->view('admin/rental/home',$data,TRUE);
        $this->load->view('admin/header');
        $this->load->view('admin/template',$tmp);
    }

    //2. fungsi untuk hapus data
    public function delete($id=0)
    {
        //get data
        $data_rental = $this->rental_model->get_detail_by_id($id);
        if (count($data_rental) > 0)
        {
            $file_lama = $data_rental['IMAGE_TRF'];

            if ($file_lama != "")
            {
                //jika terdapat file gambar yang sebelumnya, maka hapus terlebih dahulu dari folder
                unlink("uploaded_files/".$file_lama);

                //hapus data dari database
                $aksi = $this->rental_model->delete($id);

                if ($aksi)
                {
                    //jika query berhasil
                    $this->session->set_flashdata("message","data berhasil dihapus");
                    redirect('admin/rental_admin','refresh');
                }
                else
                {
                    //jika query gagal
                    $this->session->set_flahdata("message","data gagal dihapus karena gagal query");
                    redirect('admin/rental_admin','refresh');
                }
            }
            else
            {
                //hapus data dari database
                $aksi = $this->rental_model->delete($id);
                if ($aksi)
                {
                    //jika query berhasil
                    $this->session->set_flashdata("message","data berhasil dihapus");
                    redirect('admin/rental_admin','refresh');
                }
                else
                {
                    //jika query gagal
                    $this->session->set_flashdata("message","data gagal dihapus karena gagal query");
                    redirect('admin/rental_admin','refresh');
                }
            }
        }
        else
        {
            //jika tidak ditemukan data
            $this->session->set_flashdata("message","data gagal dihapus karena tidak ada datanya");
            redirect('admin/rental_admin','refresh');
        }
    }
}