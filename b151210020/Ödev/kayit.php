<?php

$db = new PDO("mysql:host=localhost;dbname=b151210020;charset=utf8", "root", "");


$kullanici_adi = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];


if (!$kullanici_adi || !$sifre) {
    echo"lütfen boş alan bırakmayınız.";
    header("Refresh: 3; url=index.php");
    die("Yeniden Deneyin!");

}


$ekle = $db->prepare("INSERT INTO uyeler SET adi = ?, sifre = ?");
$ekle->execute([$kullanici_adi, $sifre]);

if ($ekle) {
    echo "Hoşgeldiniz";
    echo " ";
    echo "<b>".$_POST['kullanici_adi'];
}else {
    echo "Bir hata oluştu.";
    
}

?>

