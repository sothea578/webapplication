<div class="content-wrapper">
  <form role="form" action="" method="get">
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
          <i class="fa fa-table"></i> Destination data table</div>
        <div class="card-body"><a href="/webapplication/index.php/Destinations/new_destination/">Create new Destination</a> 
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Des ID</th>
                  <th>Destination name</th>
                  <th>Destination picture</th>
                  <th>Destination detail</th>
                  <th>Destination price</th>
                  <th>Category</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Des ID</th>
                  <th>Destination name</th>
                  <th>Destination picture</th>
                  <th>Destination detail</th>
                  <th>Destination price</th>
                  <th>Category</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($result as $row): ?>
                <tr>
                  <td><?php echo $row->des_id ?></td>
                  <td><?php echo $row->des_name ?></td>
                  <td><figure><img src="/webapplication/public/des_img/<?php echo $row->des_pic ?>" style="width:150px;height:120px;"></figure></td>
                  <td><div class="cont"><?php echo $row->des_detail ?></div></td>
                  <td><?php echo $row->des_price ?></td>
                  <td><?php echo $row->cat_name ?></td>
                  <td>
                    <a href="/webapplication/index.php/Destinations/des_detail_admin?id=<?php echo($row->des_id)?>" class="btn btn-info">Detail</a></br></br>
                    <a href="/webapplication/index.php/Destinations/delete_destination?id=<?php echo($row->des_id)?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
  </form>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
