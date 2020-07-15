<?php
include("../database.php");

$sitebasligi = $_POST["sitebasligi"];
$googleanahtar = $_POST["googleanahtar"];
$footer = $_POST["footer"];
$siteadresi = $_POST["siteadresi"];
$yetkili = $_POST["yetkili"];
$mail = $_POST["mail"];
$stel = $_POST["stel"];
$ctel = $_POST["ctel"];
$adres = $_POST["adres"];
$maps = $_POST["maps"];
$havadurumu = $_POST["havadurumu"];
$facebook = $_POST["facebook"];

$kayit=mysqli_query($db,"update genelayarlar set sitebasligi='$sitebasligi',googleanahtar='$googleanahtar',footer='$footer',siteadresi='$siteadresi',yetkili='$yetkili',mail='$mail',stel='$stel',ctel='$ctel',adres='$adres',maps='$maps',havadurumu='$havadurumu',facebook='$facebook' where id=24");
if ( $kayit ) {
header("Location: genel-ayarlar.php");
}else{
echo "Sorun Oluþtu. Kayýt Eklenemedi!";
}
?>