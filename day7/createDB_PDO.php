<?php

$host = 'localhost';
$user = 'root';
$pass = '';

try{
    $coon = new PDO("mysql:host=$host",$user, $pass);
    $sql = "Create database elsonidb";
    $coon->exec($sql);
    echo"database is created";

}
catch (Exeption $e){
    echo "not connected";
}


?>
