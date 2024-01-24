<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = [
            'title' => 'Berita',
            'berita' => $this->Berita_m->get_all()
        ];

        $this->load->view('component/admin/header', $data);
        $this->load->view('component/admin/sidebar');
        $this->load->view('admin/pages/berita/index', $data);
        $this->load->view('component/admin/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('kutipan', 'Kutipan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Berita',
                'kategori' => $this->Kategori_m->get_all()
            ];

            $this->load->view('component/admin/header', $data);
            $this->load->view('component/admin/sidebar');
            $this->load->view('admin/pages/berita/add', $data);
            $this->load->view('component/admin/footer');
        } else {

            $this->load->library('upload');

            $upload_data = array();

            $this->upload->initialize(array(
                'allowed_types' => 'png|jpg|jpeg',
                'upload_path' => 'assets/uploads/berita/',
                'encrypt_name'  => TRUE,
                'max_size' => 5048,
            ));


            if (!$this->upload->do_upload('gambar')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', strip_tags($error));
                redirect('admin/berita/tambah');
            } else {
                $upload_data['gambar'] = $this->upload->data();
            }

            $data = [
                'judul' => htmlspecialchars($this->input->post('judul')),
                'slug' => htmlspecialchars($this->input->post('slug')),
                'kategori_id' => htmlspecialchars($this->input->post('kategori')),
                'isi' => htmlspecialchars($this->input->post('isi')),
                'kutipan' => htmlspecialchars($this->input->post('kutipan')),
                'gambar' => $upload_data['gambar']['file_name'],
                'status' => htmlspecialchars($this->input->post('status')),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $this->session->userdata('nama'),
            ];

            // var_dump($data);
            // die();

            $this->Berita_m->create('berita', $data);

            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('admin/berita');
        }
    }


    public function lihat($id)
    {
        $data = [
            'title' => 'Berita',
            'berita' => $this->Berita_m->get_byId($id)
        ];

        $this->load->view('component/admin/header', $data);
        $this->load->view('component/admin/sidebar');
        $this->load->view('admin/pages/berita/view', $data);
        $this->load->view('component/admin/footer');
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('kutipan', 'Kutipan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Berita',
                'berita' => $this->Berita_m->get_byId($id),
                'kategori' => $this->Kategori_m->get_all(),
                'status' => array(
                    ['value' => 'publish', 'status' => 'Publish'],
                    ['value' => 'draft', 'status' => 'Draft'],
                    ['value' => 'pending', 'status' => 'Pending'],
                )
            ];

            $this->load->view('component/admin/header', $data);
            $this->load->view('component/admin/sidebar');
            $this->load->view('admin/pages/berita/edit', $data);
            $this->load->view('component/admin/footer');
        } else {

            $this->load->library('upload');

            $upload_data = array();

            $this->upload->initialize(array(
                'allowed_types' => 'png|jpg|jpeg',
                'upload_path' => 'assets/uploads/berita/',
                'encrypt_name'  => TRUE,
                'max_size' => 5048,
            ));

            $id_berita = $this->input->post('id');
            $old_gambar = $this->input->post('old_gambar');

            if (empty($_FILES['gambar']['name'])) {
                $gambar = $old_gambar;
            } else {

                $old_photo_path = 'assets/uploads/berita/' . $old_gambar;
                if (file_exists($old_photo_path)) {
                    unlink($old_photo_path);
                }

                // Upload the new photo
                if (!$this->upload->do_upload('gambar')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('admin/berita');
                } else {
                    $upload_data['gambar'] = $this->upload->data();
                    $gambar = $upload_data['gambar']['file_name'];
                }
            }

            $data = [
                'judul' => htmlspecialchars($this->input->post('judul')),
                'slug' => htmlspecialchars($this->input->post('slug')),
                'kategori_id' => htmlspecialchars($this->input->post('kategori')),
                'isi' => htmlspecialchars($this->input->post('isi')),
                'kutipan' => htmlspecialchars($this->input->post('kutipan')),
                'gambar' => $gambar,
                'status' => htmlspecialchars($this->input->post('status')),
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $this->session->userdata('nama'),
            ];

            // var_dump($data, $id_berita);
            // die();

            $this->Berita_m->update('berita', $data, $id_berita);

            $this->session->set_flashdata('success', 'Data berhasil diupdate');
            redirect('admin/berita');
        }
    }



    public function hapus($id)
    {
        $gambar = $this->db->get_where('berita', ['id' => $id])->row_array()['gambar'];

        // Hapus file gambar dari folder uploads
        $path = 'assets/uploads/berita' . $gambar;
        if (file_exists($path)) {
            unlink($path);
        }

        $this->Berita_m->delete('berita', $id);

        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/berita');
    }
}
