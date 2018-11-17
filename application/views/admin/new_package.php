<div class="content-wrapper">
<form role="form" action="/webapplication/index.php/Services/create_package" method="post" class="create-form">
    <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-package-name"> Package name </label>
    <div class="col-sm-9">
    <input type="text" id="name" placeholder="" class="col-xs-10 col-sm-5" name="name" value="<?php echo set_value('name'); ?>">
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-package-detail"> Package description </label>
    <div class="col-sm-9">
    <textarea id="article" placeholder="Package description" class="col-xs-10 col-sm-5" name="desc" rows="10" value="<?php echo set_value('desc'); ?>">
    </textarea>
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-package-pic"> Package picture </label>
    <div class="col-sm-9">
    <?php echo form_open_multipart('Services/upload_package_pic');?>
    <input type="file" id="pic" placeholder="" class="col-xs-10 col-sm-5" name="pic" value="<?php echo set_value('pic'); ?>"/><br /><br />
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-service-id"> Service ID </label>
    <div class="col-sm-9">
    <select class="col-xs-10 col-sm-5" name="id_serv" value="<?php echo set_value('id_serv');?>" id="id_serv">
     	<?php foreach ($serv as $row) : ?>
      	<option class="form-id-serv form-control"><?php echo $row->serv_id ?></option>
      	<?php endforeach; ?>
    </select>
    </div>
    <div class="col-sm-5">
     	<label>Service list:</label>
     	<?php foreach ($serv as $row) : ?>
     		<h6><?php echo $row->serv_id.'. '.$row->serv_type ?></h6>
     	<?php endforeach; ?>
    </div>
    </div>

     
    <div class="space-4"></div>
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i> Create
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
  }
</script>
