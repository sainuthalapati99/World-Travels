<html>
<head>
    <title>Flight Ticket Booking From</title>
    <link rel="stylesheet" href="desktop.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
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
 <p><?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></p>
<center>
	<font size=10>
		<form method="POST" action="showflight.php" name="f2">
		<fieldset style="width:300px">
		<legend>
		<div style="color:#FF5733">
		<h1>Search flight</h1>
		</div>
		</legend>
		<table>
			<tr>
			<td>Travel Plan</td>
			<td> 
                <input type="radio" name="plan" id="oneway" value="oneway">
			<label for="oneway">One Way</label>
                <input type="radio" name="plan" id="roundtrip" value="roundtrip">
			<label for="roundtrip">roundtrip</label>
                <br>
                <br>
                </td>
			</tr>
            <tr>
			<td>Departure:</td>
			<td>
                <input type="radio" name="departure" id="atlanta" value="atlanta">
			<label for="atlanta">Atlanta</label>
                <br>
                <input type="radio" name="departure" id="doha" value="doha">
			<label for="doha">Doha</label>
                <br>
                <input type="radio" name="departure" id="istanbul" value="istanbul">
			<label for="istanbul">Istanbul</label>
                <br>
                <input type="radio" name="departure" id="paris" value="paris">
			<label for="paris">Paris</label>
                <br>
                <br>
                <br>
            </td>
			</tr><tr>
			<td>Arrival:</td>
			<td>
             <input type="radio" name="arrival" id="atlanta" value="atlanta">
			<label for="atlanta">Atlanta</label>
                <br>
                <input type="radio" name="arrival" id="doha" value="doha">
			<label for="doha">Doha</label>
                <br>
                <input type="radio" name="arrival" id="istanbul" value="istanbul">
			<label for="istanbul">Istanbul</label>
                <br>
                <input type="radio" name="arrival" id="paris" value="paris">
			<label for="paris">Paris</label>
                <br>
                <br>
            </td>
			</tr>
			
		
			<tr><td></td></tr>
			<tr><td></td>
			<td align="center"><input type="submit" name="searchflights" value="Search Flights"> &nbsp &nbsp &nbsp &nbsp &nbsp <input type="reset"></td>
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
	</font>
    
    

    </div>
    </body>
</html>