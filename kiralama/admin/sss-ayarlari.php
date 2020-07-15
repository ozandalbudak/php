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
<?
include ("../database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
	<div id="content">
		<div id="sidebar">
			<?php include("menu.php");?>
		<div id="main">		

			<div class="full_w">
				<div class="h_title">S.S.S Ayarları</div>
				
				<form action="sss-kaydediliyor.php" method="post">
					<div class="element">
						<label for="sssb">Yazı Başlığı <span class="red">* 30 karakterden fazla yazılmamalı..</span></label>
						<input id="sssb" name="sssb" class="text err"/>
					</div>
					<div class="element">
						<label for="sssa">Açıklama<span></span></label>
						<textarea name="sssa" class="textarea" rows="10"></textarea>
					</div>
					<div class="entry">
						<button type="submit" class="add">Kaydet</button>
					</div>
				</form>

<?php
include("../database.php");
echo " 				<table>
					<thead>
						<tr>
							
							<th scope=\"col\">Yazı Bağlıgı</th>
							<th scope=\"col\">Açıklama</th>
							<th scope=\"col\" style=\"width: 65px;\">Sil</th>
						</tr>
					</thead>";

$sor = mysqli_query($db,"SELECT * FROM sss order by id DESC LIMIT 50");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$sssb = $listele['sssb'];
$sssa = $listele['sssa'];


						
		echo "	<tbody>
						<tr>
							<td>$sssb</td>
							<td>$sssa</td>
							<td>
							<a href=\"sss-duzenle.php?id=$id\" class=\"table-icon edit\" title=\"Düzenle\"></a>
							<a href=\"sss-sil.php?id=$id\" class=\"table-icon delete\" title=\"Sil\"></a></td>
						</tr>
					</tbody>";
}

echo " </table>
</div>";

?>

		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>

</body>
</html>