	<?php include("admin_header.php")?>
	 <!--contact section start--> 
		
	   <div class="container">
		<section>
			<div class="view">
				
				<div class="row">
					<div class="col-md-12">
					<center><h2 style="color:black;">Hoarding Location View</h2></center> 
					</div>
					<div class="col-md-12">
						<div class="full">
						<a href="Hoarding_location.php" class="btn btn-success">Add Category</a>
							<table class="table table-striped">
								<tr>
									<th>Hoarding location ID</th>
									<th>Hoarding location Name</th>
									<th>Hoarding location address</th>
									<th>Hoarding location city</th>
									<th>Hoarding location photo</th>
									<th>Hoarding location rent</th>
									<th>Hoarding Category</th>
									<th>Advertising Company Name</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
								<?php
								include("connect.php");
								$q="select * from hoarding_location_tbl";
							    $res=mysqli_query($con,$q);
								while($row=mysqli_fetch_row($res))
								{
								?>
								<tr>
									<td><?php print $row[0];?></td>
									<td><?php print $row[1];?></td>
									<td><?php print $row[2];?></td>
									<td><?php print $row[3];?></td>
									<td><image src="<?php print $row[4];?>" width="100" height="100"></td>
								
									<td><?php print $row[5];?></td>
									<td>
									<?php
									$hc_id=$row[6];
									
									$q1="select * from hoarding_category_tbl where hc_id=$hc_id";
									$res1=mysqli_query($con,$q1);
									while($row1=mysqli_fetch_row($res1))
									{
										print $row[1];
									}
									?>
									</td>
									
									
									<td>
									<?php
									$ac_id=$row[7];
									
									$q2="select * from advertising_company_tbl where ac_id=$ac_id";
									
									$res2=mysqli_query($con,$q2);
									while($row2=mysqli_fetch_row($res2))
									{
										print $row[1];
									}
									?>
									</td>
									
									<td>
									<a href="hoarding_location_edit.php?hl_id=<?php print $row[0];?>">
									<input class="btn btn-success" type="button" value="Edit">
									</a>
									</td>
									
									<td>
									<a href="hoarding_location_delete.php?hl_id=<?php print $row[0];?>">
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