<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$postid = $_POST['postid'];
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$body = $_POST['body'];

		require_once('DbConnect.php');
		
		$sql = "INSERT INTO comments (postid,id,name,email,body) VALUES ('$postid','$id','$name','$email','$body')";
		
		
		if(mysqli_query($con,$sql)){
			echo "Successfully Registered";
		}else{
			echo "Could not register";

		}
	}else{
echo 'error';
}