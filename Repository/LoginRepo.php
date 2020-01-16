<?php

class LoginRepo  {
    
      private $con = null;
      function __construct(){
          $this->con = mysqli_connect("localhost","root","","suggestion_box") or die(mysql_error());
      }
        function  insert($userName,$password,$Date){
           
              $sql= "INSERT INTO `login` ( `username`, `password`, `created_date`) VALUES ( '$userName', '$password',' $Date')";
              return mysqli_query($this->con,$sql); 
    
     }
     
     function check($userName){

     	$sql= "SELECT * FROM `login` WHERE username='$userName'";
     	return mysqli_query($this->con,$sql);
     }

     function logincheck($userName,$password){
         

             $con = mysqli_connect("localhost","root","","suggestion_box") or die(mysql_error());
    	       $sql= "SELECT * FROM `login` WHERE username='$userName' ";
            

             $sql1=mysqli_query($this->con,$sql);
            

             $row=mysqli_fetch_array($sql1);
             if (password_verify($password,$row['password'])) 
             {

             return mysqli_query($this->con,$sql);
              }

              

     	
     }
     
    
  
    
}


