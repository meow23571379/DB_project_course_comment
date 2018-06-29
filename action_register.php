<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
	$servername = "localhost";
	$username = "Bonnie";
	$password = "Bonnie";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "USE DBproject";
	if ($conn->query($sql) === TRUE) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . $conn->error;
	}


	$Account = $_POST["REGacc"];
	$name = $_POST["REGname"];
	$password = $_POST["REGpsw"];
	//insert new
	$sql = "INSERT INTO Teacher ( name,  Account, password)
	VALUES ( '$name',   '$Account', '$password')";


	if ($conn->query($sql) === TRUE) {
		$message = "Registered successfully!";
    	echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";
	} else {
		echo "Error insert: " . $conn->error;
	    $message = "The username has been used! Please use another. ";
    	echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";
	}
?>
<body>
</body>
</html>