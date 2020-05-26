<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Fasilitas extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('fasilitas')
            ->get();
        return $query;
    }
    public function index1()
    {
        $query = $this->db->select('*')
            ->from('fasilitas')
            ->where('kategori=', 'Set Pemeriksaan Umum')
            ->get();
        return $query;
    }
    public function index2()
    {
        $query = $this->db->select('*')
            ->from('fasilitas')
            ->where('kategori=', 'Perlengkapan')
            ->get();
        return $query;
    }
    public function index3()
    {
        $query = $this->db->select('*')
            ->from('fasilitas')
            ->where('kategori=', 'Meubelair')
            ->get();
        return $query;
    }
    public function get($id_fasilitas)
    {
        $query = $this->db->select('*')
            ->from('fasilitas')
            ->where('fasilitas.id_fasilitas', $id_fasilitas)
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
    public function delete($id_fasilitas)
    {
        $this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->delete('fasilitas');
    }
}
