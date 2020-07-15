<?php
include ("../database.php");
$id = $_POST['id'];
$uyead = $_POST['uyead'];
$uyesifre = $_POST['uyesifre'];




$duzenle = mysqli_query($db,"update kullanicilar set uyeadi='$uyead', uyesifre='$uyesifre' where sira='$id'") or die("Hata Olustu! ".mysql_error());
 
header("Location:kullanici-ayari.php");

?> 