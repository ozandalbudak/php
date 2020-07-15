<?php
include("../database.php");

$donus = $_POST["donus"];

$kayit=mysqli_query($db,"insert into donus (donus) values ('$donus')");
if ( $kayit ) {
header("Location: alis-donus-ayarlari.php");
}else{
echo "Sorun Oluþtu. Kayýt Eklenemedi!";
}
?>