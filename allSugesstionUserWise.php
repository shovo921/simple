
<?php 

include ('Repository/SuggestionRepo.php');

$repo= new SuggestionRepo();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>All Sugesstion User</title>
</head>
<body>

	<div class="container">
	<input type=button class="btn btn-warning" onClick="location.href='http://localhost/suggestion_box/createSugession.php'" value='Home'>
		<div class="row">

			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
			

				<br>
				<h2> All Sugesstion User Wise</h2>
				</div>
				<table class="table table-bordered ">
					<tr>
						<th>UserName</th>
						<th>Sugesstion</th>
						<th>Sugesstion type</th>
						<th>Created Date</th>
						
                       
                    </tr>
					
					
				<?php 
						$countNumber=-1;
                         $result=$repo->alldata();

						    while($row= mysqli_fetch_array($result)){
							
							if ($countNumber!=$row['login_id']) {
                 ?>
						<tr>	

						<td><?php echo $row['username']?></td>				
						<td></td>
						<td></td>
						<td></td>
							</tr>
               <?php 
						
						$countNumber=$row['login_id'];	}
						

								
 				 ?> 
					   
						<tr>
						<td></td>
						<td><?php echo $row['details']?> </td>
						<td> <?php echo $row['sugesstion_type_id']?></td>
						<td> <?php echo $row['created_date']?> </td>

					</tr>

					<?php

			
				}?>
				</table>

     <br>
     <br>
     <h2>Count table</h2>
     <div class="col-md-5 col-md-offset-2">
				<table class="table table-bordered ">
					<tr>
						
						<th>Sugesstion type</th>
						<th>count</th>
						
                       
                    </tr>
					
					<tr>
						<?php 
                         $result=$repo->all();

						while($row= mysqli_fetch_array($result)){

					?> 
					   <?php
					  
					   ?>
						<td> <?php echo $row['sugesstion_type_id']?></td>
						<td> <?php echo $row['count(*)']?> </td>

					</tr>
					<?php
			
				}?>
				</table>
				<div>
			</div>
			
		</div>
	</div>
</body>
</html>