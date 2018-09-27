<form method="GET" action=" " enctype="multipart/form-data">
	GENRE FILM <br>
	horror <input type="checkbox" name="genre[]" value="horror">
	action <input type="checkbox" name="genre[]" value="action">
	anime <input type="checkbox" name="genre[]" value="anime">
	thriller <input type="checkbox" name="genre[]" value="thriller">
	animasi <input type="checkbox" name="genre[]" value="animasi"><br><br>
	TUJUAN TRAVEL <br>
	Bali <input type="checkbox" name="travel[]" value="Bali">
	Raja Ampat <input type="checkbox" name="travel[]" value="Raja Ampat">
	Pulau Derawan <input type="checkbox" name="travel[]" value="Pulau Derawan">
	Bangka Belitung <input type="checkbox" name="travel[]" value="Bangka Belitung">
	Labuan Bajo <input type="checkbox" name="travel[]" value="Labuan Bajo"><br><br>

	Masukan FOTO<br><input type="file" name="foto"><br><br>
	<input type="submit" name="upload" value="upload">
	<input type="submit" name="delete" value="delete">
</form>
<?php  
if (isset($_GET['upload'])) {
	$m = $_GET['travel'];
	$n = $_GET['genre'];
	echo "GENRE film yang di pilih : <br>";
	foreach ($n as $key) {
		echo $key.'<br>';	
	}

	echo "<br>";
	echo "TUJUAN Travel di : <br>";
	foreach ($m as $tra) {
		echo $tra.'<br>';	
	}

	$upload = 'Foto/';
	$uploadFile = $upload.basename($_FILES['foto']['name']);
	$namePhoto = $_FILES['foto']['name'];

	if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadFile)) {
	 echo "<img src='Foto/$namePhoto'>";	
	}
	
	if (isset($_GET['delete'])) {
		foreach ($m as $m) {
			unset($m);
		}

		foreach ($n as $n) {
			unset($n);
		}
	}
}
?>
