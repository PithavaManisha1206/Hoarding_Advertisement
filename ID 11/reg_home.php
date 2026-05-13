<?php include("r_header.php")?>
<?php include("connect.php")?>

<div class="container-fluid" style="padding-left:0px;padding-right:0px;">
 <div class="row">
 <div class="col-md-12">
	
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/p6.png" height="600px" width="100%" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="images/slider 4.png" height="600px" width="100%" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="images/slider3.png" height="600px" width="100%" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>


	<div class=" layout_padding promoted_sectipon">
		<div class="container">
			<h1 class="promoted_text"> <span style="border-bottom: 5px solid #4bc714;">Our Hoarding Location ADS</span></h1>
			<div class="images_main">
				<div class="row">
				
			  
				<?php
				$q="select * from hoarding_location_tbl order by rand() limit 7";
				
				$res=mysqli_query($con,$q);
				while($row=mysqli_fetch_row($res))
				{
				?>
				
				
			
				<div class="col-sm-4 col-md-6 col-lg-3 col-xs-12 ">
						<div class="images">
						<a class="btn-hvr-hover" style="color:black;" href="r_hoarding_location_detail.php?hl_id=<?php print $row[0];?>">						
						<img  style="width: 150%;height:200px;" class="img-fluid" src="<?php print $row[4];?>" alt="" />
						 <?php print $row[1];?></a>
						
						</div>
					
					</div>
					<?php
				    }
				    ?>
				 
					
				</div>
			</div>
			
		</div>
	</div>
	<?php include("footer.php")?>
