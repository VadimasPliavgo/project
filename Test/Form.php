<?php
$host='ec2-54-247-82-210.eu-west-1.compute.amazonaws.com';
$user='oqqsodykxuvwqp';
$pass='c4fe4e1d154b3a07d4592a36e0dc6afa99d0fefb1f133f1ed8b98717394ab3d6';
$Database='d1gk77g1dd4vi9';
$db1 = mysqli_connect($host,$user,$pass,$Database);
if (!$db1) {
  echo"Pizdec";
  die();
}
else
  echo "OK";
 ?>
