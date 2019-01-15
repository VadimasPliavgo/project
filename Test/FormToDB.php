
<?php 

$host = "ec2-54-247-82-210.eu-west-1.compute.amazonaws.com"; 
$user = "oqqsodykxuvwqp"; 
$pass = "c4fe4e1d154b3a07d4592a36e0dc6afa99d0fefb1f133f1ed8b98717394ab3d6"; 
$db = "d1gk77g1dd4vi9"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "SELECT * FROM salesforce.contact"; 
$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
echo $rs;
while ($row = pg_fetch_row($rs)) {
  echo "$row[0]'\n' $row[1]'\n' $row[2]'\n'";
}
    
pg_close($con); 


?>
