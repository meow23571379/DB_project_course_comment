<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="css/index.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/See_All_Teacher.css"> -->
	<link rel="stylesheet" type="text/css" href="css/See_All_Teacher.css">
</head>
<!-- location.replace('./index.html'); -->
<body>

<button onclick="location.replace('./logged_in.php')" style="width:100px;  position:fixed; top:5%; left:5%;">Back</button>
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
	$conn->query($sql);

	//print whole table
	$sql = "SELECT  name, Account, password FROM Teacher";
	$result = $conn->query($sql);
	$result2 = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<div class=\"limiter\">
				<div class=\"container-table100\">
					<div class=\"wrap-table100\">
						<div class=\"table100 ver1\">";
		echo "<div>";
			echo "<div class=\"table100-nextcols\">";
				echo "<table>";			
					echo "<thead>";	
						echo "<tr class=\"row100 head\">";
							echo "<th class=\"cell100 column1\">Account</th>";			
							echo "<th class=\"cell100 column2\">Name</th>";	
						echo "</tr>";						
					echo "</thead>";
					echo "<tbody>";
		while($row = $result2->fetch_assoc()) {
						echo "<tr class=\"row100 body\">";
						echo "<td class=\"cell100 column1\">" . $row['Account'] . "</td>";
				        echo "<td class=\"cell100 column2\">" . $row['name'] . "</td>";
	   	}
					echo "</tbody>";
				echo "</table>";
			echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";

	} else {
	    echo "0 results";
	}

	echo "<script src=\"vendor/jquery/jquery-3.2.1.min.js\"></script>
<!--===============================================================================================-->
	<script src=\"vendor/bootstrap/js/popper.js\"></script>
	<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
	<script src=\"vendor/select2/select2.min.js\"></script>
<!--===============================================================================================-->
	<script src=\"vendor/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src=\"js/main.js\"></script>";


?>
</body>
</html>