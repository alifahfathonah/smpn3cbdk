<?php

  $dbHost = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "sekolah";

  $connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

  if(!$connect) {
    die("gagal konek db gan" . mysqli_error());
  }

?>
