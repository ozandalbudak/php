<?php
error_reporting(0);
include ("database.php");
$calistir = mysqli_query(@$db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-type" content="text/html;charset=windows-1254"/> 
<title><?PHP echo $sor["sitebasligi"]; ?></title>
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

<!-- Logo Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1px; width:277px; height:101px; z-index:0">
<a href="index.php"><img border="0" src="resimler/ad21blogo.png" width="277" height="101"></a>
</div>
<!-- Logo Bitiş --->

<!-- 7/24 Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:513px; top:14px; width:310px; height:72px; z-index:0">
<img border="0" src="resimler/724.png" width="91" height="80" align="left"> <br>
<font style="font-style: italic" face="Tahoma" size="5"><?php echo $sor['ctel']; ?></font></div>
<!-- 7/24 Bitiş --->


<!-- Menü Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:122px; width:946px; height:57px; z-index:0">
<center>
<a href="index.php"><img src="resimler/menu1.jpg" onmousemove="this.src='resimler/menu11.jpg'" onmouseout="this.src='resimler/menu1.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="arac-filomuz.php"><img src="resimler/menu2.jpg" onmousemove="this.src='resimler/menu22.jpg'" onmouseout="this.src='resimler/menu2.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="transfer-hizmeti.php"><img src="resimler/menu3.jpg" onmousemove="this.src='resimler/menu33.jpg'" onmouseout="this.src='resimler/menu3.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="kiralama-ucretleri.php"><img src="resimler/menu5.jpg" onmousemove="this.src='resimler/menu55.jpg'" onmouseout="this.src='resimler/menu5.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="firma-hakkinda.php"><img src="resimler/menu4.jpg" onmousemove="this.src='resimler/menu44.jpg'" onmouseout="this.src='resimler/menu4.jpg'" width="152" height="55"/></a><img border="0" src="resimler/arasi.jpg" width="6" height="55"><a href="bize-ulasin.php"><img src="resimler/menu6.jpg" onmousemove="this.src='resimler/menu66.jpg'" onmouseout="this.src='resimler/menu6.jpg'" width="152" height="55"/></a></center>
</div>
<!-- Menü Bitiş --->


<!-- Menü Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:192px; width:946px; height:100px; z-index:0">
<img src="resimler/transferhizmeti.png">
</div>
<!-- Menü Bitiş --->




<!-- Yaz� Başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:300px; width:970px; height:500px; z-index:0">
<?php
include ("database.php");
$calistir = mysqli_query($db,"select * from transfer order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$yazi = mysqli_fetch_assoc($calistir);
?>
<font color=#000000 size="2" face="Verdana"><?php echo $yazi['editor1']; ?></font>

</div>
<!-- Yaz� başlangıc --->


<!-- alt başlangıç --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:800px; width:960px; height:100px; z-index:0">
<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj2" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="950" height="90">
<param name="movie" value="resimler/alt.swf">
<param name="quality" value="High">
<embed src="resimler/alt.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj2" width="955" height="90"></object>
</div>
<!-- alt Bitiş --->

<!-- footer başlangıç --->
<?php
include ("database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:890px; width:960px; height:50px; z-index:0">
<font color=#000000 size="2" face="Verdana"><?php echo $sor['footer']; ?></font>
</div>
<!-- footer Bitiş --->

</div>
</body>
</html>