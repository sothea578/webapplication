<div id="slider_wrapper">
<img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
<div class="page_title">Persional Information</div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="/webapplication/index.php/Users/home">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Persional Information</div>  
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
      <div class="thumbnail clearfix">
          <div class="">
                <?php foreach($result as $row): ?>
                  <h5><?php echo "Username: ".$row->user_name; ?></h5>
                  <h5><?php echo "Full name: ".$row->full_name; ?></h5>
                  <h5><?php echo "Sex: ".$row->sex; ?></h5>
                  <h5><?php echo "Date of birth: ".$row->user_dob; ?></h5>
                  <h5><?php echo "Email: ".$row->email; ?></h5>
                  <h5><?php echo "Phone number: ".$row->phone_number; ?></h5>
                  <h5><?php echo "Adress: ".$row->address; ?></h5>
                <?php endforeach; ?>
          </div>
          
      </div>
    </div>
    </li>
    <li class="span8 isotope-element isotope-filter1">
    <div class="thumb-isotope">
      <div class="table-responsive">
        <label><h3>Booking tour history</h3></label>
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Book tour</th>
              <th>Category name</th>
              <th>Destination name</th>
              <th>Destination price</th>
              <th>Booking date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($book as $r): ?>
            <tr>
              <th><?php echo $r->id_bookTour ?></th>
              <th><?php echo $r->cat_name ?></th>
              <th><?php echo $r->des_name ?></th>
              <th><?php echo $r->des_price ?></th>
              <th><?php echo $r->booking_date ?></th>
              <th><?php echo $r->status ?></th>
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
  <input class="btn btn-info" type="button" name="logout" value="logout" onclick="window.location='/webapplication/index.php/Users/logout'">
  <input class="btn btn-success" type="button" name="edit" value="Edit" onclick="window.location='/webapplication/index.php/Users/edit_personal_info'">
</div>
</div>
</div>
