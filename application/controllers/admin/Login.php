<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'nip_nim', 'required|trim', [
            'required' => 'Username Tidak Boleh Kosong!'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('admin/login/index');
        } else {
            $this->auth();
        }
    }
    function auth()
    {
        $this->load->model('M_Login');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek_dosen = $this->M_Login->get($username);
        if ($data = $cek_dosen->row_array()) {
            if ($password == $data['password']) {
                $all = [
                    'id_admin' => $data['id_admin'],
                    'nama_lengkap' => $data['nama_lengkap'],
                    'email' => $data['email'],
                    'no_hp' => $data['no_hp'],
                    'username' => $data['username'],
                    'password' => $data['password'],
                ];
                $this->session->set_userdata($all);
                echo "<script>alert('Selamat Datang')</script>";
                redirect('admin/dashboard', 'refresh');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('admin/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Tidak Terdaftar</div>');
            redirect('admin/login');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        echo "<script>alert('Silahkan Login Kembali')</script>";
        redirect('admin/login', 'refresh');
    }
}
