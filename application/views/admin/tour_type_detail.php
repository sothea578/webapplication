<div class="content-wrapper">
    <form role="form"
          action="<?php echo base_url() . 'Tour_types/update_tour_type?id=' . $tour->tour_type_id ?>"
          method="post" class="create-form">
        <div class="space-4">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-tour-code">Code</label>
                <div class="col-sm-9">
                    <input type="text" id="tour_code" class="col-xs-10 col-sm-5" name="tour_code"
                           value="<?php echo($tour->tour_code); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-tour-code">Destination</label>
                <div class="col-sm-9">
                    <input type="text" id="des_name" class="col-xs-10 col-sm-5" name="des_name"
                           value="<?php echo($tour->des_name); ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-people-amount">People(PAX)</label>
                <div class="col-sm-9">
                    <input type="number" id="people_amount" class="col-xs-10 col-sm-5" name="people_amount"
                           value="<?php echo($tour->people_amount); ?>">
                </div>
            </div>

            <div class="form-group">
                <?php
                $options = array(
                    'pending' => 'Pending',
                    'processing' => 'Processing',
                    'finished' => 'Finished',
                );
                ?>
                <label class="col-sm-3 control-label no-padding-right" for="form-tour-type-status">Status</label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('status', $options, $tour->status); ?>
                </div>
            </div>

            <div class="space-4"></div>
            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <a class="btn btn-primary" href="<?php echo base_url() . 'Tour_types/show_tour_type_data' ?>"
                       role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i> Update
                    </button>
                </div>
            </div>
    </form>
</div>
