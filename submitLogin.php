<?php
session_start();
include "Repository/LoginRepo.php";

	   $userName=$_POST["username"];
	   $pass=$_POST["password"];
	   $password=password_hash($pass, PASSWORD_BCRYPT);
	  
	   $Date= date("d-m-y");

	   $submitRepo = new LoginRepo();


		$result=$submitRepo->check($userName) ;
		$number = mysqli_num_rows($result);
		if ($number>0) {

			$_SESSION['error']=true;
			header("location:createUser.php");
		}
		else{
			$submitRepo->insert($userName,$password,$Date);

			header("location:login.php");
			 $_SESSION['error']=$userName;
		}


	 
	   	




			
?>