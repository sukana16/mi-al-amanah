<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = [
            'title' => 'Galeri',
            'galeri' => $this->Galeri_m->get_all()
        ];

        $this->load->view('component/admin/header', $data);
        $this->load->view('component/admin/sidebar');
        $this->load->view('admin/pages/galeri/index', $data);
        $this->load->view('component/admin/footer');
    }

    public function tambah()
    {

        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/galeri/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', strip_tags($error));
            redirect('admin/galeri');
        } else {
            $upload_data['gambar'] = $this->upload->data();
        }

        $data = [
            'gambar' => $upload_data['gambar']['file_name'],
            'keterangan' => htmlspecialchars($this->input->post('keterangan')),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // var_dump($data);
        // die();

        $this->Galeri_m->create('galeri', $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('admin/galeri');
    }

    public function edit()
    {

        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/galeri/',
            'encrypt_name'  => TRUE,
            'max_size' => 2048,
        ));

        $id = $this->input->post('id');
        $old_gambar = $this->input->post('old_gambar');

        if (empty($_FILES['gambar']['name'])) {
            $gambar = $old_gambar;
        } else {
            $old_photo_path = 'assets/uploads/galeri/' . $old_gambar;
            if (file_exists($old_photo_path)) {
                unlink($old_photo_path);
            }

            // Upload the new photo
            if (!$this->upload->do_upload('gambar')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/galeri'); // Handle the error, you may want to redirect to the previous page or show an error message
            } else {
                $upload_data['gambar'] = $this->upload->data();
                $gambar = $upload_data['gambar']['file_name'];
            }
        }

        $data = array(
            'gambar' => $gambar,
            'keterangan' => htmlspecialchars($this->input->post('keterangan')),
            'updated_at' => date('Y-m-d H:i:s')
        );

        // var_dump($data);
        // die();

        $this->Galeri_m->update('galeri', $data, $id);
        $this->session->set_flashdata('success', 'Data berhasil diupdate!');
        redirect('admin/galeri');
    }

    public function hapus($id)
    {
        $gambar = $this->db->get_where('galeri', ['id' => $id])->row_array()['gambar'];

        // Hapus file gambar dari folder uploads
        $path = 'assets/uploads/galeri/' . $gambar;
        if (file_exists($path)) {
            unlink($path);
        }

        $this->Galeri_m->delete('galeri', $id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/galeri');
    }
}
