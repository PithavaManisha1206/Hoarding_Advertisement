<?php include("admin_header.php")?>

<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="hoarding_location_code.php"  method="post" enctype= "multipart/form-data">

                            <center><h2 style="color:white;">Hoarding Location</h2></center>
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="enter name" name="hl_name" required>
                            </div>
							
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder=" enter address" name="hl_address" required>
                            </div>
                            
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="enter city" name="hl_city" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="file" class="email-bt" placeholder="enter photo" name="hl_photo" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="text" class="email-bt" placeholder="enter rent" name="hl_rent" required>
                           </div>
                           
						   
						   
						   <td>
						   <select  name="hc_id">
						   
						   
						   <?php
							include("connect.php");
							$q1="select * from hoarding_category_tbl";
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
							
						
							<td>
						  	<select  name="ac_id">
						   
						   <?php
							include("connect.php");
							$q2="select * from advertising_company_tbl";
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
							
						   
							<div>
                            <input type="submit" name="submit" required><a href="hoarding_location_code.php"></a>
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
