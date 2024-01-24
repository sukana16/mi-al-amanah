<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function profil($username)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[pass_conf]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('pass_conf', 'Password Confirm', 'trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Profil User',
                'profil' => $this->Admin_m->get_byUsername($username),
                'berita' => $this->Berita_m->get_all(),
            ];

            $this->load->view('component/admin/header', $data);
            $this->load->view('component/admin/sidebar');
            $this->load->view('admin/pages/admin/profil', $data);
            $this->load->view('component/admin/footer');
        } else {

            $this->load->library('upload');

            $upload_data = array();

            $this->upload->initialize(array(
                'allowed_types' => 'png|jpg|jpeg',
                'upload_path' => 'assets/uploads/admin/',
                'encrypt_name'  => TRUE,
                'max_size' => 5048,
            ));

            $old_foto = $this->input->post('old_foto');

            if (empty($_FILES['foto']['name'])) {
                $foto = $old_foto;
            } else {
                $old_photo_path = 'assets/uploads/admin/' . $old_foto;
                if (file_exists($old_photo_path)) {
                    unlink($old_photo_path);
                }

                // Upload the new photo
                if (!$this->upload->do_upload('foto')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('admin/profil_user/' . $username); // Handle the error, you may want to redirect to the previous page or show an error message
                } else {
                    $upload_data['foto'] = $this->upload->data();
                    $foto = $upload_data['foto']['file_name'];
                }
            }

            $data['admin'] = $this->Admin_m->get_byUsername($username);
            if ($this->input->post('password')) {
                $pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            } else {
                $pass = $data['admin']->password;
            }

            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'foto' => $foto,
                'password' => $pass,
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            $this->db->update('admin', $data, array('username' => $username));
            $this->session->set_flashdata('success', 'Data berhasil diupdate!');
            redirect('admin/profil_user/' . $username);
        }
    }
}
