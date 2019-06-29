<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin page</title>
    <!-- Bootstrap core CSS-->
    <link href="/webapplication/assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/webapplication/assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <!-- Page level plugin CSS-->
    <link href="/webapplication/assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/webapplication/assets/admin/css/sb-admin.css" rel="stylesheet">
    <script src="/webapplication/assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css"/>

    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: "link image"
        });
    </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url() . 'Admin/main' ?>">My Travel admin page</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User data">
                <a class="nav-link" href="<?php echo base_url() . 'Admin/main' ?>">
                    <i class="fa fa-fw fa-bar-chart"></i>
                    <span class="nav-link-text">Report</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User data">
                <a class="nav-link" href="<?php echo base_url() . 'Admin/user_data' ?>">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">User data</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact data">
                <a class="nav-link" href="<?php echo base_url() . 'Contacts/contact_data' ?>">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Contact data</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Relate Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Relate Pages</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="<?php echo base_url() . 'Users/home' ?>" target="_blank">User Main page</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Menu</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="<?php echo base_url() . 'Admin/bookTour_user_info' ?>">Book tour information</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'Categories/show_category_data' ?>">Catetory</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'Galleries/show_gallery_data' ?>">Gallery</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'Destinations/show_destination_data' ?>">Destination</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'Tour_types/show_tour_type_data' ?>">Tour type</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Service and Package">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Service and Package</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="<?php echo base_url() . 'Services/serviceData' ?>">Service</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'Services/servicePackageData' ?>">Package</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() . 'Admin/logout' ?>">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
