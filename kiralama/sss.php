<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-type" content="text/html;charset=windows-1254"/> 


<?php 
include("database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from sss where id=$id") or die("Hata Olustu! ".mysql_error());
$sor = mysqli_fetch_assoc($calistir);
?> 

<body bgcolor="#000000">

<font face="Verdana" color=#FFFF00 size="2"><b><?php echo $sor['sssb']; ?></b></font><br><br>

<font face="Verdana" color=#FFFFFF size="2"><?php echo $sor['sssa']; ?></font>