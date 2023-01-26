<?php
session_start();

	$con=mysql_connect('localhost','root','');
	if(!$con){
		die('Could not Connect...'.mysql_error());
	}

	$name=$_POST['txtname'];
	$eno=$_POST['txteno'];
	$nic=$_POST['txtnic'];
	$adrs=$_POST['txtadrs'];
	$tp=$_POST['txttp'];
	$mail=$_POST['txtmail'];
	$pw=md5($_POST['txtpw']);
	$des=$_POST['slctdes'];
	$clz=$_POST['slctclz'];
	
	if($des==='mgr') $uid=1;
	if($des==='tech') $uid=2;
	if($des=== 'admin') $uid=0;

	mysql_select_db("jk_database",$con);
	$result1=mysql_query ("INSERT INTO employee (e_no,name,address,nic,tp,email) VALUES ('".$eno."','".$name."','".$adrs."','".$nic."','".$tp."','".$mail."')");
	$result2=mysql_query("INSERT INTO user (uname,password,user_type_id) VALUES('".$mail."','".$pw."','".$uid."')");
	if($des=='tech'){
		$result3=mysql_query("INSERT INTO technician (e_no,class) VALUES ('".$eno."','".$clz."')");
	}
	if(!$result1 && $result2 && $result3){
		die('Insert Error  :'.mysql_error());
	}
	else{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Staff Registration</title>
		<script> alert ('Successfully Added');
				window.location.href='http://localhost/EngineeringSupport/index.php';
		</script>

	</head>
	<body>
	
	</body>
	</html>
	<?php
}
	mysql_close($con);


	//header('location:http://localhost/EngineeringSupport/index.php');

?>