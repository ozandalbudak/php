<?php
include ("../database.php");
$id = mysql_real_escape_string(strip_tags($_POST['id']));
$duyurub = mysql_real_escape_string(strip_tags($_POST['duyurub']));
$duyuruy = mysql_real_escape_string(strip_tags($_POST['duyuruy']));




$duzenle = mysqli_query($db,"update duyuru set duyurub='$duyurub', duyuruy='$duyuruy' where id='$id'") or die("Hata Olustu! ".mysql_error());
 
header("Location:duyuru-ayarlari.php");

?> 