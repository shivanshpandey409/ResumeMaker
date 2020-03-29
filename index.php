<!-- <!DOCTYPE html>
<html>
<head>
	<title>Make Your Resume</title>
</head>
<body> 

<form method="post" action="address.php">
	First Name: <input type="text" name="fname" required><br>
	Last Name: <input type="text" name="lname" required><br>
	Phone: <input type="tel" id="phone" name="phone" pattern="[6-9]{1}[0-9]{9}" required><br>
	E-mail: <input type="email" name="email" required><br>
	<input type="submit" name="Next">
</form>
	
</body>
</html> -->

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

	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/img.svg">
		</div>
		<div class="login-content">
			<form method='post' action="address.php" autocomplete="off">
				<img src="images/avatar.svg">
				<h2 class="title">Personal Details</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>First Name</h5>
           		   		<input type="text" class="input" name="fname" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Last Name</h5>
           		    	<input type="text" class="input" name="lname" required>
            	   </div>
            	</div>
            	<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Mobile No.</h5>
           		   		<input type="tel" class="input" name="phone" pattern="[6-9]{1}[0-9]{9}" required>
           		   </div>
           		</div>
           		<div class="input-div">
           		   <div class="i">
           		   		<i class="fas fa-play"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>e-mail</h5>
           		   		<input type="email" class="input" name="email" required>
           		   </div>
           		</div>
            	<input type="submit" class="btn" value="Next">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>