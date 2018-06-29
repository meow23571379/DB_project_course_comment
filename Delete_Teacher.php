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

	$Account=$_POST["uname"];
	$Pass=$_POST["psw"];
	$sql = "SELECT name, Account, password FROM Teacher WHERE Account = '$Account'";
	$result = $conn->query($sql);
  	$row = $result->fetch_assoc();
  	$name = $row["name"];
	if ($row["password"] == $Pass) {
		$sql = "DELETE FROM teacher WHERE Account = '$Account' and password = '$Pass'";
		$result = $conn->query($sql);
		$message = "Delete successfully!";
    	echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";
	} else {
		echo "Error insert: " . $conn->error;
	    $message = "The account or password is wrong! Please try again. ";
    	echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";
	}

?>
</body>
</html>