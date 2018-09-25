<div id="slider_wrapper">
<div class="img"><img src="images/slide_page1.jpg" alt=""></div>	
<img src="images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
	<div class="page_title"></div>
	<div class="breadcrumbs1">
		<div class="breadcrumbs1_inner"><a href="/webapplication/index.php/Users/home/">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Service package detail</div>	
	</div>
</div>
</div>
<form role="form" method="get">
<div id="content">
<div class="container">
<div class="span12">

<div class="row">
	<?php foreach ($result as $row): ?>
	<div class="span5">
		<figure class="img-polaroid"><img src="/webapplication/public/serv_img/<?php echo $row->pkg_pic ?>" alt=""></figure>
	</div>
	<div class="span7">
		<strong class="txt1"><?php echo $row->pkg_name ?></strong>
		<p>
			<?php echo $row->pkg_desc ?> 
		</p>
	</div>
	<?php endforeach; ?>
</div>

</div>
</div>	
</div>
</form>
