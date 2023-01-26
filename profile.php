<?php
session_start();
if(!$_SESSION['uname']) header('location:http://localhost/EngineeringSupport/index.php');

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Technician</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <script type="text/javascript" src="index.js"></script>
    </head>
    <body class="body">
        <div name="divlogo" id="divlogo" class="divlogo">
            <img class="imglogo" src="img/eng_logo.png">
        </div>






         <form name="frm1" id="frm1" class="frm1" action="chpw.php" method="post">
            <div class="div1">
                <table>
                    <tr><td><label>Old Password :</label><td><input type="password" class="txtoldpw" id="txtoldpw" name="txtoldpw" ></td></td></tr>
                    <tr></tr>
                    <tr><td><label>New Password :</label><td><input type="password" class="txtnewpw" id="txtnewpw" name="txtnewpw"></td></td></tr>
                    <tr></tr>
                    <tr><td><label>Re Type :</label><td><input type="password" name="txtrepw" id="txtrepw" class="txtrepw"></td></td></tr>
                    <tr><td><td><input type="submit" name="btnsubmit" id="btnsubmit" class="btnsubmit" value="Change"></td></td><td></td><td><input type="button" name="btnback" id="btnback" class="btnback" value="<< Back" onclick="window.history.back();"></td></tr>
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