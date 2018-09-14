<div id="slider_wrapper">
<img src="images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="/webapplication/index.php/Users/home/">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Services</div>	
</div>
</div>
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span8">

<h1>Package</h1>

<div class="row">
<?php foreach($result as $row) : ?>
<div class="span4">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="/webapplication/public/serv_img/<?php echo $row->pkg_pic ?>" alt="" style="width: 100%; height: 133px;""></figure>
		<div class="caption">
			<p>
				<strong><?php echo $row->pkg_name ?></strong>
			</p>
			<div class="cont">
			<p>
				<?php echo $row->pkg_desc ?> 
			</p>
			</div>		
			<a href="/webapplication/index.php/Services/servicePackageDetail?id=<?php echo($row->pkg_id)?>" name="" id="" method="post" class="button1" value="">read more</a>
		</div>
	</div>
</div>	
</div>
<?php endforeach; ?>	

</div>
</div>
<!--<div class="span4">
	
<h2>Best Services</h2>

<div class="thumb4">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="http://via.placeholder.com/358x198" alt=""></figure>
		<div class="caption">
			<p>
				<strong>Lorem ipsum dolor sit amet conse ctetur abore et dolore magna. Ipsum dolor sit amet conse </strong>
			</p>
			<p>
				ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  
			</p>			
			<a href="#" class="button1">read more</a>
		</div>
	</div>
</div>
</div>-->

</div>	
</div>	
</div>

<!--<div id="content2">
<div class="container">
<div class="row">
<div class="span8">
	
<h2>Services List</h2>

<div class="row">
<div class="span4">
<ul class="ul1">
<?php foreach($result as $row) : ?>
  <li><a href="#"><?php echo $row->serv_type ?></a></li>	
<?php endforeach; ?>	            		      	      			      
</ul>	
</div>	
</div>



</div>	
</div>	
</div>	
</div>-->
