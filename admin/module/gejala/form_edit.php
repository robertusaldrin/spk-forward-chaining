  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gejala
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="adminweb.php?module=gejala">Gejala</a></li>
        <li class="active">Edit Gejala</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <center><b>Edit Gejala</b></center>
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
$queryEdit = mysqli_query($kon, "SELECT * FROM tb_gejala WHERE id='$id'");

$hasilQuery = mysqli_fetch_array($queryEdit);
$id = $hasilQuery['id'];
$kode = $hasilQuery['kode'];
$namaGejala = $hasilQuery['gejala'];
?>

<form class="form-horizontal" action="../admin/module/gejala/aksi_edit.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="box-body">

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="kode" placeholder="Kode" value="<?php echo $kode; ?>"><br>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nama Gejala</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_gejala" placeholder="Nama Gejala" value="<?php echo $namaGejala; ?>">
        </div>
      </div>


    </div> <!-- box-body -->

  <div class="box-footer">
    <a href="adminweb.php?module=gejala" style="margin-left: 5px" class="btn btn-danger pull-right">Batal</a>
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