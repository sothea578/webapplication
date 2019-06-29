<div class="content-wrapper">
    <form role="form" action="<?php echo base_url() . 'Galleries/create_gallery' ?>" method="post" class="create-form"
          enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-pic">Picture</label>
            <div class="col-sm-9">
                <input type="file" id="pic" class="col-xs-10 col-sm-5"
                       name="pic" value="pic" required/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-destination-id">Destination</label>
            <div class="col-sm-9">
                <?php echo form_dropdown('id_des', $des); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-category-id">Category</label>
            <div class="col-sm-9">
                <?php echo form_dropdown('id_cat', $cat); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-name">Name</label>

            <div class="col-sm-9">
                <input type="text" id="name" placeholder="Gallery name" name="name" class="col-xs-10 col-sm-5"
                       value="<?php echo set_value('name'); ?>" required>
            </div>
        </div>

        <div class="space-4"></div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a class="btn btn-primary" href="<?php echo base_url() . 'Galleries/show_gallery_data' ?>"
                   role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i> Create
                </button>
            </div>
        </div>
    </form>
</div>
