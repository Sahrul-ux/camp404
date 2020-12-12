<!DOCTYPE html>
<html>
<head>
	<title>Camp 404 | Program Input/Output</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Input 1</td>
				<td><input type="text" namespace="angka 1" name="angka_1"></td>
			</tr>
			<tr>
				<td>Input 2</td>
				<td><input type="text" namespace="angka 2" name="angka_2"></td>
			</tr>
		</table>
		<button type="submit" name="hasil">Submit</button>
	</form><br>
	<?php 
	$result = 0;
	if(isset($_POST['hasil']))
	{
		$a1 = $_POST['angka_1'];
		$a2 = $_POST['angka_2'];
		$result = $a1 + $a2;
	}
	 ?>
	 <table>
	 	<tr>
	 		<td>Hasil</td>
	 		<td><?php echo $result; ?></td>
	 	</tr>
	 </table>

</body>
</html>