<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('is_login')) {
    /**
     * Check if the user is logged in.
     * If not, redirect to the login page.
     */
    function is_login()
    {
        $CI = &get_instance();

        // Mengecek apakah status pada session adalah "login"
        if ($CI->session->userdata('status') !== 'login') {
            // Redirect ke halaman login jika tidak login
            redirect('login');
            exit(); // Pastikan untuk menghentikan eksekusi setelah redirect
        }

        return true;
    }
}
