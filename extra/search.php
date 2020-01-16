<?php $con = mysqli_connect("localhost","root","","suggestion_box") or die(mysql_error());
include ('Repository/SuggestionTypeRepo.php');
$repo=new SuggestionRepo();
if (isset($_POST['search'])) {
	$searchkey = $_POST['search'];
	$searchtype = $_POST['sugesstion_type'];
	$sql= "SELECT * FROM suggestion WHERE details LIKE'%$searchkey%' && sugesstion_type_id = $searchtype";
}
 else
 	{$sql= "SELECT * FROM suggestion";}

$result= mysqli_query($con,$sql);

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
                    
	                         $re = $repo->getAll();
	                         while($row= mysqli_fetch_array($re))
                                {
	                        $id = $row['id'];
	                        $name = $row['name'];
	                        $created_date = $row['created_date'];
   
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
						<th>Action</th>
					</tr>
					<?php while($row= mysqli_fetch_array($result)){

					?>
					<tr>
						<td><?php echo $row["id"]?></td>
						<td><?php echo $row["details"]?></td>
						<td><?php echo $row["created_date"]?></td>
						<td><?php echo $row["sugesstion_type_id"]?></td>
						<td>
							<button type="button" class="btn btn-primary">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>

						</td>
					</tr>
				<?php }
				?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>