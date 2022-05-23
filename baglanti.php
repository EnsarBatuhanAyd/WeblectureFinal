<?php
    $host = "localhost";
    $kullanici = "root";
    $parola = "";
    // $vt2 = "galeri";
    $vt = "uyelik";

    $baglanti = new mysqli($host, $kullanici, $parola, $vt);

    // try {
    //     $conn = new PDO("mysql:host=$host;dbname=$vt;charset=utf8", $kullanici, $parola);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch(PDOException $e)
    // {
    // echo "Bağlantı hatası: " . $e->getMessage();
    // }

    try {
        $conn = new PDO("mysql:host=$host;dbname=$vt;charset=utf8", $kullanici, $parola);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e)
    {
    echo "Bağlantı hatası: " . $e->getMessage();
    }
    
?>