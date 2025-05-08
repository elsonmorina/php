<?php
session_start();
include_once('config.php');

$user_id=$_SESSION['id'];
$movie_id=$_SESSION['id'];

$nr_ticket=$_POST['nr_tickets'];
$date=$_POST['date'];
$time=$_POST['time'];

$sql = "INSERT INTO bookings(user_id, movie_id, nr_ticket, date, time) VALUES(:user_id, :movie_id, :nr_ticket, :date, :time)";

$insertBookings=$conn->prepare($sql);
$insertBookings->bindParam(":user_id",$user_id);
$insertBookings->bindParam(":movie_id",$movie_id);
$insertBookings->bindParam(":nr_ticket",$nr_ticket);
$insertBookings->bindParam(":date",$date);
$insertBookings->bindParam(":time",$time);

$insertBookings->execute();
header('Location:home.php');

?>