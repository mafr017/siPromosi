<?php
require "function.php";
  // Cek tombol submit
  if (isset($_POST["submit"])) {
    if (krmPesan($_POST) > 0) {
      echo "
        <script>
          alert('Pesan berhasil dikirim!');
          if ( window.history.replaceState ) {
              window.history.replaceState( null, null, window.location.href );
          }
        </script>";
    } else {
      echo "
        <script>
          alert('Pesan gagal dikirim!');
          document.location.href = 'index.php';
        </script>
      ";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sistem Informasi Strategi Promosi CV. CINTEK" />
  <meta name="author" content="Muhammad Adityo Fathur Rahim" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <title>SI Strategi Promosi CV. CINTEK</title>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #deb881">
    <div class="container">
      <a class="navbar-brand" href="#">CV. CIHANJUANG INTI TEKNIK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mitra">Kemitraan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <img src="assets/img/cintek-logo.png" alt="Logo CV.CINTEK" width="200" class="rounded-circle bg-light p-1" />
    <h1 class="display-4">
      Selamat Datang!
      <br />
      <small class="display-6">Di Website CV. Cihanjuang Inti Teknik</small>
    </h1>
    <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
      featured content or information.</p> -->
    <!-- <hr class="my-4" />
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Tentang Kami -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Tentang Kami</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col">
          <p>
            Perusahaan dengan nama CV. Cihanjuang Inti Teknik atau biasa disingkat menjadi CV. CINTEK yang berlokasi di
            Cimahi Utara, Bandung tepatnya Jalan Cihanjuang No.204 ini telah berdiri sejak tahun 1998 oleh Bapak Eddy
            Permadi.
            Perusahaan ini bergerak pada 2 (dua) bidang usaha yang berbeda yaitu di bidang industri manufaktur yang
            memproduksi Pembangkit Listrik Tenaga Mikro Hidro (PLTMH) serta bergerak di bidang makanan dan minuman yang
            memproduksi
            makanan dan minuman instan tradisional khas Jawa Barat dengan nama merek dagang Hanjuang.
          </p>
        </div>
      </div>
      <hr />
      <div class="row justify-content-center text-center">
        <div class="col-md">
          <h4>Visi</h4>
          <ul class="text-start">
            <li>Energi sebagai sumber pemberdayaan ekonomi masyarakat.</li>
            <li>Manfaatkan potensi alam yang terabaikan.</li>
            <li>Mendorong upaya penyelamatan lingkungan.</li>
            <li>Pengembangan Teknologi Bisnis.</li>
          </ul>
        </div>
        <div class="col-md">
          <h4>Misi</h4>
          <ul class="text-start">
            <li>Memberikan hasil produk yang dapat dimanfaatkan masyarakat.</li>
            <li>Produk Hanjuang sebagai penggerak ekonomi pedesaan</li>
            <li>Dapat dijadikan sebagai tempat penelitian untuk kemajuan Pendidikan di Indonesia.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhirr Tentang Kami -->

  <!-- Produk -->
  <section id="product">
    <div class="container">
      <div class="row text-center mb-3">
        <h2>Produk Kami</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="assets/img/kantong.jpg" class="card-img-top" alt="Produk 1" />
            <div class="card-body">
              <p class="card-text">Minuman Tradisional Kemasan Kantong</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="assets/img/kantong.jpg" class="card-img-top" alt="Produk 2" />
            <div class="card-body">
              <p class="card-text">Minuman Tradisional Kemasan Kantong</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="assets/img/kantong.jpg" class="card-img-top" alt="Produk 3" />
            <div class="card-body">
              <p class="card-text">Minuman Tradisional Kemasan Kantong</p>
            </div>
          </div>
        </div>
        <!-- Kemasan Renteng -->
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="assets/img/renteng.png" class="card-img-top" alt="Produk 4" />
            <div class="card-body">
              <p class="card-text">Minuman Tradisional Kemasan Renteng</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="assets/img/renteng.png" class="card-img-top" alt="Produk 5" />
            <div class="card-body">
              <p class="card-text">Minuman Tradisional Kemasan Renteng</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="assets/img/renteng.png" class="card-img-top" alt="Produk 6" />
            <div class="card-body">
              <p class="card-text">Minuman Tradisional Kemasan Renteng</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Produk -->

  <!-- Kemitraan -->
  <section id="mitra">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Kemitraan</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col">
          <img src="assets/img/mitra.jpg" alt="Logo CV.CINTEK" class="bg-light p-1 mb-3" width="700"
            style="max-width: 100%;" />
          <p>
            Produk Hanjuang saat ini telah banyak tersebar bukan hanya di Bandung-Jawa Barat saja, akan tetapi telah
            beredar pula di berbagai provinsi di Indonesia. Mulai dari Banten, DI Yogyakarta, Jakarta, Jambi, Jawa
            Tengah, Jawa Timur, Lampung, Riau, Sumatera Barat, Sumatera Selatan, dan akan masih terus bertambah sampai
            saat ini. Bergabunglah sebagai mitra penjualan produk hanjuang kami! Dan dapatkan banyak keuntungan yang
            akan diperoleh sebagai mitra penjualan kami dalam memasarkan produk Hanjuang ini.
          </p>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Akhir Kemitraan -->

  <!-- Kontak -->
  <section id="product">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Kontak Kami</h2>
        </div>
      </div>
      <div class="row">
        <div class="col mb-3">
          <p>Untuk informasi lebih lanjut perihal CV. Cihanjuang Inti Teknik dapat menghubungi kontak atau datang ke
            alamat dibawah ini:</p>
          <dl>
            <dt>Kontak CV. Cihanjuang Inti Teknik
            <dd>Email : info@hanjuang.co.id, hanjuang204@yahoo.com<br>Telp: 022-6640814
            <dt>Alamat CV. Cihanjuang Inti Teknik
            <dd>Alamat : Jl. M. Daeng Ardiwinata / Cihanjuang No.204, RT.06/RW.11, Kel. Cibabat, Kec. Cimahi Utara, Kota
              Cimahi, 40513 Jawa Barat
          </dl>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col">
          <p>Anda juga dapat mengirim pesan kepada kami mengenai keluhan, kritik, ataupun saran yang ditujukan untuk
            perusahaan atau produk kami dengan mengisi form dibawah ini:</p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center mb-3">
          <b>Form Pengisian Pesan Keluhan/Kritik/Saran CV. CINTEK</b>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="nama_pengirim" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama_pengirim" class="form-control" id="nama_pengirim" required />
            </div>
            <div class="mb-3">
              <label for="notelp_pengirim" class="form-label">No Telepon</label>
              <input type="tel" name="notelp_pengirim" class="form-control" id="notelp_pengirim" maxlength="13"
                placeholder="08*********" required />
            </div>
            <div class="mb-3">
              <label for="email_pengirim" class="form-label">Email</label>
              <input type="email" name="email_pengirim" class="form-control" id="email_pengirim" required />
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <select name="jenis_pesan" id="pesan" class="form-select mb-3" required>
                <option value="">Pilih Jenis Pesan</option>
                <option value="Keluhan">Keluhan</option>
                <option value="Kritik">Kritik</option>
                <option value="Saran">Saran</option>
              </select>
              <textarea class="form-control" name="isi_pesan" id="pesan" rows="3"
                placeholder="Isi pesan yang ingin disampaikan" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn" style="background-color: #deb881">Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Kontak -->

  <!-- Footer -->
  <div class="text-center text-muted p-1" style="background-color: #f6cd90">Copyright &copy; CV. Cihanjuang Inti Teknik
    2021</div>
  <!-- Akhir Footer -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>