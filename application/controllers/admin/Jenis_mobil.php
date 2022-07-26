<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class Jenis_mobil extends CI_Controller
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
        $data['judul'] = 'HALAMAN JENIS MOBIL';
        // ambil data dari database tabel news_category
        // load jenis_mobil_model
        $data['hasil']=$this->jenis_mobil_model->get_all();

        // load file view
        $tmp['konten'] = $this->load->view('admin/jenis_mobil/home',$data,TRUE);
        $this->load->view('admin/header');
        $this->load->view('admin/template',$tmp);
    }
    // 2. fungsi untuk tambah data
    public function add()
    {
        if($_SERVER['REQUEST_METHOD']== "POST")
        {
            $this->form_validation->set_rules('news_cat_name', 'Nama Kategori', 'trim|required|xss_clean');
            if ($this->form_validation->run()==FALSE)
            {
                $data['err'] = validation_errors();
                $tmp['konten'] = $this->load->view("admin/jenis_mobil/add",$data,TRUE);
            }
            else
            {
                $aksi = $this->jenis_mobil_model->add();
                if ($aksi)
                {
                    $this->session->set_flashdata("message","data berhasil disimpan");
                    redirect('admin/jenis_mobil','refresh');
                }
            }
        }
        $data['judul'] = "TAMBAH DATA JENIS MOBIL";

        //load template
        $tmp['konten'] = $this->load->view("admin/jenis_mobil/add",$data,TRUE);
        $this->load->view('admin/header');
        $this->load->view("admin/template",$tmp);
    }

    // 3. fungsi untuk edit data
    public function edit($id=0)
    { 
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $data_jenis_mobil = $this->jenis_mobil_model->get_detail_by_id($id);
            if (count($data_jenis_mobil) > 0)
            {
                $aksi = $this->jenis_mobil_model->update_by_admin($id);
                if ($aksi)
                {
                    $this->session->set_flashdata("message","data berhasil diupdate");
                    redirect('admin/jenis_mobil','refresh');
                }
                else
                {
                    $this->session->set_flashdata("message","gagal mengubah data");
                    redirect('admin/jenis_mobil/edit/'.$id,'refresh');
                }
            }
            else
            {
                $this->session->set_flashdata("message","data gagal diedit karena tidak ada data");
                redirect('admin/jenis_mobil/edit/'.$id,'refresh');
            }
        }
        else
        {
            $data_jenis_mobil = $this->jenis_mobil_model->get_detail_by_id($id);
            $data['judul'] = "Edit Data Jenis Mobil ".$data_jenis_mobil['NEWS_CAT_NAME'];
            $data['hasil'] = $this->jenis_mobil_model->get_detail_by_id($id);

            //load template
            $tmp['konten'] = $this->load->view("admin/jenis_mobil/edit",$data,TRUE);
            $this->load->view('admin/header');
            $this->load->view("admin/template",$tmp);
         }     
    }

    // 4. fungsi untuk hapus data
    public function delete($id=0)
    {
        // get data
        $data_jenis_mobil = $this->jenis_mobil_model->get_detail_by_id($id);
        if (count($data_jenis_mobil) > 0)
        {
            // hapus data dari database
            $aksi = $this->jenis_mobil_model->delete($id);

            if ($aksi)
            {
                // jika query berhasil
                $this->session->set_flashdata("message","data berhasil dihapus");
                redirect ('admin/jenis_mobil','refresh');
            }
            else
            {
                // jika query gagal
                $this->session->set_flashdata("message","data gagal dihapus karena gagal query");
                redirect ('admin/jenis_mobil','refresh');
            }
        }
        else
        {
            // jika tidak ditemukan data
            $this->session->set_flashdata("message","data gagal dihapus karena tidak ada datanya");
            redirect ('admin/jenis_mobil','refresh');
        }
    }
}