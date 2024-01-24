<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = [
            'title' => 'Slider',
            'slider' => $this->Slider_m->get_all()
        ];

        $this->load->view('component/admin/header', $data);
        $this->load->view('component/admin/sidebar');
        $this->load->view('admin/pages/slider/index', $data);
        $this->load->view('component/admin/footer');
    }

    public function tambah()
    {

        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/slider/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        if (!$this->upload->do_upload('slider')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', strip_tags($error));
            redirect('admin/slider');
        } else {
            $upload_data['slider'] = $this->upload->data();
        }

        $data = [
            'slider' => $upload_data['slider']['file_name'],
            'keterangan' => htmlspecialchars($this->input->post('keterangan')),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // var_dump($data);
        // die();

        $this->Slider_m->create('slider', $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('admin/slider');
    }

    public function edit()
    {

        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/slider/',
            'encrypt_name'  => TRUE,
            'max_size' => 2048,
        ));

        $id = $this->input->post('id');
        $old_slider = $this->input->post('old_slider');

        if (empty($_FILES['slider']['name'])) {
            $slider = $old_slider;
        } else {
            $old_photo_path = 'assets/uploads/slider/' . $old_slider;
            if (file_exists($old_photo_path)) {
                unlink($old_photo_path);
            }

            // Upload the new photo
            if (!$this->upload->do_upload('slider')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/slider'); // Handle the error, you may want to redirect to the previous page or show an error message
            } else {
                $upload_data['slider'] = $this->upload->data();
                $slider = $upload_data['slider']['file_name'];
            }
        }

        $data = array(
            'slider' => $slider,
            'keterangan' => htmlspecialchars($this->input->post('keterangan')),
            'updated_at' => date('Y-m-d H:i:s')
        );

        // var_dump($data);
        // die();

        $this->Slider_m->update('slider', $data, $id);
        $this->session->set_flashdata('success', 'Data berhasil diupdate!');
        redirect('admin/slider');
    }

    public function hapus($id)
    {
        $slider = $this->db->get_where('slider', ['id' => $id])->row_array()['slider'];

        // Hapus file gambar dari folder uploads
        $path = 'assets/uploads/slider/' . $slider;
        if (file_exists($path)) {
            unlink($path);
        }

        $this->Slider_m->delete('slider', $id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/slider');
    }
}
