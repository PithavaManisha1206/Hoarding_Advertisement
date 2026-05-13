<?php include("admin_header.php")?>

<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="advertising_company_code.php" method="post" enctype= "multipart/form-data">
						  <center><h2 style="color:white;">Advertising Company</h2></center>

                            
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter Advertising Company Name" name="ac_name" required>
                            </div>
							
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter Advertising Company Description" name="ac_description" required>
                            </div>
                            
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter Advertising Company Address" name="ac_address" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter Advertising Company contact mo" name="ac_contact_mo" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter Advertising Company contact person" name="ac_contact_person" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="file" class="email-bt" placeholder="Enter Advertising Company logo" name="ac_logo" required>
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
							
						  
                            <input type="submit" name="submit" required><a href="advertising_company_code.php"></a>
                          </form>
                       </div> 
                    </div>
                </div>
    			
    		</div>
    	</div>
    </div>
	<!-- contact section end -->
	

<?php include("footer.php")?> 