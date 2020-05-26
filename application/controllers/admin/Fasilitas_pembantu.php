<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_Pembantu extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Fasilitas_Pembantu');
        $data['title'] = 'fasilitas_pembantu';
        $data['fasilitas_pembantu'] = $this->M_Fasilitas_Pembantu->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/fasilitas_pembantu/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id_fasilitas_pembantu)
    {
        $this->load->model('M_Fasilitas_Pembantu');
        $data['title'] = "Edit fasilitas_pembantu";
        $data['fasilitas_pembantu'] = $this->M_Fasilitas_Pembantu->get($id_fasilitas_pembantu);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/fasilitas_pembantu/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function detail($id_fasilitas_pembantu)
    {
        $this->load->model('M_Fasilitas_Pembantu');
        $data['title'] = "Detail fasilitas_pembantu";
        $data['fasilitas_pembantu'] = $this->M_Fasilitas_Pembantu->get($id_fasilitas_pembantu);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/fasilitas_pembantu/detail', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $this->load->model('M_Fasilitas_Pembantu');
        $this->form_validation->set_rules('jenis_peralatan', 'nama_fasilitas_pembantu', 'required|trim', [
            'required' => 'Nama Peralatan Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim', [
            'required' => 'Jumlah Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Tambah Data fasilitas_pembantu";
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/fasilitas_pembantu/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {

            $jenis_peralatan = $this->input->post('jenis_peralatan');
            $jumlah = $this->input->post('jumlah');
            $kategori = $this->input->post('kategori');
            $data = array(
                'jenis_peralatan' => $jenis_peralatan,
                'jumlah' => $jumlah,
                'kategori' => $kategori,
            );
            $this->M_Fasilitas_Pembantu->add('fasilitas_pembantu', $data);
            echo "<script>alert('Berhasil Diupload')</script>";
            redirect('admin/fasilitas_pembantu', 'refresh');
        }
    }
    public function ubah()
    {
        $this->load->model('M_Fasilitas_Pembantu');
        $id_fasilitas_pembantu = $this->input->post('id_fasilitas_pembantu');
        $jenis_peralatan = $this->input->post('jenis_peralatan');
        $jumlah = $this->input->post('jumlah');
        $kategori = $this->input->post('kategori');
        $data = array(
            'jenis_peralatan' => $jenis_peralatan,
            'jumlah' => $jumlah,
            'kategori' => $kategori,
        );
        $this->M_Fasilitas_Pembantu->update('fasilitas_pembantu', $data, array('id_fasilitas_pembantu' => $id_fasilitas_pembantu));
        echo "<script>alert('Berhasil Diupload')</script>";
        redirect('admin/fasilitas_pembantu', 'refresh');
    }

    public function hapus($id_fasilitas_pembantu)
    {
        $this->load->model('M_Fasilitas_Pembantu');
        $data = $this->M_Fasilitas_Pembantu->get($id_fasilitas_pembantu);
        if ($data) {
            $this->M_Fasilitas_Pembantu->delete($id_fasilitas_pembantu);
            echo "<script>alert('Berhasil Hapus')</script>";
            redirect('admin/fasilitas_pembantu', 'refresh');
        } else {
            echo "<script>alert('Gagal Hapus Berit')</script>";
            redirect('admin/fasilitas_pembantu', 'refresh');
        }
    }
}
