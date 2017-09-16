<?php
$host='127.0.0.1';
$user='root';
$pass='';
$Database='phoneshopdatabase';
$db = mysqli_connect($host,$user,$pass,$Database);
if (!$db) {
  die();
}
 ?>
