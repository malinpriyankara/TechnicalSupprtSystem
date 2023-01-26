<?php
session_start();
if($_SESSION['uname']){
	$con=mysqli_connect('localhost','root','','jk_database');
	if(!$con){
		die('Unable to connect :'. mysqli_error());
	}
	$mtype=$_POST['slctmc'];
	$req=$_POST['slctreq'];
	$serial=$_POST['txtserial'];
	$remark=$_POST['txtremark'];
	$clz;
	$date=date("d-m-Y");
	$rec1=mysqli_query($con,"SELECT company,c_id FROM customer WHERE email='".$_SESSION['uname']."'");
	$rec1=mysqli_fetch_array($rec1);
	$company=$rec1['company'];
	$c_id=$rec1['c_id'];
	switch ($req) {			// Assign a technician according a class 
		case 'assy':
			$clz='d';
			break;
		case 'mech':
			$clz='b';
			break;
		case 'elc':
			$clz='e';
			break;
		case 'semi':
			$clz='a';
			break;
		case 'ser':
			$clz='c';
	}

	$result=mysqli_query($con,"INSERT INTO inquiry (serial_no,machine,req,remark,company,c_id) VALUES ('".$serial."','".$mtype."','".$req."','".$remark."','".$company."','".$c_id."')");
	if($result){
		$msg='To whom it may concern,\n You have new inquiry from '.$company.' on '.$mtype.' And they says'.$remark.' Please login and approve the inquiry.\n This is auto genarated email. Do not reply.';
		$headers='From: info@ess.com'."\r\n".'Reply-To: admin@ess.com'."\r\n".'X-Mailer:PHP/'.phpversion();
		mail("malinpriyankara86@gmail.com","Inquiry Notification",$msg,$headers);
	?>
<script>
	alert ('Your Inquiry Submited Successfully. We Will Inform You More Details As Soon. Please Be Alert On Your Email.');
	window.location.href="customerhome.php";
	</script>
<?php
}
	
}

else{
	header('location:http://localhost/EngineeringSupport/index.php');
}
?>