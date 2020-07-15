<?php
include("../database.php");
$id = $_GET["id"];
$sil = mysqli_query($db,"DELETE FROM kiralama WHERE id='$id'");
if($sil){
header("Location:index.php");
}else{
echo "Kayit silinemedi.";
}
?> 	