<?php 
  $host       = "localhost";
  $kullanici  = "root";
  $parola     = "";
  $veritabani = "kiralama";
 
  // Mysql veritaban?na ba?lant? kuruyoruz. 
  if (@$db=mysqli_connect($host,$kullanici,$parola)){
     echo "";
  } else {
     echo "VT Baglanti hatasi";
  }   
 
  // kullan?lacak olan vt'yi seçiyoruz
  if ( mysqli_select_db($db,$veritabani) ){
     echo "";
  } else {
     echo "<br>VT Secme hatasi";
  }
 ?>