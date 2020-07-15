<?php
include("../database.php");
$id = $_GET["id"];
$sil = mysqli_query($db,"DELETE FROM iletisim WHERE id='$id'");
if($sil){
header("Location:mesaj-ayarlari.php");
}else{
echo "Kayit silinemedi.";
}
?> 	