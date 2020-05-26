<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_Inap extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Kamar_Inap');
        $data['title'] = 'Kamar Inap';
        $data['kamar_inap'] = $this->M_Kamar_Inap->index()->result_array();
        $this->load->view('pengunjung/template/header');
        $this->load->view('pengunjung/kamar_inap/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
