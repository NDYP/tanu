<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_Pembantu extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Fasilitas_Pembantu');
        $data['title'] = 'Fasilitas Pembantu';
        $data['fasilitas_pembantu1'] = $this->M_Fasilitas_Pembantu->index1()->result_array();
        $data['fasilitas_pembantu2'] = $this->M_Fasilitas_Pembantu->index2()->result_array();
        $this->load->view('pengunjung/template/header');
        $this->load->view('pengunjung/fasilitas_pembantu/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
