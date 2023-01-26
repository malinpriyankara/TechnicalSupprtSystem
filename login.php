  <?php
session_start();
$con=@mysql_connect('localhost','root','');
if(!$con){
	die('Could Not Connect :'.mysql_error());
}
mysql_select_db('jk_database',$con);
if($_POST['txtuname']){
	$uname=mysql_real_escape_string($_POST['txtuname']);
	$pw=mysql_real_escape_string($_POST['txtpw']);
	$enpw=md5($pw);
	
		$result=mysql_query("SELECT * FROM user WHERE uname='".$uname."' AND password='".$enpw."';");
			$rec=mysql_fetch_array($result);
			if($rec){
				$_SESSION['uid']=$rec['userid'];
				$_SESSION['uname']=$rec['uname'];
				$_SESSION['type']=$rec['user_type_id'];
				if($_SESSION['type']==2) header('location:http://localhost/EngineeringSupport/techpage.php');
				if($_SESSION['type']==3) header('location:http://localhost/EngineeringSupport/customerhome.php');
				if($_SESSION['type']==1) header('location:http://localhost/EngineeringSupport/mgrhome.php');
				if($_SESSION['type']==0) header('location:http://localhost/EngineeringSupport/adminpage.php');
			}
			else{
				?> 
				<html>
						<head>
							<script> 
							window.location.href='http://localhost/EngineeringSupport/index.php';
							alert ('Login fail. Incorrect Username Or Password');
							
							 </script>
						</head>
				</html>;
				<?php
				
			}
mysql_close();
}
?>