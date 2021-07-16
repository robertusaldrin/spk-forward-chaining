  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penyakit
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="adminweb.php?module=penyakit">Penyakit</a></li>
        <li class="active">Edit Penyakit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <center><b>Edit Penyakit</b></center>
                <div class="input-group input-group-sm">
                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
         <table class="table table-hover">

<?php
include "../lib/config.php";
include "../lib/koneksi.php";

$id = $_GET['id'];
$queryEdit = mysqli_query($kon, "SELECT * FROM tb_penyakit WHERE id='$id'");
$hasilQuery = mysqli_fetch_array($queryEdit);

$id = $hasilQuery['id'];

$kode = $hasilQuery['kode'];
$penyakit = $hasilQuery['penyakit'];
$info = $hasilQuery['info'];
$solusi = $hasilQuery['solusi'];
?>

<form class="form-horizontal" action="../admin/module/penyakit/aksi_edit.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="box-body">

      <div class="form-group"> <!-- START Kode -->
        <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="kode" placeholder="Kode" value="<?php echo $kode; ?>"><br>
        </div>
      </div> <!-- END Nama -->

      <div class="form-group"> <!-- START Nama -->
        <label for="inputEmail3" class="col-sm-2 control-label">Penyakit</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="penyakit" placeholder="Penyakit" value="<?php echo $penyakit; ?>"><br>
        </div>
      </div> <!-- END Nama -->

      <div class="form-group"> <!-- START Deskripsi -->
        <label for="inputEmail3" class="col-sm-2 control-label">Info</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="info" placeholder="Info"><?php echo $info; ?></textarea><br>
        </div>
      </div> <!-- END Deskripsi -->

      <div class="form-group"> <!-- START Deskripsi -->
        <label for="inputEmail3" class="col-sm-2 control-label">Solusi</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="solusi" placeholder="Info"><?php echo $solusi; ?></textarea><br>
        </div>
      </div> <!-- END Deskripsi -->

      <div class="form-group"> <!-- START Gambar -->
        <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
        <div class="col-sm-10">
          <input type="checkbox" name="ubah_gambar" value="true"> Checklist jika ingin mengubah gambar
          <input type="file" id="gambar" name="gambar"><br>
        </div>
      </div> <!-- End Gambar -->


    </div> <!-- box-body -->
  <div class="box-footer">
    <a href="adminweb.php?module=penyakit" style="margin-left: 5px" class="btn btn-danger pull-right">Batal</a>
    <button type="sumbit" class="btn btn-primary pull-right">Edit</button>
  </div>
</form>

	
</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>