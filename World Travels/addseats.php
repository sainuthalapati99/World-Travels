<?php
extract($_POST);
$host='localhost';
$username='snuthalapati1';
$password='snuthalapati1';
$db_name='snuthalapati1';

$conn = mysqli_connect($host, $username, $password,$db_name);
if (!$conn) {
	echo "failed";
    die("Connection failed: " . mysqli_connect_error());
}

    $total=$eseats + $epseats + $bseats;
	if($total==$tseats){
		
            $query = "INSERT INTO Seats VALUES ('$flinumber','$tseats','$eseats','$epseats','$bseats')";
			$insert_row = mysqli_query($conn,$query);
			if($insert_row){
			  header("location:home.html");
			}
			else{
				
				echo '<script type="text/javascript">alert("Error occured\nTry Again!!"); window.location.href="flights.php";</script>';
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
	}
	else
	{
		echo '<script type="text/javascript">alert("Wrong Data!!"); window.location.href="flights.php";</script>';
	 }
	
?>