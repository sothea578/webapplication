<div class="content-wrapper">
<?php foreach($result as $row): ?>
<form role="form" action="/webapplication/index.php/Admin/update_user?id=<?php echo($row->user_id)?>" method="post" class="create-form">
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
       		<label class="col-sm-3 control-label no-padding-right" for="form-user-dob"> Date of birth: </label>
    		<div class="col-sm-9">
    			<input type="date('y-m-d')" name="dob" id="dob" class="col-xs-10 col-sm-5" value="<?php echo $row->user_dob; ?>">
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
    			<textarea type="text" name="add" id="add" class="col-xs-10 col-sm-5" value="add"><?php echo $row->address; ?></textarea>
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
