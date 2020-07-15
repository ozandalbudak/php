<?php
session_start(); 
if(!isset($_SESSION['uye'])) { 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr" xml:lang="tr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Yönetim Paneli</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form name="giris" method="post"action="giris-kontrol.php">
					<label for="login">Kullanıcı Adı :</label>
					<input id="uyead" name="uyead" class="text" />
					<label for="pass">Şifre :</label>
					<input id="sifre" name="sifre" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" class="ok">Giriş</button>
				</form>
			</div>
			
		</div>
	</div>
</div>

</body>
</html>
<?php
exit();
} else {
echo '';
}
?>