<?php
include("../database.php");
$id = $_GET["id"];
$sil = mysqli_query($db,"DELETE FROM sliderayarlari WHERE id='$id'");
if($sil){
header("Location:slider-ayari.php");
}else{
echo "Kayit silinemedi.";
}
?> 	