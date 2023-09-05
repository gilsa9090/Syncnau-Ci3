<?php 

class M_admin extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('admin')->result_array();
        return  (count((array) $data) > 0) ? $data : false;
    }

    public function insert()
    {
        $data = [
            'nama_admin' => 'admin',
            'username' => 'admin',
            'password' => password_hash('admin',PASSWORD_BCRYPT),
            'image' => "default.jpg",
            'bio' => 'Admin 1',
            'email' => 'admin@admin.com',
            'level' => 100,
        ];
        $this->db->insert('admin', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_admin', $id);
        $update = $this->db->update('admin', $data);
        return  ($update) ? true : false;
    }

    public function delete($id)
    {
        return ($this->db->where('id_admin', $id)->delete('admin')) ? true : false;
    }

    public function getOne($id){
        $this->db->where('id_admin', $id);
        $data = $this->db->get('admin')->row();
        return (count((array) $data) > 0) ? $data : false;
    }
    
}

?>