<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Login_admin extends CI_Model
{
    public function validasi_adm($username, $password)
    {
        $data        = $this->db->get_where('admin', array('username like binary' => $username))->result();

        if (count($data) === 1) {
            if (password_verify($password, $data[0]->password)) {
                return $dt         =    array(
                    'is_logged_in' =>    true,
                    'id_admin'     =>    $data[0]->id_admin,
                    'email'        =>    $data[0]->email,
                    'nama_admin'   =>    $data[0]->nama_admin,
                    'username'     =>    $username,
                    'password'     =>    $password,
                    'bio'          =>    $data[0]->bio,
                    'image'        =>    $data[0]->image,
                    'level'        =>    $data[0]->level,
                );
            } else {
                return 0;
            }
        }
    }
}
/* End of file M_login.php */
/* Location: ./application/models/M_login.php */