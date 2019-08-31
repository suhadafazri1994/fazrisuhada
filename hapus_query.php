<?php

include "koneksi.php";


$id = $_GET['id'];


$query = "SELECT * FROM query WHERE id='".$id."'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql); 

$query2 = "DELETE FROM query WHERE id='".$id."'";
$sql2 = mysqli_query($connect, $query2);
if($sql2){ 
	
	header("location: index.php"); 
}else{

	echo "Data gagal dihapus.";
}
?>
