<?php
session_start();

$_SESSION=array();

session_destroy();
echo "Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=login.php");
ob_end_flush();
?>