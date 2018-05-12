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
        <div class="card-body"><a href="/webapplication/index.php/Categories/new_category/">Create new Category</a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Category ID</th>
                  <th>Cagegoty name</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Category ID</th>
                  <th>Cagegoty name</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($cat as $row): ?>
                <tr>
                  <td><?php echo $row->cat_id ?></td>
                  <td><?php echo $row->cat_name ?></td>
                  <td>
                    <a href="/webapplication/index.php/Categories/category_detail?id=<?php echo($row->cat_id)?>" class="btn btn-info">Update</a>
                    <a href="/webapplication/index.php/Categories/delete_category?id=<?php echo($row->cat_id)?>" class="btn btn-danger">Delete</a>
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
