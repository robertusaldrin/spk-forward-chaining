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
	<h4 align="center" class="col-sm-12" style="padding-top: 10px;">Silahkan Pilih Beberapa Gejala di Bawah</h4><hr>

	<center><form style="padding-top: 0px;" action="proses.php" method="post">
	<div style="overflow: scroll; height: 317;">
	<?php
	$qry="select * from tb_gejala";
	$data=mysqli_query($kon,$qry);
	while ($d=mysqli_fetch_array($data)) {
	?>
		<div class="input-group mb-2">
		<div class="input-group-prepend">
    	<div class="input-group-text">
		<input type="checkbox" value="<?=$d['kode']?>" name="<?=$d['id']?>">
    	</div>
		</div>
  		<input type="text" disabled="" class="form-control" value="<?=$d['kode']?>   |   <?=$d['gejala']?>">
		</div>
	<?php
	}
	?>
  </div>
	<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Diagnosis">
	</form></center>

  	</div>
</div>


</div><!-- end Content -->

</div>
<br>
</body>
</html>