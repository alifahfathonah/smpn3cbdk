<?php
require_once "core/init.php";

$perPage = 4;
$page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
$articles = tampilkanBanyak($start, $perPage);

$result = mysqli_query($connect, "SELECT * FROM berita");
$total = mysqli_num_rows($result);

$pages = ceil($total/$perPage);

$all = tampilkanTag();
$wow = tampilkan();

if (isset($_GET['submit'])) {
  $search = $_GET['search'];
  $articles = search($search);
}

if (isset($_GET['tag'])) {
  $tag = $_GET['tag'];
  $articles = tagSelect($tag);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Berita | SMP Negeri 3 Cibadak</title>
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
        <div class="col-md-6 nopm">
          <div class="o-header-secondary-content pt-80 pb-80">
            <h3 class="color-w">Berita</h3>
            <p class="color-w pt-10 pb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum alias officiis libero, nihil voluptatum mollitia autem nulla sed nostrum, doloribus numquam ipsam magnam error porro dolorem hic natus nobis perspiciatis.</p>
            <div class="notice-form">
              <form method="get">
                <input type="search" name="search" class="input-email" placeholder="Pencarian berita" />
                <input type="submit" name="submit" class="btn btn-submit"/>
              </form>
            </div>
          </div>
        </div>
      </div>
  </header>

  <section class="breadcrumb">
    <div class="container mt-10 mb-10">
      <li><a href="index.php">Beranda</a></li>
      <li>Berita</li>
    </div>
  </section>

  <section class="berita-list">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-12">
          <?php while ($row = mysqli_fetch_assoc($articles)): ?>
            <div class="berita-item pt-50 pb-50">
              <div class="row">
                <div class="col-md-5">
                  <img src="<?= $row['gambar'] ?>" alt="" width="100%;">
                </div>
                <div class="col-md-7">
                  <h5 class="mt-minus-5"><?= $row['judul'] ?></h5>
                  <p class="timestamp nopm">23 Januari 2001, oleh <a href="#">admin</a></p>
                  <p class="pt-10 pb-20"><?= excerpt($row['isi']) ?></p>
                  <a href="#" class="mt-10"><?= ucfirst($row['tag']) ?></a>
                  <a href='beritaSingle.php?id=<?= $row['id']?>' class="btn btn-primary" style="float: right;">Baca</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>

          <div class="pagination pt-10 pb-10">
            <?php for ($i=1; $i <= $pages; $i++) { ?>
              <a href="?halaman=<?= $i ?>"><?= $i ?></a>
            <?php } ?>
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
