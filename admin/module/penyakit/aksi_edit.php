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
  $penyakit = $_POST['penyakit'];
  $info = $_POST['info'];
  $solusi = $_POST['solusi'];
  
  if(isset($_POST['ubah_gambar'])){ //if[1] Checklist ubah gambar
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    $gambarbaru = date("m.d.Y-h.i.s") . $nama_file; //rename gambar baru

    $path = "../../upload/" . $gambarbaru; //path file baru diupload + rename
    $path_old = "../../upload/"; //path file lama
      if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ //if Tipe File
        if($ukuran_file <=1000000){ //1MB foto
          if(move_uploaded_file($tmp_file, $path)){ //if upload gambar
           $querySelect = mysqli_query($kon, "SELECT * FROM tb_penyakit WHERE id='$id'");
           $pro=mysqli_fetch_array($querySelect);

            if(is_file($path_old.$pro['gambar']))
              unlink($path_old.$pro['gambar']);

          $queryEdit = mysqli_query($kon, "UPDATE tb_penyakit SET kode='$kode', penyakit='$penyakit', info='$info', solusi='$solusi', gambar='$gambarbaru' WHERE id='$id'");
  
            if($queryEdit){ //if berhasil diubah
            echo "<script> alert ('Data Penyakit Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=penyakit'; </script>";
            } else { //else berhasil diubah
            echo "<script> alert ('Data Penyakit Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=penyakit';</script>";
            }

          } else { // else upload gambar
          echo "<script> alert ('Data Gambar Produk Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=penyakit';</script>";
          }
        } else { //else 1MB foto
          echo "<script> alert ('Data Gambar Produk Gagal Dimasukkan Karena Ukuran Melebihi 1 MB'); window.location = '$admin_url'+'adminweb.php?module=penyakit';</script>";
        }
      } else { //else Tipe File
        echo "<script> alert ('Data Gambar Produk Gagal Dimasukkan Karena Tidak Berekstensi JPG/ JPEG/ PNG'); window.location = '$admin_url'+'adminweb.php?module=penyakit';</script>";
      }

  } else { //else Checklist ubah foto
    $queryEdit = mysqli_query($kon, "UPDATE tb_penyakit SET kode='$kode', penyakit='$penyakit', info='$info', solusi='$solusi' WHERE id='$id'");

    if($queryEdit){ //if berhasil diubah
      echo "<script> alert ('Data Penyakit Berhasil Diubah [Gambar Tetap]'); window.location = '$admin_url'+'adminweb.php?module=penyakit'; </script>";
      } else { //else berhasil diubah
      echo "<script> alert ('Data Penyakit Gagal Diubah [Gambar Tetap]'); window.location = '$admin_url'+'adminweb.php?module=penyakit';</script>";
      }
  }// end else[1] Checklist


}// end else SESSION }
?>