function checkLogin(){
	var uname=document.getElementById("txtuname").value;
	var pw=document.getElementById("txtpw").value;
	if (uname==''){
		alert ('Please Enter Your User Name');
		return false;
	}
	if (pw==''){
		alert ('Please Enter Your Password');
		return false;
	}
	function customerinq(){
		window.location.href="http://localhost/EngineeringSupport/inquiry.php";
	}

	function profile(){
		window.location.href="profile.php";
	}
} 