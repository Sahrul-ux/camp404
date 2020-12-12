<!DOCTYPE html>
<html>
<head>
	<title>Camp 404 | Program Input/Output</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
		</table>
		<button type="submit" name="OK">Submit</button>
	</form><br>
	<?php 
	if(isset($_POST['OK']))
	{
		$a = $_POST['nama'];
		$b = $_POST['alamat'];

		echo "Hai Nama saya $a, dan saya tinggal di $b";
	}


	 ?>

</body>
</html>