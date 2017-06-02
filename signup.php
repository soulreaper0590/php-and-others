<!DOCTYPE html>
<html>
<head>
	<title>sign up form </title>
	<style type="text/css">
		body{
			padding-top: 200px;
			text-align: center; 
		}
	</style>
</head>
<body>
	<?php
		if (isset($_GET['pehlanaam'])&&!empty($_GET['pehlanaam'])) {
			$var = $_GET['pehlanaam'];
			echo $var;
		}
		if (isset($_GET['aakhrinaam'])&&!empty($_GET['aakhrinaam'])) {
			$var2 = $_GET['aakhrinaam'];
			echo $var2;
		}

	?>
	<form action="dashboard.php" method="GET">
		first name   
		<input type="text" name="pehlanaam" required><br>
		last name    
		<input type="text" name="aakhrinaam"><br>
		phone no.   
		<input type="number" name="phonenumber"><br>
		email id.   
		<input type="email" name="email"><br>
		<!-- password    
		<input type="password" name="pass"><br>
		confirm password   
		<input type="password" name="cpass"><br> -->
		hobbies
		<input type="text" name="hobbies"><br>
		Gender
        <select name="Gender">
      		<option value="Male">Male</option>
      		<option value="Female">Female</option>
      		<option value="Other">Other</option>   
    	</select>
   <!--  i agree that i have read all the terms and conditions
		<input type="checkbox" name="tnc"><br> -->
		<input type="submit" name="submitbtm">
		
	</form>
</body>
</html>