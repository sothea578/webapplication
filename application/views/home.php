
<div id="slider_wrapper">
	<div id="slider" class="clearfix">
		<div id="camera_wrap">
			<div data-src="/webapplication/assets/bootstraps/images/pp_banner.png" height="750" width="1600">
				<div class="camera_caption fadeIn">
					<div class="txt1">Phnum Penh</div>			
					<div class="txt2">Capital city of Cambodia</div>
				</div>     
			</div>

			<div data-src="/webapplication/assets/bootstraps/images/angkor_banner.png" height="750" width="1600">
				<div class="camera_caption fadeIn">
					<div class="txt1">Siem Reap</div>			
					<div class="txt2">Back to ancient time of Cambodia</div>
				</div>     
			</div>
			
			<div data-src="/webapplication/assets/bootstraps/images/shn_banner.png" height="750" width="1600">
				<div class="camera_caption fadeIn">
					<div class="txt1">Shihanouk Ville</div>			
					<div class="txt2">fantastic beach</div>
				</div>     
			</div>
		</div>
	</div>
</div>

<div class="slogan1">
<div class="container">
<div class="row">
<div class="span12">
<div class="slogan1_inner">
<div class="txt1">Start Your Trip With Us</div>	
<div class="txt2">Popular destinations and greate customer service</div>
<div class="txt3">Our global teams of experts handpick and curate the best experiences geared towards intrepid travelers as well as those vacationing for the first time. We offer awesome deals from trusted local tour operators and travel suppliers around the globe, and you can book with ease anywhere, anytime - from your laptop, phone, or our free mobile app. </div>
<div class="txt4 clearfix"><a href="/webapplication/index.php/Destinations/showDestination/" class="find1">Find the Tour</a><a href="/webapplication/index.php/Contacts/contact_us" class="request1">Contact Us</a></div>
</div>	
</div>	
</div>	
</div>	
</div>

<div id="slider3_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div id="slider3">
<div class="slider3-title">Popular Destinations Picture</div>	
<a class="prev3" href="#"></a>
<a class="next3" href="#"></a>	
<div class="carousel-box row">
	<div class="inner span12">			
		<div class="carousel main">
			<ul>
				<?php foreach ($result as $row) : ?>
				<li>
					<div class="thumb-carousel banner1">
						<div class="thumbnail clearfix">
							<a>
								<figure>
									<img src="/webapplication/public/gal_img/<?php echo $row->picture; ?>" alt="" style="width: 270px; height: 220px;">
									<em></em>
								</figure>
								<div class="caption">
									<?php echo $row->gal_name; ?>
								</div>								
							</a>								
						</div>
					</div>
				</li>
				<?php endforeach; ?>	
			</ul>
		</div>
	</div>
</div>
</div>	
</div>	
</div>	
</div>	
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h1>Welcome to traveler</h1>

<h3>MY TRAVEL</h3>

<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="/webapplication/assets/bootstraps/images/logo.png" style="width: 208px; height: 134px;" alt=""></figure>
		<div class="caption">
			<p>
				My Travel is the leading company in the travel industry in Cambodia. This privately-owned company was founded in 1996 by Mrs. NGO Kim. Through the years, the company has provided excellent travel and tours services for the local and international market. RTR Tours primarily promotes the natural beauty, culture and tradition of Cambodia. From its humble beginning, it now explores the world, offering more adventures and places to see and experience in Asia, Europe and other continents of the world. RTR Tours has grown to be one of the most esteemed travel companies in Cambodia. Internationally recognized and accredited as a full service travel company engaged in all aspects of the tourism industry. The company is continuously extending its horizon by affiliating with some of the world's best travel companies to give its clients superb and authentic travel experiences.  
			</p>
			<!--<a href="#" class="button1">read more</a>-->
		</div>
	</div>
</div>

</div>
<div class="span3">
	
<h2>Services</h2>

<ul class="ul1">
  	<?php foreach($service as $r) : ?>
  		<li><a href="#"><?php echo $r->serv_type ?></a></li>	
	<?php endforeach; ?>		            		      	      			      
</ul>

</div>	
</div>	
</div>	
</div>
