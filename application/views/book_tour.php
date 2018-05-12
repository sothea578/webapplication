<div id="slider_wrapper">
<img src="images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
<div class="page_title"></div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="/webapplication/index.php/Users/home">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Booking tour information</div>	
</div>
</div>
</div>
<form method="post">
<div id="content">
<div class="container">
<div class="row">
<div class="span12">
	
<h1>Booking tour information</h1>

<ul class="thumbnails" id="isotope-items">      
    <li class="span3 isotope-element isotope-filter1">
    <div class="thumb-isotope">
      <div class="thumbnail clearfix">
          <div class="row">
          		<?php foreach($result as $row): ?>
          		<div>
                  <label name="username" id="username" value=""><h5><?php echo "Username: ".$row->user_name; ?></h5></label>
                </div>
                <div>
                  <label name="fullname" id="fullname" value=""><h5><?php echo "Full name: ".$row->full_name; ?></h5></label>
                </div>
                <div>
                  <label name="sex" id="sex" value=""><h5><?php echo "Sex: ".$row->sex; ?></h5></label>
                </div>
                <div>
                  <label name="dob" id="dob" value=""><h5><?php echo "Date of birth: ".$row->user_dob; ?></h5></label>
                </div>
                <div>
                  <label name="email" id="email" value=""><h5><?php echo "Email: ".$row->email; ?></h5></label>
                </div>
                <div>
                  <label name="phone" id="phone" value=""><h5><?php echo "Phone number: ".$row->phone_number; ?></h5></label>
                </div>
                <div>
                  <label name="add" id="add" value=""><h5><?php echo "Adress: ".$row->address; ?></h5></label>
                </div>
                <div>
                  <label name="cat_name" id="cat_name" value=""><h5><?php echo "Category: ".$row->cat_name?></h5></label>
                </div>
                <div>
                  <label name="des_name" id="des_name" value=""><h5><?php echo "Destination: ".$row->des_name; ?></h5></label>
                </div>
                <div>
                  <label name="des_price" id="des_price" value=""><h5><?php echo "Price: ".$row->des_price; ?></h5></label>
                 </div>
                 <div>
                  <label name="booking_date" id="booking_date"><h5><?php echo "Booking date:".date('Y-m-d'); ?></h5></label>
                 </div>
                 <div>
                	<input class="btn btn-success" type="button" name="booktour" value="BOOK TOUR" onclick="window.location='/webapplication/index.php/BookingTour/booktour_process?id_des=<?php echo $row->des_id ?>&id_cat=<?php echo $row->cat_id ?>'" />
                	<input class="btn btn-danger" type="button" name="cancel" value="CANCEL" onclick="window.location='/webapplication/index.php/Destinations/showDestination'" />
            	</div>
                 <?php endforeach; ?>
          	</div>          	
          </div>
        
      </div>
    </div>
    </li>
</ul>

</div>
</div>	
</div>	
</div>
</form>
