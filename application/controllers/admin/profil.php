<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Visi dan Misi';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/index', $data);
        $this->load->view('admin/template/footer');
    }
    public function sejarah()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Sejarah';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/sejarah', $data);
        $this->load->view('admin/template/footer');
    }
    public function struktur()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Struktur Organisasi';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/struktur', $data);
        $this->load->view('admin/template/footer');
    }
    public function map()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Map Lokasi';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/map', $data);
        $this->load->view('admin/template/footer');
    }
    public function kontak()
    {
        $this->load->model('M_Profil');
        $data['title'] = 'Kontak Layanan';
        $data['profil'] = $this->M_Profil->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/kontak', $data);
        $this->load->view('admin/template/footer');
    }
    public function edit($id_profil)
    {
        $this->load->model('M_Profil');
        $data['title'] = "Edit Visi Misi";
        $data['tentang'] = $this->M_Profil->get($id_profil);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function editsejarah($id_profil)
    {
        $this->load->model('M_Profil');
        $data['title'] = "Edit Sejarah";
        $data['tentang'] = $this->M_Profil->get($id_profil);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/editsejarah', $data);
        $this->load->view('admin/template/footer');
    }
    public function editstruktur($id_profil)
    {
        $this->load->model('M_Profil');
        $data['title'] = "Edit Struktur";
        $data['tentang'] = $this->M_Profil->get($id_profil);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/editstruktur', $data);
        $this->load->view('admin/template/footer');
    }
    public function editmap($id_profil)
    {
        $this->load->model('M_Profil');
        $data['title'] = "Edit Link Map";
        $data['tentang'] = $this->M_Profil->get($id_profil);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/editmap', $data);
        $this->load->view('admin/template/footer');
    }
    public function editkontak($id_profil)
    {
        $this->load->model('M_Profil');
        $data['title'] = "Edit Kontak Layanan";
        $data['tentang'] = $this->M_Profil->get($id_profil);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/profil/editkontak', $data);
        $this->load->view('admin/template/footer');
    }
    public function simpan()
    {
        $this->load->model('M_Profil');
        $visi_misi = $this->input->post('visi_misi');
        $id_profil = $this->input->post('id_profil');
        $data = array(
            'visi_misi' => $visi_misi,
        );
        $this->M_Profil->update('profil', $data, array('id_profil' => $id_profil));
        echo "<script>alert('Data Berhasil Diubah')</script>";
        redirect('admin/profil', 'refresh');
    }
    public function simpansejarah()
    {
        $this->load->model('M_Profil');
        $sejarah = $this->input->post('sejarah');
        $id_profil = $this->input->post('id_profil');
        $data = array(
            'sejarah' => $sejarah,
        );
        $this->M_Profil->update('profil', $data, array('id_profil' => $id_profil));
        echo "<script>alert('Data Berhasil Diubah')</script>";
        redirect('admin/profil/sejarah', 'refresh');
    }
    public function simpanstruktur()
    {
        $this->load->model('M_Profil');
        $struktur = $this->input->post('struktur');
        $id_profil = $this->input->post('id_profil');
        $data = array(
            'struktur' => $struktur,
        );
        $this->M_Profil->update('profil', $data, array('id_profil' => $id_profil));
        echo "<script>alert('Data Berhasil Diubah')</script>";
        redirect('admin/profil/struktur', 'refresh');
    }
    public function simpanmap()
    {
        $this->load->model('M_Profil');
        $peta = $this->input->post('peta');
        $id_profil = $this->input->post('id_profil');
        $data = array(
            'peta' => $peta,
        );
        $this->M_Profil->update('profil', $data, array('id_profil' => $id_profil));
        echo "<script>alert('Data Berhasil Diubah')</script>";
        redirect('admin/profil/map', 'refresh');
    }
    public function simpankontak()
    {
        $this->load->model('M_Profil');
        $kontak = $this->input->post('kontak');
        $id_profil = $this->input->post('id_profil');
        $data = array(
            'kontak' => $kontak,
        );
        $this->M_Profil->update('profil', $data, array('id_profil' => $id_profil));
        echo "<script>alert('Data Berhasil Diubah')</script>";
        redirect('admin/profil/kontak', 'refresh');
    }
}
