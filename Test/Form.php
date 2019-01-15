<?php
$host='eu-cdbr-west-02.cleardb.net';
$user='bb277a56596692';
$pass='367cf596';
$Database='heroku_041576a6f8f9aa7';
$db = mysqli_connect($host,$user,$pass,$Database);
if (!$db) {
  die();
}
 ?>
