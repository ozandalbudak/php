<?php
error_reporting(0);
include ("database.php");

$id=(int)$_GET['id'];
$calistir = mysqli_query(@$db,"select * from genelayarlar order by id DESC LIMIT 1") or die("Hata Olustu! ".mysql_error());
$sor = mysqli_fetch_assoc($calistir);
error_reporting(0);
if(isset($_GET["sehir"])) {
	$sehir=$_GET["sehir"];
} else {
	$sehir= $sor['havadurumu'];;
}
function hava($sehir) {
$cikti=file_get_contents("www.mgm.gov.tr/?il=".strtolower($sehir));
preg_match_all('#renkMax">(.*?)</em></td>#si',$cikti,$endusuk,PREG_SET_ORDER);
preg_match_all('#bas">(.*?)</em></td>#si',$cikti,$endusuk1,PREG_SET_ORDER);

preg_match_all('#renkMin zemimeZ">(.*?)</em></td>#si',$cikti,$endusuk2,PREG_SET_ORDER);

preg_match_all('@src="../FILES/imgIcon/(.*?)" alt=@si',$cikti,$resim,PREG_SET_ORDER);

preg_match_all('#sond_zaman">(.*?)<br \.>(.*?)</td>#si',$cikti,$enyuksek,PREG_SET_ORDER);



echo '<center><font face="Verdana" color="#FFFF00" size="5"><img src="http://www.mgm.gov.tr/FILES/imgIcon/'. $resim["0"]["1"] . '"><br>'. $endusuk["0"]["1"] . ''. $endusuk1["0"]["1"] . ''. $endusuk2["0"]["1"] . '<br></font><font face="Verdana" color="#FFFF00" size="2"> '. $enyuksek["0"]["1"] . '<br>'. $sehir . '</font></center>';
}
?>

<?=hava($sehir)?>
