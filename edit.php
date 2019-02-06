<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
		
		//redirectig to the display page. 
		header("Location: display.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="css/navigation.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

   	<div id='cssmenu'>
		<ul>
   			<li><a href='index.php'>Home</a></li>
   			<li ><a href='#'>Travel With Us</a></li>
   			<li><a href='display.php'>Check Traveller's List</a></li>

   			<li class='active' class="information"><a href='#'>|| Edit this Information</a></li>
		</ul>
	</div>
 
	<div class="container">
		<form name="form1" method="post" action="edit.php">
			<table >
				<tr> 
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $name	;?>"></td>
				</tr>
				<tr> 
					<td>Age</td>
					<td><input type="number" name="age" value="<?php echo $age	;?>"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo $email;?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="update" value="Update" id="submits"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
