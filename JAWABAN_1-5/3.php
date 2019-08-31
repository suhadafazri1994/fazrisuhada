<!DOCTYPE html>
<html>
<head>
	<title> Jawaban Soal Nomor 3 </title>
</head>
<body>

	

	<form action="" method="POST">
		Masukan angka 
		<input type="text" name="angka">
		<input type="submit" name="enter" value="Proses">
	</form>

	<?php 

		if (isset($_POST["enter"])) {
			$nil = $_POST["angka"];

			for ($i=1; $i<=$nil ; $i++) { 
				for($b = 1; $b <= $i; $b++){
					echo $i."\n";
				}
				echo"<br>";
			}
		}

	 ?>


</body>
</html>