<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travel GUIDE</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="/webapplication/assets/bootstraps/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/webapplication/assets/bootstraps/images/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="/webapplication/assets/bootstraps/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/webapplication/assets/bootstraps/css/bootstrap-responsive.css" type="text/css"
          media="screen">
    <link rel="stylesheet" href="/webapplication/assets/bootstraps/css/camera.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/webapplication/assets/bootstraps/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/webapplication/assets/bootstraps/css/isotope.css" type="text/css" media="screen">

    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/jquery.js"></script>
    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/superfish.js"></script>

    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/jquery.ui.totop.js"></script>

    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/touchTouch.jquery.js"></script>
    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/jquery.isotope.min.js"></script>

    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/camera.js"></script>
    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/jquery.mobile.customized.min.js"></script>

    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/jquery.caroufredsel.js"></script>
    <script type="text/javascript" src="/webapplication/assets/bootstraps/js/jquery.touchSwipe.min.js"></script>
    <script>
        $(document).ready(function () {
            // camera
            $('#camera_wrap').camera({
                //thumbnails: true
                autoAdvance: true,
                mobileAutoAdvance: true,
                //fx					: 'simpleFade',
                height: '51%',
                hover: false,
                loader: 'none',
                navigation: true,
                navigationHover: false,
                mobileNavHover: false,
                playPause: false,
                pauseOnClick: false,
                pagination: true,
                time: 7000,
                transPeriod: 1000,
                minHeight: '200px'
            });

            //	carouFredSel
            $('#slider3 .carousel.main ul').carouFredSel({
                auto: {
                    timeoutDuration: 80000
                },
                responsive: true,
                prev: '.prev3',
                next: '.next3',
                width: '100%',
                scroll: {
                    items: 1,
                    duration: 1000,
                    easing: "easeOutExpo"
                },
                items: {
                    width: '350',
                    height: 'variable',	//	optionally resize item-height
                    visible: {
                        min: 1,
                        max: 4
                    }
                },
                mousewheel: false,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });
            $(window).bind("resize", updateSizes_vat).bind("load", updateSizes_vat);

            function updateSizes_vat() {
                $('#slider3 .carousel.main ul').trigger("updateSizes");
            }

            updateSizes_vat();

        }); //
        $(window).load(function () {
            //

        }); //
    </script>
    <!--[if lt IE 8]>
    <div style='text-align:center'><a
            href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
            src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt=""/></a></div>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>

<body class="main">
<div id="main">

    <div class="top1 clearfix">
        <header>
            <div class="logo_wrapper log"><a href="/webapplication/index.php/Users/home" class="logo"><img
                            src="/webapplication/assets/bootstraps/images/logo_.png" alt="" height="50" width="100"
                            style="margin-bottom: 20px"></a></div>
        </header>
        <div class="top2 clearfix">
            <div class="search-form-wrapper clearfix">
                <form id="search-form" action="/webapplication/index.php/Users/search" method="GET"
                      accept-charset="utf-8" class="navbar-form">
                    <input type="text" name="s" value='' placeholder="Search">
                    <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                </form>
            </div>
            <div class="menu_wrapper clearfix">
                <div class="navbar navbar_">
                    <div class="navbar-inner navbar-inner_">
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse nav-collapse_ collapse">
                            <ul class="nav sf-menu clearfix">
                                <li class="active"><a href="/webapplication/index.php/Users/home">home</a></li>
                                <li><a href="/webapplication/index.php/Users/about">about</a></li>
                                <!-- <li><a href="/webapplication/index.php/Users/hotTour">hot tours</a></li> -->
                                <li class="sub-menu sub-menu-1"><a
                                            href="/webapplication/index.php/Destinations/showDestination">destinations</a>
                                    <ul>
                                        <?php foreach ($result as $row): ?>
                                            <li>
                                                <a href="/webapplication/index.php/Destinations/each_destination?id=<?php echo($row->cat_id) ?>"><?php echo $row->cat_name; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li><a href="/webapplication/index.php/Galleries/showGallery">gallery</a></li>
                                <li class="sub-menu sub-menu-1"><a href="#">services</a>
                                    <ul>
                                        <?php foreach ($serv as $r): ?>
                                            <li>
                                                <a href="/webapplication/index.php/Services/showServicePackage?id=<?php echo($r->serv_id) ?>"><?php echo $r->serv_type; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li><a href="/webapplication/index.php/Contacts/contact_us">contacts</a></li>
                                <?php if ($this->session->userdata('user_id')) { ?>
                                    <li><a href="/webapplication/index.php/Users/personal_info"><img
                                                    src="/webapplication/assets/bootstraps/images/user.png" alt=""
                                                    height="20" width="30" style="margin-top: 20"></a></li>
                                <?php } else { ?>
                                    <li><a href="/webapplication/index.php/Users/register_login">Join Us</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
