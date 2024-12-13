<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4 light"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-youtube"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="logo_nav.jpg" alt="">
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li class="dropdown"><a href="#"><span>PROFIL</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('profil-sejarah') }}">Sejarah</a></li>
                            <li><a href="{{ url('profil-visimisi') }}">Visi dan Misi</a></li>
                            <li><a href="{{ url('profil-tujuanFungsiTugas') }}">Tujuan, Fungsi dan Tugas</a></li>
                            <li><a href="{{ url('profil-strukturOrganisasi') }}">Struktur Organisasi</a></li>
                            <li><a href="{{ url('profil-pengurus') }}">Pengurus APTIKOM SULBAR</a></li>
                            <li><a href="{{ url('profil-artiLogo') }}">Arti Logo APTIKOM</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="active"><span>TUPOKSI</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('tupoksi-bendaharaUmum') }}">Bendahara Umum</a></li>
                            <li><a href="{{ url('tupoksi-kesekretariatan') }}">Kesekretariatan</a></li>
                            <li class="dropdown"><a href="#"><span>Bagian Khusus</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('humasbranding') }}">Humas dan Branding</a></li>
                                    <li><a href="{{ route('sisteminformasi') }}">Sistem Informasi</a></li>
                                    <li><a href="{{ route('pembinaanorganisasi') }}">Audit dan Pembinaan Organisasi</a>
                                    </li>
                                    <li><a href="{{ route('legalitas') }}">Legalitas dan Advokasi</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Kluster Kelompok Keilmuan</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('ai') }}">Keilmuan bidang artificial Intelligence</a></li>
                                    <li><a href="{{ route('multimedia') }}">Keilmuan bidang multimedia</a></li>
                                    <li><a href="{{ route('transformation') }}">Keilmuan bidang transformation</a></li>
                                    <li><a href="{{ route('computing') }}">Keilmuan bidang high performance and dustrubuted
                                            computing</a></li>
                                    <li><a href="{{ route('security') }}">Keilmuan Bidang System Security</a></li>
                                    <li><a href="{{ route('bioinformatics') }}">Keilmuan Bidang Bioinformatics</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Kluster Bidang Pengembangan Perguruan
                                        Tinggi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('akreditasi') }}">Bidang SMPI dan Akreditasi</a></li>
                                    <li><a href="{{ route('kurikulum') }}">Bidang Kurikulum berbasis KINI</a></li>
                                    <li><a href="{{ route('manajemen') }}">Bidang Manajemen Sistem Informasi Perguruan Tinggi</a>
                                    </li>
                                    <li><a href="{{ route('internasionalisasi') }}">Bidang Internasionalisasi Perguruan Tinggi</a></li>
                                    <li><a href="{{ route('forum') }}">Bidang Forum Aptikom</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Kluster Bidang Pengembangan SDM</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('fungsional') }}">Bidang Jabatan Fungsional</a></li>
                                    <li><a href="{{ route('camp') }}">Bidang Doctorsodikinas Camp</a></li>
                                    <li><a href="{{ route('publikasi') }}">Bidang Publikasi Dosen</a></li>
                                    <li><a href="{{ route('penulisan') }}">Bidang Penulisan Buku Ajar</a></li>
                                    <li><a href="{{ route('lomba') }}">Bidang Hibah dan Lomba</a></li>
                                    <li><a href="{{ route('kompetensi') }}">Bidang Kompetensi Dosen</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Kluster Pengembangan Kerja Sama</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('industri') }}">Bidang Kerjasama Industri</a></li>
                                    <li><a href="{{ route('luarnegeri') }}">Bidang Kerjasama Luar Negeri</a></li>
                                    <li><a href="{{ route('lembaga') }}">Bidang Kerjasama Pemerintah dan Lembaga Lainnya</a></li>
                                    <li><a href="{{ route('perguruantinggi') }}">Bidang Kerjasama Perguruan Tinggi</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Badan Otonom</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('lspinformatika') }}">Bidang LSP Informatika</a></li>
                                    <li><a href="{{ route('laminfokom') }}">Bidang LAM Infokom</a></li>
                                    <li><a href="{{ route('pemerataan') }}">Bidang Pemerataan Pendidikan</a></li>
                                    <li><a href="{{ route('penerbitan') }}">Bidang Penerbitan Jurnal</a></li>
                                    <li><a href="{{ route('conference') }}">Bidang Conference dan Seminar</a></li>
                                    <li><a href="{{ route('lembaga') }}">Bidang Lembaga Pelatihan Kompetensi</a></li>
                                    <li><a href="">Bidang Platform Inovasi dan Komersialisasi Produk</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('berita') }}">BERITA</a></li>
                    <li class="dropdown"><a href="#"><span>KONFERENSI</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('https://icic-aptikom.org/2024/') }}">ICIC</a></li>
                            <li><a
                                    href="{{ url('https://rakornasaptikom2024.methodist.ac.id/semnastik/home') }}">SEMNASTIK</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>KEANGGOTAAN</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('pendaftaran') }}">Pendaftaran Anggota</a></li>
                            <li><a href="{{ url('https://dias.aptikom.org/list-anggota') }}">Data Anggota
                                    Individu</a></li>
                            <li><a href="{{ url('https://dias.aptikom.org/list-anggota-prodi') }}">Data Anggota
                                    PRODI</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>ARSIP</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Buku Panduan Kurikulum Bidang INFOKOM Berbasis OBE/KKNI/SKKNI</a>
                            </li>
                            <li><a href="#">Surat Keputusan</a></li>
                            <li><a href="#">Naskah Sumpah Jabatan</a></li>
                            <li><a href="#">AD/ART APTIKOM</a></li>
                            <li><a href="#">Job deks DPP APTIKOM</a></li>
                            <li><a href="#">Buletin APTIKOM</a></li>
                            <li><a href="#">Buku Saku APTIKOM</a></li>
                            <li><a href="#">Mars APTIKOM</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ asset('MANUALBOOK.pdf') }}">Help</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>

    </div>

</header>