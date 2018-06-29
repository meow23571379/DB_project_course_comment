<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body >

<h2 id="title">=DBproject=</h2>

<!-- <button onclick="document.getElementById('register01').style.display='block'" style="width:100px;  position:fixed; top:37%; left:46%;">Register</button> -->
<button onclick="window.history.forward();location.replace('./index.html');" style="width:100px;  position:fixed; top:10%; left:5%;">Logout</button>
<button onclick="window.location.href='./See_All_Teacher.php'" style="width:100px;  position:fixed; top:20%; left:5%;">See All User</button>

<button onclick="document.getElementById('update01').style.display='block'" style="width:100px;  position:fixed; top:30%; left:5%;">Change Password</button>

<button onclick="./See_All_Courses.html" style="width:100px;  position:fixed; top:40%; left:5%;">Courses</button>
<button onclick="./Delete_Courses.php" style="width:100px;  position:fixed; top:50%; left:5%;">Delete</button>
<button onclick="window.location.href='./Delete_Courses.php'"" style="width:100px;  position:fixed; top:60%; left:5%;">Add</button>



<div id="register01" class="modal">
  
  <form class="modal-content animate" action="./action_register.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('register01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="REGname"><b>Username</b></label>
      <input type="text" placeholder="" name="REGacc"  required>

      <label for="REGpsw"><b>Password</b></label>
      <input type="password" placeholder="" name="REGpsw"  required>
      <label for="REGname"><b>Name</b></label>
      <input type="text" placeholder="" name="REGname"  required>
      <button name="submitbtn" type="submit" value="Submit">submit</button>

    </div>
  </form>
</div>

<div id="delete01" class="modal">
  
  <form class="modal-content animate" action="./Delete_Teacher.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('delete01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="" name="uname"  required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="" name="psw"  required>
      <button name="submitbtn" type="submit" value="Submit">go</button>
    </div>
  </form>
 </div>
<div id="update01" class="modal">
  
  <form class="modal-content animate" action="./change_password.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('update01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="REGname"><b>Confirm Username</b></label>
      <input type="text" placeholder="" name="REGacc"  required>
      <label for="REGpsw"><b>Password</b></label>
      <input type="password" placeholder="" name="REGpsw"  required>
      <label for="NEWpsw"><b>New Password</b></label>
      <input type="text" placeholder="" name="NEWpsw"  required>
      <button name="submitbtn" type="submit" value="Submit">submit</button>

    </div>
  </form>
</div>
<script>
// Get the amodal
var modal = document.getElementById('login01');
var modal2 = document.getElementById('register01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
window.history.forward(1);


  


</script>

</body>
</html>