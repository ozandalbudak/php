<?php
include("database.php");

$alisyeri = $_POST["alisyeri"];
$donusyeri = $_POST["donusyeri"];
$alistarihi = $_POST["alistarihi"];
$donustarihi = $_POST["donustarihi"];
$alissaat = $_POST["alissaat"];
$alisdk = $_POST["alisdk"];
$donussaat = $_POST["donussaat"];
$donusdk = $_POST["donusdk"];
$amm = $_POST["amm"];
$adsoyad = $_POST["adsoyad"];
$stel = $_POST["stel"];
$ctel = $_POST["ctel"];
$mail = $_POST["mail"];
$tarih = date("d/m/Y G:i:s");


$kayit=mysqli_query($db,"insert into kiralama (alisyeri,donusyeri,alistarihi,donustarihi,alissaat,alisdk,donussaat,donusdk,amm,adsoyad,stel,ctel,mail,tarih) values ('$alisyeri', '$donusyeri', '$alistarihi', '$donustarihi', '$alissaat', '$alisdk', '$donussaat', '$donusdk', '$amm', '$adsoyad', '$stel', '$ctel', '$mail', '$tarih')");
if ( $kayit ) {
echo "<script type=\"text/javascript\">alert(\"Kaydiniz Tamamlandi! Sizinle en kisa surede irtibata gececegiz.\");</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}else{
echo "Sorun Oluþtu. Kayýt Eklenemedi!";
}
?>