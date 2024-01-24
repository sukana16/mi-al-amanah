<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = [
            'title' => 'Konfigurasi Profil',
            'profil' => $this->Profil_m->get_profil(),
        ];

        $this->load->view('component/admin/header', $data);
        $this->load->view('component/admin/sidebar');
        $this->load->view('admin/pages/profil/index', $data);
        $this->load->view('component/admin/footer');
    }

    public function edit($id)
    {
        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/so/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        $old_so = $this->input->post('old_gambar');

        if (empty($_FILES['so']['name'])) {
            $so = $old_so;
        } else {

            $old_photo_path = 'assets/uploads/so/' . $old_so;
            if (file_exists($old_photo_path)) {
                unlink($old_photo_path);
            }

            // Upload the new photo
            if (!$this->upload->do_upload('so')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/profil');
            } else {
                $upload_data['so'] = $this->upload->data();
                $so = $upload_data['so']['file_name'];
            }
        }

        $data = [
            'sejarah' => htmlspecialchars($this->input->post('sejarah')),
            'profil_umum' => htmlspecialchars($this->input->post('profil_umum')),
            'visi' => htmlspecialchars($this->input->post('visi')),
            'misi' => htmlspecialchars($this->input->post('misi')),
            'so' => $so,
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by' => $this->session->userdata('nama'),
        ];

        // var_dump($data, $id);
        // die();

        $this->Profil_m->update('profil', $data, $id);

        $this->session->set_flashdata('success', 'Data berhasil diupdate');
        redirect('admin/profil');
    }
}
