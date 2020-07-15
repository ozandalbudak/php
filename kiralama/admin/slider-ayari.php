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
			<center>
	<form method="POST" action="slider-gonderiliyor.php" enctype="multipart/form-data">
	<p><input type="file" name="file" size="20"><input type="submit" value="Yukle" name="B1"></p>
</form>
</center>
				<div class="h_title">Slider Ekle</div>
				

				<table>
<?php
include("../database.php");
echo "
					<thead>
						<tr>
							<th scope=\"col\">ID</th>
							<th scope=\"col\">Slider</th>
							<th scope=\"col\" style=\"width: 65px;\">Seçenekler</th>
						</tr>
					</thead>";
						
$sor = mysqli_query($db,"SELECT * FROM sliderayarlari order by id DESC LIMIT 15");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$slider = $listele['slider'];


				echo "	<tbody>
						<tr>
							<td class=\"align-center\"><center>$id</center></td>

							<td><center><img src=\"$slider\" width=\"320\" height=\"116\"></center></td>

							<td>
							<center><a href=\"slider-sil.php?id=$id\" class=\"table-icon delete\" title=\"Delete\"></a></center>
							</td>
						</tr>
					</tbody>";
}

echo "</table>";

?>
				
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>

</body>
</html>

