<?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<center>Akses ditolak, Anda harus login<br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";
  
  for ($i=1; $i<=6; $i++) {
  $queryEdit = mysqli_query($kon, "UPDATE tb_rule SET G01=".$_POST['G01'.$i].",
                                                      G02=".$_POST['G02'.$i].",
                                                      G03=".$_POST['G03'.$i].",
                                                      G04=".$_POST['G04'.$i].",
                                                      G05=".$_POST['G05'.$i].",
                                                      G06=".$_POST['G06'.$i].",
                                                      G07=".$_POST['G07'.$i].",
                                                      G08=".$_POST['G08'.$i].",
                                                      G09=".$_POST['G09'.$i].",
                                                      G10=".$_POST['G10'.$i].",
                                                      G11=".$_POST['G11'.$i].",
                                                      G12=".$_POST['G12'.$i].",
                                                      G13=".$_POST['G13'.$i].",
                                                      G14=".$_POST['G14'.$i].",
                                                      G15=".$_POST['G15'.$i]."
                                                      WHERE id=$i ");
  } 

  if($queryEdit){
    echo "<script> alert ('Data Rule Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=rule'; </script>";
  } else {
    //echo "<script> alert ('Data Rule Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=rule';</script>";
  }
  
}
?>