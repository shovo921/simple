<?php

class SuggestionRepo{
    
      private $con = null;
      function __construct(){
          $this->con = mysqli_connect("localhost","root","","suggestion_box") or die(mysql_error());
      }
      function insertAll($details,$Date,$Sugesstion,$login_id){
           
              $sql= "INSERT INTO `suggestion` ( `details`, `created_date`, `sugesstion_type_id`, `login_id`) VALUES ( '$details', '$Date',' $Sugesstion',' $login_id')";
              return mysqli_query($this->con,$sql);	
     }
     
     function getAllsuggestion(){
           
            
            $sql= "SELECT suggestion.id,suggestion.details, suggestion.created_date, suggestion.sugesstion_type_id,suggestion.login_id,login.id,login.username FROM suggestion INNER JOIN login  on login.id = suggestion.login_id";


            return mysqli_query($this->con,$sql); 

            
     }
     

         function all(){
               $sql= "SELECT sugesstion_type.name, suggestion.sugesstion_type_id, count(*) FROM suggestion INNER JOIN sugesstion_type on suggestion.sugesstion_type_id=sugesstion_type.id group by suggestion.sugesstion_type_id";
                    
                    return mysqli_query($this->con,$sql); 

     }
       function alldata(){
               $sql= "SELECT suggestion.id,suggestion.details, sugesstion_type.name,suggestion.created_date, suggestion.sugesstion_type_id,suggestion.login_id,login.id,login.username FROM((suggestion
                INNER JOIN sugesstion_type on  suggestion.sugesstion_type_id = sugesstion_type.id)
                INNER JOIN login on suggestion.login_id = login.id) ORDER BY login.username ASC";


                 return mysqli_query($this->con,$sql); 

     }




     

      function search($searchkey,$searchtype){

           
           $sql= "SELECT suggestion.id,suggestion.details, suggestion.created_date, suggestion.sugesstion_type_id,suggestion.login_id,login.id,login.username FROM suggestion INNER JOIN login on login.id = suggestion.login_id WHERE details  LIKE'%$searchkey%' && sugesstion_type_id = $searchtype";

              return mysqli_query($this->con,$sql); 
     }
     
  
    
}


