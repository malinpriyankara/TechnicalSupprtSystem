<?php

include("data.php");
session_start();
//if(!$_SESSION['uname']) header('loction:http://localhost/EngineeringSupport/index.php');
	$dataCon=new DataConnectivity();


?>

<!DOCTYPE html>

<html>
    <head>
        <title>Staff</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body class="body">
        <div name="divlogo" id="divlogo" class="divlogo">
            <img class="imglogo" src="img/eng_logo.png">
        </div>
        <?php
        	$sql="SELECT i.inq_date,i.serial_no,i.machine,i.req,i.remark,i.company FROM inquiry AS i WHERE status=0;";
        	
        	$result=$dataCon->getData($sql);
        	
        	if($result){

        		echo "<table class='divtbl' border='1'><thead><tr><th>Company</th><th>Date</th><th>Machine Type</th><th>Requirement</th><th>Serial No</th><th>Remarks</th></tr></thead>";

                while ($row = mysqli_fetch_array($result)) {
                    
                    echo "<tbody><tr>";
                    echo "<td>".$row['company']."</td>";
                    echo "<td>".$row['inq_date']."</td>";
                    echo "<td>".$row['machine']."</td>";
                    echo "<td>".$row['req']."</td>";
                    echo "<td>".$row['serial_no']."</td>";
                    echo "<td>".$row['remark']."</td>";
                    echo "<td><input type='button' name='btnapp' class='btnapp'id='btnapp' value='Approve' style= 'background:skyblue;'></td>";
                    echo "<tr>";
                }

                echo "</tbody></table>";
        	}

        ?>









        <form name="frm1" id="frm1" class="frm1" action="tech.php" method="post">
            <div class="div1">
                <table>
                    <tr><td><input type="button" class="btnreport" id="btnreport" name="btnreport" value="Report"></td></tr>
                    <tr></tr>
                    <tr><td><input type="button" class="btnadd" id="btnadd" name="btnadd" value="Add Staff"></td></tr>
                    <tr></tr>
                    <tr><td><input type="button" class="btnprofile" id="btnprofile" name="btnprofile" value="Profile" onclick="window.location.href='profile.php';"></td></tr>
                    <tr></tr>
                    <tr><td><input type="button" name="btnlogout" id="btnlogout" class="btnlogout" value="Logout" onclick="window.location.href='logout.php';"></td></tr>
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
            </body>
        </html>