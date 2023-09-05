<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('string'));
        $this->load->model('M_admin');
        $this->load->model('M_Login_admin');
    }

    public function index()
    {
       if($this->session->userdata('log_in_admin')){
        redirect('admin', 'refresh');
       } else {
        $data = array(
            'username' => set_value('username'),
            'password' => set_value('password'),
        );
        $this->load->view('auth/admin/login', $data);
       }
    }

    public function proses()
    {
        $username     = addslashes(trim($this->input->post('username', true)));
        $password     = addslashes(trim($this->input->post('password', true)));
      
        $row = $this->M_Login_admin->validasi_adm($username, $password);

        if ($row != null) {
            $this->_daftarkan_session($row);
        } else {
            $this->notifikasi->failLogin();
            redirect('login_admin', 'refresh');
        }
    }

    public function register()
    {
            $this->M_admin->insert();
            redirect('login');
 
    }


    public function _daftarkan_session($row)
    {
        array_merge($row, array('is_logged_in' => true));
        $this->session->set_userdata('log_in_admin', $row);
        redirect('admin',  'refresh');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login_admin');
    }
}
