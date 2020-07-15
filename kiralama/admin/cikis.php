<?php
session_start();
unset($_SESSION['uye']); // oturumda olan deðiþkenimiz siliniyor
session_destroy(); // oturumlarý siler
echo "<script>location.href='index.php';</script>"; // index.php sayfasýna yönlendiriliyorsunuz
?>