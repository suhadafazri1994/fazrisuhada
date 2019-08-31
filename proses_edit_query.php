<?php

include "koneksi.php";

$id = $_GET['id'];


$name = $_POST['name'];
$work = $_POST['work'];
$salary = $_POST['salary'];

if($sql){ 
	
	}else{ 

	$query = "UPDATE query SET name='".$name."', work='".$work."', salary='".$salary."'
							       WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		header("location: index.php"); 
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='data_baju.php'>Kembali Ke Form</a>";
	}
}
?>
