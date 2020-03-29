<?php
$servername='localhost';
$username='shivansh';
$password='1234';
$dbname='php';
$email=$_POST["email"];
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
die('Connection failed $conn->connect_error');
else
echo('Connected Sucessfully');

$sqli1="select * from name where email='$email'";
$result=$conn->query($sqli1);

while($row= $result->fetch_assoc()){

$fname = $row['firstname'];
$lname = $row['lastname'];
$phone = $row['phone'];
}

$sqli1="select * from address where email='$email'";
$result=$conn->query($sqli1);

while($row= $result->fetch_assoc()){

$street = $row['street'];
$city = $row['city'];
$state = $row['state'];
$country = $row['country'];
$pcode = $row['pcode'];
}

$sqli1="select * from education where email='$email'";
$result=$conn->query($sqli1);

while($row= $result->fetch_assoc()){
$q = array();
array_push($q, $row['q1']);
if($row['q2']!='')
	array_push($q, $row['q2']);
if($row['q3']!='')
	array_push($q, $row['q3']);
if($row['q4']!='')
	array_push($q, $row['q4']);
$qcount = count($q);
}

$sqli1="select * from skills where email='$email'";
$result=$conn->query($sqli1);

while($row= $result->fetch_assoc()){
$s = array();
array_push($s, $row['skill1']);
if($row['skill2']!='')
	array_push($s, $row['skill2']);
if($row['skill3']!='')
	array_push($s, $row['skill3']);
if($row['skill4']!='')
	array_push($s, $row['skill4']);
if($row['skill5']!='')
	array_push($s, $row['skill5']);
$scount = count($s);
}

$sqli1="select * from achievements where email='$email'";
$result=$conn->query($sqli1);
$a = array();
while($row= $result->fetch_assoc()){
array_push($a, $row['ach1']);
if($row['ach2']!='')
	array_push($a, $row['ach2']);
if($row['ach3']!='')
	array_push($a, $row['ach3']);
if($row['ach4']!='')
	array_push($a, $row['ach4']);
}
$acount = count($a);

$sqli1="select * from images where email='$email'";
$result=$conn->query($sqli1);
while($row= $result->fetch_assoc()){
	$image = $row['image'];
}

$html = '<div style="text-align: center"><h2>Resume</h2></div>
	<div class="container" style="padding: 30px 40px">
	<div style="margin-bottom: -8px; font-size: 24px"><b>'.$fname.' '.$lname.'</b></div><br>
	<div style="margin-bottom: -8px; font-size: 18px">'.$phone.' | '.$email.'</div><br>
	<div style="margin-bottom: -8px; font-size: 18px">'.$street.', '.$city.', '.$state.', '.$country.', '.$pcode.'</div><br> 
	<div style="margin-left: 500px; margin-top: -100px;"><img src="'.$image.'" height="100px" width="80px"></div>
	<h3 style="margin-top: 80px">Educational Qualifications</h3>
	<hr style="margin-top: -12px;">
	<ul style="font-size: 18px;">
		<li style="margin-bottom: 5px; margin-top: -10px">'.$q[0].'</li>';
		for ($i = 1; $i < $qcount; $i++)
		{
		      $html .= '<li style="margin-bottom: 5px;">'.$q[$i].'</li>';
		}
	$html.=
	'</ul>
	<h3 style="margin-top: 50px">Skills</h3>
	<hr style="margin-top: -12px;">
	<ul style="font-size: 18px;">
		<li style="margin-bottom: 5px; margin-top: -10px">'.$s[0].'</li>';
		for ($i = 1; $i < $scount; $i++)
		{
		      $html .= '<li style="margin-bottom: 5px;">'.$s[$i].'</li>';
		}
	$html.=
	'</ul>
	<h3 style="margin-top: 50px">Achievements</h3>
	<hr style="margin-top: -12px;">
	<ul style="font-size: 18px;">
		<li style="margin-bottom: 5px; margin-top: -10px">'.$a[0].'</li>';
		for ($i = 1; $i < $acount; $i++)
		{
		      $html .= '<li style="margin-bottom: 5px;">'.$a[$i].'</li>';
		}
	$html.=
	'</ul>
	</div>';
 	include 'mpdf/vendor/autoload.php';
				$mpdf = new \Mpdf\Mpdf();
				
			$mpdf->autoScriptToLang = true;
			$mpdf->autoLangToFont = true;


			$mpdf->WriteHTML($html);
			$mpdf->Output();
?>