<?php
	$q = $_GET["q"];
	include("koneksi.php");
	
	$sql = "SELECT * FROM customer WHERE id = '".$q."'";
	$result = mysql_query($sql);
	$l = mysql_fetch_array($result);
	?>

<div class="form-group">
	<label class="control-label" for="inputSuccess">Jenis barang</label>
	<input type="text" class="form-control" disabled="disabled" value="<?=$l['nama']?>">
</div>
<div class="form-group">
	<label class="control-label" for="inputSuccess">Harga Barang</label>
	<input type="text" class="form-control" disabled="disabled" value="<?=$l['alamat']?>">
</div>	
<div class="form-group">
	<label class="control-label" for="inputSuccess">Harga Jual</label>
	<input type="text" class="form-control" name="jual">
</div>
<div class="form-group">
	<label class="control-label" for="inputSuccess">Jumlah Barang</label>
	<input type="text" class="form-control" name="jumlah">
</div>
<div class="form-actions">
	<button type="submit" name="beli" class="btn btn-g">Beli</button>
</div>
<input type="hidden" name="kode_b" value="<?=$l['kode']?>"/>
<input type="hidden" name="jenis" value="<?=$l['jenis']?>"/>
<input type="hidden" name="harga" value="<?=$l['harga']?>"/>