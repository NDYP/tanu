<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Jadwal');
        $data['title'] = 'Jadwal';
        $data['jadwal'] = $this->M_Jadwal->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/jadwal/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id_jadwal)
    {
        $this->load->model('M_Jadwal');
        $data['title'] = "Edit jadwal";
        $data['jadwal'] = $this->M_Jadwal->get($id_jadwal);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/jadwal/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function detail($id_jadwal)
    {
        $this->load->model('M_Jadwal');
        $data['title'] = "Detail jadwal";
        $data['jadwal'] = $this->M_Jadwal->get($id_jadwal);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/jadwal/detail', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $this->load->model('M_Jadwal');
        $this->form_validation->set_rules('nama_jadwal', 'nama_jadwal', 'required|trim', [
            'required' => 'Nama jadwal Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal', 'jumlah_min', 'required|trim', [
            'required' => 'Keterangan Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Tambah Data jadwal";
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/jadwal/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {

            $nama_jadwal = $this->input->post('nama_jadwal');
            $tanggal = $this->input->post('tanggal');
            $kategori = $this->input->post('kategori');
            $data = array(

                'nama_jadwal' => $nama_jadwal,
                'tanggal' => $tanggal,
                'kategori' => $kategori,
            );
            $x = $this->M_Jadwal->add('jadwal', $data);
            if ($x) {
                echo "<script>alert('Berhasil Tambah Data')</script>";
                redirect('admin/jadwal', 'refresh');
            } else {
                echo "<script>alert('Gagal Tambah Data')</script>";
                redirect('admin/jadwal', 'refresh');
            }
        }
    }
    public function ubah()
    {
        $this->load->model('M_Jadwal');
        $id_jadwal = $this->input->post('id_jadwal');
        $nama_jadwal = $this->input->post('nama_jadwal');
        $tanggal = $this->input->post('tanggal');
        $kategori = $this->input->post('kategori');
        $data = array(
            'nama_jadwal' => $nama_jadwal,
            'tanggal' => $tanggal,
            'kategori' => $kategori,
        );
        $x = $this->M_Jadwal->update('jadwal', $data, array('id_jadwal' => $id_jadwal));
        if ($x) {
            echo "<script>alert('Berhasil Ubah Data')</script>";
            redirect('admin/jadwal', 'refresh');
        } else {
            echo "<script>alert('Gagal Ubah Data')</script>";
            redirect('admin/jadwal', 'refresh');
        }
    }
    public function hapus($id_jadwal)
    {
        $this->load->model('M_Jadwal');
        $data = $this->M_Jadwal->get($id_jadwal);
        if ($data) {
            $this->M_Jadwal->delete($id_jadwal);
            echo "<script>alert('Berhasil Hapus jadwal')</script>";
            redirect('admin/jadwal', 'refresh');
        } else {
            echo "<script>alert('Gagal Hapus Berit')</script>";
            redirect('admin/jadwal', 'refresh');
        }
    }
}
