<div class="content-wrapper">
<form role="form" action="/webapplication/index.php/Destinations/create_destination" method="post" class="create-form">
 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-destination-name"> Destination name </label>
 <div class="col-sm-9">
 <input type="text" id="name" placeholder="" class="col-xs-10 col-sm-5" name="name" value="<?php echo set_value('name'); ?>">
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-destination-pic"> Destination picture </label>
 <div class="col-sm-9">
 <?php echo form_open_multipart('Destination/upload_des_pic');?>
 <input type="file" id="pic" placeholder="" class="col-xs-10 col-sm-5" name="pic" value="<?php echo set_value('pic'); ?>"/>
<br /><br />
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-destination-detail"> Destination detail </label>
 <div class="col-sm-9">
 <textarea id="article" placeholder="Destination detail" class="col-xs-10 col-sm-5" name="detail" rows="10" value="<?php echo set_value('detail'); ?>">
 </textarea>
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-destination-price"> Destination price </label>
 <div class="col-sm-9">
<input type="text" id="price" placeholder="Destination price" name="price" class="col-xs-10 col-sm-5" value="<?php echo set_value('price'); ?>">
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

<script>
  $(document).ready(function(){
    loadArticle();
    $("#frmArticle").submit(function (e){
      e.preventDefault();
      tinymce.triggerSave();
      var data = $(this).serialize();
      var type = $(this).attr('method');
      var url = $(this).attr('action');
      .log(data);

      $.ajax({
        url:url,
        type: type,
        data: data
      }).done(function (html){
        $('#frmArticle')[0].reset();
        loadArticle();
      });
    });
  });

  function loadArticle(){
    $.ajax({
      url:'webapplication/index/Admin/loadArticle',
      type: 'GET'
    }).done(function (html){
      $(".response").html(html);
    });
  };
</script>
