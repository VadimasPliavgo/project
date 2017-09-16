<?php
$host='127.0.0.1';
$user='root';
$pass='';
$Database='phoneshopdatabase';
$conn=mysqli_connect($host,$user,$pass,$Database);
$sql= "SELECT * FROM orders";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
   echo "<tr>";
   echo"<td colspan='5'><b>Orders</b></td>";
   echo"</tr>";
   echo "<tr>";
   echo"<td><b> ID </b></td>";
   echo"<td><b> Name </b></td>";
   echo"<td><b> Phone color </b></td>";
   echo"<td><b> Phone number </b></td>";
   echo"<td><b> Email </b></td>";
   echo"</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo"<td>".$row["id"]."</td>";
        echo"<td>".$row["name"]."</td>";
        echo"<td>".$row["color"]."</td>";
        echo"<td>".$row["phone"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"</tr>";
    }
} else {
    echo "<tr>No orders was found</tr>";
}

 ?>
