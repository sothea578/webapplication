<div class="content-wrapper">
<form role="form" action="/webapplication/index.php/Categories/create_category" method="post" class="create-form">
 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Category name </label>
 
 <div class="col-sm-9">
 <input type="text" id="cat_name" placeholder="" class="col-xs-10 col-sm-5" name="cat_name" value="<?php echo set_value('cat_name'); ?>">
 </div>
 </div>
 <div class="space-4"></div>
 <div class="clearfix form-actions">
 <div class="col-md-offset-3 col-md-9">
 <button class="btn btn-info" type="submit">
 <i class="ace-icon fa fa-check bigger-110"></i>
 Create
 </button>
 
 </div>
 </div>
</form>
</div>
