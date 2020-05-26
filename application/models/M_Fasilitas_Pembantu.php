<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Fasilitas_Pembantu extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('fasilitas_pembantu')
            ->get();
        return $query;
    }
    public function index1()
    {
        $query = $this->db->select('*')
            ->from('fasilitas_pembantu')
            ->where('kategori=', 'Set Pemeriksaan Umum di Puskesmas Pembantu')
            ->get();
        return $query;
    }
    public function index2()
    {
        $query = $this->db->select('*')
            ->from('fasilitas_pembantu')
            ->where('kategori=', 'Set Pemeriksaan Laboratorium Sederhana')
            ->get();
        return $query;
    }
    public function index3()
    {
        $query = $this->db->select('*')
            ->from('fasilitas_pembantu')
            ->where('kategori=', 'Meubelair')
            ->get();
        return $query;
    }
    public function get($id_fasilitas_pembantu)
    {
        $query = $this->db->select('*')
            ->from('fasilitas_pembantu')
            ->where('fasilitas_pembantu.id_fasilitas_pembantu', $id_fasilitas_pembantu)
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
    public function delete($id_fasilitas_pembantu)
    {
        $this->db->where('id_fasilitas_pembantu', $id_fasilitas_pembantu);
        $this->db->delete('fasilitas_pembantu');
    }
}
