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
   			<li ><a href='index.php'>Home</a></li>
   			<li><a href='add.html'>Travel With Us</a></li>
   			<li class='active'><a href='display.php'>Check Traveller's List</a></li>
   			<li class="information"><a href='#'>|| List Of Travellers</a></li>
		</ul>
	</div>
	
	<table class="indextable" >
		<tr >
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Update</th>
		</tr>
	
	<?php 
	 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
