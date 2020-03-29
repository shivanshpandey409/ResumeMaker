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
		$skill1 = $_POST["skill1"];
		$skill2 = $_POST["skill2"];
		$skill3 = $_POST["skill3"];
		$skill4 = $_POST["skill4"];
		$skill5 = $_POST["skill5"];
		$email = $_POST["email"];

		$servername = 'localhost';
		$username = 'shivansh';
		$password = '1234';
		$database = 'php';

		$conn = mysqli_connect($servername, $username, $password, $database);
		if(!$conn){
			die("Connection failed - Try again");
		}
		$sql = "Insert into skills values('$email', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5')";
		if(!mysqli_query($conn, $sql)){
			echo "Record could not be added !!!";
		}
	?>

	<!-- <form action="final.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="email" value="<?php echo $email?>">
    Select image to upload:
    <input type="file" name="image" id="image">
    <input type="submit" name="Done">
	</form> -->

	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/img.svg">
		</div>
		<div class="login-content">
			<form method='post' action="final.php" enctype="multipart/form-data" autocomplete="off">
				<input type="hidden" name="email" value="<?php echo $email?>">
				<img src="images/avatar.svg">
				<h2 class="title">Upload Image</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i></i>
           		   </div>
           		   <div class="div">
           		   		<input type="file" name="image" class="input" required>
           		   </div>
           		</div>
            	<input type="submit" class="btn" value="Next">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>