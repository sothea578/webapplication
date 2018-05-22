<div class="content-wrapper">
<?php foreach($cat as $row): ?>
<form role="form" action="/webapplication/index.php/Categories/update_category?id=<?php echo($row->cat_id)?>" method="post" class="create-form">
<div class="space-4">
    	<div class="form-group">
    		<label class="col-sm-3 control-label no-padding-right" for="form-category-name"> Category Name: </label>
    		<div class="col-sm-9">
 				<input type="text" id="name" class="col-xs-10 col-sm-5" name="name" value="<?php echo($row->cat_name); ?>">
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
