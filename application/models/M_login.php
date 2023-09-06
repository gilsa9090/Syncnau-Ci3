<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Login extends CI_Model
{
    public function validasi_adm($username, $password)
    {
        $data        = $this->db->get_where('user', array('username like binary' => $username))->result();

        if (count($data) === 1) {
            if (password_verify($password, $data[0]->password)) {
                return $dt         =    array(
                    'is_logged_in' =>    true,
                    'id_user'     =>    $data[0]->id_user,
                    'email'        =>    $data[0]->email,
                    'nama_user'   =>    $data[0]->nama_user,
                    'username'     =>    $username,
                    'password'     =>    $password,
                    'bio'          =>    $data[0]->bio,
                    'image'        =>    $data[0]->image,
                    'level'        =>    $data[0]->level,
                    'is_active'    =>    $data[0]->is_active
                );
            } else {
                return 0;
            }
        }
    }
}
/* End of file M_login.php */
/* Location: ./application/models/M_login.php */