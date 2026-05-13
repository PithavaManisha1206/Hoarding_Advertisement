<?php include("admin_header.php")?>

<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="category_code1.php"  method="post" enctype= "multipart/form-data">
						 
						  <center><h2 style="color:white;">category form</h2></center><br>

							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="enter name" name="hc_name" required>
                            </div>
							
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="enter description" name="hc_description" required>
                            </div>
								
                            <div class="form-group">
                              <input type="file" class="email-bt" placeholder="enter photo" name="hc_photo" required>
                            </div>

                          
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

