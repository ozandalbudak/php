<?php
include("../database.php");

$alis = $_POST["alis"];

$kayit=mysqli_query($db,"insert into alis (alis) values ('$alis')");
if ( $kayit ) {
header("Location: alis-donus-ayarlari.php");
}else{
echo "Sorun Oluþtu. Kayýt Eklenemedi!";
}
?>