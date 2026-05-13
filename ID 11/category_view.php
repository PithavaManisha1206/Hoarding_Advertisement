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
					<center><h2 style="color:black;">Category View</h2><center>
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
					<a href="category.php" class="btn btn-success">Add Category</a>
						<table class="table table-striped">
							<tr>
								<th>Category ID</th>
								<th>Category Name</th>
								<th>Category Description</th>
								<th>Category Photo</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							<?php
							include("connect.php");
							$q="select * from hoarding_category_tbl";
							$res=mysqli_query($con,$q);
							while($row=mysqli_fetch_row($res))
							{
							?>
							<tr>
								<td><?php print $row[0];?></td>
								<td><?php print $row[1];?></td>
								<td><?php print $row[2];?></td>
								<td><image src="<?php print $row[3];?>" width="100" height="100"></td>
								<td><a href="category_edit.php?hc_id=<?php print $row[0];?>" class="btn btn-success">Edit</td>
								<td><a href="category_delete.php?hc_id=<?php print $row[0];?>" class="btn btn-danger">delete</td>
								
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