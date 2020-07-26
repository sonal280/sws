<?php include '../admin/includes/db.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CHHATTISGARH RAJYA RASHTRIYA MASIK PATRIKA</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Chhattisgarh Rashtriya Patrika,Masik Patrika,Chhattisgarh Rajya News,Raipur latest News,magzines,advertisement,todays latest,cricket news,sports news,health tips,dainik bhaskar news,hindi news english news " />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){window.scrollTo(0,1); }</script>

<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/>
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web-fonts -->




    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <!-- <link rel="stylesheet" href="css_news/bootstrap.min.css"> -->
    <!-- font-awesome css -->
    <!-- <link rel="stylesheet" href="css_news/font-awesome.min.css"> -->
    <!-- animate css -->
    <link rel="stylesheet" href="css_news/animate.css">
    <!-- hover-min css -->
    <link rel="stylesheet" href="css_news/hover-min.css">
      <!-- magnific-popup css -->
    <link rel="stylesheet" href="css_news/magnific-popup.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css_news/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css_news/owl.carousel.css">
    <!-- lightbox css -->
    <link href="css_news/lightbox.min.css" rel="stylesheet">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="inc_news/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="inc_news/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- style css -->
    <link rel="stylesheet" href="news_style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css_news/responsive.css">
    <!-- modernizr js -->
    <script src="js_news/modernizr-2.8.3.min.js"></script>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-151366195-1');
</script>

<script data-ad-client="ca-pub-6627393698013162" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


<style>
	.modal-dialog {
		width: 100%;
		margin: auto;
	}
</style>

</head>
<body onload="open_news()">

<div class="main-agile">
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="col-md-4 swsl_header_right swsl-r">
				<ul>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:info@chhattisgarhrajya.com">info@chhattisgarhrajya.com</a></li>
				</ul>
			</div>
			<div class="col-md-4 swsl_header_left">
				<div class="swsls-social-icons">
					<a class="facebook" href="https://www.facebook.com/Chhattisgarh-Rajya-388929701920670/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
			<div class="col-md-4 swsl_header_right">
				<div class="agileinfo_search">
					<!--form action="#" method="post"-->
						<!-- input type="text" name="Search" placeholder="Type text here..." required="" -->
						<ul>
							<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><a href="tel:91 98262 37000">Mobile No. :9826237000</a></li>
						</ul>
						<!-- input type="submit" value=" " -->
					<!--/form -->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header-bottom">
		<!-- navigation section -->
		<?php include_once("navMenu.php"); ?>
		<!-- /navigation section -->
	</div>
	<!-- //header -->
</div>
<br/><br/>
<!-- Slider -->
<?php include_once("topslider.php"); ?>
<!-- //Slider -->
	<!--about-->
	<?php include_once("ourMonthlyPatrika.php"); ?>
	<!-- //about -->
<!-- welcome -->
<div class="welcome all_pad wthree">
	<div class="container">
		<!--<h3 class="title">...<span></span></h3> -->
		
		<div class="wel-grids">
			<?php 
			$select = "select *, CURDATE() from advertisement where flag = 2 and CURDATE() >= DATE(start_date) and CURDATE() <= DATE(end_date) order by start_date asc limit 0,4";
				$result = mysqli_query($con, $select);
				$count = "select count(*)as total from advertisement where flag = 2 order by start_date asc";
				$count_result = mysqli_query($con, $count);
				$row_count = mysqli_fetch_assoc($count_result);
				$num = mysqli_num_rows($result);
				// if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					// if ($row['CURDATE()']>=date('Y-m-d', strtotime($row['start_date']))) {?>
						<div class="col-md-6 text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s" style="height: 280px">
							<img src="upload/<?=$row['add_image']?>" alt="" class="col-md-12 img-responsive" style="height:233px; width:850px;">

							<!-- <div class	="wel-img" >
								<i class="fa fa-database" aria-hidden="true"></i>
							</div> -->
							<h4><a href="advertisement.php"><?=$row['add_title']?></a></h4>
						</div>
					<?php 	
					// }
				 } 
				for ($i=$num; $i < 4; $i++) { ?>
					<div class="col-md-6 wel-grid-one bor_one text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
						<div class="wel-img">
							<i class="fa fa-database" aria-hidden="true"></i>
						</div>
						<!-- <button type="submit">Advertise Here</button> -->
						<h4><a href="advertisement.php">Advertise Here</a></h4>
						<p>....</p>
					</div>
				<?php } ?>
			<div class="clearfix"></div>
			
		</div>
	</div>
</div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	 <img style="border-radius:15px; margin-left: 20px;" width="65" height="100" src="images/gurudev.jpeg" alt="Chhattisgarh Rajya" />
          	<img src="images/cglogo.jpg" alt="" style="height: 100px; width: 400px; border-radius:15px;">
	        <!-- <div class="logo"> -->
							<!-- <h1> -->
							   <!--  <a class="navbar-brand" href="index.php">
							   
							    <img style="float:left;border-radius:15px;" width="370" height="100" src="images/cglogo.jpg" alt="Chhattisgarh Rajya" />
							    </a> -->
							<!-- </h1> -->
						<!-- </div>	 -->
        	<!-- <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button> -->

	        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
	          <!-- <span aria-hidden="true">&times;</span> -->
	        </button>
	      </div>
	      <div class="modal-body">
		    <!-- Slider Section Start Here -->
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
		                <div class="wrapper">
		                <!-- News Slider -->
		                    <div class="ticker marg-botm">
		                        <div class="ticker-wrap">
		                            <!-- News Slider Title -->
		                            <!-- <div class="ticker-head up-case backg-colr col-md-2">Breaking News <i class="fa fa-angle-double-right" aria-hidden="true"></i></div> -->
		                            <!-- <div class="tickers col-md-10">
		                                <div id="top-news-slider" class="owl-carousel" style="width: 100%">
		                                    <div class="item col-md-12 col-lg-12 col-sm-12">
		                                        <a href="blog-single.html"> <img src="images/breaking/1.jpg" alt="news image"> <span>Migrants Told: Stay in France </span></a>
		                                    </div> 
		                                    <div class="item col-md-12">
		                                        <a href="blog-single.html"> <img src="images/breaking/1.jpg" alt="news image"> <span>Migrants Told: Stay in France </span></a>
		                                    </div> 
		                                    <div class="item col-md-12">
		                                        <a href="blog-single.html"> <img src="images/breaking/1.jpg" alt="news image"> <span>Migrants Told: Stay in France </span></a>
		                                    </div>                    
		                                    <div class="item col-md-12">
		                                        <a href="blog-single.html"> <img src="images/breaking/1.jpg" alt="news image"> <span>Migrants Told: Stay in France </span></a>
		                                    </div> 
		                               </div>
		                           </div> -->
		                        </div>
		                    </div>  
		                    <!-- End News Slider -->              
		                </div>
		            </div> 


		           
            		 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
		                <div class="slider-area">
		                    <div class="bend niceties preview-2">

		                        <div id="ensign-nivoslider" class="slides" style="height: 760px; width: 750px">
		                        	 <?php 
						            	$select_slider = "SELECT * FROM news where news_cat = 2";
						            	$result_slider = mysqli_query($con, $select_slider); 
						            	$i=0;
						            	while ($row = mysqli_fetch_assoc($result_slider)) {	
					            		?>
			                            <img src="../admin/upload/news/<?=$row['image']?>" alt="" title="#slider-direction-<?=$i?>" style="height: 760px; width: 750px"/>
				                        <?php } ?>
		                        </div>


		                        
		                        <!-- direction 2 -->
		                         <?php 
						            	$select_slider = "SELECT * FROM news where news_cat = 2";
						            	$result_slider = mysqli_query($con, $select_slider); 
						            	$i=0;
						            	while ($row = mysqli_fetch_assoc($result_slider)) {	

				                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
				                    	$result_category = mysqli_query($con, $news_category);
					                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));


					            		?>
				                        <div id="slider-direction-<?=$i?>" class="slider-direction">
				                            <div class="slider-content t-cn s-tb slider-1">
				                                <div class="title-container s-tb-c">
				                                    <div class="slider-botton">
				                                        <ul>
				                                            <li>
				                                                <a class="cat-link" href="category.html"><?=$result1['cat_name']?></a> 
				                                                <span class="date"> 
				                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i><?=$publish_date?>
				                                                </span>
				                                                <!-- <span class="comment"> -->
				                                                    <!-- <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50
				                                                    </a> -->
				                                                <!-- </span> -->
				                                            </li>
				                                        </ul>
				                                    </div>
				                                    <h1 class="title1"><a href="single_post.php?id=<?=$row['nid']?>"><span><?=$row['title']?></a></h1>
				                                    <div class="title2"><?=substr($row['description'], 0, 100)?>... </div>
				                                </div>
				                            </div>
				                        </div>
			                        <?php } ?>
		                    </div>
		                </div>
		            </div>
		            	 


		           
		            <!-- Slider Area End Here-->
		            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
		                <div class="slider-right">
		                    <ul>
		                    	 <?php 
						            	$select_slider = "SELECT * FROM news where news_cat = 3 order by nid desc LIMIT 1";
						            	$result_slider = mysqli_query($con, $select_slider); 
						            	$i=0;
						            	$row = mysqli_fetch_assoc($result_slider);	

				                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
				                    	$result_category = mysqli_query($con, $news_category);
				                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

				                        $row1 = mysqli_fetch_assoc($result_category);
				            		?>
		                        <li style="height:250px; width:400px">
		                            <div class="right-content">
		                                <span class="category"><a class="cat-link" href="blog.html"><?=$row1['cat_name']?></a></span> 
		                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i><?=$publish_date?></span>
		                                <h3><a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a></h3>
		                            </div>
		                            <div class="right-image" height="150px" width="400px"><a href="single_post.php?id=<?=$row['nid']?>"><img src="../admin/upload/news/<?=$row['image']?>?>" alt="sidebar image" height="150px" width="400px"></a></div>
		                        </li>
		                        <?php 
						            	$select_slider = "SELECT * FROM news where news_cat = 4 order by nid desc LIMIT 1";
						            	$result_slider = mysqli_query($con, $select_slider); 
						            	$i=0;
						            	$row = mysqli_fetch_assoc($result_slider);	

				                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
				                    	$result_category = mysqli_query($con, $news_category);
				                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

				                        $row1 = mysqli_fetch_assoc($result_category);
				            		?>
		                        <li style="height:250px; width:400px">
		                            <div class="right-content">
		                                <span class="category"><a class="cat-link" href="blog.html"><?=$row1['cat_name']?></a></span> 
		                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i><?=$publish_date?></span>
		                                <h3><a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a></h3>
		                            </div>
		                            <div class="right-image"><a href="single_post.php?id=<?=$row['nid']?>"><img src="../admin/upload/news/<?=$row['image']?>?>" alt="sidebar image" height="250px" width="400px"></a></div>
		                        </li>
		                        <?php 
						            	$select_slider = "SELECT * FROM news where news_cat = 5 order by nid desc LIMIT 1";
						            	$result_slider = mysqli_query($con, $select_slider); 
						            	$i=0;
						            	$row = mysqli_fetch_assoc($result_slider);	

				                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
				                    	$result_category = mysqli_query($con, $news_category);
				                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

				                        $row1 = mysqli_fetch_assoc($result_category);
				            		?>
		                        <li style="height:250px; width:400px">
		                            <div class="right-content">
		                                <span class="category"><a class="cat-link" href="blog.html"><?=$row1['cat_name']?></a></span> 
		                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i><?=$publish_date?></span> 
		                                <h3><a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a></h3>                  
		                            </div>
		                            <div class="right-image"><a href="single_post.php?id=<?=$row['nid']?>"><img src="../admin/upload/news/<?=$row['image']?>?>" alt="sidebar image" height="250px" width="400px"></a></div>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		    <!-- Slider Section end Here -->
		    <!-- All News Section Start Here -->
		    <div class="all-news-area">
		        <div class="container">
		            <!-- latest news Start Here -->
		            <div class="row">
		                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
		                    
		                    
		                    <!-- Trending news  here-->
		                    <div class="trending-news separator-large">
		                        <div class="row">
		                            <div class="view-area">
		                                <div class="col-sm-8"> 
		                                    <h3 class="title-bg">Trending News</h3>
		                                </div>
		                                <div class="col-sm-4 text-right">
		                                    <a href="news.php">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		                                </div>
		                            </div>    
		                             <?php 
						            	$select_slider = "SELECT * FROM news order by nid desc LIMIT 1";
						            	$result_slider = mysqli_query($con, $select_slider); 
						            	$i=0;
						            	while ($row = mysqli_fetch_assoc($result_slider)) {
					                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
					                    	$result_category = mysqli_query($con, $news_category);
					                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

					                        $row1 = mysqli_fetch_assoc($result_category);
				            		?>
		                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		                                <div class="list-col" style="height: 550px;width: 380px">
		                                    <a href="single_post.php?id=<?=$row['nid']?>"> <img src="../admin/upload/news/<?=$row['image']?>" alt="" title="Trending image"  style="height: 400px;width: 380px"/></a>
		                                    <div class="dsc">
		                                        <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=$publish_date?></span> <!-- <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span> -->
		                                        <h3><a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a></h3>
		                                        <!-- <p><?=substr($row['description'], 0,100) ?>...</p> -->
		                                    </div>
		                                </div>
		                            </div>

		                            <?php }	?>
		                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		                                <ul class="news-post"> 
                                    	 <?php 
							            	$select_slider = "SELECT * FROM news order by nid desc LIMIT 1,4";
							            	$result_slider = mysqli_query($con, $select_slider); 
							            	$i=0;
							            	while ($row = mysqli_fetch_assoc($result_slider)) {
						                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
						                    	$result_category = mysqli_query($con, $news_category);
						                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

						                        $row1 = mysqli_fetch_assoc($result_category);
							            		?>                       
			                                    <li>
			                                        <div class="row">
			                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
			                                                <div class="item-post">
			                                                    <div class="row">
			                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
			                                                            <a href="single_post.php?id=<?=$row['nid']?>"> <img src="../admin/upload/news/<?=$row['image']?>" alt="" title="Trending image" style="height: 120px;width: 120px"></a>
			                                                        </div>
			                                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
			                                                            <h4><a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a></h4>
			                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=$publish_date?></span>
			                                                        </div>
			                                                    </div>
			                                                </div>
			                                            </div>
			                                        </div>
			                                    </li>
			                                <?php } ?>
		                                   
		                                </ul>
		                            </div>
		                        </div>
		                    </div>


		                    <!--Start what’s hot now -->
		                    <div class="hot-news">
		                        <div class="row">
		                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                                <div class="view-area">
		                                    <div class="row">
		                                        <div class="col-sm-8"> 
		                                            <h3 class="title-bg">What’s hot now</h3>
		                                        </div>
		                                        <div class="col-sm-4 text-right">
		                                            <a href="news.php">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <!-- <div class="featured">
		                                    <div class="blog-img">
		                                        <a href="single_post.php?id=<?=$row['nid']?>"><img src="../admin/upload/news/<?=$row['image']?>" alt="" title="News image" /></a>
		                                    </div>
		                                    <div class="blog-content">
		                                        <a href="category-sports.html" class="cat-link">Sports</a><span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017</span>
		                                        <h4><a href="#">Car racer gives herself a mid-Event haicut</a></h4>
		                                    </div>
		                                </div> -->
		                                <ul class="news-post news-feature-mb">
											<?php 
							            	$select_slider = "SELECT * FROM news order by nid asc LIMIT 1,4";
							            	$result_slider = mysqli_query($con, $select_slider); 
							            	$i=0;
							            	while ($row = mysqli_fetch_assoc($result_slider)) {
						                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
						                    	$result_category = mysqli_query($con, $news_category);
						                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

						                        $row1 = mysqli_fetch_assoc($result_category);
							            		?>  

		                                    <li>
		                                        <div class="row">
		                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4">
		                                                <a href="single_post.php?id=<?=$row['nid']?>"><img src="../admin/upload/news/<?=$row['image']?>" alt="News image" style="height: 250px; width: 350px"/></a>
		                                            </div>
		                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 content">
		                                                <h4><a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a></h4>
		                                                <span class="author"><a href="single_post.php?id=<?=$row['nid']?>"> <?=$publish_date?></span>
		                                               <h4><a href="single_post.php?id=<?=$row['nid']?>"><?=substr($row['description'], 0,150) ?>....</a></h4>
		                                                
		                                            </div>
		                                        </div>
		                                    </li>
		                                    <?php } ?>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>
		                    <!-- End what’s hot now -->
		                </div>
		                <!--Sidebar Start Here -->
		                <br>
		                <br>
		                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
		                   
		                    <!--popular Post Start Here -->
		                    <div class="sidebar popular">
		                        <h3 class="title-bg">Popular Now</h3>
		                        <ul>
		                        	<?php 
							            	$select_slider = "SELECT * FROM news group by news_cat order by nid asc LIMIT 1,4";
							            	$result_slider = mysqli_query($con, $select_slider); 
							            	$i=0;
							            	while ($row = mysqli_fetch_assoc($result_slider)) {
						                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
						                    	$result_category = mysqli_query($con, $news_category);
						                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

						                        $row1 = mysqli_fetch_assoc($result_category);
							            		?>  
					                            <li>
					                                <a href="single_post.php?id=<?=$row['nid']?>" class="category-btn hvr-bounce-to-right"><?=$row1['cat_name']?></a>
					                                <div class="post-image"><img src="../admin/upload/news/<?=$row['image']?>" alt="News image" style="height: 250px; width: 400px"></div>
					                                <div class="content">
					                                    <h4>
					                                        <a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a>
					                                    </h4>
					                                    <span class="date"> 
					                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=$publish_date?>
					                                    </span> 
					                                   
					                                </div>
					                            </li>
		                        <?php } ?>
		                        </ul> 
		                    </div>
		                     

		                    <div class="hot-news popular-related">
		                        <ul class="news-post">
		                        	<?php 
						            	$select_slider = "SELECT * FROM news group by news_cat order by nid asc LIMIT 1,4";
						            	$result_slider = mysqli_query($con, $select_slider); 
						            	$i=0;
						            	while ($row = mysqli_fetch_assoc($result_slider)) {
					                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
					                    	$result_category = mysqli_query($con, $news_category);
					                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

					                        $row1 = mysqli_fetch_assoc($result_category);
						            		?>  
				                            <li>
				                                <div class="row">
				                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
				                                        <div class="item-post">
				                                            <div class="row">
				                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3 paddimg-right-none">
				                                                    <img src="../admin/upload/news/<?=$row['image']?>" alt="" title="News image" style="height: 150px; width: 150px;">
				                                                </div>
				                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
				                                                    <h4><a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a></h4>
				                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=$publish_date?></span>                                                
				                                                </div>
				                                            </div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </li>
			                        <?php } ?>
		                        </ul>
		                    </div> 
								
							<br>
							<br>
		                    <div class="hot-news">
						        <div class="container">
						            <div class="row">
						                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						                    <div class="row">
						                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						                                <div id="news-Carousel" class="carousel carousel-news slide" data-ride="carousel">
						                                    <!-- Wrapper for slides -->
						                                    <!-- Left and right controls -->
						                                    <?php 
						                                    	$news_category = "SELECT * FROM news_category WHERE cat_id = 3";
												                    	$result_category = mysqli_query($con, $news_category);
												                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

												                        $row1 = mysqli_fetch_assoc($result_category);

						                                     ?>
						                                    <div class="next-prev-top">
						                                        <div class="row">
						                                            <div class="col-sm-9 col-xs-9">
						                                                <div class="view-area">
						                                                    <h3 class="title-bg"><?=$row1['cat_name']?></h3>
						                                                </div>
						                                            </div>
						                                            <div class="col-sm-3 next-prev col-xs-3">
						                                                <a class="left news-control" href="#news-Carousel" data-slide="prev">
						                                                    <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
						                                                </a>
						                                                <a class="right news-control" href="#news-Carousel" data-slide="next">
						                                                    <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
						                                                </a>
						                                            </div>
						                                        </div>    
						                                    </div>
						                                    <div class="carousel-inner">



						                                    	<?php 
													            	$select_slider = "SELECT * FROM news where news_cat = '".$row1['news_cat']."'group by news_cat order by nid desc LIMIT 1";
													            	$result_slider = mysqli_query($con, $select_slider); 
													            	$i=0;
													            	while ($row = mysqli_fetch_assoc($result_slider)) {
												                    	$news_category = "SELECT * FROM news_category WHERE cat_id = '".$row['news_cat']."'";
												                    	$result_category = mysqli_query($con, $news_category);
												                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

												                        $row1 = mysqli_fetch_assoc($result_category);
													            		?>  
						                                        <div class="item active">
						                                            <a href="single_post.php?id=<?=$row['nid']?>"><img src="../admin/upload/news/<?=$row['image']?>" alt="" title="#slider-direction-1" style="height: 350px; width: 370px;"/></a>
						                                            <div class="dsc">
						                                                <span class="date">
						                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
						                                                    <?=$publish_date?>
						                                                </span>
						                                               
						                                                <h4><a href="single_post.php?id=<?=$row['nid']?>"> <?=$row['title']?></a></h4>
						                                                
						                                            </div>
						                                        </div>
						                                    <?php } ?>
						                                        
						                                       <?php 
													            	$select_slider = "SELECT * FROM news where news_cat = '".$row1['news_cat']."'  order by nid desc LIMIT 2,3";
													            	$result_slider = mysqli_query($con, $select_slider); 
													            	$i=0;
													            	while ($row = mysqli_fetch_assoc($result_slider)) {
												                    	
												                        $publish_date = date('d-m-Y', strtotime($row['publish_date']));

												                        $row1 = mysqli_fetch_assoc($result_category);
													            		?>   
						                                        <div class="item">
						                                            <a href="single_post.php?id=<?=$row['nid']?>"><img src="../admin/upload/news/<?=$row['image']?>" alt="" title="#slider-direction-1" style="height: 350px; width: 370px;"/></a>
						                                            <div class="dsc">
						                                                <span class="date">
						                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=$publish_date?>
						                                                </span>
						                                                
						                                                <h4><a href="single_post.php?id=<?=$row['nid']?>"><?=$row['title']?></a></h4>
						                                                
						                                            </div>
						                                        </div>
						                                    <?php } ?>
						                                    </div>
						                                </div>
						                            </div>
						                        </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>                             
		                </div>
		            </div>
		        </div>
		    </div>
		  
		    <!-- Hot News Start Here -->
		    
		</div>
		<div class="modal-footer">
        	<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	    </div>
	</div>
</div>



<!-- //welcome -->
<!--team-->

<!--//team-->

<!-- subscribe section --> 
<?php include_once("slideNews.php"); ?>
<!-- //subscribe section -->
<!-- news -->
<?php include_once("recent_news.php"); ?>
<!-- //news -->
<!-- Footer -->
<?php include_once("footer.php"); ?>
<!-- //Footer -->
<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	
<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager:false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
<!-- //Baneer-js --> 
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- //js-scripts -->
<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  

	<script>
		function open_news() {
			$("#myModal").modal('show');
		}
	</script>

	 <!-- jquery-ui js -->
    <!-- <script src="js_news/jquery-ui.min.js"></script> -->
    <!-- bootstrap js -->
    <!-- <script src="js_news/bootstrap.min.js"></script> -->
    <!-- meanmenu js -->
    <!-- <script src="js_news/jquery.meanmenu.js"></script> -->
    <!-- wow js -->
    <script src="js_news/wow.min.js"></script>
	<!-- owl.carousel js -->
    <script src="js_news/owl.carousel.min.js"></script>
    <!-- magnific-popup js -->
    <script src="js_news/jquery.magnific-popup.js"></script>
	
    <!-- jquery.counterup js -->
    <script src="js_news/jquery.counterup.min.js"></script>
    <script src="js_news/waypoints.min.js"></script>
    <!-- jquery light box -->
    <script src="js_news/lightbox.min.js"></script>
    <!-- Nivo slider js -->
    <script src="inc_news/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="inc_news/custom-slider/home.js" type="text/javascript"></script>
    <!-- main js -->
    <script src="js_news/main.js"></script>

</body>
</html>












