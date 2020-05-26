<?php
defined('BASEPATH') or exit('No direct script access allowed');

class layanan extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_layanan');
        $data['title'] = 'layanan';
        $data['layanan'] = $this->M_layanan->index()->result_array();
        $this->load->view('pengunjung/template/header');
        $this->load->view('pengunjung/layanan/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
