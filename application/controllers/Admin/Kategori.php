<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = [
            'title' => 'Kategori',
            'kategori' => $this->Kategori_m->get_all()
        ];

        $this->load->view('component/admin/header', $data);
        $this->load->view('component/admin/sidebar');
        $this->load->view('admin/pages/berita/kategori/index', $data);
        $this->load->view('component/admin/footer');
    }

    public function tambah()
    {
        $data = [
            'kategori' => htmlspecialchars($this->input->post('kategori')),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->Kategori_m->create('kategori', $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('admin/kategori');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = [
            'kategori' => htmlspecialchars($this->input->post('kategori')),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->Kategori_m->update('kategori', $data, $id);
        $this->session->set_flashdata('success', 'Data berhasil diupdate!');
        redirect('admin/kategori');
    }

    public function hapus($id)
    {
        $this->Kategori_m->delete('kategori', $id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/kategori');
    }
}
