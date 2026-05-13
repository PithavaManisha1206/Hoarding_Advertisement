<?php
 include("header.php");
 include("connect.php");
?>

<?php
   $hc_id=$_GET["hc_id"];
   $q="select * from hoarding_category_tbl where hc_id=$hc_id";
   $res=mysqli_query($con,$q);
?>

<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="category_edit_code.php"  method="post" enctype= "multipart/form-data">
						  
						  <?php
						   while($row=mysqli_fetch_row($res))
						   {
						  ?>
						  <div class="field">
						   <input type="hidden" value="<?php print $row[0] ?>" name="hc_id" required>
						   </div>
						  
						  

							<div class="form-group">
                              <input type="text" class="email-bt" value="<?php print $row[1] ?>" placeholder="enter name" name="hc_name" required>
                            </div>
							
							<div class="form-group">
                              <input type="text" class="email-bt" value="<?php print $row[2] ?>" placeholder="enter description" name="hc_description" required>
                            </div>
								
                            <div class="form-group">
							<img src="<?php print $row[3] ?>" width="100" height="100">
                              <input type="file" class="email-bt" name="hc_photo" placeholder="select photo" name="hc_photo" required>
                            </div>

                          
                            <input type="submit" name="submit" required><a href="category_edit_code.php"></a></div>
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

