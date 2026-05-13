<?php include("admin_header.php")?>

<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="review_master_code.php"  method="post" enctype= "multipart/form-data">

                            <center><h2 style="color:white;">Review</h2></center>
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="enter message" name="rm_message" required>
                            </div>
							<td>
						   <select class="email-bt" name="hl_id">
				           <?php
							include("connect.php");
							$q1="select * from hoarding_location_tbl";
							$res1=mysqli_query($con,$q1);
							while($row1=mysqli_fetch_row($res1))
							{
							  ?>
							   <option value="<?php print $row1[0];?>"><?php print $row1[1];?>
							    </option>
							
							<?php
							}
							?>
							</select>
							</td>
							
                            <div class="form-group">
                              <input type="date" class="email-bt" placeholder=" enter date" name="rm_date" required>
                            </div>
                            
						    <td>
		                    <select class="email-bt" name="user_id">
						   <?php
							include("connect.php");
							$q2="select * from user_master_tbl";
							$res2=mysqli_query($con,$q2);
							while($row2=mysqli_fetch_row($res2))
							{
							?>
							<option value="<?php print $row2[0];?>"><?php print $row2[1];?>
							</option>
							<?php
							}
							?>
							</select>
							</td>
							</div>
							
							<br>
							<br>
						   
							<div>
                            <input type="submit" name="submit" required><a href="review_master_code.php"></a>
							</div>
                          </form>
                       </div> 
                    </div>
                </div>
    			
    		</div>
    	</div>
    </div>
	<!-- contact section end -->
	

<?php include("footer.php")?> 
