<?php
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
<?php
include ("../database.php");
$calistir = mysqli_query($db,"select * from genelayarlar where id=24") or die("Hata Olustu! ".mysqli_error());
$sor = mysqli_fetch_assoc($calistir);
?>
	<div id="content">
		<div id="sidebar">
			<?php include("menu.php");?>
		<div id="main">		
			<div class="clear"></div>
			<div class="full_w">
			
			<div class="h_title">Genel Ayarlar</div>
					<form action="genel-ayarlar-kaydediliyor.php" method="post">
					<div class="element">
						<label for="sitebasligi">Site Başlığı <span class="red">* Title</span></label>
						<input id="sitebasligi" name="sitebasligi" class="text err" value="<?php echo $sor['sitebasligi'];?>"\>
					</div>
					<div class="element">
						<label for="googleanahtar">Anahtar Kelimeler <span class="red">* Kelime aralarına virgül ekleyiniz.</span></label>
						<input id="googleanahtar" name="googleanahtar" class="text err" value="<?php echo $sor['googleanahtar']; ?>"/>
					</div>
					<div class="element">
						<label for="foter">Footer Yazısı<span class="red">* Html kod eklenebilir</span></label>
						<input id="foter" name="footer" class="text err" value="<?php echo $sor['footer']; ?>"/>
					</div>
					<div class="element">
						<label for="siteadresi">Site Adresiniz<span class="red">* Örnek : http://www.google.com.tr/</span></label>
						<input id="siteadresi" name="siteadresi" class="text err" value="<?php echo $sor['siteadresi']; ?>"/>
					</div>
					<div class="element">
						<label for="yetkili">Yetkili Kişi Adı<span class="red">* Yetkili adı iletişim bölümünde görünecektir.</span></label>
						<input id="yetkili" name="yetkili" class="text err" value="<?php echo $sor['yetkili']; ?>"/>
					</div>
					<div class="element">
						<label for="mail">Mail Adresi<span class="red">* İletişim bölümünde görünecektir.</span></label>
						<input id="mail" name="mail" class="text err" value="<?php echo $sor['mail']; ?>"/>
					</div>
					<div class="element">
						<label for="stel">Sabit Telefon<span class="red"></span></label>
						<input id="stel" name="stel" class="text err" value="<?php echo $sor['stel']; ?>"/>
					</div>
					<div class="element">
						<label for="ctel">Cep Telefonu<span class="red">* 7/24 Telefon bölümünde görünecektir.</span></label>
						<input id="ctel" name="ctel" class="text err" value="<?php echo $sor['ctel']; ?>"/>
					</div>
					<div class="element">
						<label for="adres">Adres<span class="red"></span></label>
						<input id="adres" name="adres" class="text err" value="<?php echo $sor['adres']; ?>"/>
					</div>
					<div class="element">
						<label for="facebook">Facebook Sayfanız<span class="red">* Örneğin : https://www.facebook.com/Deneme ise Deneme kısmını yazınız</span></label>
						<input id="facebook" name="facebook" class="text err" value="<?php echo $sor['facebook']; ?>"/>
					</div>
					<div class="element">
						<label for="havadurumu">Hava Durumu<span class="red">* İl seçiniz. <span class="red">* Şuan  <? echo .$sor['havadurumu'].; ?>  Seçili</span></span></label>
<select name="havadurumu" id="havadurumu">
<option value="ADANA">ADANA</option>
<option value="ADIYAMAN">ADIYAMAN</option>
<option value="AFYONKARAHISAR">AFYONKARAHISAR</option>
<option value="AGRI">AGRI</option>
<option value="AKSARAY">AKSARAY</option>
<option value="AMASYA">AMASYA</option>
<option value="ANKARA">ANKARA</option>
<option value="ANTALYA">ANTALYA</option>
<option value="ARDAHAN">ARDAHAN</option>
<option value="ARTVIN">ARTVIN</option>
<option value="AYDIN">AYDIN</option>
<option value="BALIKESIR">BALIKESIR</option>
<option value="BARTIN">BARTIN</option>
<option value="BATMAN">BATMAN</option>
<option value="BAYBURT">BAYBURT</option>
<option value="BILECIK">BILECIK</option>
<option value="BINGOL">BINGOL</option>
<option value="BITLIS">BITLIS</option>
<option value="BOLU">BOLU</option>
<option value="BURDUR">BURDUR</option>
<option value="BURSA">BURSA</option>
<option value="CANAKKALE">CANAKKALE</option>
<option value="CANKIRI">CANKIRI</option>
<option value="CORUM">CORUM</option>
<option value="DENIZLI">DENIZLI</option>
<option value="DIYARBAKIR">DIYARBAKIR</option>
<option value="DUZCE">DUZCE</option>
<option value="EDIRNE">EDIRNE</option>
<option value="ELAZIG">ELAZIG</option>
<option value="ERZINCAN">ERZINCAN</option>
<option value="ERZURUM">ERZURUM</option>
<option value="ESKISEHIR">ESKISEHIR</option>
<option value="GAZIANTEP">GAZIANTEP</option>
<option value="GIRESUN">GIRESUN</option>
<option value="GUMUSHANE">GUMUSHANE</option>
<option value="HAKKARI">HAKKARI</option>
<option value="HATAY">HATAY</option>
<option value="IGDIR">IGDIR</option>
<option value="ISPARTA">ISPARTA</option>
<option value="ISTANBUL">ISTANBUL</option>
<option value="IZMIR">IZMIR</option>
<option value="KAHRAMANMARAS">KAHRAMANMARAS</option>
<option value="KARABUK">KARABUK</option>
<option value="KARAMAN">KARAMAN</option>
<option value="KARS">KARS</option>
<option value="KASTAMONU">KASTAMONU</option>
<option value="KAYSERI">KAYSERI</option>
<option value="KIRIKKALE">KIRIKKALE</option>
<option value="KIRKLARELI">KIRKLARELI</option>
<option value="KIRSEHIR">KIRSEHIR</option>
<option value="KILIS">KILIS</option>
<option value="KOCAELI">KOCAELI</option>
<option value="KONYA">KONYA</option>
<option value="KUTAHYA">KUTAHYA</option>
<option value="MALATYA">MALATYA</option>
<option value="MANISA">MANISA</option>
<option value="MARDIN">MARDIN</option>
<option value="MERSIN">MERSIN</option>
<option value="MUGLA">MUGLA</option>
<option value="MUS">MUS</option>
<option value="NEVSEHIR">NEVSEHIR</option>
<option value="NIGDE">NIGDE</option>
<option value="ORDU">ORDU</option>
<option value="OSMANIYE">OSMANIYE</option>
<option value="RIZE">RIZE</option>
<option value="SAKARYA">SAKARYA</option>
<option value="SAMSUN">SAMSUN</option>
<option value="SIIRT">SIIRT</option>
<option value="SINOP">SINOP</option>
<option value="SIVAS">SIVAS</option>
<option value="SANLIURFA">SANLIURFA</option>
<option value="SIRNAK">SIRNAK</option>
<option value="TEKIRDAG">TEKIRDAG</option>
<option value="TOKAT">TOKAT</option>
<option value="TRABZON">TRABZON</option>
<option value="TUNCELI">TUNCELI</option>
<option value="USAK">USAK</option>
<option value="VAN">VAN</option>
<option value="YALOVA">YALOVA</option>
<option value="YOZGAT">YOZGAT</option>
<option value="ZONGULDAK">ZONGULDAK</option>
</select>

					</div>
					<div class="element">
						<label for="maps">Google Maps<span class="red">* Google haritalardan alacağınız html kod.</span></label>
						<textarea rows="10" name="maps" cols="100"><?php echo $sor['maps']; ?></textarea>
					
					</div>
					<div class="entry">
						<button type="submit" class="add">Kaydet</button>
					</div>
				</form>
<br><br>

					<form action="logo-kaydediliyor.php" method="post" enctype="multipart/form-data">
					<div class="element">
						<label for="file">Logonuz<span class="red">* Boyut 275*100</span></label>
						<input type="file" name="file" />
					</div>
<?php
include ("../database.php");
$calistir = mysqli_query($db,"select * from logo where id=5") or die("Hata Olustu! ".mysql_error());
$gor = mysqli_fetch_assoc($calistir);
?>
					<img border="0" src="admin/<?php echo $gor['logo']; ?>" width="275" height="100">
					<div class="entry">
						<button type="submit" class="add">Yükle</button>
					</div>
					</form>

		</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
	</div>
</div>

</body>
</html>
