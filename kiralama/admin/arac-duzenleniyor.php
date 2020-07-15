<?php
include ("../database.php");
$id = mysql_real_escape_string(strip_tags($_POST['id']));
$amm = mysql_real_escape_string(strip_tags($_POST['amm']));
$kapi = mysql_real_escape_string(strip_tags($_POST['kapi']));
$yolcu = mysql_real_escape_string(strip_tags($_POST['yolcu']));
$bagaj = mysql_real_escape_string(strip_tags($_POST['bagaj']));
$vites = mysql_real_escape_string(strip_tags($_POST['vites']));
$klima = mysql_real_escape_string(strip_tags($_POST['klima']));
$yakit = mysql_real_escape_string(strip_tags($_POST['yakit']));
$birinci = mysql_real_escape_string(strip_tags($_POST['birinci']));
$ikinci = mysql_real_escape_string(strip_tags($_POST['ikinci']));
$ucuncu = mysql_real_escape_string(strip_tags($_POST['ucuncu']));



$duzenle = mysqli_query($db,"update araclar set amm='$amm', kapi='$kapi', yolcu='$yolcu', bagaj='$bagaj', vites='$vites', klima='$klima', yakit='$yakit', birinci='$birinci', ikinci='$ikinci', ucuncu='$ucuncu' where id='$id'") or die("Hata Olustu! ".mysql_error());
 
header("Location:arac-listesi.php");

?> 