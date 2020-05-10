<?php
$username = $_POST['ad'];
$password = $_POST['soyad'];
$cinsiyet = $_POST['cinsiyet'];
$dil1 =$_POST['dil1'];
$dil2 =$_POST['dil2'];
$dil3 =$_POST['dil3'];
$dersler =$_POST['dersler'];
$dosya1 =$_POST['dosya1'];
$dosya2 =$_POST['dosya2'];

echo "ADINIZ:  $username";
echo "<br />";
echo "SOYADINIZ: $password";
echo "<br />";
echo "CİNSİYETİNİZ: $cinsiyet";
echo "<br />";
echo "Bildiğiniz diller: $dil1 $dil2 $dil3";
echo "<br />";
echo "Bilinen Programlar: $dersler";
echo "<br />";

 ?>