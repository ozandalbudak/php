<?php
include ("../database.php");
include ("giris.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Yönetim Paneli</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Hosgeldin, <strong>Admin</strong> [ <a href="cikis.php">Çikis</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					
				</div>
			</div>
		</div>
		<div id="nav">

		</div>
	</div>
<?php 
include("../database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from kullanicilar where sira=$id") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?> 
	<div id="content">
		<div id="sidebar">
			<?php include("menu.php");?>
		<div id="main">		
			<div class="clear"></div>
			<div class="full_w">
			
			<div class="h_title">Kullanici Ayarlari</div>
					<form action="kullanici-ayari-kaydediliyor.php" method="post">
					<div class="element">
						<input type="hidden" id="id" name="id" class="text err" value="<?php echo $sor['sira']; ?>"/>
						<label for="uyead">Kullanici Adi <span class="red"></span></label>
						<input id="uyead" name="uyead" class="text err" value="<?php echo $sor['uyeadi']; ?>"/>
					</div>
					<div class="element">
						<label for="uyesifre">Sifreniz <span class="red"></span></label>
						<input type="password" id="uyesifre" name="uyesifre" class="text err" value="<?php echo $sor['uyesifre']; ?>"/>
					</div>

					<div class="entry">
						<button type="submit" class="add">Kaydet</button>
					</div>
				</form>
		</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>

</body>
</html>
