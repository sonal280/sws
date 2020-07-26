<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<?php 
            	$select = "SELECT * FROM topslider";
            	$result = mysqli_query($con, $select);
            	$i=1;
            	while ($row = mysqli_fetch_assoc($result)) {
            ?>
			
				<li>
					<div class="swslayouts-banner-top swslayouts-banner-top1" style="background: url('../admin/upload/topSlider/<?=$row['image']?>'); background-repeat: no-repeat; background-size: cover  ">
						<div class="container">
							<div class="slider-info">
								<h3><?=$row['title']?></h3>
								<h4>
								   <?=$row['description']?>  
								</h4>
								
							</div>
						</div>
					</div>
				</li>
			<?php } ?>
			<!-- <li>
				<div class="swslayouts-banner-top">
					<div class="container">
						<div class="slider-info">
							<h3>  </h3>
							<h4>
 
							    
							    </h4>
							
						</div>
					</div>
				</div>
			</li> -->
			<!-- <li>
				<div class="swslayouts-banner-top swslayouts-banner-top2">
					<div class="container">
						<div class="slider-info">
							<h3></h3>
							<h4>
							    
							     </h4>
							
						</div>
					</div>
				</div>
			</li> -->
		</ul>
	</div>
	<div class="clearfix"></div>
</div>


<!-- <div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="swslayouts-banner-top swslayouts-banner-top1">
					<div class="container">
						<div class="slider-info">
							<h3>विश्वसनीय की जगह ‘गढ़बो नवा छत्तीसगढ़’ का दिया नारा</h3>
							<h4>
							   छत्तीसगढ़ की सत्ता हासिल करने के बाद सूबे की भूपेश बघेल सरकार ने राज्य का स्लोगन बदलने का बड़ा फैसला लिया है. राज्य सरकार ने छत्तीसगढ़ के तकरीबन 10 साल पुराने स्लोगन को बदल दिया है. विश्वसनीय छत्तीसगढ़ स्लोगन को बदलकर 'गढ़बो नवा छत्तीसगढ़' कर दिया गया है. मालूम हो कि कांग्रेस ने अपने घोषणा पत्र में गढ़बो नवा छत्तीसगढ़ शब्द का इस्तेमाल जिसे अब राज्य का नया स्लोगन बना दिया गया है.   
							</h4>
							
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="swslayouts-banner-top">
					<div class="container">
						<div class="slider-info">
							<h3>  </h3>
							<h4>
 
							    
							    </h4>
							
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="swslayouts-banner-top swslayouts-banner-top2">
					<div class="container">
						<div class="slider-info">
							<h3></h3>
							<h4>
							    
							     </h4>
							
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div> -->
