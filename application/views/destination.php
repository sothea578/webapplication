<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title">Destinations</div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Destinations
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span8">

                <h1>Our Destinations</h1>
                <form method="post">
                    <?php foreach ($result as $row): ?>
                        <div class="thumb3">
                            <div class="thumbnail clearfix">
                                <figure class="img-polaroid"><img
                                            src="/webapplication/public/des_img/<?php echo $row->des_pic ?>" alt=""
                                            style="width:210px;height:133px;"></figure>
                                <div class="caption">
                                    <p>
                                        <strong><?php echo $row->des_name ?></strong>
                                    </p>
                                    <div class="cont">
                                        <p>
                                            <?php echo $row->des_detail ?>
                                        </p>
                                    </div>
                                    <p>
                                        <strong>Price: <?php echo $row->des_price ?></strong>
                                    </p>
                                    <a href="<?php echo base_url() . 'Destinations/destination_detail?id=' . $row->des_id ?>"
                                       name="" id="" method="post" class="button1" value="">read more</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>
</div>
