<?php
defined('BASEPATH') or exit('No direct script access allowed');

class prasarana extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Prasarana');
        $data['title'] = 'Prasarana';
        $data['prasarana'] = $this->M_Prasarana->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/prasarana/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $this->load->model('M_Prasarana');
        $isi = $this->input->post('isi');
        $id_prasarana = $this->input->post('id_prasarana');
        $data = array(
            'isi' => $isi,
        );
        $this->M_Prasarana->update('prasarana', $data, array('id_prasarana' => $id_prasarana));
        echo "<script>alert('Data Berhasil Diubah')</script>";
        redirect('admin/prasarana', 'refresh');
    }
    public function edit($id_prasarana)
    {
        $this->load->model('M_Prasarana');
        $data['title'] = "Edit Prasarana";
        $data['prasarana'] = $this->M_Prasarana->get($id_prasarana);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/prasarana/edit', $data);
        $this->load->view('admin/template/footer');
    }
}
