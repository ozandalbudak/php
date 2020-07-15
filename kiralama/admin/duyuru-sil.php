<?php
include("../database.php");
$id = $_GET["id"];
$sil = mysqli_query($db,"DELETE FROM duyuru WHERE id='$id'");
if($sil){
header("Location:duyuru-ayarlari.php");
}else{
echo "Kayit silinemedi.";
}
?> 	