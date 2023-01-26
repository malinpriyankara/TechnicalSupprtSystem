<?php

class DataConnectivity{

	function __construct(){
		
	}

	function connect(){
	
	}
	function getData($sql){
		$con=mysqli_connect('localhost','root','','jk_database') or die('Connection Error  :'.mysqli_error());
		$res=mysqli_query($con,$sql);
		if($res){
			$rec=mysqli_fetch_array($res);
			return $res;
		}
	}

	function setData($sql){
		$con=mysqli_connect('localhost','root','','jk_database') or die('Connection Error  :'.mysqli_error());
		$res=mysqli_query($con,$sql);
		if($res){
			$rec=mysqli_fetch_array($res);
			return $rec;
		}
	}

	function updateData($sql){
		$con=mysqli_connect('localhost','root','','jk_database') or die('Connection Error  :'.mysqli_error());
		$res=mysqli_query($con,$sql);
		return $res;
		
	}
}

?>