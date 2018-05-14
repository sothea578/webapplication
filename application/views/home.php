
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
									<img src="/webapplication/public/gal_img/<?php echo $row->picture; ?>" alt="">
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

<h3>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</h3>

<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="http://via.placeholder.com/208x134" alt=""></figure>
		<div class="caption">
			<p>
				Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. 
			</p>
			<a href="#" class="button1">read more</a>
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
