<?php
include("database.php");

$adsoyad = $_POST["adsoyad"];
$stel = $_POST["stel"];
$ctel = $_POST["ctel"];
$mail = $_POST["mail"];
$mesaj = $_POST["mesaj"];
$tarih = date("d/m/Y G:i:s");

$kayit=mysqli_query($db,"insert into iletisim (adsoyad,stel,ctel,mail,mesaj,tarih) values ('$adsoyad', '$stel', '$ctel', '$mail', '$mesaj', '$tarih')");
if ( $kayit ) {
echo "<script type=\"text/javascript\">alert(\"Mesajiniz Gonderildi!\");</script>";
echo '<meta http-equiv="refresh" content="0;URL=bize-ulasin.php">';
}else{
echo "Sorun Oluþtu. Kayýt Eklenemedi!";
}
?>