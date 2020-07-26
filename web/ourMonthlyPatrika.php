	<?php 
		$month = "";
		if (isset($_POST['search'])) {
			$month = "WHERE magazine_month LIKE '%".$_POST['search']."%'";
		}
		else{
			$month = "WHERE magazine_month !=''";
		}
		$search_query = "select * from magazine ".$month."AND magazine_status = '1'";
		$result = mysqli_query($con, $search_query);

	 ?>

	<div class="team">
	<div class="swsagile-spldishes">
		<div class="container">
			
			<div class="sws-agileits-heading">
				<h3 class="title">Our Patrika</h3> 
				<br>
			</div>
			<form action="" method="post">
				<div class="row">
					<div class="col-md-2">
						<select name="search" id="" class="form-control">
							<?php if (isset($_POST['search']) && ($_POST['search'] == 'January')) {?>
							<option value="January" selected>January</option>
							<?php } else{?> 
							<option value="January">January</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'February')) {?>
							<option value="February" selected>February</option>
							<?php } else{?> 
							<option value="February">February</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'March')) {?>
							<option value="March" selected>March</option>
							<?php } else{?> 
							<option value="March">March</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'April')) {?>
							<option value="April" selected>April</option>
							<?php } else{?> 
							<option value="April">April</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'May')) {?>
							<option value="May" selected>May</option>
							<?php } else{?> 
							<option value="May">May</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'June')) {?>
							<option value="June" selected>June</option>
							<?php } else{?> 
							<option value="June">June</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'July')) {?>
							<option value="July" selected>July</option>
							<?php } else{?> 
							<option value="July">July</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'August')) {?>
							<option value="August" selected>August</option>
							<?php } else{?> 
							<option value="August">August</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'September')) {?>
							<option value="September" selected>September</option>
							<?php } else{?> 
							<option value="September">September</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'October')) {?>
							<option value="October" selected>October</option>
							<?php } else{?> 
							<option value="October">October</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'November')) {?>
							<option value="November" selected>November</option>
							<?php } else{?> 
							<option value="November">November</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'December')) {?>
							<option value="December" selected>December</option>
							<?php } else{?> 
							<option value="December">December</option> <?php } ?>
	
						</select>
					</div>
					<div class="col-md-2">
						<input type="submit" name="submit" class="form-control btn-success" >
					</div>
				</div>
			</form>
			<div class="spldishes-agileinfo">
				<div class="spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
					<?php 
						if (mysqli_num_rows($result)<0) {?>
							<div class="item g1">
								<h3>No Magazine Available</h3>
							</div>
						<?php 
						}
						else{
						while ($row = mysqli_fetch_assoc($result)) { ?>
							<div class="item g1">
								<img class="lazyOwl" src="../admin/upload/cover_image/<?=$row['cover_image']?>" title="Chhattisgar rajya patrika August 2019" alt=""/>
								<div class="agile-dish-caption">
									<h4><?=$row['magazine_name']?></h4>
									<p><?=$row['magazine_month']?>&nbsp;&nbsp;&nbsp;<?=$row['magazine_year']?></p>
									<span>Patrika</span>
									<ul class="top-links">
										<li><a href="../admin/upload/pdf/<?=$row['magazine_pdf']?>" ><i class="fa ">SHOW</i></a></li>
									</ul>
								</div>
							</div>
						<?php 
						}
					}
					 ?>	
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>