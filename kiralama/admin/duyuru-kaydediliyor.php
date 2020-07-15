<?php
include("../database.php");

$duyurub = $_POST["duyurub"];
$duyuruy = $_POST["duyuruy"];

$kayit=mysqli_query($db,"insert into duyuru (duyurub,duyuruy) values ('$duyurub', '$duyuruy')");
if ( $kayit ) {
header("Location: duyuru-ayarlari.php");
}else{
echo "Sorun Oluþtu. Kayýt Eklenemedi!";
}
?>