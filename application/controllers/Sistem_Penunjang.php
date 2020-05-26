<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sistem_Penunjang extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Sistem_Penunjang');
        $data['title'] = 'Fasilitas Sistem Penunjang';
        $data['sistem_penunjang'] = $this->M_Sistem_Penunjang->index()->result_array();
        $this->load->view('pengunjung/template/header');
        $this->load->view('pengunjung/sistem_penunjang/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
