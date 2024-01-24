<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_m extends CI_Model
{
    public function get_profil()
    {
        $this->db->where('id', 1);
        return $this->db->get('profil')->row();
    }

    public function update($tabel, $data, $id)
    {
        return $this->db->update($tabel, $data, ['id' => $id]);
    }
}
