<?php 
include "../lib/koneksi.php";

$username = $_POST['username'];
$pass = $_POST['password'];

if(!ctype_alnum($username) OR !ctype_alnum($pass)){
  echo "<center>LOGIN GAGAL! <br>
        Username atau Password Salah.<br>";
  echo "<a href = index.php><b>Ulangi Lagi</b></a></center>";
} else {
  $login = mysqli_query($kon,"SELECT * FROM tbl_admin WHERE username='$username' AND password='$pass'");
  $ketemu = mysqli_num_rows($login);
  $r = mysqli_fetch_array($login);

  if($ketemu > 0){
    session_start();

    $_SESSION[id] = $r[id];
    $_SESSION['namauser'] = $r['username'];
    $_SESSION['passuser'] = $r['password'];
    $_SESSION['nama'] = $r['nama'];

    header('location:adminweb.php?module=home');
  } else {
    echo "<center>LOGIN GAGAL! <br>
          Username atau Password Salah.";
    echo "<a href=index.php><br><b>Ulangi Lagi</b></a></center>";
  }
}
?>