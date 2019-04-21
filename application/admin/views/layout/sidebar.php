<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-rocket"></i> <span>PINDA ADMIN</span></a>
                </div>

                <div class="clearfix"></div>



                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="<?= site_url('Dashboard')?>"><i class="fa fa-tachometer"></i> Dashboard</a>
                            <li><a><i class="fa fa-database"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('Category') ?>">Kategori</a></li>
                                    <li><a href="<?=site_url('Article')?>">Artikel</a></li>
                                    <li><a href="<?= site_url('Message')?>">Pesan</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('User') ?>">Daftar User</a></li>
                                    <li><a href="<?= site_url('User/adduser')?>">Tambah User</a></li>
                                    <li><a href="form_validation.html">Laporan</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-exchange"></i> Transaksi Proyek <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('Project')?>">Daftar Transaksi</a></li>
                                    <li><a href="<?= site_url('Project/gagal')?>">Transaksi Gagal</a></li>
                                    <li><a href="<?= site_url('Project/sukses') ?>">Transaksi Berhasil</a></li>
                                    <li><a href="glyphicons.html">Laporan</a></li>

                                </ul>
                            </li>
                            <li><a><i class="fa fa-credit-card"></i> Dompet <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('Dompet/daftardompet') ?>">Daftar Akun Dompet</a></li>
                                    <li><a href="<?= site_url('Dompet/daftartopup') ?>">Daftar Transaksi Top Up</a></li>
                                    <li><a href="<?= site_url('Dompet/daftartopupproses')?>">Daftar Transkasi Top Up Proses</a></li>
                                    <li><a href="<?= site_url('Dompet/daftartopupgagal')?>">Daftar Transkasi Top Up Gagal</a></li>
                                    <li><a href="<?= site_url('Dompet/daftartopupberhasil')?>">Daftar Transkasi Top Up Berhasil</a></li>
                                    <li><a href="<?= site_url('Dompet/daftarwithdraw') ?>">Daftar Transaksi Withdraw</a></li>
                                    <li><a href="<?= site_url('Dompet/daftarwithdrawproses') ?>">Daftar Transaksi Withdraw Proses</a></li>
                                    <li><a href="<?= site_url('Dompet/daftarwithdrawgagal')?>">Daftar Transkasi Withdraw Gagal</a></li>
                                    <li><a href="<?= site_url('Dompet/daftarwithdrawberhasil')?>">Daftar Transkasi Withdraw Berhasil</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-gears"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('Settings/testimoni')?>">Testimoni</a></li>
                                    <li><a href="<?= site_url('Settings/about')?>">Tentang Kami</a></li>
                                    <li><a href="<?= site_url('Settings/kontak')?>">Kontak</a></li>
                                    <li><a href="<?= site_url('Settings/faq')?>">FAQ</a></li>
                                    <li><a href="<?= site_url('Settings/admin')?>">User Administrasi</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= site_url('Auth/logout')?>"><i class="fa fa-sign-out"></i> Log Out</a>
                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->


            </div>
        </div>