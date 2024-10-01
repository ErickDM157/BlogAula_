<?php

try{
    $dbh = new PDO('mysql:host=localhost;dbname=blogaula','root','');
}catch (PDOException $e){
    echo "ERRO".$e;
}
?>