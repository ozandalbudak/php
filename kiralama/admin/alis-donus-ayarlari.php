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
$calistir = mysqli_query($db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysql_error());
$sor = mysql_fetch_assoc($calistir);
?>
	<div id="content">
		<div id="sidebar">
			<?php include("menu.php");?>
		<div id="main">		

			<div class="full_w">
				<div class="h_title">Alış Ayarları</div>
				
				<form action="alis-kaydediliyor.php" method="post">
					<div class="element">
						<label for="alis">Alış Yeri <span class="red">* Alış yapılacak yer Örneğin: Merkez Ofis</span></label>
						<input id="alis" name="alis" class="text err"/>
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
							
							<th scope=\"col\">Alış Yeri</th>
							<th scope=\"col\" style=\"width: 65px;\">Sil</th>
						</tr>
					</thead>";

$sor = mysqli_query($db,"SELECT * FROM alis order by id DESC LIMIT 50");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$alis = $listele['alis'];



						
		echo "	<tbody>
						<tr>
							<td>$alis</td>
							<td><a href=\"alis-sil.php?id=$id\" class=\"table-icon delete\" title=\"Sil\"></a></td>
						</tr>
					</tbody>";
}

echo " </table>
</div>";

?>

				
			
			
			
			
				<div class="full_w">
				<div class="h_title">Dönüş Ayarları</div>
				
				<form action="donus-kaydediliyor.php" method="post">
					<div class="element">
						<label for="donus">Dönüş Yeri <span class="red">* Dönüş yapılacak yer Örneğin: Merkez Ofis</span></label>
						<input id="donus" name="donus" class="text err"/>
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
							
							<th scope=\"col\">Dönüş Yeri</th>
							<th scope=\"col\" style=\"width: 65px;\">Sil</th>
						</tr>
					</thead>";


$sor = mysqli_query($db,"SELECT * FROM donus order by id DESC LIMIT 50");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$donus = $listele['donus'];



						
		echo "	<tbody>
						<tr>
							<td>$donus</td>
							<td><a href=\"donus-sil.php?id=$id\" class=\"table-icon delete\" title=\"Sil\"></a></td>
						</tr>
					</tbody>";
}



echo " </table>
</div>";

?>

		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>

</body>
</html>