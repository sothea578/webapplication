<div class="content-wrapper">
    <form role="form" action="<?php echo base_url() . 'Galleries/update_gallery?id=' . $result->gal_id ?>"
          method="post" class="create-form" enctype="multipart/form-data">
        <div class="space-4">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-pic">Picture</label>
                <div class="col-sm-9">
                    <input type="file" id="pic" class="col-xs-10 col-sm-5"
                           name="pic" ​​​​​​ value="pic"/>​​​​​​​
                    <input type="hidden"  id="old_pic"  name="old_pic"  value="<?php echo $result->picture ?>">
                </div>
            </div>
            ​​​​

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-destination-id">Destination</label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('id_des', $des, $result->id_des); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-category-id">Category</label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('id_cat', $cat, $result->id_cat); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-name">Name</label>
                <div class="col-sm-9">
                    <input type="text" id="name" name="name" class="col-xs-10 col-sm-5"
                           value="<?php echo($result->gal_name); ?>"/>
                </div>
            </div>
        </div>

        <div class="space-4"></div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a class="btn btn-primary" href="<?php echo base_url() . 'Galleries/show_gallery_data' ?>"
                   role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i> Update
                </button>
            </div>
        </div>
    </form>
</div>
