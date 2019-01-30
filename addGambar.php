<?php
  require_once "core/init.php";

    if (isset($_POST['submit'])) {
      $teks       = mysqli_real_escape_string($connect, $_POST['teks']);
      $gambar     = $_FILES['gambar']['name'];
      $gambar_tmp = $_FILES['gambar']['tmp_name'];
      $error      = $_FILES['gambar']['error'];
      $size       = $_FILES['gambar']['size'];
      $format     = $_FILES['gambar']['type'];
      $target     = "assets/img/galeri/".basename($gambar);
      $time       = time();

      if (!empty(trim($teks))) {
        if (!empty($gambar)) {
          if ($size < 2000000 && $format == 'image/jpeg') {
            if (file_exists($target)) {
              $target = str_replace(".jpg", "", $target);
              $target = $target. "_". $time. ".jpg";
            }
            if (move_uploaded_file($gambar_tmp, $target)) {
              tambahGambar($target, $teks);
              echo "berhasil!";
            }
          } else {
            echo "Pastikan ukuran gambar dibawah 2MB dan JPEG!";
          }
        } else {
          echo "Gambar harus di isi!";
        }
      } else {
        echo "Teks harus diisi!";
      }


    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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

  <form action="" method="post" enctype="multipart/form-data">
    <label for="teks">Masukkan teks</label> <br>
    <input type="text" name="teks"> <br><br>
    <input type="file" name="gambar" value="">

    <input type="submit" name="submit" value="submit">

  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
