
<?php 

$host = "ec2-54-247-82-210.eu-west-1.compute.amazonaws.com"; 
$user = "oqqsodykxuvwqp"; 
$pass = "c4fe4e1d154b3a07d4592a36e0dc6afa99d0fefb1f133f1ed8b98717394ab3d6"; 
$db = "d1gk77g1dd4vi9"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$empty = '';
$name = $_POST['name'];
$description = $_POST['description'];
$sql = "INSERT INTO salesforce.contact(
	createddate, isdeleted, name, systemmodstamp, lastname, accountid, sfid, id, _hc_lastop, _hc_err, description)
	VALUES ($empty, $empty, $name, $empty, $empty, $empty, $empty $empty, $empty, $empty, $description)";

$rs = pg_query($con, $sql) or die("Cannot execute query: $sql\n");

pg_close($con); 


?>
