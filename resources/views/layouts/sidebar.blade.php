<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #38527E" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('admin/assets/img/profil-kosong.jpg') }}" style="width: 50px; height: 50px;"
                class="rounded-circle img-thumbnail" alt="">
        </div>
        <div class="sidebar-brand-text mx-2"> <sup class="text-warning">aptikom</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        menu
    </div>
    <li class="nav-item {{ Request::is('admin/profil/*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Profil</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('admin/profil/sejarah*') ? 'active' : '' }}"
                    href="{{ route('sejarah.index') }}">Sejarah</a>
                <a class="collapse-item {{ Request::is('admin/profil/visimisi*') ? 'active' : '' }}"
                    href="{{ route('visimisi.index') }}">Visi dan Misi</a>
                <a class="collapse-item {{ Request::is('admin/profil/tft*') ? 'active' : '' }}" href="{{ route('tft.index') }}">Tujuan, Fungsi dan Tugas</a>
                <a class="collapse-item {{ Request::is('admin/profil/strukturorganisasi*') ? 'active' : '' }}"
                    href="{{ route('strukturorganisasi.index') }}">Struktur Organisasi</a>
                <a class="collapse-item {{ Request::is('admin/profil/pengurus*') ? 'active' : '' }}"
                    href="{{ route('pengurus.index') }}">Pengurus Aptikom</a>
                <a class="collapse-item {{ Request::is('admin/profil/artilogo*') ? 'active' : '' }}"
                    href="{{ route('artilogo.index') }}">Arti Logo Aptikom</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoo"
            aria-expanded="true" aria-controls="collapseTwoo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tupoksi</span>
        </a>
        <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('bendaharaumum.index') }}">Bendahara Umum</a>
                <a class="collapse-item" href="{{ route('kesektariatan.index') }}">Kesektariatan</a>
                <a class="collapse-item collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseBendahara" aria-expanded="false" aria-controls="collapseBendahara">
                    Bagian Khusus
                    <i class="fas fa-angle-down float-right mt-2"></i>
                </a>
                <div id="collapseBendahara" class="collapse">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('humasbranding.index') }}">Humas dan Branding</a>
                        <a class="collapse-item" href="{{ route('sisteminformasi.index') }}">Sistem Informasi</a>
                        <a class="collapse-item" href="{{ route('pembinaanorganisasi.index') }}">Pembinaan
                            Organisasi</a>
                        <a class="collapse-item" href="{{ route('legalitas.index') }}">Legalitas dan Advokasi</a>
                    </div>
                </div>

                <a class="collapse-item collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseBendaharaa" aria-expanded="false" aria-controls="collapseBendahara">
                    Keilmuan
                    <i class="fas fa-angle-down float-right mt-2"></i>
                </a>
                <div id="collapseBendaharaa" class="collapse">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('ai.index') }}">AI</a>
                        <a class="collapse-item" href="{{ route('multimedia.index') }}">Multimedia</a>
                        <a class="collapse-item" href="{{ route('transformation.index') }}">Transformation</a>
                        <a class="collapse-item" href="{{ route('computing.index') }}">Computing</a>
                        <a class="collapse-item" href="{{ route('security.index') }}">Security</a>
                        <a class="collapse-item" href="{{ route('bioinformatics.index') }}">Bioinformatics</a>
                    </div>
                </div>

                <a class="collapse-item collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseBendaharaaa" aria-expanded="false" aria-controls="collapseBendahara">
                    Perguruan Tinggi
                    <i class="fas fa-angle-down float-right mt-2"></i>
                </a>
                <div id="collapseBendaharaaa" class="collapse">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('akreditasi.index') }}">Akreditasi</a>
                        <a class="collapse-item" href="{{ route('kurikulum.index') }}">Kurikulum</a>
                        <a class="collapse-item"
                            href="{{ route('internasionalisasi.index') }}">Internasionalisasi</a>
                        <a class="collapse-item" href="{{ route('manajemen.index') }}">Manajemen</a>
                        <a class="collapse-item" href="{{ route('forum.index') }}">Forum Aptikom</a>
                    </div>
                </div>

                <a class="collapse-item collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseBendaharaaaa" aria-expanded="false" aria-controls="collapseBendahara">
                    Pengembangan SDM
                    <i class="fas fa-angle-down float-right mt-2"></i>
                </a>
                <div id="collapseBendaharaaaa" class="collapse">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('fungsinal.index') }}">Fungsional</a>
                        <a class="collapse-item" href="{{ route('camp.index') }}">Camp</a>
                        <a class="collapse-item" href="{{ route('publikasi.index') }}">Publikasi</a>
                        <a class="collapse-item" href="{{ route('penulisan.index') }}">Penulisan</a>
                        <a class="collapse-item" href="{{ route('lomba.index') }}">Lomba</a>
                        <a class="collapse-item" href="{{ route('kompetensi.index') }}">Kompetensi</a>
                    </div>
                </div>

                <a class="collapse-item collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseBendaharaaaaa" aria-expanded="false" aria-controls="collapseBendahara">
                    Kerja Sama
                    <i class="fas fa-angle-down float-right mt-2"></i>
                </a>
                <div id="collapseBendaharaaaaa" class="collapse">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('industri.index') }}">Industri</a>
                        <a class="collapse-item" href="{{ route('luarnegeri.index') }}">Luar Negeri</a>
                        <a class="collapse-item" href="{{ route('pemerintah.index') }}">Pemerintah</a>
                        <a class="collapse-item" href="{{ route('perguruantinggi.index') }}">Perguruan Tinggi</a>
                    </div>
                </div>

                <a class="collapse-item collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseBendaharaaaaaa" aria-expanded="false" aria-controls="collapseBendahara">
                    Badan Otonom
                    <i class="fas fa-angle-down float-right mt-2"></i>
                </a>
                <div id="collapseBendaharaaaaaa" class="collapse">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('lspinformatika.index') }}">LSP Informatika</a>
                        <a class="collapse-item" href="{{ route('laminfokom.index') }}">LAM Infokom</a>
                        <a class="collapse-item" href="{{ route('pemerataan.index') }}">Pemerataan</a>
                        <a class="collapse-item" href="{{ route('penerbitan.index') }}">Penerbitan</a>
                        <a class="collapse-item" href="{{ route('conference.index') }}">Conference</a>
                        <a class="collapse-item" href="{{ route('lembaga.index') }}">Lembaga</a>
                    </div>
                </div>
            </div>
        </div> 
    </li>
    <li class="nav-item {{ Request::is('admin/berita*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('berita.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
