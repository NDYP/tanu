<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sistem_Penunjang extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Sistem_Penunjang');
        $data['title'] = 'Fasilitas Sistem Penunjang';
        $data['sistem_penunjang'] = $this->M_Sistem_Penunjang->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/sistem_penunjang/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id_sistem_penunjang)
    {
        $this->load->model('M_Sistem_Penunjang');
        $data['title'] = "Edit Visi Misi";
        $data['sistem_penunjang'] = $this->M_Sistem_Penunjang->get($id_sistem_penunjang);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/sistem_penunjang/edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $this->load->model('M_Sistem_Penunjang');
        $isi = $this->input->post('isi');
        $id_sistem_penunjang = $this->input->post('id_sistem_penunjang');
        $data = array(
            'isi' => $isi,
        );
        $this->M_Sistem_Penunjang->update('sistem_penunjang', $data, array('id_sistem_penunjang' => $id_sistem_penunjang));
        echo "<script>alert('Data Berhasil Diubah')</script>";
        redirect('admin/sistem_penunjang', 'refresh');
    }
}
