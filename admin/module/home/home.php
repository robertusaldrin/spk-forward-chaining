<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
<!--        <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <div class="col-lg-3 col-xs-6"> <!-- col -->
          <div class="small-box bg-aqua"> <!-- small box -->
            <div class="inner">
      				<?php
      				include "../lib/config.php";
      				include "../lib/koneksi.php";
      				$kueri = mysqli_query($kon, "SELECT * FROM tb_gejala");
      				$r=mysqli_num_rows($kueri);
      				echo "<h3>$r</h3>"; ?>
              <p>Total Gejala</p>
            </div>
              <div class="icon"><i class="ion ion-stats-bars"></i></div>
                <a href="adminweb.php?module=gejala" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div> <!-- small box -->
        </div> <!-- col -->

        <div class="col-lg-3 col-xs-6"> <!-- col -->
          <div class="small-box bg-green"> <!-- small box -->
            <div class="inner">
              <?php
              include "../lib/config.php";
              include "../lib/koneksi.php";
              $kueri = mysqli_query($kon, "SELECT * FROM tb_penyakit");
              $r=mysqli_num_rows($kueri);
              echo "<h3>$r</h3>"; ?>
              <p>Total Penyakit</p>
            </div>
              <div class="icon"><i class="ion ion-stats-bars"></i></div>
                <a href="adminweb.php?module=penyakit" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div> <!-- small box -->
        </div> <!-- col -->


      </div>  <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>