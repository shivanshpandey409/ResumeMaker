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
		$street = $_POST["street"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$country = $_POST["country"];
		$pcode = $_POST["pcode"];
		$email = $_POST["email"];

		$servername = 'localhost';
		$username = 'shivansh';
		$password = '1234';
		$database = 'php';

		$conn = mysqli_connect($servername, $username, $password, $database);
		if(!$conn){
			die("Connection failed - Try again");
		}
		$sql = "Insert into address values('$street', '$city', '$state', '$country', '$pcode', '$email')";
		if(!mysqli_query($conn, $sql)){
			echo "Record could not be added !!!";
		}
	?>

	<!-- <form method="post" action="achievements.php">
		<input type="hidden" name="email" value="<?php echo $email?>">
		Currently Studying: <input type="text" name="current"><br>
		10th: <input type="text" name="per10"><input type="text" name="remark10"><br>
		12th: <input type="text" name="per12"><input type="text" name="remark12"><br>
		UG: <input type="text" name="ugper"><input type="text" name="ugremark"><br>
		Other: <input type="text" name="othername"><input type="text" name="otherper"><input type="text" name="otherremark"><br>
		<input type="submit" name="Next">
	</form> -->

	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/img.svg">
		</div>
		<div class="login-content">
			<form method='post' action="achievements.php" autocomplete="off">
				<input type="hidden" name="email" value="<?php echo $email?>">
				<img src="images/avatar.svg">
				<h2 class="title">Educational Qualifications</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>1.</h5>
           		   		<input type="text" class="input" name="q1" maxlength="49" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>2.</h5>
           		    	<input type="text" class="input" name="q2" maxlength="49">
            	   </div>
            	</div>
            	<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>3.</h5>
           		   		<input type="text" class="input" name="q3" maxlength="49">
           		   </div>
           		</div>
           		<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>4.</h5>
           		   		<input type="text" class="input" name="q4" maxlength="49">
           		   </div>
           		</div>
            	<input type="submit" class="btn" value="Next">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>