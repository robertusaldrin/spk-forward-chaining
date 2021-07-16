  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rule
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rule</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   
<?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
?>
<form class="form-horizontal" action="../admin/module/rule/aksi_edit.php" method="post" onclick="return confirm('Anda yakin ingin Mengubah RULE ?')" enctype="multipart/form-data">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <input type="submit" class="btn btn-warning pull-right" name="edit" value="Ubah Rule">
            </div>
            <!-- /.box-header -->
<div class="box-body table-responsive">
  <table class="table table-bordered">
    
    <tr>
      <th>Penyakit</th>
      <th>G01</th>
      <th>G02</th>
      <th>G03</th>
      <th>G04</th>
      <th>G05</th>
      <th>G06</th>
      <th>G07</th>
      <th>G08</th>
      <th>G09</th>
      <th>G10</th>
      <th>G11</th>
      <th>G12</th>
      <th>G13</th>
      <th>G14</th>
      <th>G15</th>
    </tr>
    
		<?php
  		include "../lib/config.php";
  		include "../lib/koneksi.php";
  		$i=1;
      for ($i=1; $i<=6; $i++){
  		$kueriPenyakit = mysqli_query($kon,"select * from tb_rule");
  		while ($pro=mysqli_fetch_array($kueriPenyakit)){
		?>

    <tr>
      <td><?php echo "P".$i ?></td>
      <td><input style="width: 25px; border: none;" type="text" name="G01<?=$i?>" value="<?php echo $pro['G01'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G02<?=$i?>" value="<?php echo $pro['G02'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G03<?=$i?>" value="<?php echo $pro['G03'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G04<?=$i?>" value="<?php echo $pro['G04'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G05<?=$i?>" value="<?php echo $pro['G05'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G06<?=$i?>" value="<?php echo $pro['G06'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G07<?=$i?>" value="<?php echo $pro['G07'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G08<?=$i?>" value="<?php echo $pro['G08'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G09<?=$i?>" value="<?php echo $pro['G09'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G10<?=$i?>" value="<?php echo $pro['G10'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G11<?=$i?>" value="<?php echo $pro['G11'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G12<?=$i?>" value="<?php echo $pro['G12'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G13<?=$i?>" value="<?php echo $pro['G13'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G14<?=$i?>" value="<?php echo $pro['G14'] ?>"></td>
      <td><input style="width: 25px; border: none;" type="text" name="G15<?=$i?>" value="<?php echo $pro['G15'] ?>"></td>

<!--      
      <
      <td>
      	<?php if($pro['G03'] == "1"){; ?><input type="checkbox" name="G03<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G03<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G04'] == "1"){; ?><input type="checkbox" name="G04<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G04<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G05'] == "1"){; ?><input type="checkbox" name="G05<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G05<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G06'] == "1"){; ?><input type="checkbox" name="G06<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G06<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G07'] == "1"){; ?><input type="checkbox" name="G07<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G07<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G08'] == "1"){; ?><input type="checkbox" name="G08<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G08<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G09'] == "1"){; ?><input type="checkbox" name="G09<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G09<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G10'] == "1"){; ?><input type="checkbox" name="G10<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G10<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G11'] == "1"){; ?><input type="checkbox" name="G11<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G11<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G12'] == "1"){; ?><input type="checkbox" name="G12<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G12<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G13'] == "1"){; ?><input type="checkbox" name="G13<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G13<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G14'] == "1"){; ?><input type="checkbox" name="G14<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G14<?=$i?>" value="1">
      	<?php } ?>
      </td>
      <td>
      	<?php if($pro['G15'] == "1"){; ?><input type="checkbox" name="G15<?=$i?>" value="1" checked="">
      	<?php } else { ?><input type="checkbox" name="G15<?=$i?>" value="1">
      	<?php } ?>
      </td> -->

    </tr>
    <?php $i++; }}?>
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