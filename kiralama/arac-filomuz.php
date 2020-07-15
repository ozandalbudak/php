<?php
include ("database.php");
$calistir = mysqli_query($db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-type" content="text/html;charset=windows-1254"/> 
<title><?php echo $sor['sitebasligi']; ?></title>
<meta name="keywords" content="<?. echo $sor['googleanahtar']; ?>" />
<meta name="robots" content="index, follow" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="css/jquery.blueberry.js"></script>
<link href="css/styles/style.css?v=2011-04-25" rel="stylesheet" type="text/css" />
<link href="css/styles/ticker-style.css" rel="stylesheet" type="text/css" />
<script src="css/includes/jquery.ticker.js" type="text/javascript"></script>
<script src="css/includes/site.js" type="text/javascript"></script>
<link type="text/css" href="css/jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="css/jquery.datepick.js"></script>
<script type="text/javascript" src="css/jquery.datepick-tr.js"></script>
<script type="text/javascript">
$(function() {
	$('#popupDatepicker').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script type="text/javascript">
$(function() {
	$('#popupDatepicker2').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>

<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>
<style type="text/css">
div#container
{
	position:relative;
	width: 959px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
img{ border:0; }
</style>
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/tr_TR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body background="resimler/bg.jpg" style="background-attachment: fixed">
<div id="container">

<?
include ("database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from logo order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$logo = mysqli_fetch_assoc($calistir);
?>

<!-- Logo Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1px; width:277px; height:101px; z-index:0">
<a href="index.php"><img border="0" src="resimler/ad21blogo.png" width="277" height="101"></a>
</div>
<!-- Logo Bitiş --->

<!-- 7/24 Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:513px; top:14px; width:310px; height:72px; z-index:0">
<img border="0" src="resimler/724.png" width="91" height="80" align="left"> <br>
<font style="font-style: italic" face="Tahoma" size="5"><?php echo $sor['ctel'];?></font></div>
<!-- 7/24 Biti? --->

<!-- Menü Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:122px; width:946px; height:57px; z-index:0">
<center>
<a href="index.php"><img src="resimler/menu1.jpg" onmousemove="this.src='resimler/menu11.jpg'" onmouseout="this.src='resimler/menu1.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="arac-filomuz.php"><img src="resimler/menu2.jpg" onmousemove="this.src='resimler/menu22.jpg'" onmouseout="this.src='resimler/menu2.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="transfer-hizmeti.php"><img src="resimler/menu3.jpg" onmousemove="this.src='resimler/menu33.jpg'" onmouseout="this.src='resimler/menu3.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="kiralama-ucretleri.php"><img src="resimler/menu5.jpg" onmousemove="this.src='resimler/menu55.jpg'" onmouseout="this.src='resimler/menu5.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="firma-hakkinda.php"><img src="resimler/menu4.jpg" onmousemove="this.src='resimler/menu44.jpg'" onmouseout="this.src='resimler/menu4.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="bize-ulasin.php"><img src="resimler/menu6.jpg" onmousemove="this.src='resimler/menu66.jpg'" onmouseout="this.src='resimler/menu6.jpg'" width="152" height="55"/></a></center>
</div>
<!-- Menü Bitiş --->


<!-- Menü Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:192px; width:946px; height:100px; z-index:0">
<img src="resimler/aracfilomuz.png">
</div>
<!-- Menü Bitiş --->




<!-- araclar Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:300px; width:970px; height:960px; z-index:0">

<?php
include("database.php");
$sor = mysqli_query($db,"SELECT * FROM araclar order by id desc limit 12");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$amm = $listele['amm'];
$kapi = $listele['kapi'];
$yolcu = $listele['yolcu'];
$bagaj = $listele['bagaj'];
$vites = $listele['vites'];
$klima = $listele['klima'];
$yakit = $listele['yakit'];
$birinci = $listele['birinci'];
$ikinci = $listele['ikinci'];
$ucuncu = $listele['ucuncu'];
$aracresmi = $listele['aracresmi'];


echo"
<div style=\"float:left; width:241px; height:320px\">
<table border=\"0\" width=\"221\" height=\"271\" cellspacing=\"0\" cellpadding=\"0\">
	<tr>
		<td height=\"100\" width=\"221\" colspan=\"5\">
		<img src=\"admin/$aracresmi\" width=\"210\" height=\"113\"></td>
	</tr>
	<tr>
		<td height=\"18\" width=\"221\" colspan=\"5\">
		<p align=\"center\"><b><font face=\"Verdana\" color=\"#000080\">$amm</font></b></td>
	</tr>
	<tr>
		<td height=\"16\" width=\"28\" align=\"center\">
		<img border=\"0\" src=\"resimler/icon_kapi.png\" width=\"13\" height=\"16\"></td>
		<td height=\"16\" width=\"68\"><font face=\"Verdana\" size=\"2\"><b>Kapı</b></font></td>
		<td height=\"16\" width=\"5\"><font face=\"Verdana\" size=\"2\"><b>:</b></font></td>
		<td height=\"16\" width=\"6\"></td>
		<td height=\"16\" width=\"114\"><font face=\"Verdana\" size=\"2\">$kapi</font></td>
	</tr>
	<tr>
		<td height=\"16\" width=\"28\" align=\"center\">
		<img border=\"0\" src=\"resimler/icon_yolcu.png\" width=\"13\" height=\"16\"></td>
		<td height=\"16\" width=\"68\"><font face=\"Verdana\" size=\"2\"><b>Yolcu</b></font></td>
		<td height=\"16\" width=\"5\"><font face=\"Verdana\" size=\"2\"><b>:</b></font></td>
		<td height=\"16\" width=\"6\"></td>
		<td height=\"16\" width=\"114\"><font face=\"Verdana\" size=\"2\">$yolcu</font></td>
	</tr>
	<tr>
		<td height=\"16\" width=\"28\" align=\"center\">
		<img border=\"0\" src=\"resimler/icon_bagaj.png\" width=\"13\" height=\"16\"></td>
		<td height=\"16\" width=\"68\"><font face=\"Verdana\" size=\"2\"><b>Bagaj</b></font></td>
		<td height=\"16\" width=\"5\"><font face=\"Verdana\" size=\"2\"><b>:</b></font></td>
		<td height=\"16\" width=\"6\"></td>
		<td height=\"16\" width=\"114\"><font face=\"Verdana\" size=\"2\">$bagaj</font></td>
	</tr>
	<tr>
		<td height=\"16\" width=\"28\" align=\"center\">
		<img border=\"0\" src=\"resimler/icon_vites.png\" width=\"13\" height=\"16\"></td>
		<td height=\"16\" width=\"68\"><font face=\"Verdana\" size=\"2\"><b>Vites</b></font></td>
		<td height=\"16\" width=\"5\"><font face=\"Verdana\" size=\"2\"><b>:</b></font></td>
		<td height=\"16\" width=\"6\"></td>
		<td height=\"16\" width=\"114\"><font face=\"Verdana\" size=\"2\">$vites</font></td>
	</tr>
	<tr>
		<td height=\"16\" width=\"28\" align=\"center\">
		<img border=\"0\" src=\"resimler/icon_klima.png\" width=\"13\" height=\"16\"></td>
		<td height=\"16\" width=\"68\"><b><font face=\"Verdana\" size=\"2\">Klima</font></b></td>
		<td height=\"16\" width=\"5\"><font face=\"Verdana\" size=\"2\"><b>:</b></font></td>
		<td height=\"16\" width=\"6\"></td>
		<td height=\"16\" width=\"114\"><font face=\"Verdana\" size=\"2\">$klima</font></td>
	</tr>
	<tr>
		<td height=\"19\" width=\"28\" align=\"center\">
		<img border=\"0\" src=\"resimler/icon_yakit.png\" width=\"13\" height=\"16\"></td>
		<td height=\"19\" width=\"68\"><font face=\"Verdana\" size=\"2\"><b>Yakıt</b></font></td>
		<td height=\"19\" width=\"5\"><font face=\"Verdana\" size=\"2\"><b>:</b></font></td>
		<td height=\"19\" width=\"6\">&nbsp;</td>
		<td height=\"19\" width=\"114\"><font face=\"Verdana\" size=\"2\">$yakit</font></td>
	</tr>
	<tr>
		<td height=\"31\" width=\"221\" colspan=\"5\">
		<p align=\"center\">
		<a href=\"arac-detayi.php?id=$id\"><img border=\"0\" src=\"resimler/buton-detay.jpg\" width=\"102\" height=\"31\"></a></td>
	</tr>
</table>
</div>";

}

echo "";

?>


</div>
<!-- araclar başlangıc --->







<!-- alt başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1270px; width:960px; height:100px; z-index:0">
<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj2" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="950" height="90">
<param name="movie" value="resimler/alt.swf">
<param name="quality" value="High">
<embed src="resimler/alt.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj2" width="955" height="90"></object>
</div>
<!-- alt Bitiş --->

<!-- footer başlangıç --->
<?php
include ("database.php");
$calistir = mysqli_query($db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1368px; width:960px; height:50px; z-index:0">
<font color=#000000 size="2" face="Verdana"><?php echo $sor['footer']; ?></font>
</div>
<!-- footer Bitiş --->

</div>
</body>
</html>