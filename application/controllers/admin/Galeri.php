<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Galeri');
        $data['title'] = 'Galeri';
        $data['galeri'] = $this->M_Galeri->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/galeri/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id_galeri)
    {
        $this->load->model('M_Galeri');
        $data['title'] = "Edit galeri";
        $data['galeri'] = $this->M_Galeri->get($id_galeri);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/galeri/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function detail($id_galeri)
    {
        $this->load->model('M_Galeri');
        $data['title'] = "Detail galeri";
        $data['galeri'] = $this->M_Galeri->get($id_galeri);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/galeri/detail', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $this->load->model('M_Galeri');
        $this->form_validation->set_rules('nama_galeri', 'nama_galeri', 'required|trim', [
            'required' => 'Nama galeri Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Tambah Data Galeri";
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/galeri/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $config['upload_path'] = './assets/foto/galeri'; //path folder
            $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
            $config['file_name'] = $this->input->post('id_galeri'); //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['foto']['name'])) {
                if ($this->upload->do_upload('foto')) {
                    $gbr = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/foto/galeri' . $gbr['file_name'];
                    $config['maintain_ratio'] = FALSE;
                    $config['overwrite'] = TRUE;
                    $config['max_size']  = 1024;
                    $config['new_image'] = './assets/foto/galeri' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $file = $gbr['file_name'];
                    $nama_galeri = $this->input->post('nama_galeri');
                    $jumlah_min = $this->input->post('jumlah_min');
                    $jumlah = $this->input->post('jumlah');

                    $data = array(
                        'foto' => $file,
                        'nama_galeri' => $nama_galeri,

                    );
                    $this->M_Galeri->add('galeri', $data);
                    echo "<script>alert('Galeri Berhasil Diupload')</script>";
                    redirect('admin/galeri', 'refresh');
                } else {
                    echo "<script>alert('Gagal Upload Galeri')</script>";
                    redirect('admin/galeri', 'refresh');
                }
            } else {
                echo "<script>alert('Foto Tidak Boleh Kosong')</script>";
                redirect('admin/galeri', 'refresh');
            }
        }
    }
    public function ubah()
    {
        $this->load->model('M_Galeri');
        $config['upload_path'] = './assets/foto/galeri'; //path folder
        $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('id_galeri'); //nama yang terupload nantinya
        $config['upload_path'] = './assets/foto/galeri'; //path folder
        $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('id_galeri'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto/galeri' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/foto/galeri' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $nama_galeri = $this->input->post('nama_galeri');
                $id_galeri = $this->input->post('id_galeri');


                $data = array(
                    'foto' => $file,
                    'nama_galeri' => $nama_galeri,
                );
                $this->M_Galeri->update('galeri', $data, array('id_galeri' => $id_galeri));
                echo "<script>alert('galeri Berhasil Diupload')</script>";
                redirect('admin/galeri', 'refresh');
            } else {
                echo "<script>alert('Gagal Upload Galeri')</script>";
                redirect('admin/galeri', 'refresh');
            }
        } else {
            $id_galeri = $this->input->post('id_galeri');
            $nama_galeri = $this->input->post('nama_galeri');
            $data = array(
                'nama_galeri' => $nama_galeri,
            );
            $this->M_Galeri->update('galeri', $data, array('id_galeri' => $id_galeri));
            echo "<script>alert('Galeri Berhasil Diedit')</script>";
            redirect('admin/galeri', 'refresh');
        }
    }
    public function hapus($id_galeri)
    {
        $this->load->model('M_Galeri');
        $data = $this->M_Galeri->get($id_galeri);
        if ($data) {
            $this->M_Galeri->delete($id_galeri);
            echo "<script>alert('Berhasil Hapus Galeri')</script>";
            redirect('admin/galeri', 'refresh');
        } else {
            echo "<script>alert('Gagal Hapus Galeri')</script>";
            redirect('admin/galeri', 'refresh');
        }
    }
}
