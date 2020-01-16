<?php
include "Repository/SuggestionRepo.php";
session_start();
       $login_id=$_SESSION['userId'];

	   $details=$_POST["details"];
	   $Sugesstion=$_POST["sugesstion_type"];
	   $Date= date("d-m-y");
	   $submitRepo = new SuggestionRepo();
	   $submitRepo->insertAll($details,$Date,$Sugesstion,$login_id);
				
?>