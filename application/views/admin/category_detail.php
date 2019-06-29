<div class="content-wrapper">
    <form role="form" action="<?php echo base_url() . 'Categories/update_category?id=' . $cat->cat_id ?>"
          method="post" class="create-form">
        <div class="space-4">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-category-name"> Category
                    Name: </label>
                <div class="col-sm-9">
                    <input type="text" id="name" class="col-xs-10 col-sm-5" name="name"
                           value="<?php echo($cat->cat_name); ?>">
                </div>
            </div>
        </div>

        <div class="space-4"></div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a class="btn btn-primary" href="<?php echo base_url() . 'Categories/show_category_data' ?>"
                   role="button"><i class="ace-icon fa fa-arrow-circle-left bigger-110"></i> Back</a>
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i> Update
                </button>
            </div>
        </div>
    </form>
</div>
