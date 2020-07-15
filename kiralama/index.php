<?php
error_reporting(0);
include ("database.php");
$id=(int)$_GET["id"];
$calistir = mysqli_query(@$db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr-TR">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-type" content="text/html;charset=windows-1254"/> 
<title><?PHP echo $sor["sitebasligi"]; ?></title>
<meta name="keywords" content="<?php echo $sor['googleanahtar']; ?>" />
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
$calistir = mysqli_query(@$db,"select * from logo order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$logo = mysqli_fetch_assoc($calistir);
?>

<!-- Logo Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1px; width:277px; height:101px; z-index:0">
<a href="index.php"><img border="0" src="resimler/ad21blogo.png" width="277" height="101" alt=""></a>
</div>
<!-- Logo Biti? --->

<!-- 7/24 Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:513px; top:14px; width:310px; height:72px; z-index:0">
<img border="0" src="resimler/724.png" width="91" height="80" align="left"> <br>
<font style="font-style: italic" face="Tahoma" size="5"><?php echo $sor['ctel']; ?></font></div>
<!-- 7/24 Biti? --->

<!-- Menü Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:122px; width:946px; height:57px; z-index:0">
<center>
<a href="index.php"><img src="resimler/menu1.jpg" onmousemove="this.src='resimler/menu11.jpg'" onmouseout="this.src='resimler/menu1.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55" alt=""><a href="arac-filomuz.php"><img src="resimler/menu2.jpg" onmousemove="this.src='resimler/menu22.jpg'" onmouseout="this.src='resimler/menu2.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55" alt=""><a href="transfer-hizmeti.php"><img src="resimler/menu3.jpg" onmousemove="this.src='resimler/menu33.jpg'" onmouseout="this.src='resimler/menu3.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55" alt=""><a href="kiralama-ucretleri.php"><img src="resimler/menu5.jpg" onmousemove="this.src='resimler/menu55.jpg'" onmouseout="this.src='resimler/menu5.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55" alt=""><a href="firma-hakkinda.php"><img src="resimler/menu4.jpg" onmousemove="this.src='resimler/menu44.jpg'" onmouseout="this.src='resimler/menu4.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55" alt=""><a href="bize-ulasin.php"><img src="resimler/menu6.jpg" onmousemove="this.src='resimler/menu66.jpg'" onmouseout="this.src='resimler/menu6.jpg'" width="152" height="55"/></a></center>
</div>
<!-- Menü Biti? --->

<!-- Slider alt ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:350px; width:580px; height:265px; z-index:0">
<img border="0" src="resimler/stand.png" width="530" height="140">
</div>
<!-- Slider alt biti? --->


<!-- Slider Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:188px; width:626px; height:261px; z-index:0">

    <div class="blueberry">
      <ul class="slides">
<?php
include ("database.php");
echo ""; 

$sor = mysqli_query($db,"SELECT * FROM sliderayarlari order by id DESC LIMIT 50");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele["id"];
$slider = $listele["slider"];

echo " <li><img src=\"admin/$slider\" alt=\"\" width=\"440\" height=\"247\"/></li>";
}

echo "";

?>
</ul>
    </div>

</div>
<!-- Slider Biti? --->

<!-- Tarih1 Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:513px; top:225px; width:215px; height:110px; z-index:0">
<div align="center">
	<table border="0" width="211" height="95" cellspacing="0" cellpadding="0" bgcolor="#000000" bordercolor="#000000">
		<tr>
			<td height="32" width="211" colspan="2">
			<img border="0" src="resimler/alis.jpg" width="200" height="30"></td>
		</tr>
		<tr>
			<td height="20" width="11">&nbsp;</td>
			<td height="20" width="200">
	<select size="1" name="D1" style="font-family: Verdana; font-size: 10px">
	<option selected>-- Al?? Yeri Seçiniz --</option>
<?php
include ("database.php");
$kat_sorgu = mysqli_query($db,"SELECT * FROM alis");
while($dongu = mysqli_fetch_array($kat_sorgu)) 
{	
echo  "<option value='".$dongu["id"]."'>".$dongu["alis"]."</option>";
}
?>
</select>
			</td>
		</tr>
		<tr>
			<td height="21" width="11">&nbsp;</td>
			<td height="21" width="200"><input type="text" id="popupDatepicker"></td>
		</tr>
		<tr>
			<td height="20" width="11" rowspan="2">&nbsp;</td>
			<td height="13" width="200">
<select name="D2" style="font-family: Verdana; font-size: 10px" size="1">
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
</select>
<select name="alisil4" size="1" style="font-family: Verdana; font-size: 10px">
<option>00</option>
<option>15</option>
<option>30</option>
<option>45</option>

</select>
		</td>
		</tr>
		<tr>
			<td height="8" width="200">
&nbsp;</td>
		</tr>
	</table>
</div>
</div>
<!-- Tarih1 Biti? --->

<!-- Tarih2 Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:730px; top:225px; width:215px; height:110px; z-index:0">
<div align="center">
	<table border="0" width="211" height="95" cellspacing="0" cellpadding="0" bgcolor="#000000" bordercolor="#000000">
		<tr>
			<td height="32" width="211" colspan="2">
			<img border="0" src="resimler/donus.jpg" width="200" height="30"></td>
		</tr>
		<tr>
			<td height="20" width="11">&nbsp;</td>
			<td height="20" width="200">
	<select size="1" name="D1" style="font-family: Verdana; font-size: 10px">
	<option selected>-- Dönü? Yeri Seçiniz --</option>
<?php
include ("database.php");
$kat_sorgu = mysqli_query($db,"SELECT * FROM donus");
while($dongu = mysqli_fetch_array($kat_sorgu)) 
{	
echo  "<option value='".$dongu["id"]."'>".$dongu["donus"]."</option>";
}
?>

	</select>
			</td>
		</tr>
		<tr>
			<td height="21" width="11">&nbsp;</td>
			<td height="21" width="200"><input type="text" id="popupDatepicker2"></td>
		</tr>
		<tr>
			<td height="20" width="11" rowspan="2">&nbsp;</td>
			<td height="13" width="200">
<select name="D2" style="font-family: Verdana; font-size: 10px" size="1">
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
</select>
<select name="alisil4" size="1" style="font-family: Verdana; font-size: 10px">
<option>00</option>
<option>15</option>
<option>30</option>
<option>45</option>
</select>
		</td>
		</tr>
		<tr>
			<td height="8" width="200">
&nbsp;</td>
		</tr>
	</table>
</div>
</div>
<!-- Tarih2 Biti? --->

<!-- H?zl? randevu Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:515px; top:184px; width:430px; height:40px; z-index:0">
<img border="0" src="resimler/ustrandevu.png" width="428" height="35">
</div>
<!-- H?zl? randevu Biti? --->

<div id="rentacar" style="position:absolute; background:#000000; overflow:hidden; left:515px; top:340px; width:250px; height:25px; z-index:0">
<center><input type="checkbox" name="C1" value="ON" checked> <b>
<font face="Verdana" size="2" color="#FFFFFF">Tum Araclar</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center>
</div>

<div id="rentacar" style="position:absolute; background:#000000; overflow:hidden; left:750px; top:340px; width:193px; height:25px; z-index:0">
<a href="arac-filomuz.php"><img src="resimler/gonder.png"></a>
</div>



<!-- Duyuru Ba?lang?ç --->
<div id="rentacar" style="position:absolute; background:#000000; overflow:hidden; left:524px; top:370px; width:419px; height:32px; z-index:0">
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:524px; top:350px; width:419px; height:50px; z-index:0">
	<ul id="js-news" class="js-hidden">

<?php
include ("database.php");
echo "";

$sor = mysqli_query($db,"SELECT * FROM duyuru order by id DESC LIMIT 50");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$duyurub = $listele['duyurub'];

echo " <li class=\"news-item\"><b><font face=\"Verdana\" size=\"2\"><a href=\"#\" onclick=\"Popup=window.open('duyuru.php?id=$id','Popup','scrollbars=yes, width=500,height=300'); return false;\"><font color=#FFFF00>$duyurub</font></a></font></b></li>";
}

echo "";

?>

	</ul>
</div>
<!-- Duyuru Biti? --->
<?
include ("database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$face = mysqli_fetch_assoc($calistir);
?>
<!-- facebook Ba?lang?ç --->
<!-- facebook Biti? --->



<!-- araclar Ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:530px; width:970px; height:335px; z-index:0">

<?php
include("database.php");
$sor = mysqli_query($db,"SELECT * FROM araclar order by rand() limit 4");
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
<div style=\"float:left; width:241px; height:275px\">
<table border=\"0\" width=\"221\" height=\"271\" cellspacing=\"0\" cellpadding=\"0\">
	<tr>
		<td height=\"100\" width=\"221\" colspan=\"5\">
		<img src=\"admin/$aracresmi\" width=\"220\" height=\"123\"></td>
	</tr>
	<tr>
		<td height=\"18\" width=\"221\" colspan=\"5\">
		<p align=\"center\"><b><font face=\"Verdana\" color=\"#000080\">$amm</font></b></td>
	</tr>
	<tr>
		<td height=\"16\" width=\"28\" align=\"center\">
		<img border=\"0\" src=\"resimler/icon_kapi.png\" width=\"13\" height=\"16\"></td>
		<td height=\"16\" width=\"68\"><font face=\"Verdana\" size=\"2\"><b>Kap?</b></font></td>
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
		<td height=\"19\" width=\"68\"><font face=\"Verdana\" size=\"2\"><b>Yak?t</b></font></td>
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
<!-- araclar ba?lang?c --->

<!-- döviz ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:860px; width:240px; height:205px; z-index:0">
<p><img border="0" src="resimler/doviz.png" width="240" height="199"></p>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:65px; top:948px; width:120px; height:50px; z-index:0">
<p><font face="Verdana" color="#FFFF00" size="3"><?php include("botlar/dolar-alis.php");?></font></p>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:155px; top:948px; width:120px; height:50px; z-index:0">
<p><font face="Verdana" color="#FFFF00" size="3"><?php include("botlar/dolar-satis.php");?></font></p>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:65px; top:999px; width:120px; height:50px; z-index:0">
<p><font face="Verdana" color="#FFFF00" size="3"><?php include("botlar/euro-alis.php");?></font></p>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:155px; top:999px; width:120px; height:50px; z-index:0">
<p><font face="Verdana" color="#FFFF00" size="3"><?php include("botlar/euro-satis.php");?></font></p>
</div>
<!-- döviz biti? --->


<!-- mesafe ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:240px; top:860px; width:240; height:205; z-index:0">
<p><img border="0" src="resimler/mesafe.png" width="240" height="199"></p>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:282px; top:946px; width:200px; height:200px; z-index:0">
<iframe src="http://www.illerarasimesafe.com/webmasters.php?background-color=000000&font-size=0px&sonuc-color=f26522&sonuc-font-size=18px" scrolling="no" frameborder="0" height="110" width="150"></iframe>
</div>
<!-- mesafe biti? --->


<!-- havadurumu ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:480px; top:860px; width:240px; height:205px; z-index:0">
<p><img border="0" src="resimler/havadurumu.png" width="240" height="199"></p>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:520px; top:920px; width:150px; height:150px; z-index:0">
<?php include("botlar/hava.php");?>
</div>
<!-- havadurumu biti? --->


<!-- S.S.S ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:720px; top:860px; width:240px; height:205px; z-index:0">
<p><img border="0" src="resimler/akliniza.png" width="240" height="199"></p>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:735px; top:930px; width:240px; height:205px; z-index:0">
<font face="Verdana" size="1" color="#FFFF00">
<?php
include ("database.php");
echo "";
$sor = mysqli_query(@$db,"SELECT * FROM sss order by id DESC LIMIT 8");
while ($listele = mysqli_fetch_array($sor)) {
$id = $listele['id'];
$sssb = $listele['sssb'];

echo "<li><a href=\"#\" onclick=\"Popup=window.open('sss.php?id=$id','Popup','scrollbars=yes, width=600,height=400'); return false;\"><font face=\"Verdana\" size=\"1\" color=\"#FFFF00\">$sssb</font><a></li>";
}

echo "";

?>
</div>
<!-- S.S.S biti? --->

<!-- alt ba?lang?ç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1070px; width:960px; height:100px; z-index:0">
<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj2" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="950" height="90">
<param name="movie" value="resimler/alt.swf">
<param name="quality" value="High">
<embed src="resimler/alt.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj2" width="955" height="90"></object>
</div>
<!-- alt Biti? --->

<!-- footer ba?lang?ç --->
<?php
include ("database.php");
$calistir = mysqli_query(@$db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1168px; width:960px; height:50px; z-index:0">
<font color=#000000 size="2" face="Verdana"><?php echo $sor['footer']; ?></font>
</div>
<!-- footer Biti? --->

</div>
</body>
</html>