<?php include("connect.php");?>
<?php include("admin_header.php");?>
<div class="container">
<div class="row">
<div class="col-md-12">
	<center><h1 style="color:black;">Welcome to Admin Panel</h1></center>

<link rel="stylesheet" type="text/css" href="box-css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="box-css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="box-css/style.min.css">
<link rel="stylesheet" type="text/css" href="box-css/colors.min.css">
<link rel="stylesheet" type="text/css" href="box-css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
				
				<?php
				  $q1="select count(*) from user_master_tbl";
				  $res1=mysqli_query($con,$q1);
				  while($row=mysqli_fetch_row($res1))
				  {
				  ?>
				  <h3 style="color:black;"><?php print $row[0];?></h3>
				  <?php
				  }
				  ?>
				  <a href="user_registration_view.php"><span>Users</span></a>
				
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-speech warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
				
                  <?php
				  $q2="select count(*) from hoarding_category_tbl";
				  $res2=mysqli_query($con,$q2);
				  while($row=mysqli_fetch_row($res2))
				  {
				  ?>
				  <h3 style="color:black;"><?php print $row[0];?></h3>
				  <?php
				  }
				  ?>
				  <a href="category_view.php"><span>Category</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  

      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-graph success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
				
				<?php
				  $q3="select count(*) from hoarding_location_tbl";
				  $res3=mysqli_query($con,$q3);
				  while($row=mysqli_fetch_row($res3))
				  {
				  ?>
				  <h3 style="color:black;"><?php print $row[0];?></h3>
				  <?php
				  }
				  ?>
				  <a href="hoarding_location_view.php"><span>location</span></a>
				  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
				
				<?php
				  $q4="select count(*) from advertising_company_tbl";
				  $res4=mysqli_query($con,$q4);
				  while($row=mysqli_fetch_row($res4))
				  {
				  ?>
				  <h3 style="color:black;"><?php print $row[0];?></h3>
				  <?php
				  }
				  ?>
				  <a href="advertising_company_view.php"><span>company</span></a>
				  
                </div>
                <div class="align-self-center">
                  <i class="icon-rocket danger font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
				
				<?php
				  $q5="select count(*) from hoarding_booking_tbl";
				  $res5=mysqli_query($con,$q5);
				  while($row=mysqli_fetch_row($res5))
				  {
				  ?>
				  <h3 style="color:black;"><?php print $row[0];?></h3>
				  <?php
				  }
				  ?>
				  <a href="hoarding_booking_view.php"><span>Booking</span></a>
				  
                </div>
                <div class="align-self-center">
                  <i class="icon-user success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
				
				<?php
				  $q6="select count(*) from review_master_tbl";
				  $res6=mysqli_query($con,$q6);
				  while($row=mysqli_fetch_row($res6))
				  {
				  ?>
				  <h3 style="color:black;"><?php print $row[0];?></h3>
				  <?php
				  }
				  ?>
				  <a href="review_master_view.php"><span>review</span></a>
				  
                </div>
                <div class="align-self-center">
                  <i class="icon-pie-chart warning font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  
    
  </section>
  
  
</div>


</div>
</div>
</div>

<?php include("footer.php");?>