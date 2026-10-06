<?php
include("koneksi.php");

$gambar = $_POST["gambar"];
$namabarang = $_POST["namabarang"];
$tempatditemukan = $_POST["tempat"];
$waktuditemukan = $_POST["waktuditemukan"];
$status = $_POST["status"];

mysqli_query($koneksi, "INSERT INTO baranghilang (gambar,namabarang,tempatditemukan,waktuditemukan) 

VALUES ('$gambar, $namabarang, $tempatditemukan, $waktuditemukan, $status')");

header ("location: ");

?>