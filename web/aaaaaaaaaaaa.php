<head>
	<style>
		.sws-agile-post-img a:hover{border-radius:50px;}
	</style>
</head>
<div class="subscribe"> 
	<div class="container"> 
		<div class="sws-agileits-heading">
				<h3 class="title">Daily News</h3> 
		</div>
		<div class="heading">
			<marquee onmouseover="this.stop();" onmouseout="this.start();">	
				<?php 
					include '../admin/includes/db.php'; 
					$select = "select * from news order by nid desc limit 3";
					$result = mysqli_query($con, $select);
					while ($row = mysqli_fetch_assoc($result)) {?>
						<div class="col-md-4 sws-agile-post-grids">
							<div class="" style="background-image: url('../admin/upload/news/1551697749368.jpg'); height: 250px; width: 250px">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<ul>
										<li>JUL</li>
										<li>15</li>
									</ul>
								</a>
							</div>
							<div class="sws-agile-post-info">
								<h4><a href="#" data-toggle="modal" data-target="#myModal"><?=$row['title']?></a></h4>
								<p>....</p>
							</div>
						</div>
					<?php 
					}
				 ?>
			</marquee>
		</div>
	</div>
</div>
