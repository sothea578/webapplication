<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title"></div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Service
                package detail
            </div>
        </div>
    </div>
</div>
<form role="form" method="get">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span5">
                            <figure class="img-polaroid"><img
                                        src="/webapplication/public/serv_img/<?php echo $result->pkg_pic ?>" alt=""
                                        style="width:500px; height:297px;"></figure>
                        </div>
                        <div class="span7">
                            <strong class="txt1"><?php echo $result->pkg_name ?></strong>
                            <p>
                                <?php echo $result->pkg_desc ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
