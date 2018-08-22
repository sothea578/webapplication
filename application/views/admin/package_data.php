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
          <i class="fa fa-table"></i> Service Package data table</div>
        <div class="card-body"><a href="/webapplication/index.php/Services/new_package/"> Create new package </a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Package ID</th>
                  <th>Package name</th>
                  <th>Service type</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <<th>Package ID</th>
                  <th>Package name</th>
                  <th>Service type</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($package as $row): ?>
                <tr>
                  <td><?php echo $row->pkg_id ?></td>
                  <td><?php echo $row->pkg_name ?></td>
                  <td><?php echo $row->serv_type ?></td>
                  <td><div class="cont"><?php echo $row->pkg_desc ?></div></td>
                  <td><figure><img src="/webapplication/public/serv_img/<?php echo $row->pkg_pic ?>" style="width:150px;height:120px;"></figure></td>
                  <td>
                    <a href="/webapplication/index.php/Services/package_detail_admin?id=<?php echo($row->pkg_id)?>" class="btn btn-info">Update</a>
                    <a href="/webapplication/index.php/Services/delete_package?id=<?php echo($row->pkg_id)?>" class="btn btn-danger">Delete</a>
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
