<html>
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Yoor Tickets</title>
		<link rel="stylesheet" href="desktop.css">
	</head>
	<body topmargin="0">
    <div class="navbar">
  <a href="home.php">World Travels</a>
  <a href="flightform.php">Book a flight</a>
  <a href="contactus.html">Contact Us</a>
  <a href="flight.html">Admin Use</a>
   <a  href="logout.php"style="float:right">Logout</a>
</div>
    <div class="transbox">
    <h1>World Travels</h1>
        <h2>Let us be a part of your Journey</h2>
		 <?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?>
        <center>
		
		<?php
       $conn = mysqli_connect('localhost', 'snuthalapati1', 'snuthalapati1','snuthalapati1');
		$sql1="SELECT * FROM Ticket";
		$result1=mysqli_query($conn,$sql1);		
		$row1=mysqli_fetch_row($result1);
	
		?>
        <table border="1" style="width:68%">
  <tr>
    <td><h3 align="center">  Your E-Ticket as on <?php echo date("Y/m/d");?> </h3><br></td>
    
  </tr>
  <tr>
    <td><p>
	<h3 >
To fly easy please present the E-Ticket with a valid photo identification at the airport and check-in counter. <br>
The check-in counters are open 3 hours prior to departure and close strictly 2 hours prior to departure. </h3>
</p></td>
  </tr>
</table>

<table border="1" style="width:68%">

<tr><td id=main>First name:</td>
    <td id=main>Last name:</td>
    <td id=main>Passport Number: </td>
    <td id=main>Nationality</td>
	<td id=main>PIN</td>
	</tr>
<tr><td id=main><?php echo $row1[0] ?></td>
    <td id=main><?php echo $row1[1] ?></td>
	<td id=main><?php echo $row1[9] ?></td>
    <td id=main><?php echo $row1[11] ?></td>
    <td id=main><script type="text/javascript">
         var id = Math.floor((Math.random()*1000000) +1);
           document.write(id);
             </script></td> </tr>   
        </table>
 <br>

<table border="1" style="width:68%">

<tr><td id=main>From: </td>
    <td id=main>To: </td>
    <td id=main>Flight Number: </td>
    <td id=main>Departure Time: </td>
	<td id=main>Arrival time: </td>
    <td id=main>Fare: </td>
	</tr>
<tr><td id=main><?php echo $row1[3] ?></td>
	 <td id=main><?php echo $row1[4] ?></td>
     <td id=main><?php echo $row1[2] ?></td>
	 <td id=main><?php echo $row1[5] ?></td>
	 <td id=main><?php echo $row1[6] ?></td>
	 <td id=main><?php echo $row1[8] ?></td>
        </table>
<br>
<table border="1" style="width:68%">
  <tr>
    <td><h5 align="center"> Thank you for allowing us to be part of your journey. Wish you a happy and safe trip.</h5><br></td>
  </tr>
</table>

 </center>    
</div> 
        
</body>
<footer>
  		<p>Created by: Us</p>
  			<p>Contact information: <a href="mailto:snuthalapati1@studnet.gsu.edu">Us</a>.</p>
</footer>
</html>