<?php
 include("header.php");
 include("connect.php");
?>

<?php
$hl_id=$_GET["hl_id"];
$q="select * from hoarding_location_tbl where hl_id=$hl_id";
$res=mysqli_query($con,$q);
?>


<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="hoarding_location_edit_code.php"  method="post" enctype= "multipart/form-data">
						  <?php
						   while($row=mysqli_fetch_row($res))
						   {
							?>
						   <div>
						   
						   <input type="hidden" value="<?php print $row[0] ?>" name="hl_id" required>
						   </div>
						  
							<div class="form-group">
                              <input type="text" class="email-bt" value="<?php print $row[1] ?>"placeholder="name" name="hl_name" required>
                            </div>
							
                            <div class="form-group">
                              <input type="text" class="email-bt" value="<?php print $row[2] ?>" placeholder="address" name="hl_address" required>
							 <!-- <?php print $row[2] ?>-->
                            </div>
                            
							<div class="form-group">
                              <input type="text" class="email-bt" <?php print $row[3] ?> placeholder="city" name="hl_city" required>
                           </div>
						   
						   
						   
						   <div class="form-group">
						      <img src="<?php print $row[4] ?>"width="100" height="100">
                              <input type="file" class="email-bt" placeholder="select photo" name="hl_photo" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="text" class="email-bt" <?php print $row[5] ?> placeholder="enter rent" name="hl_rent" required>
                           </div>
						   
						   <?php
						   }
						   ?>
                          <td>
						   <select class="email-bt" name="hc_id">
						   
				
						   <?php
							include("connect.php");
							$q1="select * from hoarding_category_tbl";
							$res1=mysqli_query($con,$q1);
							while($row1=mysqli_fetch_row($res1))
							{
							?>
							
							<option value="<?php print $row1[0];?>"><?php print $row1[1];?></option>
							<?php			
							}							
							?>
							
							</select>
							</td>
						   

						   
							
							<td>
						   <select class="email-bt" name="ac_id">
						   
				
						   <?php
							include("connect.php");
							$q2="select * from advertising_company_tbl";
							$res2=mysqli_query($con,$q2);
							while($row2=mysqli_fetch_row($res2))
							{
							?>
							
							<option value="<?php print $row2[0];?>"><?php print $row2[1];?></option>
							<?php			
							}							
							?>
							
							</select>
							</td>
							
                          
                            <input type="submit" name="submit" required>
                          </form>
                       </div> 
                    </div>
                </div>
    			
    		</div>
    	</div>
    </div>
	<!-- contact section end -->
	

<?php include("footer.php")?> 
