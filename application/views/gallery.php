<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title">Gallery</div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Gallery
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">

                <h1>Gallery</h1>

                <div id="isotope-options">
                    <ul id="isotope-filters" class="clearfix">
                        <li><a href="<?php echo base_url() . 'Galleries/showGallery' ?>" class="selected"
                               data-filter="*">Show
                                All</a></li>
                        <?php foreach ($result as $r) : ?>
                            <li>
                                <a href="<?php echo base_url() . 'Galleries/show_each_gallery?id=' . $r->cat_id ?>"
                                   data-filter=".isotope-filter1"><?php echo $r->cat_name ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <ul class="thumbnails" id="isotope-items">
                    <?php foreach ($gal as $row): ?>
                        <li class="span3 isotope-element isotope-filter1">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="/webapplication/public/gal_img/<?php echo $row->picture; ?>">
                                        <figure>
                                            <img src="/webapplication/public/gal_img/<?php echo $row->picture; ?>"
                                                 alt="" style="width: 270px; height: 270px;"><em></em>
                                        </figure>
                                        <div class="caption">
                                            <div class="txt1">
                                                <?php echo $row->gal_name; ?></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
