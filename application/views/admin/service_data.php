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
          <i class="fa fa-table"></i> Service data table</div>
        <div class="card-body"><a href="/webapplication/index.php/Services/new_service/">Create new Service</a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Service ID</th>
                  <th>Service type</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Service ID</th>
                  <th>Service type</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($serv as $row): ?>
                <tr>
                  <td><?php echo $row->serv_id ?></td>
                  <td><?php echo $row->serv_type ?></td>
                  <td>
                    <a href="/webapplication/index.php/Services/service_detail?id=<?php echo($row->serv_id)?>" class="btn btn-info">Update</a>
                    <a href="/webapplication/index.php/Services/delete_service?id=<?php echo($row->serv_id)?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </form>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
