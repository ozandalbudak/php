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
<img src="resimler/bizeulasin.png">
</div>
<!-- MenÃ¼ BitiÅŸ --->

<!-- iletisim BaÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:300px; width:430px; height:150px; z-index:0">
<div align="center">
	<table border="0" width="420" height="127" cellspacing="0" cellpadding="0">
		<tr>
			<td height="16" width="420" colspan="3">
			<p align="center"><b><font face="Tahoma" size="2" color="#FF0000">
			Iletişim Bilgilerimiz</font></b></td>
		</tr>
		<tr>
			<td height="19" width="100" align="right"><b>
			<font face="Tahoma" size="2">Yetkili Kişi</font></b></td>
			<td height="19" width="17" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="303"><font face="Tahoma" size="2"><?php echo $sor['yetkili']; ?></font></td>
		</tr>
		<tr>
			<td height="19" width="100" align="right"><b>
			<font face="Tahoma" size="2">Cep Tel</font></b></td>
			<td height="19" width="17" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="303"><font face="Tahoma" size="2"><?php echo $sor['ctel']; ?></font></td>
		</tr>
		<tr>
			<td height="19" width="100" align="right"><b>
			<font face="Tahoma" size="2">Sabit Tel</font></b></td>
			<td height="19" width="17" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="303"><font face="Tahoma" size="2"><?php echo $sor['stel']; ?></font></td>
		</tr>
		<tr>
			<td height="19" width="100" align="right"><b>
			<font face="Tahoma" size="2">Mail</font></b></td>
			<td height="19" width="17" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="303"><font face="Tahoma" size="2"><?php echo $sor['mail']; ?></font></td>
		</tr>
		<tr>
			<td height="16" width="100" align="right"><b>
			<font face="Tahoma" size="2">Adres</font></b></td>
			<td height="16" width="17" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="35" width="303" rowspan="2" valign="top"><font face="Tahoma" size="2"><?php echo $sor['adres']; ?></font></td>
		</tr>
		<tr>
			<td height="19" width="100">&nbsp;</td>
			<td height="19" width="17" align="center">&nbsp;</td>
		</tr>
	</table>
</div>
</div>
<!-- iletisim bitis --->



<!-- form baÅŸlangÄ±c --->
<form action="bize-ulasin-gonderiliyor.php" method="POST">
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:500px; width:430px; height:200px; z-index:0">
<div align="center">
	<table border="0" width="420" height="127" cellspacing="0" cellpadding="0">
		<tr>
			<td height="16" width="420" colspan="3">
			<p align="center"><b><font face="Tahoma" size="2" color="#FF0000">
			Iletişim Formu</font></b></td>
		</tr>
		<tr>
			<td height="19" width="115" align="right"><b>
			<font face="Tahoma" size="2">Adınız Soyadınız</font></b></td>
			<td height="19" width="12" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="293">
			<input type="text" name="adsoyad" size="28"></td>
		</tr>
		<tr>
			<td height="19" width="115" align="right"><b>
			<font face="Tahoma" size="2">Cep Tel</font></b></td>
			<td height="19" width="12" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="293">
			<input type="text" name="ctel" size="28"></td>
		</tr>
		<tr>
			<td height="19" width="115" align="right"><b>
			<font face="Tahoma" size="2">Sabit Tel</font></b></td>
			<td height="19" width="12" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="293">
			<input type="text" name="stel" size="28"></td>
		</tr>
		<tr>
			<td height="19" width="115" align="right"><b>
			<font face="Tahoma" size="2">Mail</font></b></td>
			<td height="19" width="12" align="center"><b>
			<font face="Tahoma" size="2">:</font></b></td>
			<td height="19" width="293">
			<input type="text" name="mail" size="28"></td>
		</tr>
		<tr>
			<td height="16" width="115" align="right"><b>
			<font face="Tahoma" size="2"></font></b></td>
			<td height="16" width="12" align="center"><b>
			<font face="Tahoma" size="2"></font></b></td>
			<td height="35" width="293" rowspan="2" valign="top">
			<textarea rows="2" name="mesaj" cols="22"></textarea></td>
		</tr>
		<tr>
			<td height="19" width="115">&nbsp;</td>
			<td height="19" width="12" align="center">&nbsp;</td>
		</tr>
	</table>
</div>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:57px; top:616px; width:72px; height:50px; z-index:0">
<b><font face="Tahoma" size="2">Mesajınız :</font></b>
</div>
<div id="rentacar" style="position:absolute; overflow:hidden; left:190px; top:685px; width:120px; height:50px; z-index:0">
<input type="image" src="resimler/ileti_gonder.png" value="G�nder" name="B1">
</div>
</form>
<!-- form bitis --->

<!-- maps bitis --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:446px; top:301px; width:501px; height:399px; z-index:0">
<?php echo $sor['maps']; ?>
</div>
<!-- maps bitis --->



<!-- alt baÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:800px; width:960px; height:100px; z-index:0">
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
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:890px; width:960px; height:50px; z-index:0">
<font color=#000000 size="2" face="Verdana"><?php echo $sor['footer']; ?></font>
</div>
<!-- footer BitiÅŸ --->

</div>
</body>
</html>