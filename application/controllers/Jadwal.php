<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Jadwal');
        $data['title'] = 'Jadwal';
        $data['jadwal1'] = $this->M_Jadwal->index1()->result_array();
        $data['jadwal2'] = $this->M_Jadwal->index2()->result_array();
        $this->load->view('pengunjung/template/header');
        $this->load->view('pengunjung/jadwal/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
