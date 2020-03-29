<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/e0cbc93328.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<body>

	<?php
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];

		$servername = 'localhost';
		$username = 'shivansh';
		$password = '1234';
		$database = 'php';

		$conn = mysqli_connect($servername, $username, $password, $database);
		if(!$conn){
			die("Connection failed - Try again");
		}
		$sql = "Insert into name values('$fname', '$lname', '$phone', '$email')";
		if(!mysqli_query($conn, $sql)){
			echo "Record could not be added !!!";
		}
	?>

	<!-- <form method="post" action="educationQ.php">
		<input type="hidden" name="email" value="<?php echo $email?>">
		Street: <input type="text" name="street" ><br>
		City: <input type="text" name="city" required><br>
		State: <input type="text" name="state" required><br>
		Country: <input type="text" name="country" required><br>
		Postal Code: <input type="tel" name="pcode" pattern="[0-9]{6}" required><br>
		<input type="submit" name="Next">
	</form> -->

	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/img.svg">
		</div>
		<div class="login-content">
			<form method='post' action="educationQ.php" autocomplete="off">
				<input type="hidden" name="email" value="<?php echo $email?>">
				<img src="images/avatar.svg">
				<h2 class="title">Residential Details</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Street</h5>
           		   		<input type="text" class="input" name="street" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>City</h5>
           		    	<input type="text" class="input" name="city" required>
            	   </div>
            	</div>
            	<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>State</h5>
           		   		<input type="text" class="input" name="state" required>
           		   </div>
           		</div>
           		<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Country</h5>
           		   		<input type="text" class="input" name="country" required>
           		   </div>
           		</div>
           		<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Postal Code</h5>
           		   		<input type="tel" class="input" name="pcode" pattern="[0-9]{6}" required>
           		   </div>
           		</div>
            	<input type="submit" class="btn" value="Next">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>




