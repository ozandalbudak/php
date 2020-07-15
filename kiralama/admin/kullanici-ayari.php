<?php
include ("../database.php");
include ("giris.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Yönetim Paneli</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).nexst("ul").hide("normal");
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
				<div class="h_title">UYELER</div>			

<?php
include("../database.php");
echo " 				<table>
					<thead>
						<tr>
							
							<th scope=\"col\">uye sirasi</th>
							<th scope=\"col\">uye adi</th>

						
							<th scope=\"col\">uye soyadi</th>
							
							<th scope=\"col\" style=\"width: 65px;\">DÜZENLE</th>
						</tr>
					</thead>";

$sor = mysqli_query($db,"SELECT * FROM kullanicilar order by sira");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['sira'];
$amm = $listele['uyeadi'];
$kapi = $listele['uyesifre'];




						
		echo "	<tbody>
						<tr>
							
							<td>$id</td>

						
							<td>$amm</td>
							<td>$kapi</td>
							
							<td>
							<a href=\"kullanici-duzenle.php?id=$id\" class=\"table-icon edit\" title=\"Duzenle\"></a>
							</td>
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