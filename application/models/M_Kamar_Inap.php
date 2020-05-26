<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kamar_Inap extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('kamar_inap')
            ->get();
        return $query;
    }
    public function get($id_kamar_inap)
    {
        $query = $this->db->select('*')
            ->from('kamar_inap')
            ->where('kamar_inap.id_kamar_inap', $id_kamar_inap)
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
    public function delete($id_kamar_inap)
    {
        $this->db->where('id_kamar_inap', $id_kamar_inap);
        $this->db->delete('kamar_inap');
    }
}
