<?php include("header.php")?>

<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="login_code.php"  method="post" >

						 
						  <center><h2 style="color:white;">Login</h2></center>

							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter user email" name="username" required>
                            </div>
							
							<div class="form-group">
                              <input type="password" class="email-bt" placeholder="Enter password" name="password" required>
                            </div>
								
								<div class="form-group">
								 <select name="usertype" class="form-control">
								 <option value="no">Select User Type</option>
								 <option value="admin">Administrator</option>
								 <option value="reguser">Register User</option>
								 </select>
								</div>
                              
                            </div>
							
		                    
                            <input type="submit" name="Login" required>
							
                          </form>
                       </div> 
                    </div>
                </div>
    			
    		</div>
    	</div>
    </div>
	<!-- contact section end -->
	

<?php include("footer.php")?> 

