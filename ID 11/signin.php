<?php include("v_header.php")?>

<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
			<div class="row">
    			
                       <div class="col-md-12">					    
					   <div class="input_main">
					   <div class="container">
					   <form action="user_registration_code.php"  method="post" enctype= "multipart/form-data">
					    
					  
					  
                         <center><h2 style="color:white;">User Registration Form</h2></center><br>
                            
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter user name" name="user_name" required>
                            </div>
							
                            <div class="form-group">
                              <input type="email" class="email-bt" placeholder="enter user email" name="user_email" required>
                            </div>
                            
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="enter user address" name="user_address" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="text" class="email-bt" placeholder="enter user city" name="user_city" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="number" class="email-bt" placeholder="enter user pincode" name="user_pincode" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="number" class="email-bt" placeholder="enter user mobile" name="user_mobile" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="password" class="email-bt" placeholder="enter user password" name="user_password" required>
                           </div>
						   
						   <div class="form-group">
                              <input type="file" class="email-bt" placeholder="enter user photo" name="user_photo" required>
                           </div>
                           <div class="form-group">
                            <input type="submit" name="submit" required>
							</div>
                          </form>
                       </div> 
                    </div>
                </div>
    		</div>
    </div>			
    		
    
	<!-- contact section end -->
	

<?php include("footer.php")?> 
