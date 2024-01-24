<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_m extends CI_Model
{
    public function get_all()
    {
        $this->db->select('berita.*, kategori.kategori AS kategori, admin.foto as foto');
        $this->db->from('berita');
        $this->db->join('kategori', ' kategori.id = berita.kategori_id');
        $this->db->join('admin', ' berita.created_by = admin.nama');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function get_byId($id)
    {
        $this->db->select('berita.*, kategori.kategori AS kategori');
        $this->db->from('berita');
        $this->db->where('berita.id', $id);
        $this->db->join('kategori', ' kategori.id = berita.kategori_id');
        return $this->db->get()->row();
    }

    public function get_by_slug($slug)
    {
        $this->db->select('berita.*, kategori.kategori AS kategori');
        $this->db->from('berita');
        $this->db->where('berita.slug', $slug);
        $this->db->join('kategori', ' kategori.id = berita.kategori_id');
        return $this->db->get()->row();
    }

    public function count_all()
    {
        $this->db->where('status', 'publish');
        return $this->db->count_all_results('berita');
    }

    public function get_berita_paginated($limit, $offset)
    {
        $this->db->select('berita.*, kategori.kategori AS kategori');
        $this->db->from('berita');
        $this->db->where('berita.status', 'publish');
        $this->db->join('kategori', ' kategori.id = berita.kategori_id');
        $this->db->order_by('berita.created_at', 'desc');
        $this->db->limit($limit, $offset);
        return $this->db->get()->result();
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
