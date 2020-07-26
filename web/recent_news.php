
	<div class="posts">
		<div class="container">
			<div class="sws-agileits-heading">
				<h3 class="title">Recent News</h3> 
			</div>
			<div class="posts-grids">
				<?php 
					include '../admin/includes/db.php'; 
					$select = "select * from news order by nid asc limit 3";
					$result = mysqli_query($con, $select);
					while ($row = mysqli_fetch_assoc($result)) {?>
					<div class="col-md-4 sws-agile-post-grids"	onclick="window.location='single_post.php?id=<?=$row['nid']?>'">
						<div class="sws-agile-post-img" style="background-image: url('../admin/upload/news/<?=$row['image']?>');  height: 250px; width: 350px; background-size: cover">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<ul>
									<li><?php echo date('d', strtotime($row['created_at'])); ?></li>
									<li><?php echo date('M', strtotime($row['created_at'])); ?></li>
								</ul>
							</a>
						</div>
						<div class="sws-agile-post-info" style="border:1px #d9edf7 solid">
							<h4 class="recent_news" style="text-align: center; vertical-align: middle"><a href="single_post.php?id=<?=$row['nid']?>" style="font-weight: 300; "><?=substr($row['title'], 0, 100)?>...  </a></h4>
							<p>....</p>
						</div>
					</div>
					<?php } ?>
			
				<div class="clearfix"> </div>
			</div>


		</div>
	</div>
