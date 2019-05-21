<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<title>World Travels</title>
    <link rel="stylesheet" href="desktop.css"></head>
<body>
<div class="navbar">
  <a href="home.php">World Travels</a>
  <a href="flightform.php">Book a flight</a>
  <a href="contactus.html">Contact Us</a>
  <a href="flights.html">Admin Use</a>
  <a  href="logout.php"style="float:right">Logout</a>
</div>
<div class="transbox"> 
    <h1>World Travels</h1>
    <h2>Let us be a part of your Journey</h2>
     <h2>Welcome and Thank you for choosing World travels to book you flight. In order to make your ticket purchasing process as simple as possible we have left a set of instruction below, follow the instructions below and have a safe trip. If you have any concers please feel free to leave a leave us a message on the contact us page.</h2>
      <h2><?php 
	session_start();
	echo "Hi " . $_SESSION["user"] . "<br>"; 
	?>          </h2>   
   <h2>Instructions:</h2>
    <h3>
  Head over to the navigation bar a click on Book a Flight tab
        <br>
  Choose your Depature and Arrival Location
        <br>
  Choose your desired flight by clicking buy now button
        <br>
  Choose your desired seat and purchase the ticket
        <br>
    </h3>
    <br>
</div>
</body>
    
 <footer>
    <div class="transbox2"> 
    <h3>&copy; 2019 World Travels</h3>
     </div>
    </footer>   
</html>