<div id="slider_wrapper">
<img src="images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
<div class="page_title">Destinations</div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="/webapplication/index.php/Users/home/">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Destinations</div>	
</div>
</div>
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span8">
	
<h1>Our Destinations</h1>
<form method="post">
<?php foreach($result as $row): ?>
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="/webapplication/public/des_img/<?php echo $row->des_pic ?>" alt="" style="width:210px;height:133px;"></figure>
		<div class="caption">
			<p>
				<strong><?php echo $row->des_name ?></strong>
			</p>
			<div class="cont">
			<p>
				<?php echo $row->des_detail ?> 
			</p>
			</div>
			<p>
				<strong>Price: <?php echo $row->des_price ?></strong>
			</p>			
			<a href="/webapplication/index.php/Destinations/destination_detail?id=<?php echo($row->des_id)?>" name="" id="" method="post" class="button1" value="">read more</a>
		</div>
	</div>
</div>
<?php endforeach; ?>
</form>
</div>	
</div>	
</div>

<div id="content2">
<div class="container">
<div class="row">
<div class="span12">
	
<h2>Important Information</h2>

<div class="row">
<div class="span6">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="http://via.placeholder.com/210x133" alt=""></figure>
		<div class="caption">
			<p>
				<strong>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor </strong>
			</p>
			<p>
				abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. Suspendisse enim arcu, convallis non, cursus sed, dignissim et, est. Aenean semper aliquet libero. In ante velit,
			</p>			
			<a href="#" class="button1">read more</a>
		</div>
	</div>
</div>	
</div>
<div class="span6">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="http://via.placeholder.com/210x133" alt=""></figure>
		<div class="caption">
			<p>
				<strong>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor </strong>
			</p>
			<p>
				abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. Suspendisse enim arcu, convallis non, cursus sed, dignissim et, est. Aenean semper aliquet libero. In ante velit,
			</p>			
			<a href="#" class="button1">read more</a>
		</div>
	</div>
</div>	
</div>	
</div>

</div>	
</div>	
</div>	
</div>
