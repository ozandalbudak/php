<?php
error_reporting(0);
$kural = file_get_contents("http://www.tcmb.gov.tr/kurlar/today.xml");
preg_match('@<CurrencyName>EURO</CurrencyName><ForexBuying>(.*?)</ForexBuying>@si',$kural,$kuroku);

echo $kuroku[1];
?>