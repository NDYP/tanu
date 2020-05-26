<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_Inap extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Kamar_Inap');
        $data['title'] = 'Kamar Inap';
        $data['kamar_inap'] = $this->M_Kamar_Inap->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/kamar_inap/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id_kamar_inap)
    {
        $this->load->model('M_Kamar_Inap');
        $data['title'] = "Edit kamar_inap";
        $data['kamar_inap'] = $this->M_Kamar_Inap->get($id_kamar_inap);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/kamar_inap/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function detail($id_kamar_inap)
    {
        $this->load->model('M_Kamar_Inap');
        $data['title'] = "Detail kamar_inap";
        $data['kamar_inap'] = $this->M_Kamar_Inap->get($id_kamar_inap);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/kamar_inap/detail', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah kamar_inap";
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/kamar_inap/tambah', $data);
        $this->load->view('admin/template/footer');
    }
    public function simpan()
    {
        $this->load->model('M_Kamar_Inap');
        $config['upload_path'] = './assets/foto/kamar_inap'; //path folder
        $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('id_kamar_inap'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto/kamar_inap' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/foto/kamar_inap' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file = $gbr['file_name'];
                $isi = $this->input->post('isi');
                $judul = $this->input->post('judul');
                $isi = $this->input->post('isi');

                $data = array(
                    'foto' => $file,
                    'isi' => $isi,
                );
                $this->M_Kamar_Inap->add('kamar_inap', $data);
                echo "<script>alert('Berhasil Diupload')</script>";
                redirect('admin/kamar_inap', 'refresh');
            } else {
                echo "<script>alert('Gagal Upload')</script>";
                redirect('admin/kamar_inap', 'refresh');
            }
        } else {
            echo "<script>alert('Foto Tidak Boleh Kosong')</script>";
            redirect('admin/kamar_inap', 'refresh');
        }
    }
    public function ubah()
    {
        $this->load->model('M_Kamar_Inap');
        $config['upload_path'] = './assets/foto/kamar_inap'; //path folder
        $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('id_kamar_inap'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto/kamar_inap' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/foto/kamar_inap' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $id_kamar_inap = $this->input->post('id_kamar_inap');
                $isi = $this->input->post('isi');
                $data = array(
                    'foto' => $file,
                    'isi' => $isi,
                );
                $this->M_Kamar_Inap->update('kamar_inap', $data, array('id_kamar_inap' => $id_kamar_inap));
                echo "<script>alert('kamar_inap Berhasil Diupload')</script>";
                redirect('admin/kamar_inap', 'refresh');
            } else {
                echo "<script>alert('Gagal Upload kamar_inap')</script>";
                redirect('admin/kamar_inap', 'refresh');
            }
        } else {
            $id_kamar_inap = $this->input->post('id_kamar_inap');
            $isi = $this->input->post('isi');
            $data = array(
                'isi' => $isi,
            );
            $this->M_Kamar_Inap->update('kamar_inap', $data, array('id_kamar_inap' => $id_kamar_inap));
            echo "<script>alert('Berhasil Diupload')</script>";
            redirect('admin/kamar_inap', 'refresh');
        }
    }
    public function hapus($id_kamar_inap)
    {
        $this->load->model('M_Kamar_Inap');
        $data = $this->M_Kamar_Inap->get($id_kamar_inap);
        if ($data) {
            $this->M_Kamar_Inap->delete($id_kamar_inap);
            echo "<script>alert('Berhasil Hapus kamar_inap')</script>";
            redirect('admin/kamar_inap', 'refresh');
        } else {
            echo "<script>alert('Gagal Hapus Berit')</script>";
            redirect('admin/kamar_inap', 'refresh');
        }
    }
}
