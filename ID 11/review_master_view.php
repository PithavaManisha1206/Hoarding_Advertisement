<?php include("admin_header.php")?>
	 <!--contact section start--> 
		
	   <div class="container">
		<section>
			<div class="view">
				
				<div class="row">
					<div class="col-md-12">
					<center><h2 style="color:black;">Review Master View</h2></center> 
					</div>
					<div class="col-md-12">
						<div class="full">
						
							<table class="table table-striped">
								<tr>
									<th>Review ID</th>
									<th>Review message</th>
									<th>Hoarding location Id</th>
									<th>Review date</th>
									<th>user_id</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
								<?php
								include("connect.php");
								$q="select * from review_master_tbl";
							   $res=mysqli_query($con,$q);
								while($row=mysqli_fetch_row($res))
								{
								?>
								<tr>
									<td><?php print $row[0];?></td>
									<td><?php print $row[1];?></td>
									
									<td>
									<?php
									$hl_id=$row[2];
									
									$q1="select * from hoarding_location_tbl where hl_id=$hl_id";
									$res1=mysqli_query($con,$q1);
									while($row1=mysqli_fetch_row($res1))
									{
										print $row[1];
									}
									?>
									</td>
									<td><?php print $row[3];?></td>
									
									<td>
									<?php
									$user_id=$row[4];
									
									$q2="select * from user_master_tbl where user_id=$user_id";
									
									$res2=mysqli_query($con,$q2);
									while($row2=mysqli_fetch_row($res2))
									{
										print $row[1];
									}
									?>
									</td>
									
									
									<td>
									<a href="#">
									<input class="btn btn-success" type="button" value="Edit">
									</a>
									</td>
									
									<td>
									<a href="review_master_delete.php?rm_id=<?php print $row[0];?>">
									<input class="btn btn-danger" type="button" value="Delete">
									</a>
									</td>
									
									</tr>
						
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