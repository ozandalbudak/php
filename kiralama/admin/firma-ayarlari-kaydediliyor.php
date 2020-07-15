<?php
include("../database.php");

$editor2 = $_POST["editor1"];


$kayit2=mysqli_query($db,"insert into firma (aciklama) values ('".$editor2."')");
if ( $kayit2 ) {
header("Location: firma-ayarlari.php");
}else
{
echo "Sorun Olustu. Kayýt Eklenemedi!";
}

?>