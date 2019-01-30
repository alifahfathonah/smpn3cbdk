<?php
  require_once "core/init.php";

    if (isset($_POST['submit'])) {
      $judul      = mysqli_real_escape_string($connect, $_POST['judul']);
      $isi        = mysqli_real_escape_string($connect, $_POST['isi']);
      $tag        = mysqli_real_escape_string($connect, $_POST['tag']);
      $gambar     = $_FILES['gambar']['name'];
      $gambar_tmp = $_FILES['gambar']['tmp_name'];
      $error      = $_FILES['gambar']['error'];
      $size       = $_FILES['gambar']['size'];
      $format     = $_FILES['gambar']['type'];
      $target     = "assets/img/upload/".basename($gambar);
      $time       = time();

      if (!empty(trim($judul).trim($isi))) {
        if (!empty($gambar)) {
          if ($size < 2000000 && $format == 'image/jpeg') {
            if (file_exists($target)) {
              $target = str_replace(".jpg", "", $target);
              $target = $target. "_". $time. ".jpg";
            }
            if (move_uploaded_file($gambar_tmp, $target)) {
              tambahBerita($judul, $isi, $tag, $target);
              echo "berhasil!";
            }
          } else {
            echo "Pastikan ukuran gambar dibawah 2MB dan JPEG!";
          }
        } else {
          echo "Gambar harus di isi!";
        }
      } else {
        echo "Judul dan konten harus di isi!";
      }


    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form action="" method="post" enctype="multipart/form-data">
    <label for="judul">Judul</label> <br>
    <input type="text" name="judul"> <br><br>

    <label for="isi">Isi</label> <br>
    <textarea name="isi" rows="4" cols="40"></textarea> <br><br>

    <label for="tag">Tag</label> <br>
    <input type="text" name="tag" value=""> <br><br>

    <input type="hidden" name="size" value="1000000"> <br><br>
    <input type="file" name="gambar" value="">

    <input type="submit" name="submit" value="submit">

  </form>

  </body>
</html>
