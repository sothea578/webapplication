<div class="content-wrapper">
    <form role="form"
          action="<?php echo base_url() . 'BookingTour/update_book_tour?id=' . $result->id_bookTour ?>"
          method="post" class="create-form">
        <div class="space-4">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-uname"> Username: </label>
                <div class="col-sm-9">
                    <input type="text" id="uname" class="col-xs-10 col-sm-5" name="uname"
                           value="<?php echo $result->user_name; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-full-name"> Full Name: </label>
                <div class="col-sm-9">
                    <input type="text" name="full_name" id="full_name" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->full_name; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-sex"> Sex: </label>
                <div class="col-sm-9">
                    <input type="text" name="sex" id="sex" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->sex; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-email"> Email: </label>
                <div class="col-sm-9">
                    <input type="email" name="email" id="email" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->email; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-phone-number"> Phone
                    Number: </label>
                <div class="col-sm-9">
                    <input type="text" name="tel" id="tel" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->phone_number; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-address"> Address: </label>
                <div class="col-sm-9">
                        <textarea type="text" name="add" id="add" class="col-xs-10 col-sm-5"
                                  value=""><?php echo $result->address; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-category"> Category: </label>
                <div class="col-sm-9">
                    <input type="text" name="cat" id="cat" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->cat_name; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-destination"> Destination: </label>
                <div class="col-sm-9">
                    <input type="text" name="des" id="des" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->des_name; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-destination-price"> Price: </label>
                <div class="col-sm-9">
                    <input type="text" name="des_price" id="des_price" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->des_price; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-booking-date"> Booking
                    date: </label>
                <div class="col-sm-9">
                    <input type="date" name="booking_date" id="booking_date" class="col-xs-10 col-sm-5"
                           value="<?php echo $result->booking_date; ?>">
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-tour-code"> Tour code: </label>
                    <div class="col-sm-9">
                        <?php echo form_dropdown('id_tour_type', $tour, $result->id_tour_type); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php
                    $options = array(
                        'pending' => 'Pending',
                        'confirm' => 'Confirm',
                        'processing' => 'Processing',
                        'finished' => 'Finished',
                    );
                    ?>
                    <label class="col-sm-3 control-label no-padding-right" for="form-booking-status">
                        Status: </label>
                    <div class="col-sm-9">
                        <?php echo form_dropdown('book_stt', $options, $result->status); ?>
                    </div>
                </div>
            </div>

            <div class="space-4"></div>
            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <a class="btn btn-primary" href="<?php echo base_url() . 'Admin/bookTour_user_info' ?>"
                       role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i> Update
                    </button>
                </div>
            </div>
    </form>
</div>
