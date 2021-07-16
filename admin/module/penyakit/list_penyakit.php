  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penyakit
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penyakit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   
<?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="btn btn-primary"><a style="color: white" href="#">Tambah Penyakit</a></div>
            </div>
            <!-- /.box-header -->
<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <tr>
      <th style="width: 10%">Kode</th>
      <th style="width: 10%">Penyakit</th>
      <th style="width: 10%">Gambar</th>
      <th style="width: 30%">Info</th>
      <th style="width: 30%">Solusi</th>
      <th style="width: 10%">Aksi</th>
    </tr>

		<?php
  		include "../lib/config.php";
  		include "../lib/koneksi.php";
  		$kueriPenyakit = mysqli_query($kon,"select * from tb_penyakit");
  		while ($pro=mysqli_fetch_array($kueriPenyakit)){
		?>

    <tr>
      <td><?php echo $pro['kode']; ?></td>
      <td><?php echo $pro['penyakit']; ?></td>
      <td>
        <img src="upload/<?php echo $pro['gambar']; ?>" height="100" width="150">
      </td>
      <td><?php echo substr($pro['info'],0,150); ?>...</td>
      <td><?php echo substr($pro['solusi'],0,150); ?></td>
      
      <td>
        <div class="btn-group">
				  <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_penyakit&id=<?php echo $pro['id'];?>" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
        </div>
      </td>
    </tr>
    <?php } ?>

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