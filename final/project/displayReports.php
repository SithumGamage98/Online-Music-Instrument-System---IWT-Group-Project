<?php
//Linking the configuration file
require 'config2.php';

?>

<table border="1" width="100">

<tr>

<th>Product Code</th>
<th>Number Of Sales</th>
<th>Total Profit</th>






</tr>
 







<?php

$sql= "SELECT * FROM repdetails";
if($result=$con->query($sql)){
if($result->num_rows > 0){
 
while($row = $result->fetch_assoc()){
echo ("<tr>");
echo ("<td>". $row["prodCode"]. "</td>");
echo ("<td>" . $row["NumberOfSales"] . "</td>");
echo ("<td>" . $row["TotalProfit"] . "</td>");

echo ("<td>");
}
echo ("</table>");
}else{
echo "no results";
}
}
else{
echo "Error:". $con->error;
}
$con->close();
?>








