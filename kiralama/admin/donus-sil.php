<?php
include("../database.php");
$id = $_GET["id"];
$sil = mysqli_query($db,"DELETE FROM donus WHERE id='$id'");
if($sil){
header("Location:alis-donus-ayarlari.php");
}else{
echo "Kayit silinemedi.";
}
?> 	