<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<link rel="stylesheet" type="text/css" href="css/final.css">
</head>
<body>
	<div class="bg"></div>
	<div id="overlay"></div>
	<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
			$target = "uploads/". basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));

			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			        $uploadOk = 1;
			    } else {
			        $uploadOk = 0;
			    }
			}
			
			if (file_exists($target)) {
			    $uploadOk = 0;
			}
			
			if ($_FILES["image"]["size"] > 1000000) {
			    $uploadOk = 0;
			}
			
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    $uploadOk = 0;
			}
			
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			} 
			else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
			        
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
		
			$email = $_POST["email"];

			$servername = 'localhost';
			$username = 'shivansh';
			$password = '1234';
			$database = 'php';

			$conn = mysqli_connect($servername, $username, $password, $database);
			if(!$conn){
				die("Connection failed - Try again");
			}

			$sql = "Insert into images values('$email', '$target')";
			if(!mysqli_query($conn, $sql)){
				echo "Record could not be added !!!";
			}
	}
?>
<form method="post" action="pdf.php">
	<input type="hidden" name="email" value="<?php echo $email?>">
	<input type="submit" name="submit" value="Download Resume" class="btn">
</form>
</body>
</html>



