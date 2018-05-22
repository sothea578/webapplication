<div class="content-wrapper">
<?php foreach($result as $row): ?>
<form role="form" action="/webapplication/index.php/BookingTour/update_book_tour?id=<?php echo($row->id_bookTour)?>" method="post" class="create-form">
<div class="space-4">
    	<div class="form-group">
    		<label class="col-sm-3 control-label no-padding-right" for="form-uname"> Username: </label>
    		<div class="col-sm-9">
 				<input type="text" id="uname" class="col-xs-10 col-sm-5" name="uname" value="<?php echo $row->user_name; ?>">
 			</div>
    	</div>

    	<div class="form-group">
    		<label class="col-sm-3 control-label no-padding-right" for="form-full-name"> Full Name: </label>
    		<div class="col-sm-9">
    			<input type="text" name="full_name" id="full_name" class="col-xs-10 col-sm-5" value="<?php echo $row->full_name; ?>">
    		</div>
    	</div>

       	<div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-sex"> Sex: </label>
    		<div class="col-sm-9">
    			<input type="text" name="sex" id="sex" class="col-xs-10 col-sm-5" value="<?php echo $row->sex; ?>">
    		</div>
       	</div>
       
		<div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-email"> Email: </label>
    		<div class="col-sm-9">
    			<input type="email" name="email" id="email" class="col-xs-10 col-sm-5" value="<?php echo $row->email; ?>">
    		</div>
       	</div>
        
        <div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-phone-number"> Phone Number: </label>
    		<div class="col-sm-9">
    			<input type="text" name="tel" id="tel" class="col-xs-10 col-sm-5" value="<?php echo $row->phone_number; ?>">
    		</div>
       	</div>
        
        <div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-address"> Address: </label>
    		<div class="col-sm-9">
    			<textarea type="text" name="add" id="add" class="col-xs-10 col-sm-5" value=""><?php echo $row->address; ?></textarea>
    		</div>
       	</div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-category"> Category: </label>
        <div class="col-sm-9">
          <input type="text" name="cat" id="cat" class="col-xs-10 col-sm-5" value="<?php echo $row->cat_name; ?>">
        </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-destination"> Destination: </label>
        <div class="col-sm-9">
          <input type="text" name="des" id="des" class="col-xs-10 col-sm-5" value="<?php echo $row->des_name; ?>">
        </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-destination-price"> Price: </label>
        <div class="col-sm-9">
          <input type="text" name="des_price" id="des_price" class="col-xs-10 col-sm-5" value="<?php echo $row->des_price; ?>">
        </div>
        </div>

       	<div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-booking-date"> Booking date: </label>
    		<div class="col-sm-9">
    			<input type="date" name="booking_date" id="booking_date" class="col-xs-10 col-sm-5" value="<?php echo $row->booking_date; ?>">
       	</div>

        <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-tour-code"> Tour code: </label>
          <div class="col-sm-9">
            <select class="selectpicker col-xs-10 col-sm-5" name="id_tour_type" value="<?php echo $row->id_tour_code;?>" id="tour_code">
              <?php foreach ($tour as $r) : ?>
                <option class="form-tour-code form-control"><?php echo $r->tour_type_id ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        <div class="col-sm-5">
        <label>Tour code list:</label>
          <?php foreach ($tour as $r) : ?>
            <h6><?php echo $r->tour_type_id.'. '.$r->tour_code.':'.$r->des_name ?></h6>
          <?php endforeach; ?>
        </div>
        </div>

       	<div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-booking-status"> Status: </label>
    		<div class="col-sm-9">
    			<select class="selectpicker col-xs-10 col-sm-5" name="book_stt" id="book_stt" value="<?php echo $row->status;?>">
  					<option class="form-booking-status form-control">pending</option>
  					<option class="form-booking-status form-control">confirm</option>
  					<option class="form-booking-status form-control">processing</option>
  					<option class="form-booking-status form-control">finished</option>
				</select>
    		</div>
       	</div>
</div>

 <div class="space-4"></div>
 <div class="clearfix form-actions">
 	<div class="col-md-offset-3 col-md-9">
 		<button class="btn btn-info" type="submit">
 			<i class="ace-icon fa fa-check bigger-110"></i>
 			Update
 		</button>
 	</div>
 </div>
</form>
<?php endforeach; ?>
</div>
