<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_m extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('kategori')->result();
    }

    public function create($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function update($tabel, $data, $id)
    {
        return $this->db->update($tabel, $data, ['id' => $id]);
    }

    public function delete($tabel, $id)
    {
        return $this->db->delete($tabel, ['id' => $id]);
    }
}
