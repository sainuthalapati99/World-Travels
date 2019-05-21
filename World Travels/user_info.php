<html>
<body>
<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'snuthalapati1','snuthalapati1','snuthalapati1');
		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database');
		}
		
			$query = "INSERT INTO Register VALUES ('$fname','$lname','$username','$psw1','$num','$gender')";
			$insert_row = $mysqli->query($query);
			if($insert_row){
			  header("location:login.php");
			}
			else{
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
	?>
</body>
</html>