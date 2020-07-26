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
						<div class="col-md-4 sws-agile-post-grids" onclick="window.location='single_post.php?id=<?=$row['nid']?>'">
							<div class="sws-agile-post-img" style="background-image: url('../admin/upload/news/<?=$row['image']?>'); height: 250px; width: 350px; background-size: cover">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<ul>
										<li><?php echo date('d', strtotime($row['created_at'])); ?></li>
										<li><?php echo date('M', strtotime($row['created_at'])); ?></li>
										<!-- <li>15</li> -->
									</ul>
								</a>
							</div>
							<div class="sws-agile-post-info">
								<h4 style="color: white"><a href="single_post.php?id=<?=$row['nid']?>" style="color: white"><?=substr($row['title'], 0, 30)?>...</a></h4>
								
							</div>
						</div>
					<?php 
					}
				 ?>
			</marquee>
		</div>
	</div>
</div>
