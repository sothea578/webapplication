<div class="content-wrapper">
    <form role="form" action="<?php echo base_url() . 'Services/create_service' ?>" method="post" class="create-form">
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Type</label>

            <div class="col-sm-9">
                <input type="text" id="serv_type" placeholder="" class="col-xs-10 col-sm-5" name="serv_type"
                       value="<?php echo set_value('serv_type'); ?>">
            </div>
        </div>
        <div class="space-4"></div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a class="btn btn-primary" href="<?php echo base_url() . 'Services/serviceData' ?>"
                   role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i> Create
                </button>
            </div>
        </div>
    </form>
</div>
