<?
include ("database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-type" content="text/html;charset=windows-1254"/> 
<title><?php echo $sor['sitebasligi']; ?></title>
<meta name="keywords" content="<? echo .$sor['googleanahtar']; ?>" />
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

<!-- Logo BaÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1px; width:277px; height:101px; z-index:0">
<a href="index.php"><img border="0" src="resimler/ad21blogo.png" width="277" height="101"></a>
</div>
<!-- Logo BitiÅŸ --->

<!-- 7/24 BaÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:513px; top:14px; width:310px; height:72px; z-index:0">
<img border="0" src="resimler/724.png" width="91" height="80" align="left"> <br>
<font style="font-style: italic" face="Tahoma" size="5"><?php echo $sor['ctel']; ?></font></div>
<!-- 7/24 BitiÅŸ --->


<!-- MenÃ¼ BaÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:122px; width:946px; height:57px; z-index:0">
<center>
<a href="index.php"><img src="resimler/menu1.jpg" onmousemove="this.src='resimler/menu11.jpg'" onmouseout="this.src='resimler/menu1.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="arac-filomuz.php"><img src="resimler/menu2.jpg" onmousemove="this.src='resimler/menu22.jpg'" onmouseout="this.src='resimler/menu2.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="transfer-hizmeti.php"><img src="resimler/menu3.jpg" onmousemove="this.src='resimler/menu33.jpg'" onmouseout="this.src='resimler/menu3.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="kiralama-ucretleri.php"><img src="resimler/menu5.jpg" onmousemove="this.src='resimler/menu55.jpg'" onmouseout="this.src='resimler/menu5.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="firma-hakkinda.php"><img src="resimler/menu4.jpg" onmousemove="this.src='resimler/menu44.jpg'" onmouseout="this.src='resimler/menu4.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="bize-ulasin.php"><img src="resimler/menu6.jpg" onmousemove="this.src='resimler/menu66.jpg'" onmouseout="this.src='resimler/menu6.jpg'" width="152" height="55"/></a></center>
</div>
<!-- MenÃ¼ BitiÅŸ --->


<!-- MenÃ¼ BaÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:192px; width:946px; height:100px; z-index:0">
<img src="resimler/aracdetaylari.png">
</div>
<!-- MenÃ¼ BitiÅŸ --->


<?php 
include("database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from araclar where id=$id") or die("Hata Olustu! ".mysqli_error());
$ogren = mysqli_fetch_assoc($calistir);
?> 
<!-- Yazı BaÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:300px; width:946px; height:500px; z-index:0">
<div align="center">
	<table border="0" width="940" height="318" cellspacing="0" cellpadding="0">
		<tr>
			<td height="318" width="422" rowspan="11">&nbsp;</td>
			<td height="49" width="518" colspan="4">
			<p align="center"><font face="Tahoma" size="3"><b><?php echo $ogren['amm']; ?></b></font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/icon_kapi.png" width="13" height="16"></td>
			<td height="14" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Kapı</font></b></td>
			<td height="14" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="14" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['kapi']; ?> KAPI</font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/icon_yolcu.png" width="13" height="16"></td>
			<td height="17" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Yolcu</font></b></td>
			<td height="17" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="17" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['yolcu']; ?> KİŞİ</font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/icon_bagaj.png" width="13" height="16"></td>
			<td height="19" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Bagaj</font></b></td>
			<td height="19" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['bagaj']; ?></font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/icon_vites.png" width="13" height="16"></td>
			<td height="19" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Vites</font></b></td>
			<td height="19" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['vites']; ?></font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/icon_klima.png" width="13" height="16"></td>
			<td height="19" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Klima</font></b></td>
			<td height="19" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['klima']; ?></font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/icon_yakit.png" width="13" height="16"></td>
			<td height="19" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Yakıt</font></b></td>
			<td height="19" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['yakit']; ?></font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/32-32.png" width="13" height="13"></td>
			<td height="19" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Fiyat (1-3 Gün)</font></b></td>
			<td height="19" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['birinci']; ?> TL</font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/32-32.png" width="13" height="13"></td>
			<td height="19" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Fiyat (4-10 Gün)</font></b></td>
			<td height="19" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['ikinci']; ?> TL</font></td>
		</tr>
		<tr>
			<td height="19" width="80" align="right">
			<img border="0" src="resimler/32-32.png" width="13" height="13"></td>
			<td height="19" width="134" align="left"><b>
			<font face="Tahoma" size="2">&nbsp;Fiyat (11-30 Gün)</font></b></td>
			<td height="19" width="9"><b><font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="297"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ogren['ucuncu']; ?> TL</font></td>
		</tr>
		<tr>
			<td height="98" width="520" colspan="4">
			<p align="center">
			<font size="2" face="Tahoma">Fiyatlar (1-3 gün arası), (4-10 gün arası), (11-30 
			gün arası) Kiralanan Gün Sayısına Göre Değişiklik Göstermektedir. Lütfen Kiralama İsteği Göndermeden Önce&nbsp;Kiralama Koşullarını&nbsp;Okuyunuz.</font></td>
		</tr>
	</table>
</div>

</div>
<!-- Yazı baÅŸlangÄ±c --->

<!-- arkaplan�langÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:300px; width:450px; height:350px; z-index:0">
<img src="resimler/detayarka.png">
</div>
<!-- arkaplan BitiÅŸ --->

<!-- aracresim�langÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:30px; top:350px; width:400px; height:300px; z-index:1">
<img src="admin/<?php echo $ogren['aracresmi']; ?>" width="350" height="220">
</div>
<!-- arac resim BitiÅŸ --->

<!-- ara� iletisi baslangÄ±Ã§ --->
<div id="rentacar" style="background-color:#000000; position:absolute; overflow:hidden; left:0px; top:650px; width:946px; height:200px; z-index:0">
<form action="arac-detay-gonderiliyor.php" method="POST">
<div align="center">
	<table border="0" width="940" height="163" cellspacing="0" cellpadding="0">
		<tr>
			<td height="44" width="250" bgcolor="#000000" align="center"><b>
			<font color="#FFFFFF" size="4" face="Tahoma">Alış Bilgileri</font></b></td>
			<td height="44" width="233" bgcolor="#000000" align="center"><b>
			<font color="#FFFFFF" size="4" face="Tahoma">Dönüş Bilgileri</font></b></td>
			<td height="44" width="457" bgcolor="#000000" align="center" colspan="2">
			<b><font color="#FFFFFF" size="4" face="Tahoma">Kişisel Bilgiler</font></b></td>
		</tr>
		<tr>
			<td height="19" width="250" bgcolor="#000000">
<center><select size="1" name="alisyeri" style="font-family: Verdana; font-size: 12px">
	<option selected>-- Alış Yeri Seçiniz --</option>
<?php
include ("database.php");
$kat_sorgu = mysqli_query($db,"SELECT * FROM alis");
while($dongu = mysqli_fetch_array($kat_sorgu)) 
{	
echo  "<option value='".$dongu["alis"]."'>".$dongu["alis"]."</option>";
}
?>
</select></center>



</td>
<td height="19" width="233" bgcolor="#000000">
<center><select size="1" name="donusyeri" style="font-family: Verdana; font-size: 12px">
	<option selected>-- Dönüş Yeri Seçiniz --</option>
<?php
include ("database.php");
$kat_sorgu = mysqli_query($db,"SELECT * FROM donus");
while($dongu = mysqli_fetch_array($kat_sorgu)) 
{	
echo  "<option value='".$dongu["donus"]."'>".$dongu["donus"]."</option>";
}
?>
</select></center>



<input type="hidden" name="amm" size="29" value="<?php echo $ogren['amm']; ?>">

</td>
			<td height="19" width="175" bgcolor="#000000" align="right"><b>
			<font color="#FFFFFF" face="Tahoma" size="2">Ad - Soyad :</font></b></td>
			<td height="19" width="282" bgcolor="#000000">&nbsp;<input type="text" name="adsoyad" size="29"></td>
		</tr>
		<tr>
			<td height="19" width="250" bgcolor="#000000">
<center><input type="text" name="alistarihi" id="popupDatepicker"></center>
</td>
			<td height="19" width="233" bgcolor="#000000">
<center><input type="text" name="donustarihi" id="popupDatepicker2"></center>
</td>
			<td height="19" width="175" bgcolor="#000000" align="right"><b>
			<font color="#FFFFFF" face="Tahoma" size="2">Cep Numaranız :</font></b></td>
			<td height="19" width="282" bgcolor="#000000">&nbsp;<input type="text" name="ctel" size="29"></td>
		</tr>
		<tr>
			<td height="19" width="250" bgcolor="#000000">
<center>
<select name="alissaat" style="font-family: Verdana; font-size: 12px" size="1">
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
<select name="alisdk" size="1" style="font-family: Verdana; font-size: 12px">
<option>00</option>
<option>15</option>
<option>30</option>
<option>45</option>
</select>
</center>


</td>
			<td height="19" width="233" bgcolor="#000000">

<center>
<select name="donussaat" style="font-family: Verdana; font-size: 12px" size="1">
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
<select name="donusdk" size="1" style="font-family: Verdana; font-size: 12px">
<option>00</option>
<option>15</option>
<option>30</option>
<option>45</option>
</select>
</center>


</td>
			<td height="19" width="175" bgcolor="#000000" align="right"><b>
			<font color="#FFFFFF" face="Tahoma" size="2">Sabit Numaranız :</font></b></td>
			<td height="19" width="282" bgcolor="#000000">&nbsp;<input type="text" name="stel" size="29"></td>
		</tr>
		<tr>
			<td height="19" width="250" bgcolor="#000000">&nbsp;</td>
			<td height="19" width="233" bgcolor="#000000">&nbsp;</td>
			<td height="19" width="175" bgcolor="#000000" align="right"><b>
			<font color="#FFFFFF" face="Tahoma" size="2">E- Mail Adresiniz :</font></b></td>
			<td height="19" width="282" bgcolor="#000000">&nbsp;<input type="text" name="mail" size="29"></td>
		</tr>
		<tr>
			<td height="31" width="483" bgcolor="#000000" colspan="2"><center><p><font face="Tahoma" size="2" color="#FF0000">Lutfen bilgileri eksiksiz 
giriniz.</font></p></center></td>
			<td height="31" width="457" bgcolor="#000000" colspan="2"><center><p><input type="image" src="resimler/yolla.png" value="G�nder" name="B1"></p></center></td>
		</tr>
	</table>
</div>
</form>
</div>
<!-- arac iletisi bitis --->


<!-- alt baÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:870px; width:946px; height:100px; z-index:0">
<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj2" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="950" height="90">
<param name="movie" value="resimler/alt.swf">
<param name="quality" value="High">
<embed src="resimler/alt.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj2" width="955" height="90"></object>
</div>
<!-- alt BitiÅŸ --->

<!-- footer baÅŸlangÄ±Ã§ --->
<?
include ("database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:960px; width:960px; height:50px; z-index:0">
<font color=#000000 size="2" face="Verdana"><? echo .$sor['footer']; ?></font>
</div>
<!-- footer BitiÅŸ --->

</div>
</body>
</html>