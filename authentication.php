<?php
	session_start();
	require 'dbConnect.php';
	if(isset($_POST['loginId']) && isset($_POST['loginPass'])){
		$loginId=mysqli_real_escape_string($connect,$_POST['loginId']);
		$loginPass=mysqli_real_escape_string($connect,$_POST['loginPass']);
		$hash1=$_POST['loginId'];
		$hash2=$_POST['loginPass'];
		if(preg_match('/\s/', $hash1)) {
		echo json_encode('Your Email Id Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/[\'"]/', $hash1)){
		echo json_encode('Your Email Id Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/[\/\\\\]/', $hash1)){
		echo json_encode('Your Email Id Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/(AND|null|where|limit)/i', $hash1)) {
		echo json_encode('Your Email Id Contains Invalid Characters');
		die();
		}
		
		
		if(preg_match('/(union|select|from|where)/i', $hash1)) {
		echo json_encode('Your Email Id Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/(order|having|limit)/i', $hash1)) {
		echo json_encode('Your Email Id Contains Invalid Characters');
		die();
		}
		
		
		if(preg_match('/(into|file|case)/i', $hash1)) {
		echo json_encode('Your Email Id Contains Invalid Characters');
		die();
		}
		
		
		if(preg_match('/(--|#|\/\*\!\$\%\^\&\(\))/', $hash1)){
		echo json_encode('Your Email Id Contains Invalid Characters');
		die();
		}
		
		
		if(preg_match('/\s/', $hash2)) {
		echo json_encode('Your Password Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/[\'"]/', $hash2)){
		echo json_encode('Your Password Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/[\/\\\\]/', $hash2)) {
		echo json_encode('Your Password Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/(and|null|where|limit)/i', $hash2)) {
		echo json_encode('Your Password Contains Invalid Characters');
		die();
		}
		
		
		if(preg_match('/(union|select|from|where)/i', $hash2)) {
		echo json_encode('Your Password Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/(order|having|limit)/i', $hash2)) {
		echo json_encode('Your Password Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/(into|file|case)/i', $hash2)){
		echo json_encode('Your Password Contains Invalid Characters');
		die();
		}
		
		if(preg_match('/(--|#|\/\*\!\$\%\^\&\(\))/', $hash2)) {
		echo json_encode('Your Password Contains Invalid Characters');
		die();
		}
	
		$loginQuery="SELECT log3 FROM login WHERE id='$loginId' AND password='$loginPass' ";
		$loginResult=mysqli_query($connect,$loginQuery) or die(mysqli_error($connect));
		$loginNum=mysqli_num_rows($loginResult);
		if($loginNum>0){
			$loginRow=mysqli_fetch_assoc($loginResult);
			$_SESSION['log3']=$loginRow['log3'];
			if($_SESSION['log3']=='USER'){
				$_SESSION['id']=$loginId;
				
				}elseif($_SESSION['log3']=='ADMIN'){
				$_SESSION['id']=$loginId;
			}
			echo json_encode('valid');
			}else{
			echo json_encode('invalid');
		}
		
	}
header("Refresh:0;URL=index.php");