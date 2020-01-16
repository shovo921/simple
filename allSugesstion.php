
<?php $con = mysqli_connect("localhost","root","","suggestion_box") or die(mysql_error());
include ('Repository/SuggestionTypeRepo.php');
include ('Repository/SuggestionRepo.php');
$typerepo=new SuggestionTypeRepo();
$repo= new SuggestionRepo();

if (isset($_POST['search'])){ 

				if (empty($_POST['search'])) {
					$result=$repo->getAllsuggestion();
					
				}
				else{
					$searchkey = $_POST['search'];
					$searchtype = $_POST['sugesstion_type'];
					 $result= $repo->search($searchkey,$searchtype);

				}

					
				}
 else
 	{ 
 	 $result=$repo->getAllsuggestion();
 	}

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
</head>
<body>

	<div class="container">
	<input type=button class="btn btn-warning" onClick="location.href='http://localhost/suggestion_box/createSugession.php'" value='Home'>
	<br>
	<input type=button class="btn btn-warning" onClick="location.href='http://localhost/suggestion_box/allSugesstionUserWise.php'" value=' allSugesstionUserWise'>
		<div class="row">

			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
				<form action="" method="POST"> 
					<div class="col-md-5">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value="" > 
					</div>
					<div class="col-md-5">
                 
                        <select name="sugesstion_type" id="sugesstion_type"  class="form-control" >
                        <option value selected >Select Sugesstion</option>
              			 <?php 
                    
	                         $re = $typerepo->getAll();
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
					<div class="col-md-2 text-left">
					<button class="btn" >Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered ">
					<tr>
						<th>Id</th>
						<th>Detail</th>
						<th>Date</th>
						<th>sugesstion_type_id</th>
						<th>login_id</th>
						<th>Username</th>
                       
                    </tr>
					</tr>
					<?php while($row= mysqli_fetch_array($result)){

					?>
					<tr>
						<td><?php echo $row["id"]?></td>
						<td><?php echo $row["details"]?></td>
						<td><?php echo $row["created_date"]?></td>
						<td><?php echo $row["sugesstion_type_id"]?></td>
						<td><?php echo $row["login_id"]?></td>
						<td><?php echo $row["username"]?></td>
                       
					</tr>
				<?php }
				?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>