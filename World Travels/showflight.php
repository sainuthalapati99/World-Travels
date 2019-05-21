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
    <h3>
	<?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></h3>
	<h4> Search results... </h4>
	<?php
      
	  $host='localhost';
      $username='snuthalapati1';
      $password='snuthalapati1';
      $db_name='snuthalapati1';
      $tbl_name='Flights';
	  
      $conn = mysqli_connect($host, $username, $password,$db_name);
		/*if ($conn) {
			echo"succesful";
            //die("Connection failed: " . mysqli_connect_error());
          }*/
		$departure=$_POST['departure'];
        $arrival=$_POST['arrival'];  
		$plan=$_POST['plan'];
		$query = "SELECT * FROM Flights WHERE Depart='$departure'AND Arrival='$arrival' AND Ways='$plan'";
	    $result1=mysqli_query($conn,$query);
        $count = mysqli_num_rows($result1);	
        
		 if($count == 0){
			 echo '<script type="text/javascript">alert("No flights available!\nTry Again!!"); window.location.href="flightform.html";</script>';
			 }
		 
		
			 echo "<p><table><tr><th>Departure</th>
		             <th>Arrival</th>
					 <th>Airlines</th>
					 <th>FlightNumber</th>
					 <th>Duration</th>
					 <th>TravelPlan</th>
					 <th>Book</th>
					 </tr>";
		 
		while($row2=mysqli_fetch_array($result1)){
		   
		   echo  "<tr><td>" . $row2['Depart'] . 
		        "</td><td>" . $row2['Arrival'] .
				"</td><td>" .$row2['Airlines'].
                "</td><td>" .$row2['fNumber'].
                "</td><td>" .$row2['travelTime'].
				"</td><td>" .$row2['Ways'].
                "</td><td>".'<a href="Book.php">BookNow</a>'."</td></tr>"; 
		}
		
		 echo "</table></p>";
	 
?>
	
 </div>
</body>   
</html>