<?php
    //setting MySQl database parameters


    $host = 'localhost';
    $user = 'root';
    $pass = '';

    try{
        $coon = new PDO("mysql:host=$host",$user, $pass);
        echo "connected";

    }
    catch (Exeption $e){
        echo "not connected";
    }
?>