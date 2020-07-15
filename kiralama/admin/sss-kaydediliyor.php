<?php
include("../database.php");

$sssb = $_POST["sssb"];
$sssa = $_POST["sssa"];

$kayit=mysqli_query($db,"insert into sss (sssb,sssa) values ('$sssb', '$sssa')");
if ( $kayit ) {
header("Location: sss-ayarlari.php");
}else{
echo "Sorun Oluþtu. Kayýt Eklenemedi!";
}
?>