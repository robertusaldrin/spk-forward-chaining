<?php session_start(); require_once "lib/koneksi.php"; ?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="shortcut icon" href="admin/asset/dist/fav.png"><!-- ICON WEB -->

  <title>Sistem Pakar Diagnosis Penyakit Ikan Koi | Forward Chaining</title>
  <style type="text/css">
        .aa:hover, .aa:visited, .aa{
        color:white;
        text-decoration: none;
        }
    </style>
</head>

<body style="background: url(img/bg1.jpg) no-repeat fixed; background-size: 100% 100%;"><br>
<div class="container" style="background-color: white; bottom: 0px; opacity: 0.95;"><br>
    <div style="background: url(img/hhc1.jpg) no-repeat;background-size: 100% 100%; padding: 20px; ">
      <h3 align="center" style="padding-top: 10px; font-family: Tahoma; color: white;"><a class="aa" href="index.php">SISTEM PAKAR DIAGNOSIS PENYAKIT IKAN KOI</a><br></h3>
      <font style="color: white;font-size: 8pt; float: right;">&copy; 2020 Robertus Aldrin Pangemanan & Kurniawan Yuditya Pratama</font>
    </div>


<div class="tab-content" id="myTabContent">


<div class="row" style="padding: 20px">
  <div class="col-sm-12" style="border: solid 1px #bababa;">
  <h4 align="center" class="col-sm-12" style="padding-top: 10px;">Hasil Diagnosis</h4><hr>

  <table cellpadding="10px" cellspacing="10px" align="center">
    <tr style="border-bottom: solid 1pt black;">
      <td>Penyakit</td>
      <td>:</td>
      <td><?php echo $penyakit; ?></td>
    </tr>
    <tr style="border-bottom: solid 1pt black;">
      <td>Foto</td>
      <td>:</td>
      <td><a target="_blank" href="admin/upload/<?php echo $gambar;?>"><img style="width: 320px" src="admin/upload/<?php echo $gambar;?>" class="img-responsive"/></a></td>
    </tr>
    <tr style="border-bottom: solid 1pt black;">
      <td>Informasi Penyakit</td>
      <td>:</td>
      <td><?php echo $info; ?></td>
    </tr>
    <tr>
      <td>Solusi</td>
      <td>:</td>
      <td><?php echo $solusi; ?></td>
    </tr>
  </table>

<br>
    </div>
</div>


</div><!-- end Content -->

</div>
<br>
</body>
</html>