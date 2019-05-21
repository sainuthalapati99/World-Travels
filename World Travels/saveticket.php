<?php 
        extract($_POST);
		$conn = mysqli_connect('localhost', 'snuthalapati1', 'snuthalapati1','snuthalapati1');
	      
		
		$sql="SELECT $class FROM Fares WHERE fNumber='$fnumber'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_row($result);
		$total = $row[0];
		if($age < "12"){
			
		   $init = $total*0.2;
		   $tax = $init*0.07;
		   $pretotal= $total-$init;
		   $final=$tax+$pretotal;
		}
		elseif($age > "65")
		{
			$init = $total*0.3;
		   $tax = $init*0.07;
		   $pretotal= $total-$init;
		   $final=$tax+$pretotal;
		}
		else{
		     $tax = $total*0.07;
			$final = $total+$tax;
		}
	  
	      //echo "total is" .$final;
		 
		$sql2="SELECT Depart,Arrival,dTime,aTime FROM Flights WHERE fNumber='$fnumber'";
		$result2=mysqli_query($conn,$sql2);
		$row2=mysqli_fetch_row($result2);
		
		mysqli_query("DELETE FROM Ticket");
		$query = "INSERT INTO Ticket VALUES ('$firstname','$lastname','$fnumber','$row2[0]','$row2[1]','$row2[2]',
		           '$row2[3]','$date','$final','$pport','$age','$nation','$gender')";
		$insert_row = mysqli_query($conn,$query);
		if($insert_row){
		  header("location:seats.html");
		    }
		  else{
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
				
	?>