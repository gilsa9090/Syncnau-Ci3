<?php

class M_user extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('user')->result_array();
        return (count((array) $data) > 0) ? $data : false;
    }
    public function limit()
    {
        $this->db->order_by('id_user', 'desc');
        $this->db->limit(10);
        $data = $this->db->get('user')->result_array();
        return (count((array) $data) > 0) ? $data : false;
    }

    public function insert()
    {
        $data = [
            'nama_user' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'image' => "default.jpg",
            'bio' => $this->input->post('bio'),
            'email' => $this->input->post('email'),
            'level' => $this->input->post('role'),
            'is_active' => 0,
        ];
        $this->db->insert('user', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_user', $id);
        $update = $this->db->update('user', $data);
        return ($update) ? true : false;
    }

    public function delete($id)
    {
        return ($this->db->where('id_user', $id)->delete('user')) ? true : false;
    }

    public function getOne($id)
    {
        $this->db->where('id_user', $id);
        $data = $this->db->get('user')->row();
        return (count((array) $data) > 0) ? $data : false;
    }
}
