<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All user book tour data table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Book ID</th>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>Category</th>
                  <th>Destination</th>
                  <th>Price</th>
                  <th>Booking date</th>
                  <th>Tour code</th>
                  <th>Status</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Book ID</th>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>Category</th>
                  <th>Destination</th>
                  <th>Price</th>
                  <th>Booking date</th>
                  <th>Tour code</th>
                  <th>Status</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($result as $row): ?>
                <tr>
                  <td><?php echo $row->id_bookTour ?></td>
                  <td><?php echo $row->user_id ?></td>
                  <td><?php echo $row->user_name ?></td>
                  <td><?php echo $row->email ?></td>
                  <td><?php echo $row->phone_number ?></td>
                  <td><?php echo $row->cat_name ?></td>
                  <td><?php echo $row->des_name ?></td>
                  <td><?php echo $row->des_price ?></td>
                  <td><?php echo $row->booking_date ?></td>
                  <td><?php echo $row->tour_code ?></td>
                  <td><?php echo $row->status ?></td>
                  <td>
                    <a href="/webapplication/index.php/Admin/bookTour_user_detail?id=<?php echo($row->id_bookTour)?>" class="btn btn-info">Update</a></br></br>
                    <a href="/webapplication/index.php/BookingTour/delete_book_tour?id=<?php echo($row->id_bookTour)?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
