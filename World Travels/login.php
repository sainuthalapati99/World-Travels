<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>World Travels</title>
		 <link rel="stylesheet" href="loginpage.css"></head>
	<body>
	<div class="transbox">
		<center>
		<font size=10>
		<form method="POST" action="checkuser.php" name="f1">
		<fieldset style="width:270px">
		<legend>
		<div style="color:#0000FF">
		<h1>Login</h1>
		</div>
		</legend>
		<table>
  			<tr>
			<td>Email ID:</td>
  			<td><input type="text" name="email" value=<?php if (isset($_COOKIE["Email"])) echo $_COOKIE["Email"] ?> ></td>
			</tr>
			<tr>
  			<td>Password:</td>
  			<td><input type="password" name="psw" value=<?php if (isset($_COOKIE["Password"])) echo $_COOKIE["Password"] ?> ></td>
			</tr>
			<tr>
			<td> <td>
			</tr>
			<tr>
  			<td></td>
			<td align="center"><input type="submit" name="login" value=Login> &nbsp &nbsp &nbsp &nbsp <input type="reset"></td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			</tr>
			<td colspan =4 align="center"> If not Registered? <a href="register.html">Click Here</a></td>
			</tr>
		</table>
		</fieldset>
		</form>
		</font>
		</center>
		<footer>
  			<p>Created by: Us</p>
  			<p>Contact information: <a href="snuthalapati1@studnet.gsu.edu">US</a>.</p>
		</footer>
		</div>
	</body>
</html>