<?php
 include("header.php");
 include("connect.php");
?>

<?php
$ac_id=$_GET["ac_id"];
$q="select * from advertising_company_tbl where ac_id=$ac_id";
$res=mysqli_query($con,$q);
?>


<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="advertising_company_edit_code.php" method="post" enctype= "multipart/form-data">
						  
						  <?php
						   while($row=mysqli_fetch_row($res))
						   {
						  ?>
						   <div>
						   <input type="hidden" value="<?php print $row[0] ?>" name="ac_id" required>
						   </div>

                            
							<div class="form-group">
                              <input type="text" class="email-bt" value="<?php print $row[1] ?>" placeholder="Name" name="ac_name" required>
                            </div>
							
                            <div class="form-group">
                              <input type="text"class="email-bt" value="<?php print $row[2] ?>" placeholder="Description" name="ac_description" required>
                            </div>
                            
							<div class="form-group">
                              <input type="text" class="email-bt" value="<?php print $row[3] ?>" placeholder="Address" name="ac_address" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="text" class="email-bt" value="<?php print $row[4] ?>"placeholder="contact mo" name="ac_contact_mo" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="text" class="email-bt" value="<?php print $row[5] ?>" placeholder="contact person" name="ac_contact_person" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="file" class="email-bt"  value="<?php print $row[6] ?>" placeholder="logo" name="ac_logo" required>
                           </div>
						       
							   
							  
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

							   
						   
                            <input type="submit" name="submit" required><a href="advertising_company_edit_code.php"></a></div>
                          </form>
                       </div> 
                    </div>
					     <?php			
							}							
							?>
					
                </div>
    			
    		</div>
    	</div>
    </div>
	<!-- contact section end -->
	
						   
<?php include("footer.php")?> 