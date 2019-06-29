<div class="content-wrapper">
    <form role="form" action="<?php echo base_url() . 'Services/create_package' ?>" method="post" class="create-form"
          enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-package-name">Name</label>
            <div class="col-sm-9">
                <input type="text" id="name" placeholder="" class="col-xs-10 col-sm-5" name="name"
                       value="<?php echo set_value('name'); ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-package-detail">Description</label>
            <div class="col-sm-9">
                <textarea id="article" placeholder="Package description" class="col-xs-10 col-sm-5" name="desc"
                          rows="10"
                          value="<?php echo set_value('desc'); ?>" required>
                </textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-package-pic">Picture</label>
            <div class="col-sm-9">
                <input type="file" id="pic" class="col-xs-10 col-sm-5"
                       name="pic" value="pic" required/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-service-id">Service</label>
            <div class="col-sm-9">
                <?php echo form_dropdown('id_serv', $serv); ?>
            </div>
        </div>


        <div class="space-4"></div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a class="btn btn-primary" href="<?php echo base_url() . 'Services/servicePackageData' ?>"
                   role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i> Create
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
