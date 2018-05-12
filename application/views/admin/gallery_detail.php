<div class="content-wrapper">
<?php foreach($result as $r): ?>
<form role="form" action="/webapplication/index.php/Galleries/update_gallery?id=<?php echo($r->gal_id)?>" method="post" >
<div class="space-4">
 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-pic"> Gallery pic </label>
 <div class="col-sm-9">
<?php echo form_open_multipart('Galleries/upload_gal_pic');?>

<input type="file" id="pic" placeholder="" class="col-xs-10 col-sm-5" name="pic" value="<?php echo set_value('pic'); ?>" />
<br /><br />
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-destination-id"> Destination ID </label>
 
 <div class="col-sm-9">
 <select class="col-xs-10 col-sm-5" name="id_des" value="<?php echo set_value('id_des');?>" id="id_des">
 	<?php foreach ($des as $row) : ?>
  	<option class="form-id-des form-control"><?php echo $row->des_id ?></option>
  	<?php endforeach; ?>
</select>
 </div>
 <div class="col-sm-5">
 	<label>Destination list:</label>
 	<?php foreach ($des as $row) : ?>
 		<h6><?php echo $row->des_id.'. '.$row->des_name ?></h6>
 	<?php endforeach; ?>
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-category-id"> Category ID </label>
 <div class="col-sm-9">
 <select class="col-xs-10 col-sm-5" name="id_cat" value="<?php echo set_value('id_cat');?>" id="id_cat">
 	<?php foreach ($cat as $row) : ?>
  	<option class="form-id-cat form-control"><?php echo $row->cat_id ?></option>
  	<?php endforeach; ?>
</select>
 </div>
 <div class="col-sm-5">
 	<label>Category list:</label>
 	<?php foreach ($cat as $row) : ?>
 		<h6><?php echo $row->cat_id.'. '.$row->cat_name ?></h6>
 	<?php endforeach; ?>
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-name"> Gallery name </label>
 <div class="col-sm-9">
<input type="text" id="name" name="name" class="col-xs-10 col-sm-5" value="<?php echo($r->gal_name); ?>">
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
