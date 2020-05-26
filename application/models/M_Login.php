<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('admin')
            ->get();
        return $query;
    }

    public function get($username)
    {
        $query = $this->db->select('*')
            ->from('admin')
            ->where('admin.username', $username)
            ->get();
        return $query;
    }
    public function add($tabel, $params)
    {
        return $this->db->insert($tabel, $params);
    }
    public function update($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
    public function delete($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('admin');
    }
}
