<html>
<body>
<?php 
		
		$host='localhost';
      $username='snuthalapati1';
      $password='snuthalapati1';
      $db_name='snuthalapati1';
      
	  
      $conn = mysqli_connect($host, $username, $password,$db_name);
		   
		   if (!$conn) 
		   {
               die("Connection failed: " . mysqli_connect_error());
           }
		      $dname=$_POST['dname'];
			  $aname=$_POST['aname'];
			  $airlines=$_POST['airlines'];
			  $fnumber=$_POST['fnumber'];
			  $ttime=$_POST['ttime'];
			  $route=$_POST['route'];
			  $eprice=$_POST['eprice'];
			  $eplus=$_POST['eplus'];
			  $bprice=$_POST['bprice'];
			  
			   
			  
			  $query1 = "SELECT * FROM Flights WHERE fNumber='$fnumber'";
			
	          $result1=mysqli_query($conn,$query1);
              $count = mysqli_num_rows($result1);	
			  echo $count;
              
			    if($count > "0"){
				  
				  echo '<script type="text/javascript">alert("flight already exists!\nTry Again!!"); window.location.href="flights.php";</script>';

				}
			    
			   else{  
			     $query = "INSERT INTO Flights VALUES ('$dname','$aname','$airlines','$fnumber','$ttime','$route')";
				 
			     $insert_row1 =mysqli_query($conn,$query);
				 
				      if (!$insert_row1)
					  {
					      echo "failed";
					   }
					   
					   
			         $query2 = "INSERT INTO Fares VALUES('$fnumber','$eprice','$eplus','$bprice')";
			         $insert_row2 = mysqli_query($conn,$query2);
			         if($insert_row2){
			             header("location:home.html");
			          }
			         else{
				
				      echo '<script type="text/javascript">alert("Error occured\nTry Again!!"); window.location.href="flights.php";</script>';
				       die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			             }
						 
			   } 
		
	?>
</body>
</html>