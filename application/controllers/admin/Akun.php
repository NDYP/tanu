<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Profil';
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/akun/index', $data);
        $this->load->view('admin/template/footer');
    }
}
