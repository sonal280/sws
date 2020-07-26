
<?php 
include('db.php');
$select = "select count(*) as numberOfAds from advertisement where flag = 1";
$result = mysqli_query($con, $select);
$numberOfAds = mysqli_fetch_assoc($result);
 ?>

<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image float-left">
          <img src="images/user2-160x160.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="info float-left">
          <p style="color: black">
            <?php
            
            echo $_SESSION['user_name']; 
           ?>
             
           </p>
          <a href="#" style="color: black"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
		  <!-- search form -->
      
      <!-- /.search form -->
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "home.php" ? "active" : "" ); ?>">
          <a href="./home.php" >
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>		
        </li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "topSlider.php" || basename($_SERVER['PHP_SELF']) == "new_topSlider.php" ? "active" : "");?>">
          <a href="topSlider/topSlider.php">
            <i class="fa fa-th"></i>
            <span>TopSlider</span>
          </a>
        </li>
		  
      
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "magazine.php" || basename($_SERVER['PHP_SELF']) == "new_magazine.php" ? "active" :"" ); ?>">
          <a href="magazine/magazine.php">
            <i class="fa fa-th"></i>
            <span>Magazine</span>
          </a>
        </li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "advertisement_request.php"  ? "active" :"" ); ?>">
          <a href="advertisement/advertisement_request.php">
            <i class="fa fa-th"></i>
            <span>Advertisement Request </span><span style="padding-left: 6px;padding-right: 6px; padding-top: 1px;padding-bottom: 1px; border-radius: 50%; background-color: red; color: white"><?=$numberOfAds['numberOfAds']?></span>
          </a>
        </li>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "news_category.php"  ? "active" :"" ); ?>">
          <a href="news_category/news_category.php">
            <i class="fa fa-th"></i>
            <span>News Category</span>
          </a>
        </li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "news"  ? "active" :"" ); ?>">
          <a href="news/news.php">
            <i class="fa fa-th"></i>
            <span>News</span>
          </a>
        </li>



        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "gallery.php"  ? "active" :"" ); ?>">
          <a href="gallery/gallery.php">
            <i class="fa fa-th"></i>
            <span>Gallery</span>
          </a>
        </li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "contact.php"  ? "active" :"" ); ?>">
          <a href="contact/contact.php">
            <i class="fa fa-th"></i>
            <span>Contact</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
		<!-- item-->

	</div>
  </aside>




