<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Galeri');
        $data['title'] = 'Galeri';
        $data['galeri'] = $this->M_Galeri->index()->result_array();
        $this->load->view('pengunjung/template/header');

        $this->load->view('pengunjung/galeri/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
