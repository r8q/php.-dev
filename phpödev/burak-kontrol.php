<?php 
//formadan gelen verileri alma 
//$_GET
//$_POST
//$_REQUEST
error_reporting(0);
if ($_POST) {
	$ad=$_POST['ad'];
	echo("Adınız: ".$ad."<br>");

	$sad=$_POST['sad'];
	echo ("Soyadınız: ".$sad."<br>");

	$cns=$_POST['cns'];
	echo ("Cinsiyet: ".$cns."<br>");

	$Meslek=$_POST['Meslek'];
	echo ("Mesleğiniz: ".$Meslek."<br>");

	$hobi=$_POST['hobi']; 

	foreach ($hobi as $key => $value) {
	echo "Hobileriniz: ".$value."<br>";
	}

}

 ?>

