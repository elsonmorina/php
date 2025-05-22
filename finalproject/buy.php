<?php
session_start();
include_once('config.php');

$user_id=$_SESSION['id'];
$products_id=$_SESSION['id'];

$final_price=$_POST['final_price'];



$sql = "INSERT INTO shopping1(user_id, products_id, final_price) VALUES(:user_id, :products_id, :final_price)";

$insertBookings=$conn->prepare($sql);
$insertBookings->bindParam(":user_id",$user_id);
$insertBookings->bindParam(":products_id",$products_id);
$insertBookings->bindParam(":final_price",$final_price);


$insertBookings->execute();
header('Location:home.php');

?>