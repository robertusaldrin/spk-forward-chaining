<?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<center>Akses ditolak, Anda harus login<br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";

  $id = $_POST['id'];
  $kode = $_POST['kode'];
  $gejala = $_POST['nama_gejala'];
  $queryEdit = mysqli_query($kon, "UPDATE tb_gejala SET gejala='$gejala',kode='$kode' WHERE id='$id'");

  if($queryEdit){
    echo "<script> alert ('Data Gejala Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=gejala'; </script>";
  } else {
    echo "<script> alert ('Data Gejala Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=gejala';</script>";
  }
  
}
?>