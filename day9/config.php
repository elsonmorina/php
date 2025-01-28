<?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";

    try{
        $connect = new PDO("mysql:$server;dbname:$dbname", $username, $password);
        echo "ne rregull";
    }catch(PDOException $e){
        echo "something went wrong";
    }
?>