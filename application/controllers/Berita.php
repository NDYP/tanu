<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Berita');
        $data['title'] = 'Berita Terbaru';
        $data['berita'] = $this->M_Berita->index()->result_array();
        $this->load->view('pengunjung/template/header');

        $this->load->view('pengunjung/berita/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
    public function detail($id_berita)
    {
        $this->load->model('M_Berita');
        $data['title'] = "Detail Berita";
        $data['berita'] = $this->M_Berita->get($id_berita);
        $this->load->view('pengunjung/template/header');

        $this->load->view('pengunjung/berita/detail', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
