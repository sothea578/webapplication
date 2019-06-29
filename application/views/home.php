<div id="slider_wrapper">
    <div id="slider" class="clearfix">
        <div id="camera_wrap">
            <div data-src="/webapplication/assets/bootstraps/images/pp_banner.png" height="750" width="1600">
                <div class="camera_caption fadeIn">
                    <div class="txt1">Phnom Penh</div>
                    <div class="txt2">Capital city of Cambodia</div>
                </div>
            </div>

            <div data-src="/webapplication/assets/bootstraps/images/angkor_banner.png" height="750" width="1600">
                <div class="camera_caption fadeIn">
                    <div class="txt1">Siem Reap</div>
                    <div class="txt2">Back to ancient time of Cambodia</div>
                </div>
            </div>

            <div data-src="/webapplication/assets/bootstraps/images/shn_banner.png" height="750" width="1600">
                <div class="camera_caption fadeIn">
                    <div class="txt1">Shihanouk Ville</div>
                    <div class="txt2">Most Beautiful Beach in The World</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slogan1">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="slogan1_inner">
                    <div class="txt1">Start Your Trip With Us</div>
                    <div class="txt2">Popular destinations and greate customer services</div>
                    <div class="txt3">Our global teams of experts handpick and curate the best experiences geared
                        towards intrepid travelers as well as those vacationing for the first time. We offer awesome
                        deals from trusted local tour operators and travel suppliers around the globe, and you can book
                        with ease anywhere, anytime - from your laptop or smart phone.
                    </div>
                    <div class="txt4 clearfix"><a href="<?php echo base_url().'Destinations/showDestination'?>"
                                                  class="find1">Find the Tour</a><a
                                href="<?php echo base_url().'Contacts/contact_us'?>" class="request1">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="slider3_wrapper">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div id="slider3">
                    <div class="slider3-title">Popular Destinations Pictures</div>
                    <a class="prev3" href="#"></a>
                    <a class="next3" href="#"></a>
                    <div class="carousel-box row">
                        <div class="inner span12">
                            <div class="carousel main">
                                <ul>
                                    <?php foreach ($result as $row) : ?>
                                        <li>
                                            <div class="thumb-carousel banner1">
                                                <div class="thumbnail clearfix">
                                                    <a>
                                                        <figure>
                                                            <img src="/webapplication/public/gal_img/<?php echo $row->picture; ?>"
                                                                 style="width: 270px; height: 220px;">
                                                            <em></em>
                                                        </figure>
                                                        <div class="caption">
                                                            <?php echo $row->gal_name; ?>
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
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span9">

                <h1><b>Welcome to traveler</b></h1>

                <h3>FAT TRAVELS & TOURS</h3>

                <div class="thumb1">
                    <div class="thumbnail clearfix">
                        <figure class="img-polaroid"><img src="/webapplication/assets/bootstraps/images/logo_.png"
                                                          style="width: 208px; height: 100%;" alt=""></figure>
                        <div class="caption" align="justify">
                            <p>
                                <b> FAT Travels & Tours </b> is the leading company in the travel & Tour industry
                                particularly in Siem Reap Province. This privately-owned company was founded in 2010 by
                                <b> Mrs. Leng Dalila </b> ( called Amom). Through the years, the company has provided
                                excellent travel and tours services for the local and international market. FAT Travels
                                & Tours Tours primarily promotes the natural beauty, culture and tradition of Cambodia
                                to local & foreign customers. From its humble beginning, it now explores the world,
                                offering more adventures and places to see and experience in Siem Reap province and
                                around Cambodia. The company is continuously extending its services, such as special
                                Tour packages, Hotels booking, Flight booking, Bus ticket from Siem Reap province to
                                others provinces in Cambodia, Thailand, Laos, Vietnam, Tourism Visa and Business Visa
                                services.... We provide end-to-end serives to customers with smiles & Resibility.
                            </p>
                            <!--<a href="#" class="button1">read more</a>-->
                        </div>
                    </div>
                </div>

            </div>
            <div class="span3">

                <h2>Services</h2>

                <ul class="ul1">
                    <?php foreach ($service as $r) : ?>
                        <li><a href="#"><?php echo $r->serv_type ?></a></li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
</div>
