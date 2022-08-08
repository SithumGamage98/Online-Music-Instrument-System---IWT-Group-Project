<!-- IT20661656-Sandeepani M.L. -->

<?php

include("confing.php"); //link database connection 

// product delete using product ID

$sql = "DELETE FROM pHandling WHERE id='" . $_GET["id"] . "'";
header('location:viewProduct.php');

// check deletation

if (mysqli_query($dbcon, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($dbcon); } //display error message
mysqli_close($dbcon); //close database connection
?>

