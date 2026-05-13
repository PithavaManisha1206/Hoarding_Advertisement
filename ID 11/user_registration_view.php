<?php include("admin_header.php")?>
 <!--contact section start--> 
 
    <div class="container">
	 <section>
	
    	<div class="view">
		
    		<div class="row">
    			<div class="col-md-9">
                    <div class="input_main">
                       <div class="container">
					   <div class="row">
               <div class="col-md-12">
                  <div class="full">
                 <center><h2 style="color:black;">User registration View</h2></center>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  <br>
	  <section>
		<div class="view">
			<div class="row">
				<div class="col-md-12">
					<div class="full">
					
						<table class="table table-striped">
							<tr>
								<th>user ID</th>
								<th>user Name</th>
								<th>user email</th>
								<th>user address</th>
								<th>user city</th>
								<th>user pincode</th>
								<th>user mobile</th>
								<th>user password</th>
								<th>user photo</th>							
							    <th>Edit</th>
								<th>Delete</th>
							</tr>
							<?php
							include("connect.php");
							$q="select * from user_master_tbl";
							$res=mysqli_query($con,$q);
							while($row=mysqli_fetch_row($res))
							{
							?>
							<tr>
								<td><?php print $row[0];?></td>
								<td><?php print $row[1];?></td>
								<td><?php print $row[2];?></td>
								<td><?php print $row[3];?></td>
								<td><?php print $row[4];?></td>
								<td><?php print $row[5];?></td>
								<td><?php print $row[6];?></td>
								<td><?php print $row[7];?></td>
								<td><image src="<?php print $row[8];?>" width="100" height="100"></td>	
								<td><a href="user_registration_edit.php?user_id=<?php print $row[0];?>" class="btn btn-success">Edit</td>
								<td><a href="user_registration_delete.php?user_id=<?php print $row[0];?>" class="btn btn-danger">Delete</td>
								
								
							</tr>
							<?php
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  
      <!-- end inner page section -->
<?php include("footer.php"); ?>