<?php if (! defined ('BASEPATH')) exit ('No direct script access allowed');
class Login extends CI_Controller
{
    public function index ()
    {
		$data['judul'] = 'Login to start your session';
		$this->load->view ('admin/login/login_header');
        $this->load->view ('admin/login',$data);
		$this->load->view ('admin/login/login_footer');
    }
    public function cek_login()
    {
        $u= $this->input->post('cms_user');
        $pw= $this->input->post('cms_password');
        
        $cek = $this->admin_model->verify($u,$pw);

        if (count($cek) > 0)
        {
            $id_user = $cek['ADMIN_ID'];
            $login = array(
                'username_admin' => $u,
                'login_admin' => $id_user,
                'login_status' => TRUE
            );
            $this->session->set_userdata($login);
            redirect ('admin/home','refresh');
        }
        else
        {
            $this->session->set_flashdata("message", '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            Username atau Password Anda Salah !!!
        </div>');
            redirect ('admin/login','refresh');

        }
    }
    function logout ()
    {
        $this->session->unset_userdata("username_admin");
        $this->session->unset_userdata("login_admin");
        $this->session->unset_userdata("login_status");

        $login = array(
                        'username_admin' =>"",
                        'login_admin' => FALSE,
                        'login_status' => FALSE
                        );

        $this->session->set_userdata($login);
        $this->session->set_flashdata("message",'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        Terima Kasih Anda Sudah Logout
    </div>');
        redirect('admin/login','refresh');
    }
}