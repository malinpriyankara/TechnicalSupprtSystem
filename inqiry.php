<?php
session_start();
If(!$_SESSION['uname']){
	header("location:http://localhost/EngineeringSupport/index.php");
}
else{
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Inqiry</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body class="body"> 
<div name="divlogo" id="divlogo" class="divlogo">
	<img class="imglogo" src="img/eng_logo.png">
</div>

<div name="div1" id="div1" class="div1">

<form id="frmlogin" name="frmlogin" class="frmlogin" action="inq.php" method="post" onsubmit="return checkLogin()">
<table> 
	<tr><td><label>Machine type :</label><td><select name="slctmc" id="slctmc" class="slctmc"><option value="optselect">-- Select A Machine Type --</option>
	<option value="ddl55">DDL 555</option>
	<option value="ddl2800">DDL 2800</option>
	<option value="lk1900">LK1900</option>
	<option value="ams240">AMS240</option>
	<option value="mo7080">MO7080</option>
	<option value="jd600">KeKi-JD 600</option></select></td></td></tr>
	<tr><td><lable>Requirement :</lable><td><select name="slctreq" id="slctreq" class="slctreq"><option value="optselect">-- Select Your Requirement</option>
	<option value="assy">Assemble</option>
	<option value="mech">Mechanical</option>
	<option value="elc">Electronic</option>
	<option value="semi">Seminar</option>
	<option value="ser">Service</option></select></td></td></tr>
	<tr><td><label>Serial No :</label><td><input type="text" name="txtserial" id="txtserial" class="txtserial"></td></td></tr>
	<tr><td><label>Remarks :</label><td><textarea name="txtremark" id="txtremark" class="txtremark" rows="4" cols="30"></textarea></td></td></tr>
	<tr><td><td><input type="submit" name="btnsubmit" class="btnsubmit" class="btnsubmit" value="Submit Inqiry"></td></td></tr>
	<tr><td><td><input type="button" name="btnhome" id="btnhome" class="btnhome" value="<< Back" onclick="window.location.href='customerhome.php';"></td></td></tr>
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
<?php
}
?>