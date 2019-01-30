<?php
require_once "core/init.php";

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
          <h3 class="color-w">Visi Misi</h3>
        </div>
      </div>
    </div>
</header>

<section class="breadcrumb">
  <div class="container mt-10 mb-10">
    <li><a href="index.php">Beranda</a></li>
    <li>Profil</li>
  </div>
</section>

<section class="berita-list">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12">
        <div class="berita-single mt-40 mb-40">
          <h5 class="pb-10">Visi</h5>
          <p>TERWUJUDNYA INSAN  CERDAS, EDUKATIF, RELEGIUS, INTEGRITAS, AKUNTABEL DAN BERBUDAYA LINGKUNGAN</p>
          <h5 class="pb-10 pt-10">Misi</h5>
          <p>1. Mengembangkan kurikulum sesuai dengan kondisi sekolah dalam peningkatan mutu lulusan yang kompetitif<br>
          2. Mengembangkan pembiasaan pola prilaku warga sekolah yang religius dan humanis<br>
          3. Meningkatkan profesionalisme dan kompetensi pendidik dan tenaga kependidikan berbasis IT<br>
          4. Meningkatkan kemampuan warga sekolah dalam IPTEK serta kearifan budaya lokal<br>
          5. Mengembangkan potensi peserta didik yang kreatif, inovatif, berkualitas, dan berakhlak mulia<br>
          6. Mewujudkan akuntabilitas dan transparansi program kegiatan untuk memepertahankan Sekolah Standar Nasional dan Adiwiyata Nasional<br>
          7. Mewujudkan  lingkungan sekolah yang bersih, rapi, indah, dan aman<br>
          8. Mengembangkan fasilitas pendidikan sesuai dengan kebutuhan pembelajaran<br>
          9. Mengembangkan standar penilaian yang normatif, objektif, dan akuntabel<br>
          10. Menanamkan kepedulian soasial dan semangat kebangsaan<br>
          11. Mewujudkan budaya disiplin bagi seluruh warga sekolah<br>
          12. Mengembangkan jiwa cinta alam dan pelestarian lingkungan hidup<br>
          13. Menciptakan pribadi yang peduli kesehatan dan lingkungan<br>
          14. Meningkatkan peran serta warga sekolah, orangtua peserta didik dan pemerintah dalam pengembangan pengelolaan sekolah.<br></p>
          <h5 class="pb-10 pt-10">Tujuan</h5>
          <p>1. Tersusunnya Kurikulum sekolah yang sesuai dengan kondisi sekolah.<br>
          2. Adanya peningkatan mutu lulusan setiap tahun dengan peningkatan hasil rata-rata ujian minimal 0,5 pertahun pelajaran<br>
          3. Berkembangnya budaya sekolah yang relegius melalui kegiatan keagamaan, bertutur kata, bergaul, dan berprilaku sehari-hari<br>
          4. Seluruh warga sekolah membudayakan senyum, sapa, salam dalam kehidupan sehari-hari<br>
          5. Tenaga pendidik dan kependidikan profesional, kompeten, dan berprestasi dalam melaksanakan tupoksi yang  berbasis IT dan karakter bangsa<br>
          6. Warga sekolah memiliki wawasan IPTEK yang sesuai dengan kebutuhan masa depan<br>
          7. Warga sekolah memiliki pembiasaan dalam mengembangkan budaya daerah (bahasa dan budaya Sunda) dengan program “sehari nyunda”<br>
          8. Berkembangnya potensi, bakat, minat, kreativitas peserta didik melalui kegiatan ekstrakurikuler yang terprogram serta peran sertanya dalam berbagai lomba sain,  olahraga, seni budaya, dan bahasa pada setiap jenjang, baik regional, nasional, maupun internasional<br>
          9. Mempertahankan status sekolah sebagai sekolah SSN, terakreditasi A, dan sekolah Adiwiyata Nasional<br>
          10. Terwujudnya sekolah yang bersih, sehat, indah, nyaman, dan aman<br>
          11. Tersedianya fasilitas pendidikan yang refresentatif untuk pembelajaran<br>
          12. Tersusunnya pedoman penilaian yang objektif, normatif, dan akuntabel pada setiap tahapan penilaian hasil pembelajaran<br>
          13. Menyelenggarakan berbagai kegiatan dan kepekaan sosial yang menjadi bagian dari pendidikan karakter bangsa<br>
          14. Menyelenggarakan kegiatan penanaman semangat kebangsaan dan patriotisme<br>
          15. Terciptanya budaya disiplin dalam diri warga sekolah<br>
          16. Terciptanya budaya cinta alam dan pelestarian lingkungan hidup<br>
          17. Terciptanya pola hidup sehat, baik untuk pribadi maupun lingkungan sekolah<br>
          18. Terwujudnya peran serta warga sekolah, orangtua, dan pemerintah dalam pengelolaan dan pengembangan sekolah<br></p>
          <h5 class="pb-10 pt-10">Motto Juang</h5>
          <p>S3 CERIA BERBUDI (Cerdas, Edukatif, Relegius, Integritas, Akuntabel, dan Berbudaya Lingkungan)</p>
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
            echo "<a href='beritaSingle.php?id='".$row['id']."'>";
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
    <div class="row pt-80 pb-80">
      <div class="col-md-3 footer-list">
        <h5 class="color-w">Navigasi</h5>
        <li class="pt-20"><a href="#">Home</a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="#">Siswa</a></li>
        <li><a href="#">Guru</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="#">Lainnya</a></li>
      </div>
      <div class="col-md-3">
        <h5 class="color-w">Kontak</h5>
        <p class="pt-20 color-w">No. 691, Jalan Raya Karang Tengah, Karangtengah, Cibadak, Sukabumi, Jawa Barat 43351</p>
      </div>
      <div class="col-md-3">
        <h5 class="color-w">Social Media</h5>
        <div class="pt-20">
          <a href="#"><img src="assets/img/fb.png" alt="" style="width: 45px; padding-top"></a>
          <a href="#" style="padding-left: 10px;"><img src="assets/img/ig.png" alt="" style="width: 45px;"></a>
        </div>
      </div>
      <div class="col-md-3">
        <h5 class="color-w">Langganan Koran</h5>
        <div class="input-group pt-20">
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
