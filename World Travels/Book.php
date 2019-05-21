<html>
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book Tickets</title>
		<link rel="stylesheet" href="desktop.css">
	</head>
	<body topmargin="0">
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
	<h3>
	<?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></h3>
	<center>
	<font size=10>
		<form method="POST" action="saveticket.php" name="f1">
		<fieldset style="width:270px">
		<legend>
		<div style="color:#FF5733">
		<h1>BookTicket</h1>
		</div>
		</legend>
		<p>Travel Info</p>
		<table>
			<tr><td></td><td></td></tr>
			<tr>
			<td>Date: </td>
			<td><input type="date" name="date" ></td>
			</tr>
			<tr><td></td><td></td></tr>
			<tr>
			<td>Flight Number: </td>
			<td><input type="text" name="fnumber" required></td>
			</tr>
			<tr>
			<td>Class: </td>
			<td>
			<input type="radio" name="class" id="Economy" value="Economy">
			<label for="Economy">Economy</label>
			<input type="radio" name="class" id="eplus" value="eplus">
			<label for="eplus">EconomyPlus</label>
			<input type="radio" name="class" id="Business" value="Business">
			<label for="Business">Business</label>
			</td>
			</tr>
			<tr>
			<td>First Name:</td>
			<td><input type="text" name="firstname" ></td>
			</tr>
            <tr>
			<td>Last Name:</td>
			<td><input type="text" name="lastname" ></td>
			</tr>
			<tr> 
			<td>Age: </td>
			<td><input type="number" name="age"></td>
			</tr>
			<tr>
			<td>Email:</td>
			<td><input type="text" name="username"></td>
			</tr>
            <tr>
			<td>Nationality:</td>
			<td>
            <input type="radio" name="nation" id="us" value="us">
			<label for="US">US</label>
			 <input type="radio" name="nation" id="uk" value="uk">
			<label for="Uk">Uk</label>
            <br>
             <input type="radio" name="nation" id="canada" value="canada">
			<label for="Canada">Canada</label>
            <input type="radio" name="nation" id="india" value="india">
			<label for="india">india</label>
            <br>
             <input type="radio" name="nation" id="nethrelands" value="netherlands">
			<label for="netherlands">Netherlands</label>
			</td>
			</tr>
			<tr>	
 			<td>Passport Number</td>
			<td><input type="text" name="pport" required></td>
			</tr>
			<tr>
			<td>Contact Number:</td>
			<td><input type="number" name="num"></td>
			</tr>
			<tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender" id="male" value="male">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female">
			<label for="female">Female</label>
			</td>
			</tr>
		
			<tr><td></td></tr>
			<tr><td></td>
			<td align="center"><input type="submit" name="Submit" value="Submit"> &nbsp &nbsp &nbsp &nbsp &nbsp <input type="reset"> </td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			</tr>
			</tr>
		</table>
		</fieldset>
		</form>
		</font>
	</center>
	
</div>
	</body>
	<footer>
  		<p>Created by: Us</p>
  			<p>Contact information: <a href="mailto:snuthalapati1@studnet.gsu.edu">Us</a>.</p>
</footer>

</html>