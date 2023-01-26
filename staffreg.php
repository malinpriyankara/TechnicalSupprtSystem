<!DOCTYPE html> 
<!DOCTYPE html>
<html>
<head>
	<title>Staff Registration</title>
	<link rel="stylesheet" type="text/css" href="index.css">


</head>
<body class="body">
<div name="divlogo" id="divlogo" class="divlogo">
	<img class="imglogo" src="img/eng_logo.png">
</div>
<form name="frm1" id="frm1" class="frm1" action="treg.php" method="post">
<div name="div1" id="div1" class="div1">
<table>
	<tr><td><label>Name :</label><td><input type="text" name="txtname" id="txtname" class="txtname" size="20"></td></td></tr>
	<tr><td><label>Employee No :</label><td><input type="text" name="txteno" id="txteno" class="txteno" size="20"></td></td></tr>
	<tr><td><label>Designation :</label><td><select name="slctdes" id="slctdes" class="slctdes"><option>-- Please Select --</option>
	<option value="mgr">Manager</option>
	<option value="tech">Technician</option></select></td></td></tr>
	<tr><td><label>Seclect Class :</label><td><select name="slctclz" id="slctclz" class="slctclz"><option>-- Select A Class --</option>
	<option value="a">A</option>
	<option value="b">B</option>
	<option value="c">C</option>
	<option value="e">E</option></select></td></td></tr>
	<tr><td><label>NIC :</label><td><input type="text" name="txtnic" id="txtnic" class="txtnic" size="20"></td></td></tr>
	<tr><td><label>Address :</label><td><input type="text" name="txtadrs" id="txtadrs" class="txtadrs" size="20"></td></td></tr>
	<tr><td><label>Telephone :</label><td><input type="text" name="txttp" id="txttp" class="txttp" size="20"></td></td></tr>
	<tr><td><label>E-mail :</label><td><input type="text" name="txtmail" id="txtmail" class="txtmail" size="20"></td></td></tr>
	<tr><td><label>Password :</label><td><input type="Password" name="txtpw" id="txtpw" class="txtpw" size="20"></td></td></tr>
	<tr><td><label>Re-Type :</label><td><input type="Password" name="txtrepw" id="txtrepw" class="txtrepw" size="20"></td></td></tr>
	<tr><td><td><input type="submit" name="btnsubmit" id="btnsubmit" class="btnsubmit" value="Add Staff Member"></td></td></tr>
</table>
</div>
</form>
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