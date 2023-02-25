<?php

class M_user extends CI_Model
{
    public function getDataUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function tambahUser()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "password" => md5($this->input->post('password', true))
        ];
        $this->db->insert('user', $data);
    }
    public function hapususer($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
    public function getUserId($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function editUser()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
