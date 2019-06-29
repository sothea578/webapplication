<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title">Services</div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Services
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span8">
                <h1>Package</h1>
                <div class="row">
                    <?php foreach ($result as $row) : ?>
                        <div class="span4">
                            <div class="thumb1">
                                <div class="thumbnail clearfix">
                                    <figure class="img-polaroid" style="width: 100%"><img
                                                src="/webapplication/public/serv_img/<?php echo $row->pkg_pic ?>"
                                                alt=""></figure>
                                    <div class="caption">
                                        <p>
                                            <strong><?php echo $row->pkg_name ?></strong>
                                        </p>
                                        <div class="cont">
                                            <p>
                                                <?php echo $row->pkg_desc ?>
                                            </p>
                                        </div>
                                        <a href="<?php echo base_url() . 'Services/servicePackageDetail?id=' . $row->pkg_id ?>"
                                           name="" id="" method="post" class="button1" value="">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
