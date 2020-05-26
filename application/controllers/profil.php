<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Visi dan Misi';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('pengunjung/template/header');

        $this->load->view('pengunjung/profil/index', $data);
        $this->load->view('pengunjung/template/footer');
    }
    public function sejarah()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Sejarah';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('pengunjung/template/header');

        $this->load->view('pengunjung/profil/sejarah', $data);
        $this->load->view('pengunjung/template/footer');
    }
    public function struktur()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Struktur Organisasi';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('pengunjung/template/header');

        $this->load->view('pengunjung/profil/struktur', $data);
        $this->load->view('pengunjung/template/footer');
    }
    public function map()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Map Lokasi';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('pengunjung/template/header');

        $this->load->view('pengunjung/profil/map', $data);
        $this->load->view('pengunjung/template/footer');
    }
    public function kontak()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Kontak Layanan';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('pengunjung/template/header');

        $this->load->view('pengunjung/profil/kontak', $data);
        $this->load->view('pengunjung/template/footer');
    }
}
