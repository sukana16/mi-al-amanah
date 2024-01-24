<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{

	public function index()
	{

		$data['slider'] = $this->Slider_m->get_all();
		$data['profil'] = $this->Profil_m->get_profil();
		$data['berita'] = $this->Berita_m->get_berita_paginated(3, 0);
		$data['galeri'] = $this->Galeri_m->get_galeri_paginated(6, 0);
		$data['title'] = "Home";

		$this->load->view('component/user/header', $data);
		$this->load->view('landing-page/index', $data);
		$this->load->view('component/user/footer');
	}

	public function tentang_kami()
	{

		// $data['slider'] = $this->Slider_m->get_all();
		// $data['berita'] = $this->Berita_m->get_all();
		$data['profil'] = $this->Profil_m->get_profil();
		$data['beritas'] = $this->Berita_m->get_berita_paginated(4, 0);

		$data['title'] = "Tentang Kami";

		$this->load->view('component/user/header', $data);
		$this->load->view('landing-page/tentang_kami', $data);
		$this->load->view('component/user/footer');
	}

	public function visi_misi()
	{

		// $data['slider'] = $this->Slider_m->get_all();
		// $data['berita'] = $this->Berita_m->get_all();
		$data['profil'] = $this->Profil_m->get_profil();
		$data['beritas'] = $this->Berita_m->get_berita_paginated(4, 0);

		$data['title'] = "Visi Misi";

		$this->load->view('component/user/header', $data);
		$this->load->view('landing-page/visimisi', $data);
		$this->load->view('component/user/footer');
	}

	public function so()
	{

		// $data['slider'] = $this->Slider_m->get_all();
		// $data['berita'] = $this->Berita_m->get_all();
		$data['profil'] = $this->Profil_m->get_profil();
		$data['beritas'] = $this->Berita_m->get_berita_paginated(4, 0);

		$data['title'] = "Struktur Organisasi";

		$this->load->view('component/user/header', $data);
		$this->load->view('landing-page/so', $data);
		$this->load->view('component/user/footer');
	}

	public function berita()
	{

		$this->load->library('pagination');

		$config['base_url'] = base_url('berita'); // Sesuaikan dengan URL Anda
		$config['total_rows'] = $this->Berita_m->count_all(); // Jumlah total berita
		$config['per_page'] = 3; // Jumlah berita per halaman
		$config['uri_segment'] = 2; // Segment URI yang digunakan untuk nomor halaman

		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$config['attributes'] = array('class' => 'page-link');

		// Inisialisasi pagination
		$this->pagination->initialize($config);

		$data['berita'] = $this->Berita_m->get_berita_paginated($config['per_page'], $this->uri->segment(2));
		$data['title'] = "Berita";

		$this->load->view('component/user/header', $data);
		$this->load->view('landing-page/berita', $data);
		$this->load->view('component/user/footer');
	}

	public function berita_detail($slug)
	{

		$data['berita'] = $this->Berita_m->get_by_slug($slug);
		$data['beritas'] = $this->Berita_m->get_berita_paginated(4, 0);
		$data['title'] = "Berita detail";

		$this->load->view('component/user/header', $data);
		$this->load->view('landing-page/berita_detail', $data);
		$this->load->view('component/user/footer');
	}

	public function galeri()
	{

		$this->load->library('pagination');

		$config['base_url'] = base_url('galeri'); // Sesuaikan dengan URL Anda
		$config['total_rows'] = $this->Galeri_m->count_all(); // Jumlah total berita
		$config['per_page'] = 12; // Jumlah berita per halaman
		$config['uri_segment'] = 2; // Segment URI yang digunakan untuk nomor halaman

		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$config['attributes'] = array('class' => 'page-link');

		// Inisialisasi pagination
		$this->pagination->initialize($config);

		$data['galeri'] = $this->Galeri_m->get_galeri_paginated($config['per_page'], $this->uri->segment(2));
		$data['beritas'] = $this->Berita_m->get_berita_paginated(4, 0);
		$data['title'] = "Galeri";

		$this->load->view('component/user/header', $data);
		$this->load->view('landing-page/galeri', $data);
		$this->load->view('component/user/footer');
	}
}
