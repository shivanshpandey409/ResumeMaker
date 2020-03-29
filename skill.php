<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/e0cbc93328.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>

<?php
		$ac1 = $ac2 = $ac3 = $ac4 = "";
		$ac1 = $_POST["ach1"];
		$ac2 = $_POST["ach2"];
		$ac3 = $_POST["ach3"];
		$ac4 = $_POST["ach4"];
		$email = $_POST["email"];

		$servername = 'localhost';
		$username = 'shivansh';
		$password = '1234';
		$database = 'php';

		$conn = mysqli_connect($servername, $username, $password, $database);
		if(!$conn){
			die("Connection failed - Try again");
		}
			if(!empty($email)){
				$sql1 = "Insert into achievements values('$email', '$ac1', '$ac2', '$ac3', '$ac4')";
				if(!mysqli_query($conn, $sql1)){
					echo "Record could not be added !!!";
				}
			}
	?>

<body>

	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/img.svg">
		</div>
		<div class="login-content">
			<form method='post' action="image.php" autocomplete="off">
				<input type="hidden" name="email" value="<?php echo $email?>">
				<img src="images/avatar.svg">
				<h2 class="title">Skills</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>1.</h5>
           		   		<input type="text" class="input" name="skill1" required maxlength="39">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>2.</h5>
           		    	<input type="text" class="input" name="skill2" maxlength="39">
            	   </div>
            	</div>
            	<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>3.</h5>
           		   		<input type="text" class="input" name="skill3" maxlength="39">
           		   </div>
           		</div>
           		<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>4.</h5>
           		   		<input type="text" class="input" name="skill4" maxlength="39">
           		   </div>
           		</div>
           		<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>5.</h5>
           		   		<input type="text" class="input" name="skill5" maxlength="39">
           		   </div>
           		</div>
            	<input type="submit" class="btn" value="Next">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>