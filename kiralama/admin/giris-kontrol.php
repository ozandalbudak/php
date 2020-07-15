<?php
session_start(); //oturum ba�lat�l�yor

include ("../database.php");

$uyead = strip_tags(mysqli_real_escape_string($db,$_POST['uyead'])); //�ye ad�n� k�t� huylu ki�ilerden korumak i�in al�nm�� bir �nlemdir(-->,",' bu t�r sald�r�lar� engellemek i�in)

$sifre = strip_tags(mysqli_real_escape_string($db,$_POST['sifre']));// �ifreyi k�t� huylu ki�ilerden korumak i�in al�nm�� bir �nlemdir(<,>,",' bu t�r sald�r�lar� engellemek i�in) 

if($sifre == "" || $uyead == "") {
echo "L�tfen T�m Alanlar� Doldurun"; // e�er �ye ad� ve �ifre bo� i�e bo� alanlar� doldurunuz
} else { 

$sifre = ($sifre); //�ifreyi �ifreliyor

$sql = mysqli_query($db,"select * from kullanicilar where uyeadi='$uyead' and uyesifre='$sifre'"); //girilen �ye ad� ve �ifre ile veritaban�ndaki ad ile �ifre e�le�tiriliyor

$uyevarmi = mysqli_num_rows($sql); // b�yle bir �ye varm� sorgusu yap�l�yor

if($uyevarmi == 0) { //e�er e�le�miyorsa b�yle bir �ye yok ise 

echo "�yelik bilgileri bulunamad�, tekrar deneyin"; //�yelik bilgileri bulunamad� tekrar deneyin

} else { //e�le�iyorsa

$uyebilgi = mysqli_fetch_assoc($sql); // veri taban�ndaki bilgiler ��z�l�r

$_SESSION['uye'] = $uyebilgi['uyeadi']; //oturum ba�lat�l�r

echo "admin sayfas�na y�nlendiriliyorsunuz";
echo "<script>location.href='genel-ayarlar.php';</script>"; // admin.php sayfas�na y�nlendiriliyorsunuz

} // if($uyevarmi == 0) kontrol� biti�i 

} // if($sifre == "" || $uyead == "") kontrol� biti�i
?>
