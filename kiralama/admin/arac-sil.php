<?php
include("../database.php");
$id = $_GET["id"];
$sil = mysqli_query($db,"DELETE FROM araclar WHERE id='$id'");
if($sil){
header("Location:arac-listesi.php");
}else{
echo "arac silinmedi.";
}
?> 	
