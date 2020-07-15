<?php
session_start(); //oturum baþlatýlýyor

include ("../database.php");

$uyead = strip_tags(mysqli_real_escape_string($db,$_POST['uyead'])); //üye adýný kötü huylu kiþilerden korumak için alýnmýþ bir önlemdir(-->,",' bu tür saldýrýlarý engellemek için)

$sifre = strip_tags(mysqli_real_escape_string($db,$_POST['sifre']));// þifreyi kötü huylu kiþilerden korumak için alýnmýþ bir önlemdir(<,>,",' bu tür saldýrýlarý engellemek için) 

if($sifre == "" || $uyead == "") {
echo "Lütfen Tüm Alanlarý Doldurun"; // eðer üye adý ve þifre boþ iþe boþ alanlarý doldurunuz
} else { 

$sifre = ($sifre); //þifreyi þifreliyor

$sql = mysqli_query($db,"select * from kullanicilar where uyeadi='$uyead' and uyesifre='$sifre'"); //girilen üye adý ve þifre ile veritabanýndaki ad ile þifre eþleþtiriliyor

$uyevarmi = mysqli_num_rows($sql); // böyle bir üye varmý sorgusu yapýlýyor

if($uyevarmi == 0) { //eðer eþleþmiyorsa böyle bir üye yok ise 

echo "üyelik bilgileri bulunamadý, tekrar deneyin"; //üyelik bilgileri bulunamadý tekrar deneyin

} else { //eþleþiyorsa

$uyebilgi = mysqli_fetch_assoc($sql); // veri tabanýndaki bilgiler çözülür

$_SESSION['uye'] = $uyebilgi['uyeadi']; //oturum baþlatýlýr

echo "admin sayfasýna yönlendiriliyorsunuz";
echo "<script>location.href='genel-ayarlar.php';</script>"; // admin.php sayfasýna yönlendiriliyorsunuz

} // if($uyevarmi == 0) kontrolü bitiþi 

} // if($sifre == "" || $uyead == "") kontrolü bitiþi
?>
