<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Fasilitas');
        $data['title'] = 'Fasilitas';
        $data['fasilitas'] = $this->M_Fasilitas->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/fasilitas/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id_fasilitas)
    {
        $this->load->model('M_Fasilitas');
        $data['title'] = "Edit fasilitas";
        $data['fasilitas'] = $this->M_Fasilitas->get($id_fasilitas);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/fasilitas/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function detail($id_fasilitas)
    {
        $this->load->model('M_Fasilitas');
        $data['title'] = "Detail fasilitas";
        $data['fasilitas'] = $this->M_Fasilitas->get($id_fasilitas);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/fasilitas/detail', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $this->load->model('M_Fasilitas');
        $this->form_validation->set_rules('nama_fasilitas', 'nama_fasilitas', 'required|trim', [
            'required' => 'Nama Fasilitas Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('jumlah_min', 'jumlah_min', 'required|trim', [
            'required' => 'Jumlah Minimun Dimiliki Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim', [
            'required' => 'Jumlah Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Tambah Data Fasilitas";
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/fasilitas/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $config['upload_path'] = './assets/foto/fasilitas'; //path folder
            $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
            $config['file_name'] = $this->input->post('id_fasilitas'); //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['foto']['name'])) {
                if ($this->upload->do_upload('foto')) {
                    $gbr = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/foto/fasilitas' . $gbr['file_name'];
                    $config['maintain_ratio'] = FALSE;
                    $config['overwrite'] = TRUE;
                    $config['max_size']  = 1024;
                    $config['new_image'] = './assets/foto/fasilitas' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $file = $gbr['file_name'];
                    $nama_fasilitas = $this->input->post('nama_fasilitas');
                    $jumlah_min = $this->input->post('jumlah_min');
                    $jumlah = $this->input->post('jumlah');
                    $kategori = $this->input->post('kategori');
                    $data = array(
                        'foto' => $file,
                        'nama_fasilitas' => $nama_fasilitas,
                        'jumlah_min' => $jumlah_min,
                        'jumlah' => $jumlah,
                        'kategori' => $kategori,
                    );
                    $this->M_Fasilitas->add('fasilitas', $data);
                    echo "<script>alert('Fasilitas Berhasil Diupload')</script>";
                    redirect('admin/fasilitas', 'refresh');
                } else {
                    echo "<script>alert('Gagal Upload fasilitas')</script>";
                    redirect('admin/fasilitas', 'refresh');
                }
            } else {
                $nama_fasilitas = $this->input->post('nama_fasilitas');
                $jumlah_min = $this->input->post('jumlah_min');
                $jumlah = $this->input->post('jumlah');
                $kategori = $this->input->post('kategori');
                $data = array(
                    'nama_fasilitas' => $nama_fasilitas,
                    'jumlah_min' => $jumlah_min,
                    'jumlah' => $jumlah,
                    'kategori' => $kategori,
                );
                $this->M_Fasilitas->add('fasilitas', $data);
                echo "<script>alert('Fasilitas Berhasil Diupload')</script>";
                redirect('admin/fasilitas', 'refresh');
            }
        }
    }
    public function ubah()
    {
        $this->load->model('M_Fasilitas');
        $config['upload_path'] = './assets/foto/fasilitas'; //path folder
        $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('id_fasilitas'); //nama yang terupload nantinya
        $config['upload_path'] = './assets/foto/fasilitas'; //path folder
        $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('id_fasilitas'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto/fasilitas' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/foto/fasilitas' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $nama_fasilitas = $this->input->post('nama_fasilitas');
                $id_fasilitas = $this->input->post('id_fasilitas');
                $jumlah_min = $this->input->post('jumlah_min');
                $jumlah = $this->input->post('jumlah');
                $kategori = $this->input->post('kategori');
                $data = array(
                    'foto' => $file,
                    'nama_fasilitas' => $nama_fasilitas,
                    'jumlah_min' => $jumlah_min,
                    'jumlah' => $jumlah,
                    'kategori' => $kategori,
                );
                $this->M_Fasilitas->update('fasilitas', $data, array('id_fasilitas' => $id_fasilitas));
                echo "<script>alert('fasilitas Berhasil Diupload')</script>";
                redirect('admin/fasilitas', 'refresh');
            } else {
                echo "<script>alert('Gagal Upload fasilitas')</script>";
                redirect('admin/fasilitas', 'refresh');
            }
        } else {
            $nama_fasilitas = $this->input->post('nama_fasilitas');
            $id_fasilitas = $this->input->post('id_fasilitas');
            $jumlah_min = $this->input->post('jumlah_min');
            $jumlah = $this->input->post('jumlah');
            $kategori = $this->input->post('kategori');
            $data = array(
                'nama_fasilitas' => $nama_fasilitas,
                'jumlah_min' => $jumlah_min,
                'jumlah' => $jumlah,
                'kategori' => $kategori,
            );
            $this->M_Fasilitas->update('fasilitas', $data, array('id_fasilitas' => $id_fasilitas));
            echo "<script>window.alert('fasilitas Berhasil Diupload')</script>";
            redirect('admin/fasilitas', 'refresh');
        }
    }
    public function hapus($id_fasilitas)
    {
        $this->load->model('M_Fasilitas');
        $data = $this->M_Fasilitas->get($id_fasilitas);
        if ($data) {
            $this->M_Fasilitas->delete($id_fasilitas);
            echo "<script>alert('Berhasil Hapus fasilitas')</script>";
            redirect('admin/fasilitas', 'refresh');
        } else {
            echo "<script>alert('Gagal Hapus Berit')</script>";
            redirect('admin/fasilitas', 'refresh');
        }
    }
}
