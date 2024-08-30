<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Form Pengisian Feedback - TernakPro</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Roboto', sans-serif;
        }

        .navbar {
            background-color: #f8f9fa;
        }

        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
        }

        .navbar-brand h1 {
            margin: 0;
        }

        .footer {
            color: #ffffff;
            padding: 1rem 0;
            text-align: center;
            margin-top: auto;
        }

        .footer .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .navbar-nav.mobile-menu {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-nav .nav-link {
                padding: 0.5rem 1rem;
                text-align: left;
            }

            .navbar-toggler {
                margin-right: auto;
            }
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 56px);
            /* Mengatur tinggi minimum agar sesuai dengan tinggi viewport minus header/footer */
            flex-direction: column;
        }

        .card-body {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
            margin-bottom: 1rem;
            /* Spasi antara baris */
        }

        .col-4 {
            font-weight: bold;
            /* Teks yang tebal untuk label */
            text-align: right;
            /* Rata kanan untuk label */
        }

        .col-8 {
            text-align: left;
            /* Rata kiri untuk nilai */
        }

        .detail-table {
            width: 100%;
            margin-top: 1rem;
            /* Jarak atas dari konten tabel */
        }

        .detail-table th,
        .detail-table td {
            vertical-align: middle;
            text-align: left;
        }

        .detail-table th {
            width: 30%;
            /* Lebar kolom label */
        }

        .detail-table td {
            width: 70%;
            /* Lebar kolom nilai */
        }

        .card-body {
            padding: 1.5rem;
            /* Tambah padding di dalam card-body */
        }


        .footer {
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-light navbar-expand-xl fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand ms-3">
                <h4 class="text-primary display-9">
                    @Auth
                    Welcome, {{ Auth::user()->name }}
                    @endauth
                </h4>
            </a>
            <button class="navbar-toggler py-2 px-3 me-3" type="button" data-toggle="collapse"
                data-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ ('/awal/#carouselId') }}" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="{{ ('/awal/#about') }}" class="nav-link">Tentang Kami</a></li>
                    <li class="nav-item"><a href="{{ ('/awal/#services') }}" class="nav-link">Layanan Kami</a></li>
                    <li class="nav-item"><a href="{{ ('/awal/#howto') }}" class="nav-link">Cara Kerja</a></li>
                    <li class="nav-item"><a href="{{ ('/awal/#contact') }}" class="nav-link">Kontak</a></li>
                    <li class="nav-item"><a href="{{ ('/awal/#feedback') }}" class="nav-link">Data Feedback</a></li>
                </ul>
                <div class="d-flex align-items-center flex-nowrap pt-xl-0 ms-3">
                    <a href="{{ '/home' }}" class="btn-hover-bg btn btn-primary text-white py-2 px-4">Pantau Ternak Anda</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div class="container mt-5 content">
        <div class="card">
            <div class="card-header">
                Data Feedback TernakPro - {{ $data_awal->nama_lengkap }}
            </div>
            <div class="card-body">
                <table class="table table-bordered detail-table">
                    <tbody>
                        <tr>
                            <th scope="row">Nama Lengkap</th>
                            <td>{{ $data_awal->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <th scope="row">No. Telepon</th>
                            <td>{{ $data_awal->no_tlp }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email Aktif</th>
                            <td>{{ $data_awal->email_aktif }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Rating Bintang</th>
                            <td>{{ $data_awal->rating }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Pesan/Saran</th>
                            <td>{{ $data_awal->pesan_saran }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-left mt-3">
                    <a href="{{ ('/awal/#feedback') }}" class="btn btn-primary btn-sm">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

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
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top">
        <i class="fa fa-arrow-up"></i>
    </a>

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
    <script>
        $(window).on('load', function () {
            $('#spinner').fadeOut('slow', function () {
                $(this).remove();
            });
        });
    </script>
</body>

</html>