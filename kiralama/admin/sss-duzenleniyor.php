<?php
include ("../database.php");
$id = mysqli_real_escape_string($db,strip_tags($_POST['id']));
$sssb = mysqli_real_escape_string($db,strip_tags($_POST['sssb']));
$sssa = mysqli_real_escape_string($db,strip_tags($_POST['sssa']));




$duzenle = mysqli_query($db,"update sss set sssb='$sssb', sssa='$sssa' where id='$id'") or die("Hata Olustu! ".mysql_error());
 
header("Location:sss-ayarlari.php");

?> 