<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{
    public function get_byUsername($username)
    {
        return $this->db->get_where('admin', ['username' => $username])->row();
    }
}
