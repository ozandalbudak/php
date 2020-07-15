<?php
include("../database.php");

$kaynak =$_FILES['file']['tmp_name'];
$isim =$_FILES['file']['name'];
$tip =$_FILES['file']['type'];
$buyukluk =$_FILES['file']['size'];

$rand =substr(md5(uniqid(rand())),0,5); 

$desteklenenformatlar = array ("image/jpeg","image/pjpeg","image/png","image/gif"); 
$kaydedilecekyer = "images"; 

if (in_array ($_FILES['file']['type'], $desteklenenformatlar)) 
{ 

$dosya = $kaydedilecekyer . "/".$rand.$_FILES['file']['name']; 

if (move_uploaded_file ($_FILES['file']['tmp_name'], $dosya)) 
{ 
header("Location: genel-ayarlar.php"); 
echo "<font color = '#009900'><b>Dosyaniz basarili bir sekilde yuklendi!</b></font>"."<br/><br/>"; 
echo "<b>Dosyanizin ismi :</b> "."$isim"."<br/>"; 
echo "<b>Dosyanizin tipi : </b>"."$tip"."<br/>"; 
echo "<b>Dosyanizin buyuklugu : </b>"."$buyukluk"."kb'tir"."<br/>"; 
} 
} 
if (mysqli_query($db,"INSERT INTO logo (id, logo) VALUES ('null', '$dosya') ")) 
{ 
echo "<br><br>Veritabanýna Kayýt Edildi !";  
} 
else { 
echo"<br><br>Veritabanýna Kayýt Edilemedi !"; 
} 


?>