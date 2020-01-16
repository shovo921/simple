<?php
session_start();
include "Repository/LoginRepo.php";

	   $userName=$_POST["username"];
	   $password=$_POST["password"];
	   $submitRepo = new LoginRepo();

		$result=$submitRepo->logincheck($userName,$password) ;
		$number = mysqli_num_rows($result);
		if ($number ==1) {
			$row = mysqli_fetch_assoc($result);
			$userId=$row['id'];
			$name=$row['username'];

			$_SESSION['userId'] = $userId;
			$_SESSION['name'] = $name;
			header("location:createSugession.php");

			}
     else{

	header("location:login.php");


          }
	 
	   	




			
?>