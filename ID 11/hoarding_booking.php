<?php include("admin_header.php")?>

<!-- contact section start -->
    <div class="contact_section layout_padding">
			<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="hoarding_booking_code.php"  method="post" enctype= "multipart/form-data">

                            <center><h2 style="color:white;">Booking</h2></center>
							
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
						<select  name="hl_id">
						    <?php
							include("connect.php");
							$q2="select * from hoarding_location_tbl";
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
							
							<div class="form-group">
                              <input type="date" class="email-bt" placeholder="Enter Book Date" name="hb_book_date" required>
                            </div>
							
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter Book Duration" name="hb_book_duration" required>
                            </div>
                            
							<div class="form-group">
                              <input type="text" class="email-bt" placeholder="Enter Total Amount" name="hb_total_amount" required>
                           </div>
						   <td>
						<select  name="user_id">
						    <?php
							include("connect.php");
							$q3="select * from user_master_tbl";
							$res3=mysqli_query($con,$q3);
							while($row3=mysqli_fetch_row($res3))
							{
							?>
							<option value="<?php print $row3[0];?>"><?php print $row3[1];?>
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
                            <input type="submit" name="submit" required><a href="hoarding_booking_code.php"></a>
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
