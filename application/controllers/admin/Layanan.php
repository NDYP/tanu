<?php
defined('BASEPATH') or exit('No direct script access allowed');

class layanan extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_layanan');
        $data['title'] = 'layanan';
        $data['layanan'] = $this->M_layanan->index()->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/layanan/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id_layanan)
    {
        $this->load->model('M_layanan');
        $data['title'] = "Edit layanan";
        $data['layanan'] = $this->M_layanan->get($id_layanan);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/layanan/edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function detail($id_layanan)
    {
        $this->load->model('M_layanan');
        $data['title'] = "Detail layanan";
        $data['layanan'] = $this->M_layanan->get($id_layanan);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/layanan/detail', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $this->load->model('M_layanan');
        $this->form_validation->set_rules('judul', 'judul', 'required|trim', [
            'required' => 'Judul Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Edit Tambah layanan";
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/layanan/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $config['upload_path'] = './assets/foto/layanan'; //path folder
            $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
            $config['file_name'] = $this->input->post('id_layanan'); //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['foto']['name'])) {
                if ($this->upload->do_upload('foto')) {
                    $gbr = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/foto/layanan' . $gbr['file_name'];
                    $config['maintain_ratio'] = FALSE;
                    $config['overwrite'] = TRUE;
                    $config['max_size']  = 1024;
                    $config['new_image'] = './assets/foto/layanan' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $file = $gbr['file_name'];
                    $isi = $this->input->post('isi');
                    $judul = $this->input->post('judul');

                    $isi = $this->input->post('isi');

                    $data = array(
                        'foto' => $file,
                        'judul' => $judul,
                        'isi' => $isi,

                    );
                    $this->M_layanan->add('layanan', $data);
                    echo "<script>alert('layanan Berhasil Diupload')</script>";
                    redirect('admin/layanan', 'refresh');
                } else {
                    echo "<script>alert('Gagal Upload layanan')</script>";
                    redirect('admin/layanan', 'refresh');
                }
            } else {
                echo "<script>alert('Foto Tidak Boleh Kosong')</script>";
                redirect('admin/layanan', 'refresh');
            }
        }
    }
    public function ubah()
    {
        $this->load->model('M_layanan');
        $config['upload_path'] = './assets/foto/layanan'; //path folder
        $config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('id_layanan'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto/layanan' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/foto/layanan' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $id_layanan = $this->input->post('id_layanan');
                $judul = $this->input->post('judul');

                $isi = $this->input->post('isi');

                $data = array(
                    'foto' => $file,
                    'judul' => $judul,
                    'isi' => $isi,

                );
                $this->M_layanan->update('layanan', $data, array('id_layanan' => $id_layanan));
                echo "<script>alert('layanan Berhasil Diupload')</script>";
                redirect('admin/layanan', 'refresh');
            } else {
                echo "<script>alert('Gagal Upload layanan')</script>";
                redirect('admin/layanan', 'refresh');
            }
        } else {
            $id_layanan = $this->input->post('id_layanan');
            $judul = $this->input->post('judul');

            $isi = $this->input->post('isi');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
            );
            $this->M_layanan->update('layanan', $data, array('id_layanan' => $id_layanan));
            echo "<script>alert('layanan Berhasil Diupload')</script>";
            redirect('admin/layanan', 'refresh');
        }
    }
    public function hapus($id_layanan)
    {
        $this->load->model('M_layanan');
        $data = $this->M_layanan->get($id_layanan);
        if ($data) {
            $this->M_layanan->delete($id_layanan);
            echo "<script>alert('Berhasil Hapus layanan')</script>";
            redirect('admin/layanan', 'refresh');
        } else {
            echo "<script>alert('Gagal Hapus Berit')</script>";
            redirect('admin/layanan', 'refresh');
        }
    }
}
