<div class="content-wrapper">
<?php foreach($tour as $row): ?>
<form role="form" action="/webapplication/index.php/Tour_types/update_tour_type?id=<?php echo($row->tour_type_id)?>" method="post">
<div class="space-4">
    	<div class="form-group">
    		<label class="col-sm-3 control-label no-padding-right" for="form-tour-code"> Tour code: </label>
    		<div class="col-sm-9">
 				<input type="text" id="tour_code" class="col-xs-10 col-sm-5" name="tour_code" value="<?php echo($row->tour_code); ?>">
 			</div>
    	</div>

    	<div class="form-group">
    		<label class="col-sm-3 control-label no-padding-right" for="form-tour-code"> Destination name: </label>
    		<div class="col-sm-9">
 				<input type="text" id="des_name" class="col-xs-10 col-sm-5" name="des_name" value="<?php echo($row->des_name); ?>">
 			</div>
    	</div>

        <div class="form-group">
    		<label class="col-sm-3 control-label no-padding-right" for="form-people-amount"> People: </label>
    		<div class="col-sm-9">
 				<input type="number" id="people_amount" class="col-xs-10 col-sm-5" name="people_amount" value="<?php echo($row->people_amount); ?>">
 			</div>
    	</div>
        
        <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-tour-type-status"> Status </label>
        <div class="col-sm-9">
            <select class="col-xs-10 col-sm-5" name="status" value="<?php echo set_value('status');?>" id="status">
                <option class="form-tour-type-status form-control">pending</option>
                <option class="form-tour-type-status form-control">processing</option>
                <option class="form-tour-type-status form-control">finished</option>
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
