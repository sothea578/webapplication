<div class="content-wrapper">
    <form role="form"
          action="<?php echo base_url() . 'Destinations/update_destination?id=' . $result->des_id ?>"
          method="post" class="create-form" enctype="multipart/form-data">
        <div class="space-4">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-destination-name">Name</label>
                <div class="col-sm-9">
                    <input type="text" id="name" placeholder="" class="col-xs-10 col-sm-5" name="name"
                           value="<?php echo($result->des_name); ?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-destination-pic">Picture</label>
                <div class="col-sm-9">
                    <input type="file" id="pic" class="col-xs-10 col-sm-5"
                           name="pic" ​​​​​​ value="pic"/>​​​​​​​
                    <input type="hidden"  id="old_pic"  name="old_pic"  value="<?php echo $result->des_pic ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-destination-detail">Detail</label>
                <div class="col-sm-9">
                        <textarea id="article" placeholder="Destination detail" class="col-xs-10 col-sm-5" name="detail"
                                  rows="10"
                                  value="<?php echo set_value('detail'); ?>"><?php echo($result->des_detail) ?>
                        </textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-destination-price">Price</label>
                <div class="col-sm-9">
                    <input type="text" id="price" placeholder="Destination price" name="price"
                           class="col-xs-10 col-sm-5" value="<?php echo(rtrim($result->des_price, '$')); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-category-id">Category</label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('id_cat', $cat, $result->id_cat); ?>
                </div>
            </div>
        </div>

        <div class="space-4"></div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a class="btn btn-primary" href="<?php echo base_url() . 'Destinations/show_destination_data' ?>"
                   role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i> Update
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        loadArticle();
        $("#frmArticle").submit(function (e) {
            e.preventDefault();
            tinymce.triggerSave();
            var data = $(this).serialize();
            var type = $(this).attr('method');
            var url = $(this).attr('action');
        .
            log(data);

            $.ajax({
                url: url,
                type: type,
                data: data
            }).done(function (html) {
                $('#frmArticle')[0].reset();
                loadArticle();
            });
        });
    });

    function loadArticle() {
        $.ajax({
            url: 'webapplication/index/Admin/loadArticle',
            type: 'GET'
        }).done(function (html) {
            $(".response").html(html);
        });
    }
</script>
