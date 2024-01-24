<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_m extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('galeri')->result();
    }

    public function count_all()
    {
        return $this->db->count_all('galeri');
    }

    public function get_galeri_paginated($limit, $offset)
    {
        $this->db->order_by('created_at', 'desc');
        $this->db->limit($limit, $offset);
        return $this->db->get('galeri')->result();
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
