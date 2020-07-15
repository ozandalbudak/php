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
    <script type="text/javascript">
        function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
    </script>
	<script type="text/javascript">
        function isHarfKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 65 || charCode > 90))
        return false;
    return true;
}
    </script>
	
	<script type="text/javascript">
        function isOzelKarakter(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31)
        return false;
    return true;
}
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
			<div class="clear"></div>
			<div class="full_w">
			
			<div class="h_title">Araç Ekle</div>
					<form action="arac-ekleniyor.php" method="post" enctype="multipart/form-data">
					<div class="element">
						<label for="amm">Araç Marka ve Modeli <span class="red">* Örneğin: Audi A5 3.0 TDI </span></label>
						<input id="amm" name="amm" class="text err" />
					</div>
					<div class="element">
						<label for="kapi">Kapı Sayısı <span class="red"></span></label>
						<input id="kapi" name="kapi" class="text err" onkeypress="return isNumberKey(event)"/>
					</div>
					<div class="element">
						<label for="yolcu">Yolcu Kapasiyesi<span class="red"></span></label>
						<input id="yolcu" name="yolcu" class="text err" onkeypress="return isNumberKey(event)"/>
					</div>
					<div class="element">
						<label for="bagaj">Bagaj Kapasitesi <span class="red"></span></label>
						<input id="bagaj" name="bagaj" class="text err" onkeypress="return isNumberKey(event)"/>
					</div>
					<div class="element">
						<label for="vites">Vites <span class="red"></span></label>
						<input id="vites" onkeypress="return isNumberKey(event)" name="vites" class="text err" />
					</div>
					<div class="element">
						<label for="klima">Klima <span class="red"></span></label>
						<select id="klima" name="klima">
                           <option value="Klima1">VAR</option>
                           <option value="Klima2">YOK</option>
                        </select>
					</div>
					<div class="element">
						<label for="yakit">Yakıt <span class="red"></span></label>
						<select id="yakit" name="yakit">
                           <option value="Yakit1">BENZİN</option>
                           <option value="Yakit2">DİZEL</option>
                           <option value="Yakit3">LPG</option>
                                            
                        </select>
					</div>
					<div class="element">
						<label for="birinci">1-3 Gün Arası Fiyat<span class="red"></span></label>
						<input id="birinci" name="birinci" class="text err" onkeypress="return isNumberKey(event)"/>
					</div>
					<div class="element">
						<label for="ikinci">4-10 Gün Arası Fiyat<span class="red"></span></label>
						<input id="ikinci" name="ikinci" class="text err" onkeypress="return isNumberKey(event)"/>
					</div>
					<div class="element">
						<label for="ucuncu">11-30 Gün Arası Fiyat<span class="red"></span></label>
						<input id="ucuncu" name="ucuncu" class="text err" onkeypress="return isNumberKey(event)"/>
					</div>
					<div class="element">
						<label for="file">Araç Resmi <span class="red">* PNG Transparan Siteye uygun olaraktır.</span></label>
						<input type="file" name="file" />
					</div>
					
					<div class="entry">
						<button type="submit" class="add">Kaydet</button>
					</div>
				</form>
				<br>
		</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>

</body>
</html>
