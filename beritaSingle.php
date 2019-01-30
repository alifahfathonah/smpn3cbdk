<?php
require_once "core/init.php";

$id = $_GET['id'];

$id = $_GET['id'];
if (isset($id)) {
  $berita = tampilkanSatuan($id);
  while ($row = mysqli_fetch_assoc($berita)) {
    $judul = $row['judul'];
    $isi = $row['isi'];
    $tag = $row['tag'];
    $gambar = $row['gambar'];
    $waktu = $row['waktu'];
  }
}

$all = tampilkanTag();
$wow = tampilkan();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Berita | <?= $judul ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/snazzy-info-window.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="icon" href="assets/img/logoonly.png">
</head>

<body>

<header class="o-header-secondary">
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
    <div class="container">
      <div class="col-md-9 nopm">
        <div class="o-header-secondary-content pt-50 pb-50">
          <h3 class="color-w"><?= $judul ?></h3>
          <p class="color-w"><?= $waktu ?></p>
        </div>
      </div>
    </div>
</header>

<section class="breadcrumb">
  <div class="container mt-10 mb-10">
    <li><a href="#">Beranda</a></li>
    <li><a href="#">Berita</a></li>
    <li><?= $judul ?></li>
  </div>
</section>

<section class="berita-list">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12">
        <div class="berita-single mt-40 mb-40">
          <div align="center" class="beritaSingle-image">
            <img src="<?= $gambar ?>" alt="" width="70%">
          </div>
          <p class="pb-80"><?= $isi ?></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="berita-kategori mt-40">
          <h5>Berita Kategori</h5>
          <ul>
            <?php while ($row = mysqli_fetch_assoc($all)): ?>
                <li><a href="berita.php?tag=<?= $row['tag']; ?>"><?= ucfirst($row['tag']); ?></a></li>
            <?php endwhile; ?>
          </ul>
        </div>

        <div class="berita-terbaru pb-80">
          <h5 class="pt-20">Berita Terbaru</h5>
          <?php while ($row = mysqli_fetch_assoc($wow)) {
            echo "<div class='berita-small'>";
            echo "<a href='beritaSingle.php?id=".$row['id']."'>";
            echo "<img src='".$row['gambar']."'' alt=''>";
            echo "<p>".excerptPendek($row['judul'])."</p>";
            echo "<div class='clearfix'></div>";
            echo "</a>";
            echo "</div>";
          } ?>
        </div>
      </div>
    </div>
  </div>

</section>

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
</body>

</html>
