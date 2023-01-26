<?php
session_start();

$con=mysqli_connect('localhost','root','','jk_database');
if(!$con) die('Unable to connect'.mysqli_error());

$company=$_POST['txtcname'];
$dis=$_POST['txtdist'];
$mail=$_POST['txtemail'];
$add=$_POST['txtadd'];
$tp=$_POST['txttp'];
$pw=md5($_POST['txtrepw']);

$result1=mysqli_query($con,"INSERT INTO customer (company,tp,distance,email,address) VALUES ('".$company."','".$tp."','".$dis."','".$mail."','".$add."')");
$result2=mysqli_query($con,"INSERT INTO user (uname,password,user_type_id) VALUES ('".$mail."','".$pw."',3)");
if(!$result1 && $result2) die("Insert Error".mysqli_error());

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Staff Registration</title>
		<script> alert ('Wellcome... Please login');
				window.location.href='http://localhost/EngineeringSupport/index.php';
		</script>

	</head>
	<body>
	
	</body>
	</html>
	<?php
	mysqli_close($con);
	?>