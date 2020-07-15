<?php
include("../database.php");

$editor1 = $_POST["editor1"];


$kayit=mysqli_query($db,"insert into transfer (aciklama) values ('".$editor1."')");
if ( $kayit ) {
header("Location: transfer-hizmeti.php");
}else{
echo "Sorun Oluþtu. Kayýt Eklenemedi!";
}

?>