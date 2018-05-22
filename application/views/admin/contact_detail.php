<div class="content-wrapper">
<?php foreach($result as $row): ?>
<form role="form" action="/webapplication/index.php/Contacts/update_contact_stt?id=<?php echo($row->contact_id)?>" method="post" class="create-form">
<div class="space-4">
    	<div class="form-group">
    		<label class="col-sm-3 control-label no-padding-right" for="form-full-name"> Full Name: </label>
    		<div class="col-sm-9">
    			<input type="text" name="full_name" id="full_name" class="col-xs-10 col-sm-5" value="<?php echo $row->full_name; ?>">
    		</div>
    	</div>

       	<div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-email"> Email: </label>
    		<div class="col-sm-9">
    			<input type="text" name="email" id="email" class="col-xs-10 col-sm-5" value="<?php echo $row->email; ?>">
    		</div>
       	</div>
       
		<div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-phone-number"> Phone number: </label>
    		<div class="col-sm-9">
    			<input type="text" name="phone_number" id="phone_number" class="col-xs-10 col-sm-5" value="<?php echo $row->phone_num; ?>">
    		</div>
       	</div>
        
        <div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-content"> Content: </label>
    		<div class="col-sm-9">
    			<textarea type="text" name="msg" id="msg" class="col-xs-10 col-sm-5" value="msg"><?php echo $row->massage; ?></textarea>
    		</div>
       	</div>

       	<div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-contact-date"> Contact date: </label>
    		<div class="col-sm-9">
    			<input type="date" name="contact_date" id="contact_date" class="col-xs-10 col-sm-5" value="<?php echo $row->contact_date; ?>">
       	</div>

       	<div class="form-group">
       		<label class="col-sm-3 control-label no-padding-right" for="form-contact-status"> Status: </label>
    		<div class="col-sm-9">
    			<select class="selectpicker col-xs-10 col-sm-5" name="contact_stt" id="contact_stt" value="<?php echo $row->status;?>">
  					<option class="form-booking-status form-control">pending</option>
  					<option class="form-booking-status form-control">replied</option>
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
