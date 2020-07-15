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
				<p>Hoşgeldin, <strong>Admin</strong> [ <a href="cikis.php">Çıkış</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					
				</div>
			</div>
		</div>
		<div id="nav">

		</div>
	</div>
	<div id="content">
		<div id="sidebar">
			<?php include("menu.php");?>
		<div id="main">		
			<div class="clear"></div>
			<div class="full_w">
<?php 
include("../database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query(@$db,"select * from araclar where id=$id") or die("Hata Olustu! ".mysql_error());
$sor = mysqli_fetch_assoc($calistir);
?> 
			<div class="h_title">Araç Ekle</div>
					<form action="arac-duzenleniyor.php" method="post" enctype="multipart/form-data">
					<div class="element">
						<input type="hidden" name="id" value="<?php echo $sor['id']; ?>"/>
						<label for="amm">Araç Marka ve Modeli <span class="red">* Örneğin: Audi A5 3.0 TDI </span></label>
						<input id="amm" name="amm" class="text err" value="<?php echo $sor['amm']; ?>"/>
					</div>
					<div class="element">
						<label for="kapi">Kapı Sayısı <span class="red"></span></label>
						<input id="kapi" name="kapi" class="text err" value="<?php echo $sor['kapi']; ?>"/>
					</div>
					<div class="element">
						<label for="yolcu">Yolcu Kapasiyesi<span class="red"></span></label>
						<input id="yolcu" name="yolcu" class="text err" value="<?php echo $sor['yolcu']; ?>"/>
					</div>
					<div class="element">
						<label for="bagaj">Bagaj Kapasitesi <span class="red"></span></label>
						<input id="bagaj" name="bagaj" class="text err" value="<?php echo $sor['bagaj']; ?>"/>
					</div>
					<div class="element">
						<label for="vites">Vites <span class="red"></span></label>
						<input id="vites" name="vites" class="text err" value="<?php echo $sor['vites']; ?>"/>
					</div>
					<div class="element">
						<label for="klima">Klima <span class="red"></span></label>
						<input id="klima" name="klima" class="text err" value="<?php echo $sor['klima']; ?>"/>
					</div>
					<div class="element">
						<label for="yakit">Yakıt <span class="red"></span></label>
						<input id="yakit" name="yakit" class="text err" value="<?php echo $sor['yakit']; ?>"/>
					</div>
					<div class="element">
						<label for="birinci">1-3 Gün Arası Fiyat<span class="red"></span></label>
						<input id="birinci" name="birinci" class="text err" value="<?php echo $sor['birinci']; ?>"/>
					</div>
					<div class="element">
						<label for="ikinci">4-10 Gün Arası Fiyat<span class="red"></span></label>
						<input id="ikinci" name="ikinci" class="text err" value="<?php echo $sor['ikinci']; ?>"/>
					</div>
					<div class="element">
						<label for="ucuncu">11-30 Gün Arası Fiyat<span class="red"></span></label>
						<input id="ucuncu" name="ucuncu" class="text err" value="<?php echo $sor['ucuncu']; ?>"/>
					</div>
					<div class="entry">
						<button type="submit" class="add">Kaydet</button>
					</div>
				</form>
				<br>
		</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>

</body>
</html>
