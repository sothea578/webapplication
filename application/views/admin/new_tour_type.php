<div class="content-wrapper">
    <form role="form" action="<?php echo base_url() . 'Tour_types/create_tour_type' ?>" method="post"
          class="create-form">
        <div class="space-4">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-tour-code"> Tour code: </label>
                <div class="col-sm-9">
                    <input type="text" id="tour_code" class="col-xs-10 col-sm-5" name="tour_code"
                           value="<?php echo set_value('tour_code'); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-destination-id"> Destination
                    ID </label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('id_des', $result); ?>
                </div>
            </div>
        </div>

        <div class="space-4"></div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a class="btn btn-primary" href="<?php echo base_url() . 'Tour_types/show_tour_type_data' ?>"
                   role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i> Create
                </button>
            </div>
        </div>
    </form>
</div>
