<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<link rel="stylesheet" href="index.css"> 
<script src="index.js">


</script>
</head>
<body class="body"> 
<div name="divlogo" id="divlogo" class="divlogo">
	<img class="imglogo" src="img/eng_logo.png">
</div>

<div name="div1" id="div1" class="div1">
<form id="frmlogin" name="frmlogin" class="frmlogin" action="login.php" method="post" onsubmit="return checkLogin()">
<table> 

	<tr><td><lable>User Name :</lable><td><input type="text" name="txtuname" id="txtuname" class="txtuname" size="25"></td></td></tr>
	<tr><td><lable>Password :</lable><td><input type="password" name="txtpw" id="txtpw" class="txtpw" size="25"></td></td></tr>
	<tr></tr>
	<tr><td><td><input type="submit" value="Login" name="btnsubmit" id="btnsubmit" class="btnsubmit" ></td></td></tr>
	<tr><td><td><p>New user? plese register.</p></td></td></tr>
	
	<tr><td><td><input type="button" name="btnreg" id="btnreg" class="btnreg" value="Register" onclick="window.location.href='custreg.php';"></td></td></tr>
</table>
</form>
</div>
<div name="divimg" id="divimg" class="divimg">
	<img src="img/indexq.gif" class="img1" id="img1" name="img1">
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