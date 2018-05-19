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
          <i class="fa fa-table"></i> Category data table</div>
        <div class="card-body"><a href="/webapplication/index.php/Tour_types/new_tour_type/">Create new type of tour</a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Destination name</th>
                  <th>Tour code</th>
                  <th>People amount</th>
                  <th>Status</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Destination name</th>
                  <th>Tour code</th>
                  <th>People amount</th>
                  <th>Status</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($tour as $row): ?>
                <tr>
                  <td><?php echo $row->tour_type_id ?></td>
                  <td><?php echo $row->des_name ?></td>
                  <td><?php echo $row->tour_code ?></td>
                  <td><?php echo $row->people_amount ?></td>
                  <td><?php echo $row->status ?></td>
                  <td>
                    <a href="/webapplication/index.php/Tour_types/tour_type_detail?id=<?php echo($row->tour_type_id)?>" class="btn btn-info">Update</a>
                    <a href="/webapplication/index.php/Tour_types/delete_tour_type?id=<?php echo($row->tour_type_id)?>" class="btn btn-danger">Delete</a>
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
