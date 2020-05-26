<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Galeri extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('galeri')
            ->get();
        return $query;
    }
    public function get($id_galeri)
    {
        $query = $this->db->select('*')
            ->from('galeri')
            ->where('galeri.id_galeri', $id_galeri)
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
    public function delete($id_galeri)
    {
        $this->db->where('id_galeri', $id_galeri);
        $this->db->delete('galeri');
    }
}
