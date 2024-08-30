<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home - TernakPro</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
    <style>
        /* CSS untuk Menyelaraskan Menu Navigasi */
        .navbar-nav {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Atur ke 'flex-end' atau 'flex-start' jika perlu */
        }

        .nav-item {
            margin: 0 10px;
            /* Sesuaikan jarak antar menu */
        }

        .navbar-toggler {
            margin-right: 15px;
            /* Atur jarak tombol toggle dari kanan jika perlu */
        }

        .btn-hover-bg {
            margin-left: 15px;
            /* Sesuaikan margin kiri untuk tombol jika perlu */
        }

        /* CSS tambahan untuk memastikan tampilan konsisten di berbagai ukuran layar */
        @media (max-width: 767px) {
            .navbar-nav {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid fixed-top px-0">
        <div class="container px-0">
            <div class="topbar">
                <div class="row align-items-center justify-content-center">
                    <div class="topbar-info d-flex flex-wrap">
                        <a href="#" class="text-light hover:text-primary me-4">
                            <i class="fas fa-envelope text-white me-2"></i>ternakpro99@gmail.com
                        </a>
                        <a href="#" class="text-light hover:text-primary">
                            <i class="fas fa-phone-alt text-white me-2"></i>+62 813-1884-8487
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="topbar-icon d-flex align-items-center justify-content-end"></div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-light bg-light navbar-expand-xl">
                <a href="#" class="navbar-brand ms-3">
                    <h1 class="text-primary display-9">TernakPro</h1>
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light text-end" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#carouselId" class="nav-item nav-link">Menu</a>
                        <a href="#about" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#services" class="nav-item nav-link">Layanan Kami</a>
                        <a href="#howto" class="nav-item nav-link">Cara Kerja</a>
                        <a href="#contact" class="nav-item nav-link">Kontak</a>
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/dashboard') }}"
                            class="nav-item nav-link rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                        @else
                        <div class="nav-item d-flex align-items-center">
                            <div class="border border-dark bg-light rounded-md p-2 mx-2">
                                <a href="{{ '/awal' }}"
                                    class="text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>
                            </div>
                            @if (Route::has('register'))
                            <div class="border border-dark bg-light rounded-md p-2 mx-2">
                                <a href="{{ route('register') }}"
                                    class="text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Register
                                </a>
                            </div>
                            @endif
                        </div>
                        @endauth
                        @endif
                    </div>
                </div>
                
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid carousel-header vh-100 px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('landing/img/carousel-1.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">TernakPro
                            </h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Ternak Sehat, Harga Terjangkau!</h1>
                            <p class="mb-5 fs-5">Jual-beli dan pelihara kambing dan domba di TernakPro</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#about">Bergabung
                                    Bersama Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('landing/img/carousel-2.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">TernakPro
                            </h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Peternakan Modern</h1>
                            <p class="mb-5 fs-5">Kami memberikan layanan terbaik untuk peternakan kambing dan domba
                                Anda.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#about">Pelajari
                                    Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('landing/img/carousel-3.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">TernakPro
                            </h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Kualitas Terbaik</h1>
                            <p class="mb-5 fs-5">Kami menjamin kualitas ternak kambing dan domba yang sehat dan unggul
                                untuk kebutuhan Anda.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#about">Hubungi
                                    Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about py-5" id="about">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5">
                    <div class="h-100">
                        <img src="{{ asset('landing/img/about-1.jpg') }}" class="img-fluid w-100 h-100" alt="Image">
                    </div>
                </div>
                <div class="col-xl-7">
                    <h5 class="text-uppercase text-primary">Tentang Kami</h5>
                    <h1 class="mb-4">Kenapa memilih TernakPro?</h1>
                    <p class="fs-5 mb-4">TernakPro adalah spesialis peternakan domba yang bereputasi dan berpengalaman,
                        berdedikasi untuk menyediakan domba berkualitas tinggi dengan harga bersaing. Fokus utama kami
                        terletak pada perdagangan dan pemeliharaan domba.</p>
                    <p class="fs-5 mb-4">Kami telah mengembangkan sistem yang komprehensif untuk menyederhanakan proses,
                        memastikan bahwa Anda dapat mengelolanya semudah menarik uang dari rekening bank Anda.</p>
                    <div class="tab-class bg-secondary p-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 150px;">Tentang</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 150px;">Visi</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 150px;">Misi</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">Tentang Kami</h5>
                                                <p class="mb-4">TernakPro adalah spesialis peternakan domba yang
                                                    bereputasi dan berpengalaman, berdedikasi untuk menyediakan domba
                                                    berkualitas tinggi dengan harga bersaing. Fokus utama kami terletak
                                                    pada perdagangan dan pemeliharaan domba.</p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">Visi Kami</h5>
                                                <p class="mb-4">ernakPro berkomitmen untuk menjadi platform terdepan
                                                    dalam jual beli dan pemeliharaan kambing dan domba,
                                                    dengan menyediakan hewan berkualitas tinggi serta layanan terbaik.
                                                    Kami bertujuan untuk mendukung peternak lokal dan memperluas
                                                    jangkauan pasar,
                                                    sambil memastikan transparansi dan kepuasan pelanggan melalui sistem
                                                    yang efisien dan mudah diakses.</p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">Misi Kami</h5>
                                                <p class="mb-4">Di TernakPro, misi kami adalah menyederhanakan dan
                                                    memodernisasi proses perdagangan serta pemeliharaan kambing dan
                                                    domba
                                                    dengan harga bersaing dan layanan yang andal. Dengan pengalaman dan
                                                    dedikasi kami, kami berupaya untuk menawarkan produk unggulan
                                                    serta solusi yang memudahkan peternak dan pembeli dalam setiap
                                                    langkah. Berdasarkan peternakan kami yang berlokasi di Desa X,
                                                    Kelurahan Y, Kecamatan Z, Bogor, Jawa Barat,
                                                    kami berkomitmen untuk memberikan pelayanan terbaik dan mendukung
                                                    pertumbuhan sektor peternakan di seluruh Indonesia.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service py-5" style="background-color: rgb(101, 93, 93);" id="services">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Layanan Kami</h5>
                <h1 class="mb-0">Jual Beli Pelihara Kambing dan Domba</h1>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <!-- Jual Kambing dan Domba -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative p-4 border rounded shadow-sm"
                            style="background-color: #f8f9fa;">
                            <div class="icon mb-3">
                                <i class="bi bi-currency-dollar icon"></i>
                            </div>
                            <h4>
                                <a href="{{ '/daftar' }}" class="stretched-link">Jual</a>
                            </h4>
                            <p>
                                Menyediakan berbagai jenis kambing dan domba untuk dijual dengan kualitas terbaik.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Beli Kambing dan Domba -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative p-4 border rounded shadow-sm"
                            style="background-color: #f8f9fa;">
                            <div class="icon mb-3">
                                <i class="bi bi-cart icon"></i>
                            </div>
                            <h4>
                                <a href="{{ '/daftar' }}" class="stretched-link">Beli</a>
                            </h4>
                            <p>
                                Silahkan di klik beli jika anda ingin membeli kambing / domba.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Pelihara Kambing dan Domba -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative p-4 border rounded shadow-sm"
                            style="background-color: #f8f9fa;">
                            <div class="icon mb-3">
                                <i class="bi bi bi-heart"></i>
                            </div>
                            <h4>
                                <a href="{{ '/hewan' }}" class="stretched-link">Pelihara</a>
                            </h4>
                            <p>
                                Layanan pemeliharaan kambing dan domba untuk memastikan kesehatan dan pertumbuhan yang
                                optimal.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Tabung Kurban -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative p-4 border rounded shadow-sm"
                            style="background-color: #f8f9fa;">
                            <div class="icon mb-3">
                                <i class="bi bi-piggy-bank icon"></i>
                            </div>
                            <h4>
                                <a href="#" class="stretched-link">Tabung Kurban</a>
                            </h4>
                            <p>
                                Menyediakan layanan tabungan kurban untuk memudahkan Anda dalam berkurban setiap tahun.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Causes Start -->
    <div class="container-fluid causes py-5">
        <section id="howto" class="howto text-center">
            <h2><span>Cara</span> Kerja</h2>
            <p>Pahami cara kerja kami untuk memulai jual-beli domba Anda melalui alur berikut.</p>

            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="howto-card border p-3">
                        <img src="{{ asset('landing/img/daftar.png') }}" alt="Daftar/Masuk" class="howto-card-img" />
                        <h3 class="howto-card-title">01. Daftar/Masuk</h3>
                        <p class="howto-card-explain">Silahkan Buat akun baru terlebih dahulu atau login jika sudah mempunyai akun.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="howto-card border p-3">
                        <img src="{{ asset('landing/img/pilih-hewan.png') }}" alt="Pilih Hewan"
                            class="howto-card-img" />
                        <h3 class="howto-card-title">02. Pilih Hewan Ternak</h3>
                        <p class="howto-card-explain">Pilih kambing/domba dan masukkan besaran uang yang ingin
                            dibayarkan.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="howto-card border p-3">
                        <img src="{{ asset('landing/img/pembayaran.png') }}" alt="Bayar" class="howto-card-img" />
                        <h3 class="howto-card-title">03. Pembayaran</h3>
                        <p class="howto-card-explain">Lakukan pembayaran segera melalui metode pembayaran yang Anda
                            pilih.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-4 mb-4">
                    <div class="howto-card border p-3">
                        <img src="{{ asset('landing/img/konfirmasi-pembayaran.png') }}" alt="Konfirmasi Pembayaran"
                            class="howto-card-img" />
                        <h3 class="howto-card-title">04. Konfirmasi Pembayaran</h3>
                        <p class="howto-card-explain">Setelah Melakukan Pembayaran, harap mengirimkan bukti TF nya!</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="howto-card border p-3">
                        <img src="{{ asset('landing/img/pantau-ternak.png') }}" alt="Pantau Ternak"
                            class="howto-card-img" />
                        <h3 class="howto-card-title">05. Pantau Ternak Anda</h3>
                        <p class="howto-card-explain">Pantau pertumbuhan ternak Anda melalui dashboard.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Causes End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5 mb-5">
        <div class="container py-5">
            <!-- Contact Section -->
            <section id="contact" class="contact section">
                <!-- Section Title -->
                <div class="container section-title text-center mb-5" data-aos="fade-up">
                    <h2>Kontak</h2>
                    <p>Berikut informasi Tentang Alamat, Nomor telepon, Email TernakPro Agar Anda dapat bertanya kepada admin kami.</p>
                </div>
                <!-- End Section Title -->

                <!-- Contact Information -->
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row justify-content-center">
                        <!-- Info Item -->
                        <div class="col-md-4 mb-4 d-flex justify-content-center">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-geo-alt fs-3 me-3"></i>
                                <div>
                                    <h3 class="h5 mb-1">Alamat</h3>
                                    <p class="mb-0">Perumahan Bukit Waringin Blok I 1 No.27 RT 006/014, Kecamatan
                                        Bojonggede, Kabupaten Bogor</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <!-- Info Item -->
                        <div class="col-md-4 mb-4 d-flex justify-content-center">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-telephone fs-3 me-3"></i>
                                <div>
                                    <h3 class="h5 mb-1">Telepon</h3>
                                    <p class="mb-0">+62 813-1884-8487</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <!-- Info Item -->
                        <div class="col-md-4 mb-4 d-flex justify-content-center">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-envelope fs-3 me-3"></i>
                                <div>
                                    <h3 class="h5 mb-1">Email</h3>
                                    <p class="mb-0">ternakpro99@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>

                    <!-- Google Maps Embed -->
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.193492404426!2d106.78425007415078!3d-6.497170493494962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c24f18643501%3A0x4a1e6b4acc366e82!2sJl.%20Perumahan%20Bukit%20Waringin%20Blk.%20I1%20No.27%2C%20Cimanggis%2C%20Kecamatan%20Bojonggede%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016920!5e0!3m2!1sid!2sid!4v1721982250856!5m2!1sid!2sid"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        </div>
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-body py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">TernakPro</h4>
                        <p class="mb-4">TernakPro adalah spesialis peternakan domba yang bereputasi dan berpengalaman,
                            berdedikasi untuk menyediakan domba berkualitas tinggi dengan harga bersaing. Fokus utama
                            kami terletak pada perdagangan dan pemeliharaan domba. </p>
                        <div class="position-relative mx-auto">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Layanan Kami</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Jual Kambing & Domba</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Beli Kambing & Domba</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Pelihara Kambing & Domba</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Tabung Qurban</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Cara Kerja</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Daftar/Masuk</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Pilih Hewan Ternak</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Pembayaran</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Konfirmasi Pembayaran</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Pantau Ternak Anda</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Foto Ternak & Kandang</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="{{ asset('landing/img/foto-1.jpeg') }}" class="img-fluid w-100" alt=""
                                        style="height: 150px; object-fit: cover;">
                                    <div class="footer-search-icon">
                                        <a href="{{ asset('landing/img/foto-1.jpeg') }}" data-lightbox="footerGallery-1"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="{{ asset('landing/img/foto-2.jpeg') }}" class="img-fluid w-100" alt=""
                                        style="height: 150px; object-fit: cover;">
                                    <div class="footer-search-icon">
                                        <a href="{{ asset('landing/img/foto-2.jpeg') }}" data-lightbox="footerGallery-2"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="{{ asset('landing/img/foto-3.jpeg') }}" class="img-fluid w-100" alt=""
                                        style="height: 150px; object-fit: cover;">
                                    <div class="footer-search-icon">
                                        <a href="{{ asset('landing/img/foto-3.jpeg') }}" data-lightbox="footerGallery-3"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="{{ asset('landing/img/foto-4.jpg') }}" class="img-fluid w-100" alt=""
                                        style="height: 150px; object-fit: cover;">
                                    <div class="footer-search-icon">
                                        <a href="{{ asset('landing/img/foto-4.jpg') }}" data-lightbox="footerGallery-4"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="{{ asset('landing/img/foto-5.jpeg') }}" class="img-fluid w-100" alt=""
                                        style="height: 150px; object-fit: cover;">
                                    <div class="footer-search-icon">
                                        <a href="{{ asset('landing/img/foto-5.jpeg') }}" data-lightbox="footerGallery-5"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="{{ asset('landing/img/foto-6.jpg') }}" class="img-fluid w-100" alt=""
                                        style="height: 150px; object-fit: cover;">
                                    <div class="footer-search-icon">
                                        <a href="{{ asset('landing/img/foto-6.jpg') }}" data-lightbox="footerGallery-6"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#"><i
                        class="fas fa-copyright text-light me-2"></i>TernakPro.id</a>, 2024-2025.</span>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-pinterest"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Develope By <a class="border-bottom" href="https://htmlcodex.com"><a class="border-bottom"
                            href="#">Muhammad Fakhrizal</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>