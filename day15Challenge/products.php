<?php

    include_once('config.php');

    if(isset($_POST['submit'])){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        

        if(empty($title)||empty($description)||empty($quantity)||empty($price)){
            echo "You need to fill all the fields";
        }else{
        $sql="INSERT INTO products(title,description,quantity,price) VALUES(:title,:description,:quantity,:price)";

        $insertSQL = $conn->prepare($sql);
        
        $insertSQL ->bindParam(':title',$title);
        $insertSQL ->bindParam(':description',$description);
        $insertSQL ->bindParam(':quantity',$quantity);
        $insertSQL ->bindParam(':price',$price);
       

        $insertSQL->execute();

        echo "the user has been added successfully";

        echo"<br>";

        echo "<a href='productsdashboard.php'>Dashboard</a>";
    }
    }

?>