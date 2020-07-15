<?php
include ("database.php");
$calistir = mysqli_query($db,"select * from genelayarlar where id=24") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-type" content="text/html;charset=windows-1254"/> 
<title><?php echo $sor['sitebasligi']; ?></title>
<meta name="keywords" content="<?echo .$sor['googleanahtar']; ?>" />
<meta name="robots" content="index, follow" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="css/jquery.blueberry.js"></script>
<script src="css/includes/jquery.ticker.js" type="text/javascript"></script>
<script src="css/includes/site.js" type="text/javascript"></script>
<script type="text/javascript" src="css/jquery.datepick.js"></script>
<script type="text/javascript" src="css/jquery.datepick-tr.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
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
<!--[if !IE]><!-->
	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 960px),
	(min-device-width: 968px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
		
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/

	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 820px)
	and (max-device-width : 880px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 968px) and (max-device-width: 1024px) {
		body { 
			width: 695px; 
		}
	}
	
	</style>
	<!--<![endif]-->
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

<?php
include ("database.php");
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
<img src="resimler/kiralamaucretleri.png">
</div>
<!-- MenÃ¼ BitiÅŸ --->




<!-- Yazı BaÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:300px; width:960px; height:600px; z-index:0">

	<div id="page-wrap">
	<table>
<?php
include("database.php");
echo "

<thead>
		<tr>
			<th>Araç</th>
			<th>Yakıt</th>
			<th>1-3 Gün</th>
			<th>4-10 Gün</th>
			<th>11-30 Gün</th>
			<th>Detay</th>
		</tr>
		</thead>
		<tbody>";
$sor = mysqli_query($db,"SELECT * FROM araclar order by id DESC LIMIT 50");
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

echo "

		<tr>
			<td>$amm</td>
			<td>$yakit</td>
			<td>$birinci TL</td>
			<td>$ikinci TL</td>
			<td>$ucuncu TL</td>
			<td><a href=\"arac-detayi.php?id=$id\"><img src=\"resimler/buton-detay.jpg\"></a></td>
		</tr>

";

}

echo "</tbody>";
?>
	</table>
	
	</div>

</div>
<!-- Yazı baÅŸlangÄ±c --->


<!-- alt baÅŸlangÄ±Ã§ --->
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1000px; width:960px; height:100px; z-index:0">
<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj2" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="950" height="90">
<param name="movie" value="resimler/alt.swf">
<param name="quality" value="High">
<embed src="resimler/alt.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj2" width="955" height="90"></object>
</div>
<!-- alt BitiÅŸ --->

<!-- footer baÅŸlangÄ±Ã§ --->
<?php
include ("database.php");
$calistir = mysqli_query($db,"select * from genelayarlar") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
<div id="rentacar" style="position:absolute; overflow:hidden; left:0px; top:1090px; width:960px; height:50px; z-index:0">
<font color=#000000 size="2" face="Verdana"><?php echo $sor['footer']; ?></font>
</div>
<!-- footer BitiÅŸ --->

</div>
</body>
</html>