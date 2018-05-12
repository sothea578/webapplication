<div id="slider_wrapper">
<div class="img"><img src="images/slide_page1.jpg" alt=""></div>	
<img src="images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
	<div class="page_title"></div>
	<div class="breadcrumbs1">
		<div class="breadcrumbs1_inner"><a href="index.html">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Destination detail</div>	
	</div>
</div>
</div>
<form role="form" method="get">
<div id="content">
<div class="container">
<div class="row">
<div class="span12">
	
<h1></h1>

<div class="row">
	<?php foreach ($result as $row): ?>
	<div class="span5">
		<figure class="img-polaroid"><img src="/webapplication/public/des_img/<?php echo $row->des_pic ?>" alt="" style="width:500px; height:297px;"></figure>
	</div>
	<div class="span7">
		<strong class="txt1"><?php echo $row->des_name ?></strong>
		<p>
			<?php echo $row->des_detail ?> 
		</p>
		<strong>Price: 
			<?php echo $row->des_price ?>
		</strong>
		</br>
		<?php if ($this->session->userdata('user_id')) { ?>
		<a href="/webapplication/index.php/BookingTour/show_booktour_info?id_des=<?php echo $row->des_id ?>&id_cat=<?php echo $row->id_cat ?>" class="btn btn-info">Book this tour</a>
		<?php } else { ?>
		<a class="btn btn-info" href="/webapplication/index.php/Users/register_login">Book this tour</a>
		<?php } ?>
	</div>
	<?php endforeach; ?>
</div>

</div>
</div>	
</div>	
</div>
</form>
