<?php
session_start();
if(!$_SESSION['uname']) header("location:http://localhost/EngineeringSupport/index.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Coustomer Registration</title>
		<link rel="stylesheet" href="index.css">
		<script src="index.js">
			function customerinq(){
		window.location.href="http://localhost/EngineeringSupport/inquiry.php";
	}
		</script>
	</head>
	<div name="divlogo" id="divlogo" class="divlogo">
	<img class="imglogo" src="img/eng_logo.png">
</div>
	<body class="body">
		<div name="div1" id="div1" class="div1">
			<form name="frm1" id="frm1" class="frm1" action="c.php" method="post">
				<table>
					<tr><td><a href="inqiry.php"><input type="button" name="btninq" id="btninq" class="btninq" value="Inquiry"></a></td></tr>
					<tr><td><a href="cuspofile.php"><input type="button" name="btnprof" id="btnprof" class="btnprof" value="Profile"></a></td></tr>
					<tr><td><a href="logout.php"><input type="button" name="btnlogout" id="btnlogout" class="btnlogout" value="Logout"></a></td></tr>
				</table>




			</form>
		</div>
		<div name="div2" id="div2" class="div2">
	<p name="p1" id="p1" class="p1"> JK Agencies (pvt) ltd, No 34, Hunupitiya Road, Colombo 2.</p>
	<p name="p2" id="p2" class="p2"> We delever the future technologies today.</p>
	<p name="p3" id="p3" class="p3">jukijk@sltnet.lk <br><a href="http://www.jkagencies.com"> www.jkagencies.com</a> <br> +94 11 2344648/9</p>
	<div name="div3" id="div3" class="div3">
	<a href="http://www.jkagencies.com"><img src="img/JUKI-Logo_1.jpg"><img src="img/hashima-logo_4.jpg"><img src="img/Nisho-Logo.jpg"><img src="img/nissinlogo_0.jpg"><img src="img/Oshima.gif"><img src="img/uzu_0.png"></a>
	</div>
</div>
	</body>
</html>