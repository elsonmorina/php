<?php

    session_start();
    include_once('config.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];

        $password = $_POST['password'];

        if(empty($username)||empty($password)){
            echo "Fill all the fields!!";
        }else{
            $sql = "SELECT * FROM users WHERE username=:username";

            $selectUsers = $conn->prepare($sql);

            $selectUsers->bindParam(":username",$username);

            $selectUsers->execute();

            $data=$selectUsers->fetch();

            if($data==false){
                echo "the user does not exist";
            }else{
                if(password_verify($password, $data['password'])){
                    $_SESSION['id']=$data['id'];
                    $_SESSION['username']=$data['username'];
                    $_SESSION['name']=$data['name'];
                    $_SESSION['email']=$data['email'];
                    $_SESSION['is_admin']=$data['is_admin'];

                    header('Location:dashboard.php');
                }else{
                    echo "the password is not valid";
                }
            }
        }
    }

?>