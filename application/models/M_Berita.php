<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Berita extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('berita')
            ->get();
        return $query;
    }
    public function get($id_profil)
    {
        $query = $this->db->select('*')
            ->from('berita')
            ->where('berita.id_berita', $id_profil)
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
    public function delete($id_profil)
    {
        $this->db->where('id_berita', $id_profil);
        $this->db->delete('berita');
    }
}
