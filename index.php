<?php
  require_once "core/init.php";

  $berita = tampilkan();
  $gambar = tampilkanGaleri();

  $i = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SMP Negeri 3 Cibadak</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/snazzy-info-window.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="icon" href="assets/img/logoonly.png">
</head>

<body>
  <header class="o-header">
    <div class="example3">
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand color-bp" href="#"><img src="assets/img/logoonly.png" alt="Dispute Bills"><span class="color-bp">SMPN 3 Cibadak</span>
          </a>
          </div>
          <div id="navbar3" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="profil.php">Profil</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Siswa <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Kelas 7</a></li>
                  <li><a href="#">Kelas 8</a></li>
                  <li><a href="#">Kelas 9</a></li>
                </ul>
              </li>
              <li><a href="#">Guru</a></li>
              <li><a href="#">Kontak</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lainnya <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="galeri.php">Galeri</a></li>
                  <li><a href="berita.php">Berita</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
      </nav>
    </div>
    <div class="o-header-overlay"></div>
    <div class="o-header-content">
      <div class="container">
        <h1 class="color-w">Selamat datang di website <br>SMPN 3 Cibadak</h1>
        <p class="pt-10 pb-10">Telah berdiri sejak tahun 1999 dan menghasilkan murid-murid <br> yang berkualitas.</p>
        <div class="o-header-button mt-30"><button type="button" class="btn btn-primary">Lihat Profil</button></div>
      </div>
    </div>
  </header>

  <section class="announcement">
    <div class="container">
      <div class="announcement-inner pb-50 pt-50">
        <div class="row">
          <div class="col-md-4">
            <h3 class="color-w pt-15">PPDB 2019</h3>
          </div>
          <div class="col-md-4">
            <p>Pendaftaran untuk siswa baru telah dibuka dan bisa mendaftar secara online.</p>
          </div>
          <div class="col-md-4">
            <div class="announcement-btn pt-20">
              <button class="btn btn-secondary">Daftar disini</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="profile">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="profile-title pt-80">
            <h2 class="color-bp">Profil Sekolah</h2>
            <p class="pt-10">Visi, Misi, dan Fasilitas</p>
            <div align="center" class="pb-40">
              <hr class="barrier">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="profile-visimisi">
            <h5>Visi</h5>
            <p class="pb-20">Terwujudnya insan cerdas, edukatif, religius, integritas, akuntabel dan berbudaya lingkungan.</p>
            <h5>Misi</h5>
            <p>1. Mengembangkan kurikulum sesuai dengan kondisi sekolah dalam peningkatan mutu lulusan yang kompetitif</p>
            <p>2. Mengembangkan pembiasaan pola prilaku warga sekolah yang religius dan humanis</p>
            <p class="pb-40">3. Meningkatkan profesionalisme dan kompetensi pendidik dan tenaga kependidikan</p>
            <a>Selengkapnya</a>
          </div>
        </div>
        <div class="col-md-8 nopm">
          <div class="col-md-4">
            <div class="fasilitas-inner">
              <img src="assets/img/fasilitas-1.png" alt="">
              <h5 class="pt-15 pb-10">Fasilitas Terbaik</h5>
              <p class="pb-50">Dengan kawasan sekolah yang luas.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fasilitas-inner">
              <img src="assets/img/fasilitas-2.png" alt="">
              <h5 class="pt-15 pb-10">Lab Komputer</h5>
              <p class="pb-50">Terdapat 40 unit komputer dan ruangan ber AC.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fasilitas-inner">
              <img src="assets/img/fasilitas-3.png" alt="">
              <h5 class="pt-15 pb-10">Lab IPA</h5>
              <p class="pb-50">Lab IPA lengkap dengan peralatan untuk praktikum.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fasilitas-inner">
              <img src="assets/img/fasilitas-4.png" alt="">
              <h5 class="pt-15 pb-10">Internet</h5>
              <p class="pb-50">Jaringan internet gratis di setiap penjuru sekolah.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fasilitas-inner">
              <img src="assets/img/fasilitas-5.png" alt="">
              <h5 class="pt-15 pb-10">Perpustakaan</h5>
              <p class="pb-50">Tersedia ribuan buku untuk mempermudah proses belajar.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fasilitas-inner">
              <img src="assets/img/fasilitas-6.png" alt="">
              <h5 class="pt-15 pb-10">Akses Air Mudah</h5>
              <p class="pb-80">Akses air yang mudah di setiap depan kelas.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="endPage-button mb-80">
            <button class="btn btn-primary">Selengkapnya</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="berita">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="profile-title pt-80">
            <h2 class="color-bp">Berita</h2>
            <p class="pt-10">Berita Seputar SMP Negeri 3 Cibadak</p>
            <div align="center" class="pb-20">
              <hr class="barrier">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php while ($row = mysqli_fetch_assoc($berita)): ?>
          <div class="col-md-4">
            <div class="berita-card mt-20">
              <div class="berita-header">
                <a href="#"><img src="<?= $row['gambar']; ?>" alt="" class="img-responsive"></a>
              </div>
              <div class="berita-body">
                <h5><?php echo $row['judul']; ?></h5>
                <p class="pt-10 pb-20"><?= excerpt($row['isi']); ?></p>
                <a href="beritaSingle.php?id=<?= $row['id']; ?>">Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="endPage-button pt-80 pb-80">
            <a href="berita.php" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="galeri">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="profile-title pt-80">
            <h2 class="color-bp">Galeri</h2>
            <p class="pt-10">Berita Seputar SMP Negeri 3 Cibadak</p>
            <div align="center" class="pb-40">
              <hr class="barrier">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <?php while ($row = mysqli_fetch_assoc($gambar)): ?>
          <?php if($i < 2): ?>
            <div class="col-md-6 pt-20">
              <div class="galeri-container">
                <a href="#">
                  <img src="<?= $row['gambar'] ?>" class="img-responsive asu">
                  <div class="overlay">
                    <div class="text"><?= $row['teks'] ?></div>
                  </div>
                </a>
              </div>
            </div>
          <?php else: ?>
            <div class="col-md-4 pt-20">
              <div class="galeri-container">
                <a href="#">
                  <img src="<?= $row['gambar'] ?>" class="img-responsive asu">
                  <div class="overlay">
                    <div class="text"><?= $row['teks'] ?></div>
                  </div>
                </a>
              </div>
            </div>
          <?php endif; ?>
          <?php $i++ ?>
        <?php endwhile; ?>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="endPage-button mb-80 mt-60">
            <a href="galeri.php" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>


  </section>

  <div id="map"></div>

  <footer class="footer">
    <div class="container">
      <div class="row pt-50 pb-50">
        <div class="col-md-3 footer-list">
          <h5 class="color-w mb-20">Navigasi</h5>
          <li><a href="#">Home</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Siswa</a></li>
          <li><a href="#">Guru</a></li>
          <li><a href="#">Kontak</a></li>
          <li class="mb-30"><a href="#">Lainnya</a></li>
        </div>
        <div class="col-md-3">
          <h5 class="color-w mb-20">Kontak</h5>
          <p class="color-w mb-40">No. 691, Jalan Raya Karang Tengah, Karangtengah, Cibadak, Sukabumi, Jawa Barat 43351</p>
        </div>
        <div class="col-md-3">
          <h5 class="color-w mb-20">Social Media</h5>
          <div class="mb-40">
            <a href="#"><img src="assets/img/fb.png" alt="" style="width: 45px; padding-top"></a>
            <a href="#" style="padding-left: 10px;"><img src="assets/img/ig.png" alt="" style="width: 45px;"></a>
          </div>
        </div>
        <div class="col-md-3">
          <h5 class="color-w mb-20">Langganan Koran</h5>
          <div class="input-group">
            <input type="text" class="form-control subscribe" placeholder="Daftarkan email disini..">
            <span class="input-group-btn">
              <button class="btn btn-form btn-primary" type="button">Kirim</button>
            </span>
          </div>
          <!-- /input-group -->
        </div>
      </div>
    </div>
  </footer>

  <footer class="footerSecondary">
    <div class="container">
      <p class="pt-10 pb-10">Powered by Farhan &copy; 2019.</p>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script src="assets/js/snazzy-info-window.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>
