<?php
@$a=$_POST[a];
@$b=$_POST[b];
@$c=$a;
@$d=$b;

echo("nilai variabel A=$a<br>");
echo("nilai variabel B=$b<br>");
echo("-------------------------<br>");

@$a=$_POST[a];
@$a+=$b;
echo(" $c $d $a<br>");

?>

