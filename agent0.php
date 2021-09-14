<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Register</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <head>
    <link rel="stylesheet" type="text/css" href="css/Style.css" >
  </head>
<body>
	   <!-- Navigation (Sits on top) -->
    <div class="w3-top w3-bar w3-white w3-padding w3-card w3-wide">
	   <a><h6>Yamamotor's Official Website</h6></a>
	   
       <!-- Right-sided navbar links. Hide them on small screens -->
       <div class="w3-right w3-hide-small">
       <h6></h6>
	   <a href="/yamamotor/mainPage.php" class="w3-bar-item w3-button">HOME</a>
	   <a href="/yamamotor/showroom.php" class="w3-bar-item w3-button">SHOWROOM</a>
       <a href="/yamamotor/booking.php" class="w3-bar-item w3-button">BOOKING</a>
       <a href="/yamamotor/service.php" class="w3-bar-item w3-button">SERVICE</a>
	   <a href="#register" class="w3-bar-item w3-button">REGISTER</a>  
       </div> 
    </div>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>











<?php
/* include db connection file */
include("dbconn.php");
if(isset($_POST['submit'])){
/* capture values from HTML form */
$id = $_POST['id'];
$name = $_POST['name'];
$fonnum = $_POST['fonnum'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql0 = "SELECT agentid FROM agent WHERE
agentid = $id";
$query0 = mysqli_query($dbconn, $sql0) or die ("Error: " .
mysqli_error($dbconn));
$row0 = mysqli_num_rows($query0);
if($row0 != 0){
echo "Record is existed";
}
else{
/* execute SQL INSERT command */
$sql2 = "INSERT INTO agent (agentid, agentname, agentfon, agentemail, agent_uname, agent_pass)
VALUES ('" . $id . "', '" . $name . "', '" . $fonnum . "', '" .
$email . "', '" . $username . "', '" . $password . "')";
mysqli_query($dbconn, $sql2) or die ("Error: " .
mysqli_error($dbconn));
/* display a message */
echo "Data has been saved";
}
}// close if isset()
/* close db connection */
mysqli_close($dbconn);
?>

