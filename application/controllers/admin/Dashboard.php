<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{



    public function index()
    {
        $this->load->model('M_Jadwal');
        $this->load->model('M_Galeri');
        $this->load->model('M_Berita');
        $data['jadwal'] = $this->M_Jadwal->index()->num_rows();
        $data['galeri'] = $this->M_Galeri->index()->num_rows();
        $data['berita'] = $this->M_Berita->index()->num_rows();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
}
