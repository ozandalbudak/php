<?php
include ("database.php");
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
				<div class="h_title">Gelen Iletiler</div>

<?php
include("database.php");
echo " 				<table>
					<thead>
						<tr>
							
							<th scope=\"col\">Tarih/Saat</th>
							<th scope=\"col\">Ad-Soyad</th>
							<th scope=\"col\">Arac</th>
							<th scope=\"col\">Cep Telefonu</th>
							
							<th scope=\"col\" style=\"width: 65px;\">Sil</th>
						</tr>
					</thead>";

$sor = mysqli_query($db,"SELECT * FROM kiralama order by id DESC LIMIT 50");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$tarih = $listele['tarih'];
$amm = $listele['amm'];
$adsoyad = $listele['adsoyad'];
$ctel = $listele['ctel'];
$alistarihi = $listele['alistarihi'];
$donustarihi = $listele['donustarihi'];





						
		echo "	<tbody>
						<tr>
							<td>$tarih</td>
							<td>$adsoyad</td>
							<td>$amm</td>
							<td>$ctel</td>
							
						
							<td>
							<a href=\"#\" onclick=\"Popup=window.open('kiralama-bilgi.php?id=$id','Popup','scrollbars=yes, width=500,height=200'); return false;\"><img src=\"img/i_archive.png\"></a> ----
							<a href=\"kiralama-sil.php?id=$id\" class=\"table-icon delete\" title=\"Sil\"></a>
							
							</td>
						</tr>
					</tbody>";
}

echo " </table>
";

?>



<p><? echo $id;?></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>
</body>
</html>
