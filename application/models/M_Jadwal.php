<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jadwal extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('jadwal')
            ->get();
        return $query;
    }
    public function index1()
    {
        $query = $this->db->select('*')
            ->from('jadwal')
            ->where('kategori=', 'Rawat Jalan')
            ->get();
        return $query;
    }
    public function index2()
    {
        $query = $this->db->select('*')
            ->from('jadwal')
            ->where('kategori=', 'Rawat Inap')
            ->get();
        return $query;
    }
    public function get($id_jadwal)
    {
        $query = $this->db->select('*')
            ->from('jadwal')
            ->where('jadwal.id_jadwal', $id_jadwal)
            ->get()
            ->row_array();
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
    public function delete($id_jadwal)
    {
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->delete('jadwal');
    }
}
