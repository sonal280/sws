
<?php include '../admin/includes/db.php'; 

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


<link rel="stylesheet" type="text/css" href="plugins/zebra-tooltip/zebra_tooltips.min.css">

<!-- Owl Carousel plugin css file. only used pages -->
<link rel="stylesheet" type="text/css" href="plugins/owl-carousel/assets/owl.carousel.min.css">

<!-- Ideabox main theme css file. you have to add all pages -->
<link rel="stylesheet" type="text/css" href="css/main-style.css">

<!-- Ideabox responsive css file -->
<link rel="stylesheet" type="text/css" href="css/responsive-style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">

<!-- pagination -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-151366195-1');
</script>

<script data-ad-client="ca-pub-6627393698013162" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
	
input,
select,
button {
  font-family: inherit;
  font-size: inherit;
  /* padding-top: 8px; */
}
select {
  padding: 8px;
}

.monthly-wrp {
  padding: 1em;
  top: 6px;
  z-index: 1000;
  border-radius: 3px;
  background-color: #2C3E50;
}

.monthly-wrp:before {
  content: "";
  border-bottom: 6px solid #2C3E50;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  position: absolute;
  top: -6px;
  left: 6px;
  z-index: 1002;
}


.monthly-wrp .years {
  margin-bottom: 0.8em;
  text-align: center;
}

.monthly-wrp .years select {
  border: 0;
  border-radius: 3px;
  width: 100%;
}

.monthly-wrp .years select:focus {
  outline: none;
}

.monthly-wrp table {
  border-collapse: collapse;
  table-layout: fixed;
}

.monthly-wrp td {
  padding: 1px;
}

.monthly-wrp table button {
  width: 100%;
  border: none;
  background-color: #1ABC9C;
  color: #FFFFFF;
  font-size: 14px;
  padding: 0.6em;
  cursor: pointer;
  border-radius: 3px;
}

.monthly-wrp table button:hover {
  background-color: #16A085;
}

.monthly-wrp table button:focus {
  outline: none;
}

</style>
</head>
<body>

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
<br>
<div class="news_banner">
</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="main-container">

		<section class="main-content extra-pages">
			<div class="main-content-wrapper add-to-margin">
				<div class="content-body">
					<?php 

						$month = "";
						if (isset($_POST['search'])) {
							$month = "WHERE DATE_FORMAT(`publish_date`,'%M %Y') LIKE '%".$_POST['search']."%'";
						}
						else{
							// $month = "WHERE publish_date !='' ";
						}
					   $limit = 5;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  
						
					    $search_query = "select * from news ".$month."order by nid desc LIMIT $start_from, $limit";
						$result = mysqli_query($con, $search_query);
					 ?>
				
					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-content">
							<div class="sws-agileits-heading">
								<h3 class="title">News</h3> 
								<br>
							</div>
							<form action="" method="post">
								<div class="row">
									<div class="col-md-2">
										<!-- <select name="search" id="" class="form-control">
											<?php if (isset($_POST['search']) && ($_POST['search'] == '01')) {?>
											<option value="01" selected>January</option>
											<?php } else{?> 
											<option value="01">January</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '02')) {?>
											<option value="02" selected>February</option>
											<?php } else{?> 
											<option value="02">February</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '03')) {?>
											<option value="03" selected>March</option>
											<?php } else{?> 
											<option value="03">March</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '04')) {?>
											<option value="04" selected>April</option>
											<?php } else{?> 
											<option value="04">April</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '05')) {?>
											<option value="05" selected>May</option>
											<?php } else{?> 
											<option value="05">May</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '06')) {?>
											<option value="06" selected>June</option>
											<?php } else{?> 
											<option value="06">June</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '07')) {?>
											<option value="07" selected>July</option>
											<?php } else{?> 
											<option value="07">July</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '08')) {?>
											<option value="08" selected>August</option>
											<?php } else{?> 
											<option value="08">August</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '09')) {?>
											<option value="09" selected>September</option>
											<?php } else{?> 
											<option value="09">September</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '10')) {?>
											<option value="10" selected>October</option>
											<?php } else{?> 
											<option value="10">October</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '11')) {?>
											<option value="11" selected>November</option>
											<?php } else{?> 
											<option value="11">November</option> <?php } ?>

											<?php if (isset($_POST['search']) && ($_POST['search'] == '12')) {?>
											<option value="12" selected>December</option>
											<?php } else{?> 
											<option value="12">December</option> <?php } ?>
					
										</select> -->
										<p><input type="text" id="selection" value="" name="search" class="form-control col-md-2" placeholder="select month"></p>

									</div>
									<div class="col-md-2">
										<input type="submit" name="submit" class="form-control btn-success" >
									</div>
								</div>
							</form>
							<br>
							<div class="article-inner">
								<div class="author-list">
								<?php 
									if (mysqli_num_rows($result)<0) {?>
										<div class="item g1">
											<h3>No Magazine Available</h3>
										</div>
									<?php 
									}
									else{
										while ($row = mysqli_fetch_assoc($result))
										 { ?>
											
											<div class="author-item">										
												<div class="timeline-post-image">
												<a href="#">
													<img src="../admin/upload/news/<?=$row['image']?>" width="360" height="250px">
												</a>
											</div>
												<div class="timeline-post-content">
												<br>
													<a href="single_post.php?id=<?=$row['nid']?>" class="author-name"><h4><?=$row['title']?></h4></a>

													<div class="author-description">
														<?=substr($row['description'], 0, 250);?>   <b>. . .</b> <a href="single_post.php?id=<?=$row['nid']?>">Read More</a>
													</div>

													<div class="author-extras">
														<span class="post-count"><?=date('d-M-Y h:i A', strtotime($row['created_at']))?></span>&nbsp;&nbsp;&nbsp;
														
													</div>
												</div>
											</div>

										<?php  
										}
									}
								 ?>
									<!-- author item start -->
								</div>
							</div>

							<!--this is important for the left ad box or share box fixer -->
							<div id="endOfTheArticle"></div>

						</div>
					</article>
					<!-- article body end -->


				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Editor's Picks</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-boxed-post">
								<ul>

								<?php 
			                    $editors_post = "SELECT * FROM news ORDER BY nid DESC LIMIT 0,4";
			                    $editors_result = mysqli_query($con, $editors_post);
			                    $i=1;
			                     while($editors_row = mysqli_fetch_assoc($editors_result))
			                    { ?>
									<li class="active" onclick="window.location='single_post.php?id=<?=$editors_row['nid']?>'">
										<a href="#" style="background-image: url(../admin/upload/news/<?=$editors_row['image']?>);">
											<div class="box-wrapper">
												<div class="box-left">
													<span><?=$i?></span>
												</div>
												<div class="box-right">
													<h3 class="p-title"><?=$editors_row['title']?></h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<?php $i++; }
									 ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
<!-- 	<div class="pagination">
	  <a href="#">&laquo;</a>
		<?php 
            $editors_post = "";
            $editors_result = mysqli_query($con, $editors_post);?>
	  <a href="#">1</a>
	  <a class="active" href="#">2</a>
	  <a href="#">3</a>
	  <a href="#">4</a>
	  <a href="#">5</a>
	  <a href="#">6</a>
	  <a href="#">&raquo;</a>
	</div> -->
	<?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM news";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM news LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($res_data)){
        	
        }
       
    ?>
   <!-- <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul> -->
	
	<?php
			// include('db.php'); 
			$limit = 2;
			$sql = "SELECT COUNT(nid) as total FROM news";  
			$rs_result = mysqli_query($con, $sql);  
			$total_records = mysqli_fetch_row($rs_result)[0]; 

			$total_pages = ceil($total_records / $limit);
	
		?>
		<div align="center">
		<ul class='pagination text-center' id="pagination">
		
		<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
					if($i == 1):?>
		            <li class='active'  id="<?php echo $i;?>"><a href='news.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
					<?php else:?>
					<li id="<?php echo $i;?>"><a href='news.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
				<?php endif;?>			
		<?php endfor;endif;?>  
		
		</div>


	</main>

	<!-- Register popup html source start -->
	
	<!-- Login popup html source end -->

	<!-- Newsletter popup html source start -->
	
	<!-- Newsletter popup html source end -->

	
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
		$( "#datepicker-inline" ).datepicker({
			inline: true
		});
		$( "#datepicker" ).datepicker();
	</script>
	<script type="text/javascript">
		function padToTwo(number) {
  if (number <= 9999) {
    number = ("0" + number).slice(-2);
  }
  return number;
}

(function($) {
  $.fn.monthly = function(options) {
    var months = options.months || [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
      ],
      Monthly = function(el) {
        this._el = $(el);
        this._init();
        this._render();
        this._renderYears();
        this._renderMonths();
        this._bind();
      };

    Monthly.prototype = {
      _init: function() {
        this._el.html(months[0] + " " + options.years[0]);
      },

      _render: function() {
        var linkPosition = this._el.offset(),
          cssOptions = {
            display: "none",
            position: "absolute",
            top:
              linkPosition.top + this._el.height() + (options.topOffset || 0),
            left: linkPosition.left
          };
        this._container = $('<div class="monthly-wrp">')
          .css(cssOptions)
          .appendTo($("body"));
      },

      _bind: function() {
        var self = this;
        this._el.on("click", $.proxy(this._show, this));
        $(document).on("click", $.proxy(this._hide, this));
        this._yearsSelect.on("click", function(e) {
          e.stopPropagation();
        });
        this._container.on("click", "button", $.proxy(this._selectMonth, this));
      },

      _show: function(e) {
        e.preventDefault();
        e.stopPropagation();
        this._container.css("display", "inline-block");
      },

      _hide: function() {
        this._container.css("display", "none");
      },

      _selectMonth: function(e) {
        var monthIndex = $(e.target).data("value"),
          month = months[monthIndex],
          year = this._yearsSelect.val();
        this._el.html(month + " " + year);
        if (options.onMonthSelect) {
          options.onMonthSelect(monthIndex, month, year);
        }
      },

      _renderYears: function() {
        var markup = $.map(options.years, function(year) {
          return "<option>" + year + "</option>";
        });
        var yearsWrap = $('<div class="years">').appendTo(this._container);
        this._yearsSelect = $("<select>")
          .html(markup.join(""))
          .appendTo(yearsWrap);
      },

      _renderMonths: function() {
        var markup = ["<table>", "<tr>"];
        $.each(months, function(i, month) {
          if (i > 0 && i % 4 === 0) {
            markup.push("</tr>");
            markup.push("<tr>");
          }
          markup.push(
            '<td><button data-value="' + i + '">' + month + "</button></td>"
          );
        });
        markup.push("</tr>");
        markup.push("</table>");
        this._container.append(markup.join(""));
      }
    };

    return this.each(function() {
      return new Monthly(this);
    });
  };
})(jQuery);

$(function() {
  $("#selection").monthly({
    years: [2018, 2019, 2020],
    topOffset: 28,
    onMonthSelect: function(mi, m, y) {
      mi = padToTwo(mi);
      $("#selection").val(m + " " + y);
      $("#monthly").val(y + "-" + mi);
    }
  });
});

	</script>

	 <script>
		jQuery(document).ready(function() {
		jQuery("#target-content").load("pagination.php?page=1");
		    jQuery("#pagination li").live('click',function(e){
			e.preventDefault();
				jQuery("#target-content").html('loading...');
				jQuery("#pagination li").removeClass('active');
				jQuery(this).addClass('active');
		        var pageNum = this.id;
		        jQuery("#target-content").load("pagination.php?page=" + pageNum);
		    });
		    });
		</script>
</body>

</html>