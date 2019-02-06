<?php

include("config.php"); //including the database connection file

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//redirecting to the display page 
header("Location:display.php");
?>

