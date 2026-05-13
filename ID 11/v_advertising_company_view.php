<?php include("v_header.php")?>
<?php include("connect.php")?>
	<div class=" layout_padding promoted_sectipon">
		<div class="container">
			<h1 class="promoted_text"> <span style="border-bottom: 5px solid #4bc714;">Our Advertising Company ADS</span></h1>
			<div class="images_main">
				<div class="row">
								
				<?php
				
				$hc_id=$_GET["hc_id"];
				$q="select * from advertising_company_tbl where hc_id=$hc_id ";
				
				$res=mysqli_query($con,$q);			
				while($row=mysqli_fetch_row($res))
				{
				?>
				<div class="col-sm-4 col-md-6 col-lg-3 col-xs-12 ">
						<div class="images">	
						<a class="btn-hvr-hover"style="color:black;" href="v_hoarding_location_view.php?ac_id=<?php print $row[0];?>&&hc_id=<?php print $row[7];?>">						
						<img  style="width: 150%;height:200px;" class="img-fluid" src="<?php print $row[3];?>" alt="" />
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
	