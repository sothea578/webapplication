<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title">Persional Information</div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Persional
                Information
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <form role="form">
                    <h1>Persional Information</h1>
                    <ul class="thumbnails" id="isotope-items">
                        <li class="span3 isotope-element isotope-filter1">
                            <div class="thumb-isotope">
                                <div class="card">
                                    <div class="card-body">
                                        <h5><?php echo "Username: " . $result->user_name; ?></h5>
                                        <h5><?php echo "Full name: " . $result->full_name; ?></h5>
                                        <h5><?php echo "Sex: " . $result->sex; ?></h5>
                                        <h5><?php echo "Date of birth: " . $result->user_dob; ?></h5>
                                        <h5><?php echo "Email: " . $result->email; ?></h5>
                                        <h5><?php echo "Phone number: " . $result->phone_number; ?></h5>
                                        <h5><?php echo "Adress: " . $result->address; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="span8 isotope-element isotope-filter1">
                            <div class="thumb-isotope">
                                <label><h3>Booking tour history</h3></label>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="dataTable" width="100%">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Destination</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Booking date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($book as $r): ?>
                                            <tr>
                                                <th scope="row"><?php echo $r->id_bookTour ?></th>
                                                <td><?php echo $r->tour_code ?></td>
                                                <td><?php echo $r->cat_name ?></td>
                                                <td><?php echo $r->des_name ?></td>
                                                <td><?php echo $r->des_price ?></td>
                                                <td><?php echo $r->booking_date ?></td>
                                                <td><?php echo $r->status ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <div>
            <a class="btn btn-warning" href="<?php echo base_url() . 'Users/logout' ?>" role="button"
               name="logout">Logout</a>
            <a class="btn btn-info" href="<?php echo base_url() . 'Users/edit_personal_info' ?>" role="button"
               name="edit">Edit</a>
        </div>
    </div>
</div>
