<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>APTIKOM SULBAR</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('/')}}assets/img/logo_APTIKOM.jpeg" rel="icon">
  <link href="{{ asset('/')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="{{ asset('/')}}https://fonts.googleapis.com" rel="preconnect">
  <link href="{{ asset('/')}}https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="{{ asset('/')}}https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('/')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('/')}}assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('/')}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('/')}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('/')}}assets/css/main.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Eterna
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
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
        <a href="{{ url('/')}}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="logo_nav.jpg" alt="">
        </a>
          <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{url('/')}}" >HOME</a></li>
            <li class="dropdown"><a href="#"class="active"><span>PROFIL</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('profil-sejarah')}}">Sejarah</a></li>
                <li><a href="{{ url('profil-visimisi')}}">Visi dan Misi</a></li>
                <li><a href="{{ url('profil-tujuanFungsiTugas')}}">Tujuan, Fungsi dan Tugas</a></li>
                <li><a href="{{ url('profil-strukturOrganisasi')}}">Struktur Organisasi</a></li>
                <li><a href="{{ url('profil-pengurus')}}">Pengurus APTIKOM SULBAR</a></li>
                <li><a href="{{ url('profil-artiLogo')}}">Arti Logo APTIKOM</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" class=""><span>TUPOKSI</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('tupoksi-bendaharaUmum') }}">Bendahara Umum</a></li>
                <li><a href="{{ url('tupoksi-kesekretariatan') }}">Kesekretariatan</a></li>
                <li class="dropdown"><a href="#"><span>Bagian Khusus</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ route('humasbranding') }}">Humas dan Branding</a></li>
                    <li><a href="{{ route('sisteminformasi') }}">Sistem Informasi</a></li>
                    <li><a href="{{ route('pembinaanorganisasi') }}">Audit dan Pembinaan
                        Organisasi</a>
                    </li>
                    <li><a href="{{ route('legalitas') }}">Legalitas dan Advokasi</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kluster Kelompok Keilmuan</span> <i
                      class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ route('ai') }}">Keilmuan bidang artificial Intelligence</a>
                    </li>
                    <li><a href="{{ route('multimedia') }}">Keilmuan bidang multimedia</a></li>
                    <li><a href="{{ route('transformation') }}">Keilmuan bidang transformation</a>
                    </li>
                    <li><a href="{{ route('computing') }}">Keilmuan bidang high performance and
                        dustrubuted
                        computing</a></li>
                    <li><a href="{{ route('security') }}">Keilmuan Bidang System Security</a></li>
                    <li><a href="{{ route('bioinformatics') }}">Keilmuan Bidang Bioinformatics</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kluster Bidang Pengembangan Perguruan
                      Tinggi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ route('akreditasi') }}">Bidang SMPI dan Akreditasi</a></li>
                    <li><a href="{{ route('kurikulum') }}">Bidang Kurikulum berbasis KINI</a></li>
                    <li><a href="{{ route('manajemen') }}">Bidang Manajemen Sistem Informasi
                        Perguruan Tinggi</a>
                    </li>
                    <li><a href="{{ route('internasionalisasi') }}">Bidang Internasionalisasi
                        Perguruan Tinggi</a></li>
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
                    <li><a href="{{ route('lembaga') }}">Bidang Kerjasama Pemerintah dan Lembaga
                        Lainnya</a></li>
                    <li><a href="{{ route('perguruantinggi') }}">Bidang Kerjasama Perguruan
                        Tinggi</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Badan Otonom</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ route('lspinformatika') }}">Bidang LSP Informatika</a></li>
                    <li><a href="{{ route('laminfokom') }}">Bidang LAM Infokom</a></li>
                    <li><a href="{{ route('pemerataan') }}">Bidang Pemerataan Pendidikan</a></li>
                    <li><a href="{{ route('penerbitan') }}">Bidang Penerbitan Jurnal</a></li>
                    <li><a href="{{ route('conference') }}">Bidang Conference dan Seminar</a></li>
                    <li><a href="{{ route('lembaga') }}">Bidang Lembaga Pelatihan Kompetensi</a>
                    </li>
                    <li><a href="">Bidang Platform Inovasi dan Komersialisasi Produk</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="{{ url('berita')}}">BERITA</a></li>
            <li class="dropdown"><a href="#"><span>KONFERENSI</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('https://icic-aptikom.org/2024/')}}">ICIC</a></li>
                <li><a href="{{ url('https://rakornasaptikom2024.methodist.ac.id/semnastik/home')}}">SEMNASTIK</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>KEANGGOTAAN</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('pendaftaran')}}">Pendaftaran Anggota</a></li>
                <li><a href="{{ url('https://dias.aptikom.org/list-anggota')}}">Data Anggota Individu</a></li>
                <li><a href="{{ url('https://dias.aptikom.org/list-anggota-prodi')}}">Data Anggota PRODI</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>ARSIP</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Buku Panduan Kurikulum Bidang INFOKOM Berbasis OBE/KKNI/SKKNI</a></li>
                <li><a href="#">Surat Keputusan</a></li>
                <li><a href="#">Naskah Sumpah Jabatan</a></li>
                <li><a href="#">AD/ART APTIKOM</a></li>
                <li><a href="#">Job deks DPP APTIKOM</a></li>
                <li><a href="#">Buletin APTIKOM</a></li>
                <li><a href="#">Buku Saku APTIKOM</a></li>
                <li><a href="#">Mars APTIKOM</a></li>
              </ul>
            </li> 
            <li><a href="{{ asset('MANUALBOOK.pdf')}}">Help</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>
 
    </div>

  </header>

  <main class="main">

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title mt-5" data-aos="fade-up">
        <h2>{{ $visimisi->judul ?? 'Visi dan Misi APTIKOM' }}</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
                <div class="card-body">
                  {!! optional($visimisi)->isi ?? 'Tidak Ada Content' !!}
                </div>
              </div>
          </div><!-- End post list item --> 
          

        </div><!-- End recent posts list -->

      </div>

    </section><!-- /Recent Posts Section -->
    
  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 me-5 mt-5">
          <img src="assets/img/logo-APTIKOM-footer.png" style="width: 170px" class="mb-3">
          <p>Asosiasi Pendidikan Tinggi Informatika dan Komputer Sulawesi Barat</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-youtube"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 ms-5 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Kontak</span>
          </a>
          <div class="footer-contact pt-3">
            <p>APTIKOM Central Office : Gd. Graha Simatupang, Menara I A Lantai 5, Kampus Universitas Gunadarma, Jl. TB Simatupang Kav. 38, Jakarta</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">APTIKOM</strong> <span>All Rights Reserved</span></p>
      <div class="credits"> 
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/')}}assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('/')}}assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('/')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('/')}}assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('/')}}assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('/')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('/')}}assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('/')}}assets/js/main.js"></script>

</body>

</html>