<?php
	
 	if (isset($_GET['pehlanaam'])&&!empty($_GET['pehlanaam'])) {
			$var = $_GET['pehlanaam'];
			echo "your name is$var<br>";
		}
		if (isset($_GET['aakhrinaam'])&&!empty($_GET['aakhrinaam'])) {
			$var1 = $_GET['aakhrinaam'];
			echo "your last name is$var1<br>";
		}
		echo "this my file .php waali";
		if (isset($_GET['email'])&&!empty($_GET['email'])) {
			$var1 = $_GET['email'];
			echo "your email name is$var1<br>";
		}
		if (isset($_GET['phonenumber'])&&!empty($_GET['phonenumber'])) {
			$var1 = $_GET['phonenumber'];
			echo "your phone number is$var1<br>";
		}
		if (isset($_GET['Gender'])&&!empty($_GET['Gender'])) {
			$var1 = $_GET['Gender'];
			echo "your gender is$var1<br>";
		}
		if (isset($_GET['hobbies'])&&!empty($_GET['hobbies'])) {
			$var1 = $_GET['hobbies'];
			echo "your gender is$var1<br>";
		}
?>