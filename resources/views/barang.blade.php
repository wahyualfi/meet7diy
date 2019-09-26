<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Input Data Barang</h3>
	<form method="post" action="/input-barang">
		@csrf
		<p>
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" required="required">
		</p>
		<p>
			<label>Harga</label>
			<input type="number" name="harga_barang">
		</p>
		<p>
			<label>Jumlah</label>
			<input type="number" name="qty_barang">
		</p>
		<p>
			<button type="submit">SIMPAN</button>
		</p>
	</form>
</body>
</html>