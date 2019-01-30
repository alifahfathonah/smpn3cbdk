<?php
  require_once "core/init.php";

  $id = $_GET['id'];
  if (isset($id)) {
    $berita = tampilkanSatuan($id);
    while ($row = mysqli_fetch_assoc($berita)) {
      $judulAwal = $row['judul'];
      $isiAwal = $row['isi'];
      $tagAwal = $row['tag'];
    }
  }

  if (isset($_POST['submit'])) {
    $judul = mysqli_real_escape_string($connect, $_POST['judul']);
    $isi = mysqli_real_escape_string($connect, $_POST['isi']);
    $tag = mysqli_real_escape_string($connect, $_POST['tag']);

    // check if $judul and $isi is not empty, proceed to edit_data
    if (!empty(trim($judul).trim($isi))) {
      if (edit_data($judul, $isi, $tag, $id)) {
        header('Location: index.php');
      }
    } else {
      $error = 'judul dan konten harus di isi';
    }
  }
?>

<form action="" method="post">
  <label for="judul">Judul</label> <br>
  <input type="text" name="judul" value="<?= $judulAwal ?>"> <br><br>

  <label for="isi">Isi</label> <br>
  <textarea name="isi" rows="4" cols="40"><?= $isiAwal ?></textarea> <br><br>

  <label for="tag">Tag</label> <br>
  <input type="text" name="tag" value="<?= $tagAwal ?>"> <br><br>

  <input type="submit" name="submit" value="submit">

</form>
