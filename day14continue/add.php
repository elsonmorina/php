<?php

    include_once('config.php');

    if(isset($_POST['submit'])){
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(empty($name)||empty($surname)||empty($username)||empty($email)||empty($password)){
            echo "You need to fill all the fields";
        }else{
        $sql="INSERT INTO users(name,surname,username,email,password) VALUES(:name,:surname,:username,:email,:password)";

        $insertSQL = $conn->prepare($sql);
        
        $insertSQL ->bindParam(':name',$name);
        $insertSQL ->bindParam(':surname',$surname);
        $insertSQL ->bindParam(':username',$username);
        $insertSQL ->bindParam(':email',$email);
        $insertSQL ->bindParam(':password',$password);

        $insertSQL->execute();

        echo "the user has been added successfully";

        echo"<br>";

        echo "<a href='dashboard.php'>Dashboard</a>";
    }
    }

?>