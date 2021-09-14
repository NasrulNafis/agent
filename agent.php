<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Register</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href"https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/Style.css" >
  </head>
<body>
 <section class="header">
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
   </section>
<section class="form">
<form name="form" method="post" action="agent0.php">
<div class="container">
    <h1>Register Agent</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<label for="id"><b>Agent ID :</b></label>
    <input type="text" placeholder="Enter ID" name="id" id="id" required><br>
	<label for="name"><b>Agent name :</b></label>
    <input type="text" placeholder="Enter Fullname" name="name" id="name" required><br>	
	<label for="fonnum"><b>Agent contact number :</b></label>
    <input type="text" placeholder="Enter Contact Number" name="fonnum" id="fonnum" required><br>
	<label for="email"><b>Agent e-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="email" id="email" required><br>
	<label for="username"><b>Agent username :</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required><br>
	<label for="password"><b>Agent password :</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required><br>
<input type="submit" name="submit" value="submit">
</div>
</form>
</section>
<br><br><br>
<br>
<br>
</body>
</html>