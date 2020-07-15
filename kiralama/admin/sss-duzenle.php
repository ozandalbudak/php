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

			<div class="full_w">
				<div class="h_title">S.S.S Ayarları</div>
				
<?php 
include("../database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from sss where id=$id") or die("Hata Olustu! ".mysql_error());
$sss = mysqli_fetch_assoc($calistir);
?> 
				
				<form action="sss-duzenleniyor.php" method="post">
					<div class="element">
						<input type="hidden" name="id" value="<?php echo $sss['id']; ?>" class="text err"/>
						<label for="sssb">Yazı Başlığı <span class="red">* 30 karakterden fazla yazılmamalı..</span></label>
						<input id="sssb" name="sssb" value="<?php echo $sss['sssb']; ?>" class="text err"/>
					</div>
					<div class="element">
						<label for="sssa">Açıklama<span></span></label>
						<textarea name="sssa" class="textarea" rows="10"><?php echo $sss['sssa']; ?></textarea>
					</div>
					<div class="entry">
						<button type="submit" class="add">Düzenle</button>
					</div>
				</form>



		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>

</body>
</html>