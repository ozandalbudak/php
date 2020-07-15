<?php
include("../database.php");

$amm = $_POST["amm"];
$kapi = $_POST["kapi"];
$yolcu = $_POST["yolcu"];
$bagaj = $_POST["bagaj"];
$vites = $_POST["vites"];
$klima = $_POST["klima"];
$yakit = $_POST["yakit"];
$birinci = $_POST["birinci"];
$ikinci = $_POST["ikinci"];
$ucuncu = $_POST["ucuncu"];

$kaynak =$_FILES['file']['tmp_name'];
$isim =$_FILES['file']['name'];
$tip =$_FILES['file']['type'];
$buyukluk =$_FILES['file']['size'];

$rand =substr(md5(uniqid(rand())),0,5); 

$desteklenenformatlar = array ("image/jpeg","image/pjpeg","image/png","image/gif"); 
$kaydedilecekyer = "aracresimleri"; 

if (in_array ($_FILES['file']['type'], $desteklenenformatlar)) 
{ 

$dosya = $kaydedilecekyer . "/".$rand.$_FILES['file']['name']; 

if (move_uploaded_file ($_FILES['file']['tmp_name'], $dosya)) 
{ 
header("Location: arac-listesi.php"); 
echo "<font color = '#009900'><b>Dosyaniz basarili bir sekilde yuklendi!</b></font>"."<br/><br/>"; 
echo "<b>Dosyanizin ismi :</b> "."$isim"."<br/>"; 
echo "<b>Dosyanizin tipi : </b>"."$tip"."<br/>"; 
echo "<b>Dosyanizin buyuklugu : </b>"."$buyukluk"."kb'tir"."<br/>"; 
} 
} 
if (mysqli_query($db,"INSERT INTO araclar (id,aracresmi,amm,kapi,yolcu,bagaj,vites,klima,yakit,birinci,ikinci,ucuncu) VALUES ('null', '$dosya', '$amm', '$kapi', '$yolcu', '$bagaj', '$vites', '$klima', '$yakit', '$birinci', '$ikinci', '$ucuncu') ")) 
{ 
echo "<br><br>Veritabanýna Kayýt Edildi !";  
} 
else { 
echo"<br><br>Veritabanýna Kayýt Edilemedi !"; 
} 


?>