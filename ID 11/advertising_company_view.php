<?php include("admin_header.php")?>
 <!--contact section start--> 
    
   <div class="container">
	<section>
		<div class="view">
			
			<div class="row">
				<div class="col-md-12">
				<center><h2 style="color:black;">advertising company View</h2></center> 
				</div>
				<div class="col-md-12">
					<div class="full">
					<a href="advertising_company.php" class="btn btn-success">Add Category</a>
						<table class="table table-striped">
							<tr>
								<th>advertising company ID</th>
								<th>advertising company Name</th>
								<th>advertising company description</th>
								<th>advertising company Logo</th>								
						    	<th>advertising company address</th>
								<th>advertising company contact mo</th>
								<th>advertising company contact person</th>
								<th>hc ID</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							<?php
							include("connect.php");
							$q="select * from advertising_company_tbl";
							$res=mysqli_query($con,$q);
							while($row=mysqli_fetch_row($res))
							{
							?>
							<tr>
								<td><?php print $row[0];?></td>
								<td><?php print $row[1];?></td>
								<td><?php print $row[2];?></td>
								<td><img src="<?php print $row[3];?>" width="100" height="100"></td>
								<td><?php print $row[4];?></td>
								<td><?php print $row[5];?></td>
								<td><?php print $row[6];?></td>
								<td>
								<?php
									$hc_id=$row[7];
									
									$q1="select * from hoarding_category_tbl where hc_id=$hc_id";
									$res1=mysqli_query($con,$q1);
									while($row1=mysqli_fetch_row($res1))
									{
										print $row[1];
									}
									?>
									</td>							
								
								<td><a href="advertising_company_edit.php?ac_id=<?php print $row[0];?>" class="btn btn-success">Edit</td>
								<td><a href="advertising_company_delete.php?ac_id=<?php print $row[0];?>" class="btn btn-danger">Delete</td>
								
							</tr>
							<?php
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>  
      <!-- end inner page section -->
<?php include("footer.php"); ?>