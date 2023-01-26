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
        <title>Technician</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <script type="text/javascript">
            function profile(){
        window.location.href="profile.php";
    }
} 
        </script>
    </head>
    <body class="body">
        <div name="divlogo" id="divlogo" class="divlogo">
            <img class="imglogo" src="img/eng_logo.png">
        </div>
        <?php
            
            $con = mysql_connect('localhost','root','');
    
            if(!$con) 
                die('Connection Error'.mysql_error());

            mysql_select_db('jk_database',$con);
    
            $uname= $_SESSION['uname'];
    
            //echo $uname;
    
            $eno_raw = mysql_query("SELECT e_no FROM employee WHERE email ='" . $uname . "' LIMIT 1;");
    
            if($eno_raw == false)
                die(mysql_error());
    
            $eno_raw = mysql_fetch_row($eno_raw);
    
            $e_no = $eno_raw[0];
    
            //echo $e_no;
    
            $query = "SELECT i.company, i.machine, i.remark, j.j_date, j.apprved_by FROM inquiry AS i JOIN job j ON j.inq_id = i.inq_id WHERE j.e_no = '" . $e_no . "';";
    
            //echo ("<br>" . $query . "<br>");
    
            $result = mysql_query($query, $con);
    
            //echo(mysql_num_rows($result));

            if ($result) {

                echo "<table class='divtbl' border='1'><thead><tr><th>Company</th><th>Date</th><th>Machine Type</th><th>Remarks</th><th>Approved By</th></tr></thead>";

                while ($row = mysql_fetch_array($result)) {
                    
                    echo "<tbody><tr>";
                    echo "<td>".$row['company']."</td>";
                    echo "<td>".$row['j_date']."</td>";
                    echo "<td>".$row['machine']."</td>";
                    echo "<td>".$row['remark']."</td>";
                    echo "<td>".$row['apprved_by']."</td>";
                    echo "<td><input type='button' name='btnstatus' class='btnstatus'id='btnstatus' value='Start' style= 'background:brown;'></td>";
                    echo "<tr>";
                }

                echo "</tbody></table>";

            }

            mysql_close();

        ?>

        <form name="frm1" id="frm1" class="frm1" action="tech.php" method="post">
            <div class="div1">
                <table>
                    <tr><td><input type="button" class="btnhome" id="btnhome" name="btnhome" value="Home"></td></tr>
                    <tr></tr>
                    <tr><td><input type="button" class="btnprofile" id="btnprofile" name="btnprofile" value="Profile" onclick="window.location.href='profile.php';"></td></tr>
                    <tr></tr>
                    <tr><td><input type="button" name="btnlogout" id="btnlogout" class="btnlogout" value="Logout"></td></tr>
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
    <?php
}
    ?>