<?php
include_once('config.php');

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $tempPass=$_POST['password'];
    $password=password_hash($tempPass, PASSWORD_DEFAULT);

    if(empty($username)||empty($name)||empty($surname)||empty($email)||empty($password)){
        echo "You need to fill all the fields";
    }else{
        $sql = "SELECT username FROM users1 WHERE username=:username";
        $tempSQL = $conn->prepare($sql);
        $tempSQL->bindParam(':username',$username);
        $tempSQL->execute();

        if($tempSQL->rowCount()>0){
            echo "username already exist!";
            header("refresh:2; url=index.php");
        }
        else{
            $sql = "INSERT INTO users1 (username, name, surname, email, password) VALUES (:username, :name, :surname, :email, :password)";
            $insertSQL = $conn->prepare($sql);
            $insertSQL ->bindParam(':username',$username);
            $insertSQL ->bindParam(':name',$name);
            $insertSQL ->bindParam(':surname',$surname);
            $insertSQL ->bindParam(':email',$email);
            $insertSQL ->bindParam(':password',$password);

            $insertSQL->execute();

            echo "data saved succesfully";
            header("Location:login.php");
        }
    }

}
?>