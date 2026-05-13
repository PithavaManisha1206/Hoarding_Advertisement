<?php
 include("header.php");
 include("connect.php");
?>

<?php
   $user_id=$_GET["user_id"];
   $q="select * from user_master_tbl where user_id='$user_id'";
   $res=mysqli_query($con,$q);
?>


<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
					   
                          <form action="user_registration_edit_code.php"  method="post" enctype= "multipart/form-data">
						  
						  <?php
						  while($row=mysqli_fetch_row($res))
						  {
					      ?>
						  
						  <div class="field">
                              <input type="hidden" value="<?php print $row[0] ?>" name="user_id" required>
                            </div>

                            
							<div class="form-group">
                              <input type="text" value="<?php print $row[1] ?>" placeholder="Enter user name" name="user_name" required>
                            </div>
							
                            <div class="form-group">
                              <input type="email" value="<?php print $row[2] ?>" placeholder="enter user email" name="user_email" required>
                            </div>
                            
							<div class="form-group">
                              <input type="text" value="<?php print $row[3] ?>" placeholder="enter user address" name="user_address" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="text" value="<?php print $row[4] ?>" placeholder="enter user city" name="user_city" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="number" value="<?php print $row[5] ?>" placeholder="enter user pincode" name="user_pincode" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="number" value="<?php print $row[6] ?>" placeholder="enter user mobile" name="user_mobile" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="password" value="<?php print $row[7] ?>" placeholder="enter user password" name="user_password" required>
                           </div>
						   
						   <div class="form-group">
						   <img src="<?php print $row[8] ?>" width="100" height="100">
                              <input type="file" name="user_photo" placeholder="select photo" name="user_photo" required>
                           </div>
                          <?php
						   }
						   ?>
                            <input type="submit" name="submit" required><a href="user_registration_edit_code.php"></a></div>
                          </form>
                       </div> 
                    </div>
					       
                </div>
    			
    		</div>
    	</div>
    </div>
	<!-- contact section end -->
	

<?php include("footer.php")?>