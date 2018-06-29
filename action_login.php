<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>log in</title>
</head>
<body>
<style type="text/css">
	body {background-color: #FCFCFc;}

</style>
<?php
//connecting
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



//search if it is exist
$sql = "SELECT name, Account, password FROM Teacher WHERE Account = '$Account'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();


$name = $row["name"];
if($row["password"] == $Pass){
	$message = "log in successful ! Hello, $name Welcome Back.";
    echo "<script type='text/javascript'>alert('$message');window.location.href = \"Logged_in.php\";</script>";

} else {
    $message = "Account or Password Wrong";
    echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";
}
 



$conn->close();

?>

</body>
</html>