<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title">Destination Detail</div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Destination
                detail
            </div>
        </div>
    </div>
</div>
<form role="form" method="get">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h3><strong class="txt1"><?php echo $result->des_name ?></strong></h3>
                    <div class="row">
                        <div class="span5">
                            <figure class="img-polaroid"><img
                                        src="/webapplication/public/des_img/<?php echo $result->des_pic ?>" alt=""
                                        style="width:500px; height:297px;"></figure>
                        </div>
                        <div class="span7">
                            <p>
                                <?php echo $result->des_detail ?>
                            </p>
                            <strong>Price:
                                <?php echo $result->des_price ?>
                            </strong>
                            </br>
                            <?php if ($this->session->userdata('user_id')) { ?>
                                <a href="<?php echo base_url() . 'BookingTour/show_booktour_info?id_des=' . $result->des_id . '&id_cat=' . $result->id_cat ?>"
                                   class="btn btn-info">Book this tour</a>
                            <?php } else { ?>
                                <a class="btn btn-info" href="<?php echo base_url() . 'Users/register_login' ?>">Book
                                    this tour</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
