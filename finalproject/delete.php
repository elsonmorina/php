<?php
include_once('config.php');

$id=$_GET['id'];
$sql="DELETE FROM users1 WHERE id=:id";

$prep=$conn->prepare($sql);
$prep->bindParam(':id',$id);
$prep->execute();

header('Location:dashboard.php');
?>