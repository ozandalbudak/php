<?php
session_start();
unset($_SESSION['uye']); // oturumda olan de�i�kenimiz siliniyor
session_destroy(); // oturumlar� siler
echo "<script>location.href='index.php';</script>"; // index.php sayfas�na y�nlendiriliyorsunuz
?>