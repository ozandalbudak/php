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
				<div class="h_title">Gelen Mesajlar</div>
				

<?php
include("../database.php");
echo " 				<table>
					<thead>
						<tr>
							
							<th scope=\"col\">Tarih</th>
							<th scope=\"col\">Ad Soyad</th>
							<th scope=\"col\">Sabit Tel</th>
							<th scope=\"col\">Cep Tel</th>
							<th scope=\"col\">Mail</th>
							<th scope=\"col\">Mesaj</th>
							<th scope=\"col\" style=\"width: 65px;\">Sil</th>
						</tr>
					</thead>";

$sor = mysqli_query($db,"SELECT * FROM iletisim order by id DESC LIMIT 50");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$tarih = $listele['tarih'];
$adsoyad = $listele['adsoyad'];
$stel = $listele['stel'];
$ctel = $listele['ctel'];
$mail = $listele['mail'];
$mesaj = $listele['mesaj'];



						
		echo "	<tbody>
						<tr>
							<td>$tarih</td>
							<td>$adsoyad</td>
							<td>$stel</td>
							<td>$ctel</td>
							<td>$mail</td>
							<td>$mesaj</td>
							<td>
							<a href=\"mesaj-ayarlari-sil.php?id=$id\" class=\"table-icon delete\" title=\"Sil\"></a>
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