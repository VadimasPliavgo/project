<?php
include 'connectionDB.php';
$conn=mysqli_connect($host,$user,$pass,$Database);
$sql= "SELECT * FROM orders";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo"<td>".$row["id"]."</td>";
        echo"<td>".$row["name"]."</td>";
        echo"<td>".$row["color"]."</td>";
        echo"<td>".$row["number"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"</tr>";
    }
} else {
    echo "<tr>No orders was found</tr>";
}
 ?>
