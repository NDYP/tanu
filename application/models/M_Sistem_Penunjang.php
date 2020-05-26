<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Sistem_Penunjang extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('sistem_penunjang')
            ->get();
        return $query;
    }
    public function index1()
    {
        $query = $this->db->select('*')
            ->from('sistem_penunjang')
            ->where('kategori=', 'Set Pemeriksaan Umum di Puskesmas Pembantu')
            ->get();
        return $query;
    }
    public function index2()
    {
        $query = $this->db->select('*')
            ->from('sistem_penunjang')
            ->where('kategori=', 'Set Pemeriksaan Laboratorium Sederhana')
            ->get();
        return $query;
    }
    public function index3()
    {
        $query = $this->db->select('*')
            ->from('sistem_penunjang')
            ->where('kategori=', 'Meubelair')
            ->get();
        return $query;
    }
    public function get($id_sistem_penunjang)
    {
        $query = $this->db->select('*')
            ->from('sistem_penunjang')
            ->where('sistem_penunjang.id_sistem_penunjang', $id_sistem_penunjang)
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
    public function delete($id_sistem_penunjang)
    {
        $this->db->where('id_sistem_penunjang', $id_sistem_penunjang);
        $this->db->delete('sistem_penunjang');
    }
}
