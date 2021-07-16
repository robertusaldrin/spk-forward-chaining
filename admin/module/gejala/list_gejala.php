  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gejala
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gejala</li>
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
                <div class="btn btn-primary"><a style="color: white" href="#">Tambah Gejala</a></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
         <table class="table table-hover">
	<tr>
		<th>Kode</th>
		<th>Gejala</th>
		<th style="width: 110px">Aksi</th>
	</tr>

		<?php
		include "../lib/config.php";
		include "../lib/koneksi.php";
		$kueriGejala = mysqli_query($kon,"select * from tb_gejala");
		while ($mrk=mysqli_fetch_array($kueriGejala)){
		?>

	<tr>
		<td><?php echo $mrk['kode']; ?></td>
		<td><?php echo $mrk['gejala']; ?></td>
		<td>
			<div class="btn-group">
				<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_gejala&id=<?php echo $mrk['id'];?>" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
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