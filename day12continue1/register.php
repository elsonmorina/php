<?php
include_once('config.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $tempPass=$_POST['password'];
    $password=password_hash($tempPass, PASSWORD_DEFAULT);

    if(empty($name)||empty($surname)||empty($username)||empty($email)||empty($password)){
        echo "You need to fill all the fields";
    }else{
        $sql = "SELECT username FROM users WHERE username=:username";
        $tempSQL = $conn->prepare($sql);
        $tempSQL->bindPARAM(':username',$username);
        $tempSQL->execute();

        if($tempSQL->rowCount()>0){
            echo "username already exist!";
            header("refresh:2; url=signup.php");
        }
        else{
            $sql = "INSERT INTO users (name, surname, username, email, password) VALUES (:name, :surname, :username, :email, :password)";
            $insertSQL = $conn->prepare($sql);
            $insertSQL ->bindParam(':username',$username);
            $insertSQL ->bindParam(':name',$name);
            $insertSQL ->bindParam(':surname',$surname);
            $insertSQL ->bindParam(':email',$email);
            $insertSQL ->bindParam(':password',$password);

            $insertSQL->execute();

            echo "data saved succesfully";
            header("refresh:2; url=login.php");
        }
    }

}
?>