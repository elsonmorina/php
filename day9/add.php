<?php

    include_once("config.php");

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        $sql = "insert into users(name, surname, email) values(:name, :surname, :email)";

        $sqlQurery = $connect->prepare($sql);

        $sqlQurery->bindParam(':name',$name);
        $sqlQurery->bindParam(':surname',$surname);
        $sqlQurery->bindParam(':email',$email);

        $sqlQurery->execute();

        echo "data saved successfully...";
    }
    
?>