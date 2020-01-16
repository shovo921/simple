<?php
include ('Repository/SuggestionTypeRepo.php');
$repo=new SuggestionTypeRepo();
?>
<?php

session_start();

if(!isset($_SESSION['userId']))
{
  
  header('location: login.php');  
}

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<h2>welcome <?php
echo $_SESSION['name'];

?></h2>
<h3> your login id is <?php echo $_SESSION['userId'];?></h3>
<a class="btn btn-primary" href="logout.php" role="button">Logout</a>
<form>
  <div class="form-group" id="form_submit col-sm-4">
    <label for="exampleInputEmail1">Enter Your Text</label>
    <textarea name="details" id="details" placeholder="Write Your Text here !" rows="7" cols="8"></textarea>

  </div>
   <div class="form-group">
                       <label> Sugesstion</label>
                        <select name="sugesstion_type" id="sugesstion_type"  class="form-control" required>
                        <option value selected >Select Sugesstion</option>
                        <?php 
                    
                         $re = $repo->getAll();
                         while($row= mysqli_fetch_array($re))
                            {
                            $id = $row['id'];
                            $name = $row['name'];
                            
   
                      ?>
            
                     <option value="<?php echo $id ;?>"> <?php echo $name ;?></option>
                     <?php
                         
                    }
                    ?>
                 </select>
               </div>
             
               <input type="button"  id="submit" class="btn btn-warning" value="Submit" />
            </form>
            <br>
            <input type="button" value="View" onclick="window.location = 'http://localhost/suggestion_box/allSugesstion.php'"  class="btn btn-primary">
         
            <script type="text/javascript">

              $('#submit').on('click',function(e){

             
    console.log("success");
    $.ajax({

        type:'post',
        data:{"details":$("#details").val(),"sugesstion_type":$("#sugesstion_type").val()},

        url:'submitSugesstion.php',
        success:alert("success"),
    })
  });

</script>
</body>
</html>
