<?php

// function to run query
function run($query) {
  global $connect;

  if(mysqli_query($connect, $query)) return true;
  else return false;
}

function result($query) {
  global $connect;

  if ($result = mysqli_query($connect, $query) or die("gagal menampilkan data")) {
    return $result;
  }
}

// tampilkan berita, limit 3 berita.
function tampilkan() {
  $query = "SELECT * FROM berita LIMIT 3";
  return result($query);
}

// tampilkan semua berita
function tampilkanAllBerita() {
  $query = "SELECT * FROM berita";
  return result($query);
}

// tampilkan tag
function tampilkanTag() {
  $query = "SELECT DISTINCT tag FROM berita LIMIT 4";
  return result($query);
}

// tampilkan berita dgn pagination
function tampilkanBanyak($start, $perPage) {
  $query = "SELECT * FROM berita LIMIT $start, $perPage";
  return result($query);
}

// tampilkan galeri
function tampilkanGaleri () {
  $query = "SELECT * FROM gambar ORDER BY id DESC LIMIT 5";
  return result($query);
}

// tampilkan gal[eri dgn pagination
function tampilkanGaleriPagination ($start, $perPage) {
  $query = "SELECT * FROM gambar LIMIT $start, $perPage";
  return result($query);
}

// search function
function search($search) {
  $query = "SELECT * FROM berita WHERE judul LIKE '%$search%'";
  return result($query);
}

function tagSelect($tag) {
  $query = "SELECT * FROM berita WHERE tag= '$tag'";
  return result($query);
}

// tampilkan berita sesuai ID
function tampilkanSatuan($id) {
  $query = "SELECT * FROM berita WHERE id=$id";
  return result($query);
}

// edit blog
function edit_data($judul, $isi, $tag, $id) {
  $query = "UPDATE berita SET judul='$judul', isi='$isi', tag='$tag' WHERE id=$id";
  return run($query);
}

// tambah berita
function tambahBerita($judul, $isi, $tag, $gambar) {
  $query = "INSERT INTO berita (judul, isi, tag, gambar) VALUES ('$judul', '$isi', '$tag', '$gambar')";
  return run($query);
}

// tambah gambar ke galeri
function tambahGambar($target, $teks) {
  $query = "INSERT INTO gambar (gambar, teks) VALUES ('$target', '$teks')";
  return run($query);
}

// excerpt string to limit text shown
function excerpt($string) {
  $string = substr($string, 0, 80);
  return $string . "...";
}

// excerpt string pendek
function excerptPendek($string) {
  $string = substr($string, 0, 20);
  return $string . "...";
}





?>
