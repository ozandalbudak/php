<?php
include("../database.php");
$id = $_GET["id"];
$sil = mysqli_query($db,"DELETE FROM sss WHERE id='$id'");
if($sil){
header("Location:sss-ayarlari.php");
}else{
echo "Kayit silinemedi.";
}
?> 	