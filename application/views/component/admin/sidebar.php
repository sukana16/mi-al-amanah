<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('admin/home') ?>">MIS Al Amanah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('admin/home') ?>">MA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="<?= $this->uri->segment(2) === 'home' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/home') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Media</li>
            <li class="<?= $this->uri->segment(2) === 'slider' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/slider') ?>"><i class="fas fa-arrow-right"></i> <span>Slider</span></a></li>
            <!-- <li class="<?= $this->uri->segment(2) === 'berita' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/berita') ?>"><i class="fas fa-newspaper"></i> <span>Kelola Berita</span></a></li> -->
            <li class="dropdown <?= $this->uri->segment(2) === 'berita' || $this->uri->segment(2) === 'kategori' ? "active" : "" ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i><span>Berita</span></a>
                <ul class="dropdown-menu">
                    <li class="<?= $this->uri->segment(2) === 'berita' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/berita') ?>">Kelola Berita</a></li>
                    <li class="<?= $this->uri->segment(2) === 'kategori' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/kategori') ?>">Kelola Kategori</a></li>
                </ul>
            </li>
            <li class="<?= $this->uri->segment(2) === 'galeri' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/galeri') ?>"><i class="fas fa-images"></i> <span>Kelola Galeri</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'profil' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/profil') ?>"><i class="fas fa-cogs"></i> <span>Konfigurasi Profil</span></a></li>


        </ul>


    </aside>
</div>