<?php
$db2 = parse_url(getenv("postgres://oqqsodykxuvwqp:c4fe4e1d154b3a07d4592a36e0dc6afa99d0fefb1f133f1ed8b98717394ab3d6@ec2-54-247-82-210.eu-west-1.compute.amazonaws.com:5432/d1gk77g1dd4vi9"));
$db2["path"] = ltrim($db2["path"], "/");
if (!$db2) {
  die();
}


/*$name = $_POST['name'];
$description = $_POST['description'];
$sql = "INSERT INTO Contact (name, description)
VALUES ('$name','$description')";*/
$sql = "SELECT * FROM Opportunity";
$result = mysqli_query($db2, $sql);

echo $result;
 ?>
