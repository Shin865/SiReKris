<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sireksis</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('tabler/assets/img/logoku.png') }}" rel="icon" />
    <link href="{{ asset('tabler/assets/img/logoku.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="{{ asset('tabler/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('tabler/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('tabler/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('tabler/assets/vendor/glightbox/css/glightbox.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('tabler/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('tabler/assets/css/main.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: May 10 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <img src="{{ asset('tabler/assets/img/logoku.png') }}" alt="" />
          <h1 class="sitename">SiReKsis</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.html#hero" class="">Beranda</a></li>
            <li><a href="index.html#about">Tentang Kami</a></li>
            <li><a href="index.html#fitur">Fitur</a></li>
            <li><a href="index.html#carakerja">Cara Kerja</a></li>
            <li><a href="index.html#qna">QnA</a></li>
            <li><a href="/laporan">Data Laporan</a></li>
            <li><a href="/login">Laporan Saya</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="/login">Login</a>
      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section">
        <div class="hero-bg">
          <img src="{{ asset('tabler/assets/img/hero-bg-light.webp') }}" alt="" />
        </div>
        <div class="container text-center">
          <div
            class="d-flex flex-column justify-content-center align-items-center"
          >
            <h1 data-aos="fade-up" class="">
              Selamat datang di <span>SiReKsis</span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="100" class="">
              Laporkan masalah pasca bencana dengan SiReksis, aplikasi tanggap darurat yang cepat dan efisien.<br />
            </p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started">Mulai</a>
              <a
                href="https://www.youtube.com/watch?v=1ysZFYpQORM&pp=ygUZYmVuY2FuYSBrYWJ1cGF0ZW4gY2VtcG9nbw%3D%3D"
                class="glightbox btn-watch-video d-flex align-items-center"
                ><i class="bi bi-play-circle"></i><span>Tonton Video</span></a
              >
            </div>
            <img
              src="{{ asset('tabler/assets/img/hero-services-img.webp') }}"
              class="img-fluid hero-img"
              alt=""
              data-aos="zoom-out"
              data-aos-delay="300"
            />
          </div>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- Featured Services Section -->
      <section id="featured-services" class="featured-services section">
        <div class="container">
          <div class="row gy-4">
            <div
              class="col-xl-4 col-lg-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0">
                  <i class="bi bi-briefcase"></i>
                </div>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Total Laporan</a>
                  </h4>
                  <p class="description">
                   332
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-xl-4 col-lg-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0">
                  <i class="bi bi-card-checklist"></i>
                </div>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Laporan Diterima</a>
                  </h4>
                  <p class="description">
                    10
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-xl-4 col-lg-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0">
                  <i class="bi bi-bar-chart"></i>
                </div>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Laporan Ditolak</a>
                  </h4>
                  <p class="description">
                   4
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->
          </div>
        </div>
      </section>
      <!-- /Featured Services Section -->

      <!-- About Section -->
      <section id="about" class="about section">
        <div class="container">
          <div class="row gy-4">
            <div
              class="col-lg-6 content"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <!-- <p class="who-we-are">Who We Are</p> -->
              <h3>Tentang Kami</h3>
              <p class="fst-italic">
                SiReKsis adalah sebuah platform pelaporan bencana alam yang dirancang untuk 
                memfasilitasi masyarakat Kecamatan Cepogo, Kabupaten Boyolali, dalam melaporkan 
                kerusakan akibat bencana secara cepat dan efisien. Dengan SiReKsis, masyarakat dapat 
                mengirim laporan kerusakan melalui formulir online yang mudah digunakan, sehingga pihak 
                berwenang dapat segera meninjau dan mengambil tindakan yang diperlukan. Tujuan utama dari 
                platform ini adalah untuk mempercepat respon terhadap bencana, memastikan bantuan yang tepat 
                dapat disalurkan dengan cepat, serta meningkatkan kesadaran masyarakat akan pentingnya pelaporan 
                kerusakan secara daring. Melalui penggunaan teknologi informasi, SiReKsis berupaya menciptakan 
                komunitas yang lebih tanggap dan tangguh dalam menghadapi bencana alam.
              </p>

              <a href="#" class="read-more"
                ><span>Ajukan Laporan</span><i class="bi bi-arrow-right"></i
              ></a>
            </div>

            <div
              class="col-lg-6 about-images"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="row gy-4">
                <div class="col-lg-6">
                  <img
                    src="{{ asset('tabler/assets/img/about-company-1.jpg') }}"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="col-lg-6">
                  <div class="row gy-4">
                    <div class="col-lg-12">
                      <img
                        src="{{ asset('tabler/assets/img/about-company-2.jpg') }}"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div class="col-lg-12">
                      <img
                        src="{{ asset('tabler/assets/img/about-company-3.jpg') }}"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->

      <!-- Features Section -->
      <section id="fitur" class="features section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2 class="">Fitur</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center">
              <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item">
                  <a
                    class="nav-link active show"
                    data-bs-toggle="tab"
                    data-bs-target="#features-tab-1"
                  >
                    <i class="bi bi-binoculars"></i>
                    <div>
                      <h4 class="d-none d-lg-block">
                        Pelaporan Kerusakan
                      </h4>
                      <p>
                        Memfasilitasi pelaporan kerusakan secara cepat dan mudah, memungkinkan pihak berwenang untuk menerima informasi 
                        yang akurat mengenai kondisi lapangan. Fitur ini memastikan bahwa setiap laporan kerusakan dapat ditindaklanjuti 
                        dengan tepat dan efisien, membantu dalam koordinasi dan alokasi sumber daya untuk penanganan bencana yang efektif.
                      </p>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#features-tab-2"
                  >
                    <i class="bi bi-box-seam"></i>
                    <div>
                      <h4 class="d-none d-lg-block">
                        Rekapitulasi Laporan
                      </h4>
                      <p>
                        Menampilkan jumlah laporan kerusakan yang diterima, diajukan, maupun ditolak. Fitur ini memberikan gambaran lengkap tentang status setiap laporan, 
                        membantu pihak berwenang dalam memonitor dan mengevaluasi tanggapan terhadap setiap insiden. Dengan demikian, keputusan dapat dibuat 
                        berdasarkan data yang terorganisir dan transparan.
                      </p>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#features-tab-3"
                  >
                    <i class="bi bi-brightness-high"></i>
                    <div>
                      <h4 class="d-none d-lg-block">
                        Manajemen Efisien
                      </h4>
                      <p>
                        Mengorganisir data dengan baik untuk memudahkan analisis dan pengambilan keputusan. Fitur ini memastikan 
                        tindakan yang cepat dan tepat sesuai dengan kondisi lapangan, sehingga tim tanggap darurat dapat merespons dengan efektif dan efisien.
                      </p>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End Tab Nav -->
            </div>

            <div class="col-lg-6">
              <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                <div class="tab-pane fade active show" id="features-tab-1">
                  <img src="{{ asset('tabler/assets/img/tabs-1.jpg') }}" alt="" class="img-fluid" />
                </div>
                <!-- End Tab Content Item -->

                <div class="tab-pane fade" id="features-tab-2">
                  <img src="{{ asset('tabler/assets/img/tabs-2.jpg') }}" alt="" class="img-fluid" />
                </div>
                <!-- End Tab Content Item -->

                <div class="tab-pane fade" id="features-tab-3">
                  <img src="{{ asset('tabler/assets/img/tabs-3.jpg') }}" alt="" class="img-fluid" />
                </div>
                <!-- End Tab Content Item -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section id="carakerja" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Cara Kerja Sireksis</h2>
          <p>
            Informasi lengkap tentang cara kerja sireksis
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item item-cyan position-relative">
                <i class="bi bi-activity icon"></i>
                <div>
                  <h3>Lapor Kerusakan</h3>
                  <p>
                    Masyarakat di Kecamatan Cepogo 
                    dapat melaporkan kerusakan akibat bencana 
                    alam dengan mengisi formulir online yang 
                    tersedia di halaman Lapor. Formulir ini 
                    mencakup informasi seperti nama, kontak, 
                    lokasi kerusakan, jenis kerusakan, deskripsi 
                    rinci, dan opsi untuk mengunggah foto.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item item-orange position-relative">
                <i class="bi bi-broadcast icon"></i>
                <div>
                  <h3>Pemrosesan Data</h3>
                  <p>
                    Setelah laporan dikirimkan, tim verifikasi 
                    dari Sireksis akan
                    mulai meninjau laporan tersebut. Tim ini 
                    terdiri dari petugas tanggap bencana yang 
                    berpengalaman dalam menilai dan memvalidasi 
                    kerusakan yang dilaporkan. <br><br>
                    Tim verifikasi memeriksa keabsahan laporan, 
                    memverifikasi informasi yang diberikan, dan 
                    melakukan kunjungan lapangan jika diperlukan 
                    untuk memastikan akurasi laporan.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item item-teal position-relative">
                <i class="bi bi-easel icon"></i>
                <div>
                  <h3>Tindakan</h3>
                  <p>
                    Berdasarkan data yang diverifikasi, pihak Sireksis
                    menilai tingkat kerusakan dan menentukan tindakan 
                    yang diperlukan. Ini termasuk mengidentifikasi kebutuhan 
                    mendesak, seperti bantuan medis, tempat penampungan, atau 
                    perbaikan infrastruktur.<br><br>
                    Tim tanggap bencana berkoordinasi dengan berbagai instansi 
                    terkait untuk memastikan respons yang cepat dan efektif. 
                    Mereka menggunakan data dari laporan untuk mengalokasikan 
                    sumber daya dengan lebih efisien.<br><br>
                    Masyarakat yang melaporkan kerusakan akan menerima pembaruan 
                    status laporan mereka melalui platform SiReKsis, memastikan 
                    bahwa mereka mengetahui tindakan apa yang telah diambil dan 
                    apa yang diharapkan selanjutnya.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item item-red position-relative">
                <i class="bi bi-bounding-box-circles icon"></i>
                <div>
                  <h3>Rekapitulasi Laporan</h3>
                  <p>
                    Semua laporan yang diterima akan diolah secara interaktif,
                    menampilkan jumlah laporan yang diterima, diajukan, dan ditolak. Rekapitulasi ini dapat diakses oleh semua pihak yang berkepentingan, memudahkan untuk 
                    memantau perkembangan dan status laporan secara transparan. Dengan tampilan interaktif dan informatif
                </div>
              </div>
            </div>
            <!-- End Service Item -->
          </div>
        </div>
      </section>
      <!-- /Services Section -->

      <!-- Faq Section -->
      <section id="qna" class="faq section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Pertanyaan yang Sering Ditanyakan</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
              <div class="faq-container">
                <div class="faq-item faq-active">
                  <h3>Apa itu SiReKsis?</h3>
                  <div class="faq-content">
                    <p>
                      SiReKsis (Sistem Pelaporan Kerusakan Infrastruktur) adalah 
                      platform digital yang dikembangkan untuk mendukung sistem 
                      pelaporan dan penanganan bencana alam di Kecamatan Cepogo, 
                      Kabupaten Boyolali, Jawa Tengah. Fokus utama SiReKsis adalah 
                      mengelola kerusakan aset akibat bencana alam, menangani keluhan 
                      masyarakat terkait bencana, serta meningkatkan kesadaran masyarakat 
                      tentang pentingnya pelaporan kerusakan bencana alam secara daring.
                      Dengan menggunakan SiReKsis, masyarakat dapat dengan mudah melaporkan 
                      kerusakan yang terjadi di lingkungan mereka, sehingga dapat segera 
                      ditindaklanjuti oleh pihak berwenang.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>Bagaimana cara melaporkan kerusakan?</h3>
                  <div class="faq-content">
                    <p>
                      Untuk melaporkan kerusakan, Anda dapat mengikuti langkah-langkah berikut:<br>
                        1. Buka aplikasi SiReKsis atau kunjungi situs web resmi.<br>
                        2. Pilih menu Lapor.<br>
                        3. Isi formulir laporan dengan detail informasi kerusakan, seperti lokasi, deskripsi kerusakan, dan foto jika memungkinkan.<br>
                        4. Klik tombol Kirim untuk mengirimkan laporan Anda.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>
                    Siapa yang bisa menggunakan layanan ini?
                  </h3>
                  <div class="faq-content">
                    <p>
                      Layanan SiReKsis dapat digunakan oleh seluruh 
                      masyarakat di Kecamatan Cepogo, Kabupaten Boyolali, 
                      Jawa Tengah yang mengalami atau menemukan kerusakan 
                      infrastruktur akibat bencana alam di lingkungan mereka.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>
                    Bagaimana laporan saya diproses?
                  </h3>
                  <div class="faq-content">
                    <p>
                      Setelah Anda mengirimkan laporan, prosesnya adalah sebagai berikut:<br>
                        1. Laporan Anda akan diterima dan direview oleh pihak berwenang.<br>
                        2. Pihak berwenang akan mengevaluasi dan mengambil tindakan yang diperlukan untuk memperbaiki kerusakan.<br>
                        3. Anda akan menerima perkembangan status laporan yang anda laporkan sebelumnya.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>
                    Bagaimana cara melacak status laporan saya?
                  </h3>
                  <div class="faq-content">
                    <p>
                      Untuk melacak status laporan Anda:<br>
                      1. Masuk ke aplikasi SiReKsis atau situs web resmi.<br>
                      2. Pilih menu Laporan Saya.<br>
                      3. Anda akan melihat status terkini dari laporan Anda.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->
              </div>
            </div>
            <!-- End Faq Column-->
          </div>
        </div>
      </section>
      <!-- /Faq Section -->
      
      <!-- Contact Section -->
      <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Kontak</h2>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <i class="bi bi-geo-alt"></i>
                <h3>Alamat</h3>
                <p>Cepogo, Jambean, Bendosari, Wates, Kupo dan Banaran</p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <i class="bi bi-telephone"></i>
                <h3>Hubungi Kami</h3>
                <p>+62822-7295-8056</p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>sireksis@gmail.com</p>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <div class="row gy-4 mt-1">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.5093156594285!2d110.56683!3d-7.519289999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6f19c8fa3e9f%3A0x6c2cf9743092edec!2sJl.%20Kab.%2C%20Kec.%20Cepogo%2C%20Kabupaten%20Boyolali%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1716612986995!5m2!1sid!2sid"
                frameborder="0"
                style="border: 0; width: 100%; height: 400px"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <!-- End Google Maps -->
          </div>
        </div>
      </section>
      <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer position-relative">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Mulai Cepat</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Cepogo, Jambean, Bendosari, Wates, Kupo dan Banaran</p>
              <p>Jawa Tengah, 57362</p>
              <p class="mt-3">
                <strong>HP:</strong> <span>+62822-7295-8056</span>
              </p>
              <p><strong>Email:</strong> <span>sireksis@gmail.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Tautan Lainya</h4>
            <ul>
              <li><a href="#">Beranda</a></li>
              <li><a href="https://www.detik.com/jateng/berita/d-7221457/rusak-berat-tertimpa-longsor-1-rumah-di-cepogo-boyolali-dirobohkan">Berita</a></li>
              <li><a href="#">Hubungi kami</a></li>
              <li><a href="#">Data laporan</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Pelayanan Kami</h4>
            <ul>
              <li><a href="#">lapor</a></li>
              <li><a href="#">laporanmu</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Visi</h4>
            <p>
              Menjadi platform pelaporan bencana yang terdepan, menyediakan informasi yang akurat, serta memfasilitasi koordinasi respons yang cepat dan efektif.!
            </p>
          </div>
        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>
          © <span>Copyright</span>
          <strong class="px-1 sitename">SiReksis</strong
          >
        </p>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('tabler/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tabler/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('tabler/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('tabler/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('tabler/assets/vendor/swiper/swiper-bundle.min.js') }}') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('tabler/assets/js/main.js') }}"></script>
  </body>
</html>
