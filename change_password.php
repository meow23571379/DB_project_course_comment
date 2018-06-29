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
  $newpassword = $_POST["NEWpsw"];
  $password = $_POST["REGpsw"];
  //insert new
  $sql = "SELECT name, Account, password FROM Teacher WHERE Account = '$Account'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $name = $row["name"];
  if($row["password"] == $password){
    $sql = "UPDATE  Teacher SET password = '$newpassword' WHERE Account = '$Account'";
    $result = $conn->query($sql);
    $message = "Password changed successfully !";
      echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";

  } else {
      $message = "Account or Password Wrong";
      echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";
}
?>
<body>
</body>
</html>