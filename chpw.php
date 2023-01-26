<?php
session_start();
include ("data.php");
$datacon= new DataConnectivity();

$oldpw=md5($_POST['txtoldpw']);
$repw=md5($_POST['txtrepw']);
$uname=$_SESSION['uname'];

$sql="UPDATE user SET password='".$repw."' WHERE uname='".$uname."' AND password='".$oldpw."'; ";
//echo "$sql";
$rec=$datacon->updateData($sql);
var_dump($rec);
if($rec>0){ 
?>
<script>
    alert ('Password Scusessfully Changed');
    window.location.href='index.php';
</script>
<?php
}
else{
    die('Incorrect Password');
    header('location:http://EngineeringSupport/profile.php');

}
?>

