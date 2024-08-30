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
            font-size: 24px;
        }

        .form-container {
            background-color: #ffffff;
            border: 1px solid #e3e3e3;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 30px 0;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #343a40;
        }

        .form-container .form-group {
            margin-bottom: 15px;
        }

        .form-container .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
        }

        .form-container .btn-primary {
            border-radius: 4px;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 1rem 0;
            text-align: center;
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

        .content-wrapper {
            flex: 1;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
        }

        .btn-hover-bg {
            transition: background-color 0.3s;
        }

        .btn-hover-bg:hover {
            background-color: #0056b3;
        }

        .btn-hover-color {
            transition: color 0.3s;
        }

        .btn-hover-color:hover {
            color: #0056b3;
        }

        .btn-square {
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 4px;
            background-color: #343a40;
        }

        .copyright {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-light navbar-expand-xl fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand ms-3">
              <h4 class="text-primary display-9">
                @Auth
                Welcome, {{ Auth::user()->name }}
                @endauth
              </h4>
            </a>
            <button class="navbar-toggler py-2 px-3 me-3" type="button" data-toggle="collapse" data-target="#navbarCollapse">
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
                    <a href="{{ '/hewan' }}" class="btn-hover-bg btn btn-primary text-white py-2 px-4">Pantau Ternak Anda</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header"></div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container">
              <br>
              <br>
                <div class="form-container">
                  <form action="{{ route('hewan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nama_pemilik">Nama Pemilik</label>
                      <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required>
                    </div>
                    <div class="form-group">
                      <label for="tlp_pemilik">Telepon Pemilik</label>
                      <input type="number" class="form-control" id="tlp_pemilik" name="tlp_pemilik" required>
                    </div>
                    <div class="form-group">
                      <label for="email_pemilik">Email Pemilik</label>
                      <input type="email" class="form-control" id="email_pemilik" name="email_pemilik" required>
                    </div>
                    <div class="form-group">
                      <label for="jenis_hewan">Jenis Hewan</label>
                      <input type="text" class="form-control" id="jenis_hewan" name="jenis_hewan" required>
                    </div>
                    <div class="form-group">
                      <label for="tanggal_masuk">Tanggal Masuk Kandang</label>
                      <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
                    </div>
                    <div class="form-group">
                      <label for="tanggal_pemantauan">Tanggal Pemantauan</label>
                      <input type="date" class="form-control" id="tanggal_pemantauan" name="tanggal_pemantauan" required>
                    </div>
                    <div class="form-group">
                      <label for="berat_badan">Berat Badan (kg)</label>
                      <input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
                    </div>
                    <div class="form-group">
                      <label for="suhu_tubuh">Suhu Tubuh (°C)</label>
                      <input type="number" class="form-control" id="suhu_tubuh" name="suhu_tubuh" required>
                    </div>
                    <div class="form-group">
                      <label for="kondisi_kesehatan">Kondisi Kesehatan</label>
                      <input type="text" class="form-control" id="kondisi_kesehatan" name="kondisi_kesehatan" required>
                    </div>
                    <div class="form-group">
                      <label for="perubahan_fisik">Perubahan Fisik</label>
                      <input type="text" class="form-control" id="perubahan_fisik" name="perubahan_fisik" required>
                    </div>
                    <div class="form-group">
                      <label for="jenis_pakan">Jenis Pakan</label>
                      <input type="text" class="form-control" id="jenis_pakan" name="jenis_pakan" required>
                    </div>
                    <div class="form-group">
                      <label for="jumlah_pakan">Jumlah Pakan (kg)</label>
                      <input type="number" class="form-control" id="jumlah_pakan" name="jumlah_pakan" required>
                    </div>
                    <div class="form-group">
                      <label for="frekuensi_pakan">Frekuensi Pakan (Kali per Hari)</label>
                      <input type="number" class="form-control" id="frekuensi_pakan" name="frekuensi_pakan" required>
                    </div>
                    <div class="form-group">
                      <label for="kondisi_kandang">Kondisi Kandang</label>
                      <input type="text" class="form-control" id="kondisi_kandang" name="kondisi_kandang" required>
                    </div>
                    <div class="form-group">
                      <label for="suhu_lingkungan">Suhu Lingkungan (°C)</label>
                      <input type="number" class="form-control" id="suhu_lingkungan" name="suhu_lingkungan" required>
                    </div>
                    <div class="form-group">
                      <label for="kelembapan_lingkungan">Kelembapan Lingkungan (%)</label>
                      <input type="number" class="form-control" id="kelembapan_lingkungan" name="kelembapan_lingkungan" required>
                    </div>
                    <div class="form-group">
                      <label for="pemberian_obat">Pemberian Obat</label>
                      <input type="text" class="form-control" id="pemberian_obat" name="pemberian_obat" required>
                    </div>
                    <div class="form-group">
                      <label for="tindakan_perawatan">Tindakan Perawatan</label>
                      <input type="text" class="form-control" id="tindakan_perawatan" name="tindakan_perawatan" required>
                    </div>
                    <div class="form-group">
                      <label for="catatan">Catatan</label>
                      <textarea class="form-control" id="catatan" name="catatan"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="status_kesehatan">Status Kesehatan</label>
                      <input type="text" class="form-control" id="status_kesehatan" name="status_kesehatan" required>
                    </div>
                    <div class="form-group">
                      <label for="rekomendasi_tindakan">Rekomendasi Tindakan</label>
                      <input type="text" class="form-control" id="rekomendasi_tindakan" name="rekomendasi_tindakan" required>
                    </div>
                    <div class="form-group">
                      <label for="tanggal_keluar">Tanggal Keluar</label>
                      <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                  </form>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
      <div class="container">
          <div class="row g-4 align-items-center">
              <div class="col-md-4 text-center text-md-start mb-md-0">
                  <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>TernakPro.id</a>, 2024-2025.</span>
              </div>
              <div class="col-md-4 text-center">
                  <div class="d-flex align-items-center justify-content-center">
                      <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                      <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                      <a href="#" class="btn-hover-color btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="col-md-4 text-center text-md-end text-body">
                  <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                  <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                  <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                  Develope By <a class="border-bottom" href="https://htmlcodex.com"><a class="border-bottom" href="#">Muhammad Fakhrizal</a>
              </div>
          </div>
      </div>
  </div>
  <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>
