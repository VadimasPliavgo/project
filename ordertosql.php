<?php
include 'connectionDB.php';
$color = $_POST['color'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$sql = "INSERT INTO orders (color, name, phone, email)
VALUES ('$color','$name','$phone','$email')";
$result = mysqli_query($db, $sql);
header("location:javascript://history.go(-1)");
 ?>
