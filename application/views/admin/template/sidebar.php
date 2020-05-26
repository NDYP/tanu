<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menu</div>
                    <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-university"></i></div>
                        Profil
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= base_url('admin/profil'); ?>">Visi Misi</a>
                            <a class="nav-link" href="<?= base_url('admin/profil/sejarah'); ?>">Sejarah</a>
                            <a class="nav-link" href="<?= base_url('admin/profil/struktur'); ?>">Struktur</a>
                            <a class="nav-link" href="<?= base_url('admin/profil/map'); ?>">Map</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="<?= base_url('admin/berita'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                        Berita
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-university"></i></div>
                            Fasilitas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('admin/layanan'); ?>">Layanan</a>
                                <a class="nav-link" href="<?= base_url('admin/kamar_inap'); ?>">Kamar Inap</a>
                                <a class="nav-link" href="<?= base_url('admin/fasilitas'); ?>">Daftar Peralatan</a>
                                <a class="nav-link" href="<?= base_url('admin/fasilitas_pembantu'); ?>">Fasilitas Pembantu</a>
                                <a class="nav-link" href="<?= base_url('admin/sistem_penunjang'); ?>">Sistem Penunjang</a>
                            </nav>
                        </div>
                    </a><a class="nav-link" href="<?= base_url('admin/galeri'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                        Galeri
                    </a>
                    </a><a class="nav-link" href="<?= base_url('admin/jadwal'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Jadwal
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <div class="">
                    <?= $this->session->userdata('nama_lengkap'); ?>
                </div>
            </div>
        </nav>
    </div>