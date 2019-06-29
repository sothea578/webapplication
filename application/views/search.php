<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title">Search Results</div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Search
                Results
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">

                <h1>Search Results:</h1>
                <?php foreach ($result as $row) : ?>
                    <div>
                        <label><a class="link"
                                  href="<?php echo base_url() . 'Destinations/destination_detail?id=' . $row->des_id ?>">
                                <h5><?php echo $row->des_name ?></h5></a></label>
                    </div>
                <?php endforeach; ?>
                <div id="search-results"></div>
            </div>
        </div>
    </div>
</div>
