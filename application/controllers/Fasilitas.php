<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Fasilitas');
        $data['title'] = 'Fasilitas';
        $data['fasilitas'] = $this->M_Fasilitas->index()->result_array();
        $data['fasilitas1'] = $this->M_Fasilitas->index1()->result_array();
        $data['fasilitas2'] = $this->M_Fasilitas->index2()->result_array();
        $data['fasilitas3'] = $this->M_Fasilitas->index3()->result_array();
        $this->load->view('pengunjung/template/header');
        $this->load->view('pengunjung/fasilitas/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
