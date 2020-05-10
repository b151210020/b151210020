<?php
try{

    $db = new PDO('mysql:host=localhost;dbname=b151210020','root','');

    $db->exec('SET CHARACTER SET utf8');

}catch(PDOException $e){

    echo 'Hata: '.$e->getMessage(); //Exception’da belirtilen hatayı ekrana basar.

}
?>