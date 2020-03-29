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
		$q1 = $_POST["q1"];
		$q2 = $_POST["q2"];
		$q3 = $_POST["q3"];
		$q4 = $_POST["q4"];
		$email = $_POST["email"];

		$servername = 'localhost';
		$username = 'shivansh';
		$password = '1234';
		$database = 'php';

		$conn = mysqli_connect($servername, $username, $password, $database);
		if(!$conn){
			die("Connection failed - Try again");
		}
		$sql = "Insert into education values('$email', '$q1', '$q2', '$q3', '$q4')";
		if(!mysqli_query($conn, $sql)){
			echo "Record could not be added !!!";
		}
	?>

	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/img.svg">
		</div>
		<div class="login-content">
			<form method='post' action="skill.php" autocomplete="off">
				<input type="hidden" name="email" value="<?php echo $email?>">
				<img src="images/avatar.svg">
				<h2 class="title">Achievements</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>1.</h5>
           		   		<input type="text" class="input" name="ach1" required maxlength="100">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>2.</h5>
           		    	<input type="text" class="input" name="ach2" maxlength="100">
            	   </div>
            	</div>
            	<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>3.</h5>
           		   		<input type="text" class="input" name="ach3" maxlength="100">
           		   </div>
           		</div>
           		<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>4.</h5>
           		   		<input type="text" class="input" name="ach4" maxlength="100">
           		   </div>
           		</div>
            	<input type="submit" class="btn" value="Next">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>