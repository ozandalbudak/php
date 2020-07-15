<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php 
include("../database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from kiralama where id=$id") or die("Hata Olustu! ".mysql_error());
$sor = mysqli_fetch_assoc($calistir);
?> 

<body bgcolor="#F3F3F3">

<p><font face="Tahoma">
<b>Alış Bilgisi :</b> <?php echo $sor['alisyeri']; ?> - <?php echo $sor['alistarihi']; ?> - <?php echo $sor['alissaat']; ?>:<?php echo $sor['alisdk']; ?><br>
<b>Dönüş Bilgisi :</b> <?php echo $sor['donusyeri']; ?> - <?php echo $sor['donustarihi']; ?> - <?php echo $sor['donussaat']; ?>:<?php echo $sor['donusdk']; ?><br>
<b>Araç Markası :</b> <?php echo $sor['amm']; ?><br>
<b>Ad Soyad :</b> <?php echo $sor['adsoyad']; ?><br>
<b>Sabit Tel :</b> <?php echo $sor['stel']; ?><br>
<b>Cep Tel :</b> <?php echo $sor['ctel']; ?><br>
<b>Mail :</b> <?php echo $sor['mail']; ?></font> </p>


