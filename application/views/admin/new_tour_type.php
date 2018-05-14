<div class="content-wrapper">
<form role="form" action="/webapplication/index.php/Tour_types/create_tour_type" method="post">
<div class="space-4">
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-tour-code"> Tour code: </label>
            <div class="col-sm-9">
                <input type="text" id="tour_code" class="col-xs-10 col-sm-5" name="tour_code" value="<?php echo set_value('tour_code'); ?>">
            </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-destination-id"> Destination ID </label>
        <div class="col-sm-9">
          <select class="col-xs-10 col-sm-5" name="id_des" value="<?php echo set_value('id_des');?>" id="id_des">
            <?php foreach ($result as $row) : ?>
            <option class="form-id-cat form-control"><?php echo $row->des_id ?></option>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="col-sm-5">
        <label>Destination list:</label>
        <?php foreach ($result as $row) : ?>
          <h6><?php echo $row->des_id.'. '.$row->des_name ?></h6>
        <?php endforeach; ?>
        </div>
      </div>

      <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-people-amount"> People: </label>
            <div class="col-sm-9">
                <input type="text" id="people_amount" class="col-xs-10 col-sm-5" name="name_amount" value="<?php echo set_value('people_amount'); ?>">
            </div>
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
