<?php

    include_once('config.php');

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users(username, name, surname, email,password) values(:username,:name, :surname, :email, :password)";

        $sqlQuery = $conn->prepare($sql);

        $sqlQuery->bindParam(':username', $username);
        $sqlQuery->bindParam(':name', $name);
        $sqlQuery->bindParam(':surname', $surname);
     
        $sqlQuery->bindParam(':email', $email);
        $sqlQuery->bindParam(':password', $password);

        $sqlQuery->execute();

        echo "data saved successfully ...";
    }
    
?>