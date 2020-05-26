<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Berita');
        $data['title'] = 'Berita';
        $data['berita'] = $this->M_Berita->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/berita/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id_berita)
    {
        $this->load->model('M_Berita');
        $data['title'] = "Edit Berita";
        $data['berita'] = $this->M_Berita->get($id_berita);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/berita/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function detail($id_berita)
    {
        $this->load->model('M_Berita');
        $data['title'] = "Detail Berita";
        $data['berita'] = $this->M_Berita->get($id_berita);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/berita/detail', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $this->load->model('M_Berita');
        $this->form_validation->set_rules('judul', 'judul', 'required|trim', [
            'required' => 'Judul Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Edit Tambah Berita";
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/berita/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $config['upload_path'] = './assets/foto/berita'; //path folder
            $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
            $config['file_name'] = $this->input->post('id_berita'); //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['foto']['name'])) {
                if ($this->upload->do_upload('foto')) {
                    $gbr = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/foto/berita' . $gbr['file_name'];
                    $config['maintain_ratio'] = FALSE;
                    $config['overwrite'] = TRUE;
                    $config['max_size']  = 1024;
                    $config['new_image'] = './assets/foto/berita' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $file = $gbr['file_name'];
                    $isi = $this->input->post('isi');
                    $judul = $this->input->post('judul');

                    $isi = $this->input->post('isi');
                    date_default_timezone_set("ASIA/JAKARTA");
                    $date = date('Y-m-d H:i:s');
                    $data = array(
                        'foto' => $file,
                        'judul' => $judul,
                        'isi' => $isi,
                        'tanggal' => $date,
                    );
                    $this->M_Berita->add('berita', $data);
                    echo "<script>alert('Berita Berhasil Diupload')</script>";
                    redirect('admin/berita', 'refresh');
                } else {
                    echo "<script>alert('Gagal Upload Berita')</script>";
                    redirect('admin/berita', 'refresh');
                }
            } else {
                echo "<script>alert('Foto Tidak Boleh Kosong')</script>";
                redirect('admin/berita', 'refresh');
            }
        }
    }
    public function ubah()
    {
        $this->load->model('M_Berita');
        $config['upload_path'] = './assets/foto/berita'; //path folder
        $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('id_berita'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto/berita' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/foto/berita' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $id_berita = $this->input->post('id_berita');
                $judul = $this->input->post('judul');

                $isi = $this->input->post('isi');
                date_default_timezone_set("ASIA/JAKARTA");
                $date = date('Y-m-d H:i:s');
                $data = array(
                    'foto' => $file,
                    'judul' => $judul,
                    'isi' => $isi,
                    'tanggal' => $date,
                );
                $this->M_Berita->update('berita', $data, array('id_berita' => $id_berita));
                echo "<script>alert('Berita Berhasil Diupload')</script>";
                redirect('admin/berita', 'refresh');
            } else {
                echo "<script>alert('Gagal Upload Berita')</script>";
                redirect('admin/berita', 'refresh');
            }
        } else {
            $id_berita = $this->input->post('id_berita');
            $judul = $this->input->post('judul');

            $isi = $this->input->post('isi');
            date_default_timezone_set("ASIA/JAKARTA");
            $date = date('Y-m-d H:i:s');
            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'tanggal' => $date,
            );
            $this->M_Berita->update('berita', $data, array('id_berita' => $id_berita));
            echo "<script>alert('Berita Berhasil Diupload')</script>";
            redirect('admin/berita', 'refresh');
        }
    }
    public function hapus($id_berita)
    {
        $this->load->model('M_Berita');
        $data = $this->M_Berita->get($id_berita);
        if ($data) {
            $this->M_Berita->delete($id_berita);
            echo "<script>alert('Berhasil Hapus Berita')</script>";
            redirect('admin/berita', 'refresh');
        } else {
            echo "<script>alert('Gagal Hapus Berit')</script>";
            redirect('admin/berita', 'refresh');
        }
    }
}
