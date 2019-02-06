<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="css/navigation.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div id='cssmenu'>
		<ul>
   			<li class='active'><a href='#'>Home</a></li>
   			<li><a href='add.html'>Travel With Us</a></li>
   			<li><a href='display.php'>Check Traveller's List</a></li>

   			<li class="information"><a href='#'>|| Information Stored in User's Database</a></li>
		</ul>
	</div>
	
	<div class="container-text"> I've got the crush <br>on the nature.
	</div><br>
	
	<div class="container-texts">This site is developed inorder to handle the CRUD operations in WebServers. <br><br><br>
		<a id="withus" href='add.html'>Travel With Us</a>
	</div>

</body>
</html>
