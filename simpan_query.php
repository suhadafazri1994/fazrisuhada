<?php
$server=mysql_connect("localhost","root","");

$db=mysql_select_db("arkademy");

$name=$_POST[name];
$work=$_POST[work];
$salary=$_POST[salary];

$Simpan=("INSERT INTO query (name,work,salary) VALUES ('".$name."','".$work."','".$salary."')");

$proses=mysql_query($Simpan);
if($proses)
{
	header("location: index.php");
}
else
{
	echo("DATA TIDAK TERSIMPAN");
}
?>