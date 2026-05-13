<?php include("r_header.php");
$user_id=$_SESSION['user_id'];
?>
	 <!--contact section start--> 
		
	   <div class="container">
		<section>
			<div class="view">
				<div class="row">
					<div class="col-md-12">
					<center><h2 style="color:black;">Hoarding booking View</h2></center> 
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="full">
							<table class="table table-striped">
								<tr>
									<th>Hoarding booking ID</th>
									<th>Hoarding Category ID</th>
									<th>Hoarding location ID</th>
									<th>Hoarding booking date</th>
									<th>Hoarding booking duration</th>
									<th>Hoarding total amount</th>
									<!--<th>user ID</th>-->
									<th>Hoarding booking status</th>
									<th>Delete</th>
								</tr>
								<?php
								include("connect.php");
								$q="select * from hoarding_booking_tbl where user_id=$user_id";
							   
							   $res=mysqli_query($con,$q);
								while($row=mysqli_fetch_row($res))
								{
								?>
								<td><?php print $row[0];?></td>

								<td>
									<?php
									$hc_id=$row[1];
									
									$q1="select hc_name from hoarding_category_tbl where hc_id=$hc_id";
									$res1=mysqli_query($con,$q1);
									
									if($res1 && $row1 = mysqli_fetch_row($res1)){
										print $row1[0];
									
									}else{
										print "un";
									}
									?></td>
								
								<td>
									<?php
									$hl_id=$row[2];
									
									$q2="select hl_name from hoarding_location_tbl where hl_id=$hl_id";
									$res2=mysqli_query($con,$q2);
									if($res2 && $row2 = mysqli_fetch_row($res2)){
										print $row2[0];
									
									}else{
										print "un";
									}
									?></td>
									
								
									<td><?php print $row[3];?></td>
									<td><?php print $row[4];?></td>
									<td><?php print $row[5];?></td>
									<!--<br>-->
								<!--<td>
									<?php
									$user_id=$row[6];
									
								   $q3="select * from user_master_tbl where user_id=$user_id";
									$res3=mysqli_query($con,$q3);
									while($row3=mysqli_fetch_row($res3))
									{
										print $row[1];
									}
									?>
									</td>-->
										
									<td><?php print $row[7];?></td>
									
									
									<td>
									<a href="r_hoarding_booking_delete.php?hb_id=<?php print $row[0];?>">
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