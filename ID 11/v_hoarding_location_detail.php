<?php include("v_header.php");
include("connect.php");
?>
 <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row" style="margin-top:30px;text-align:center;margin-bottom:20px;">
			<div class="col-md-12">
			<h1>Hoarding Location Details</h1><br>
			</div>
			</div>
			
			<div class="row" >
			
				<?php
				$hl_id=$_GET['hl_id'];				
				$q="select * from hoarding_location_tbl where hl_id=$hl_id ";
				$res=mysqli_query($con,$q);
				if($row=mysqli_fetch_row($res))
				{					
				?>
                <div class="col-xl-5 col-lg-5 col-md-6" style="color:black;">
                 <img src="<?php print $row[4];?>" style="width:100%;height:100%;">   
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-hoarding-details" >
                        <h2><?php print $row[1];?></h2>
                        <h5>Rs.<?php print $row[5];?></h5>
						<h4>Short Address:</h4>
						<p><?php print $row[2];?></p>
						<form action="booking_code.php" method="post">
						<div class="form-group quantity-box row">
						<div class="col-md-12">		
							
							<input type="hidden" name="hl_id" value="<?php print $row[0];?>" required>
							<input type="hidden" name="hc_id" value="<?php print $row[6];?>" required>
							<input type="text" name="hl_rent" value="<?php print $row[5];?>" required>
							<input type="hidden" name="user_id" value="<?php print $_SESSION['user_id'];?>" required>
								
							<label class="control-label">Book Day</label>
							<input class="form-control" type="date" name="book_date" required>	
						</div>
						<div class="col-md-12">		
							<label class="control-label">No Of Months</label>
							<input class="form-control" type="number" name="book_months" required>
						</div>
						<div class="col-md-5" style="margin-top:32px;">
						<button><a href="login.php" class="btn btn-primary">Login For Booking</a></button>
						</div>
						</div>
						</form>
					</div>		
				</div>	
						
                    </div>
                </div>
				<?php
				}
				?>
            </div>
		<div class="container">
			<div class="row">
				<!--<div class="card card-outline-secondary my-5" style="width:100%;">
					<div class="card-header">
						<h2>Give Reviews</h2>
					</div>
					<div class="card-body">
					<form action="review_master_code1.php" method="post" enctype="multipart/form-data">
					<div class="row">
					<input type="hidden" name="hl_id" value="<?php print $hl_id;?>">
					<input type="hidden" name="user_id" value="<?php print $_SESSION['user_id'];?>">
					
					<div class="col-md-6">
					<textarea required style="height:50px;" name="review_mes" class="form-control"></textarea>
					</div>
					<div class="col-md-4">
					<input required style="height:50px;" type="file" class="form-control" name="review_photo">
					</div>					
					<div class="col-md-2">
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>
					</div>	
					</form>
					</div>
					</div>
					
			</div>-->
				
			<div class="row my-5" style="width:100%;">
					<div class="card card-outline-secondary my-5" style="width:100%;"> 
					    <div class="card-header">
							 <h2>Hoarding Reviews</h2>
					    </div>
					  <div class="card-body">
						  <?php				
				          $q="select * from review_master_tbl where hl_id=$hl_id";
				         // print $q;
						  
						  $res=mysqli_query($con,$q);
			              while($row=mysqli_fetch_row($res))
				          {	
					          $user_id=$row[4];				
				              $q1="select * from user_master_tbl where user_id=$user_id ";
				              $res1=mysqli_query($con,$q1);
				              while($row1=mysqli_fetch_row($res1))
				              {	
					              $username=$row1[1];
				          ?>		       
				
						<div class="media mb-3">
							<div class="mr-2 col-md-4"> 
								<img class="rounded-circle border p-1" src="<?php print $row[5];?>" alt="">
							</div>
							<div class="media-body col-md-8">
							<p><?php print $row[1];?></p>
                            <small class="text-muted">Posted by <?php print $username;?> on<?php print $row[3];?></small>
							</div>
						</div>
						<hr>
					<?php
					}
				}
				    ?>  	
						
					   </div>
				    </div>
			</div>

            

                </div>
           </div>
			
    <!-- End Cart -->

<?php include("footer.php");?>