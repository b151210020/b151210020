<?php
session_start();

$db = new PDO("mysql:host=localhost;dbname=b151210020;charset=utf8", "root", "");

$kadi = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];

if (!$kadi || !$kadi) {
    die("boş alan bırakmayınız!");
}

$user = $db->query("SELECT * FROM uyeler WHERE kullanici_adi = '$kadi' AND sifre = '$sifre'")->fetch();

if ($user) {
    $_SESSION['user'] = $user;
    header("location:index.php");
}else {
    echo "Bilgiler hatalı";
}