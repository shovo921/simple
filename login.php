
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
  <?php
  session_start();

  ?>
 
 <h2>login From</h2>

    <form action="logincheck.php" method="POST" class="from-control">
    <div class="form-group" id="form_submit col-sm-4">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  id="username" name="username" autocomplete="off"  />

  </div>
  
  	<div class="form-group" id="form_submit col-sm-4">
    <label for="exampleInputEmail1">password</label>
    <input type="password"  id="password" name="password" autocomplete="off"  />


  </div>
        
         <input type="submit" name="submit" id="submit" class="btn btn-warning" value="Login" />
         <a  class="btn btn-outline-success" href="CreateUser.php">Create Account</a>
   </form>  


</body>
</html>
