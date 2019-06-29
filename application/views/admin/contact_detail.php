<div class="content-wrapper">
    <form role="form"
          action="<?php echo base_url() . 'Contacts/update_contact_stt?id=' . $result->contact_id ?>"
          method="post" class="create-form">
        <div class="space-4">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-full-name"> Full Name: </label>
                <div class="col-sm-9">
                    <input type="text" name="full_name" id="full_name" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->full_name; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-email"> Email: </label>
                <div class="col-sm-9">
                    <input type="text" name="email" id="email" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->email; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-phone-number"> Phone
                    number: </label>
                <div class="col-sm-9">
                    <input type="text" name="phone_number" id="phone_number" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->phone_num; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-content"> Content: </label>
                <div class="col-sm-9">
                        <textarea type="text" name="msg" id="msg" class="col-xs-10 col-sm-5"
                                  value="msg"><?php echo $result->massage; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-contact-date"> Contact
                    date: </label>
                <div class="col-sm-9">
                    <input type="date" name="contact_date" id="contact_date" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->contact_date; ?>">
                </div>

                <div class="form-group">
                    <?php
                    $options = array(
                        'pending' => 'Pending',
                        'replied' => 'Replied',
                    );
                    ?>
                    <label class="col-sm-3 control-label no-padding-right" for="form-contact-status">
                        Status: </label>
                    <div class="col-sm-9">
                        <?php echo form_dropdown('contact_stt', $options, $result->status); ?>
                    </div>
                </div>
            </div>

            <div class="space-4"></div>
            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <a class="btn btn-primary" href="<?php echo base_url() . 'Contacts/contact_data' ?>"
                       role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i> Update
                    </button>
                </div>
            </div>
    </form>
</div>
