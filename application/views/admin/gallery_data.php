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
          <i class="fa fa-table"></i> Gallery data table</div>
        <div class="card-body">
          <label><a href="/webapplication/index.php/Galleries/new_gallery/">Create new gallery</a></label>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Gallery ID</th>
                  <th>Gallery name</th>
                  <th>Category name</th>
                  <th>Destination name</th>
                  <th>Gallery picture</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Gallery ID</th>
                  <th>Gallery name</th>
                  <th>Category name</th>
                  <th>Destination name</th>
                  <th>Gallery picture</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($result as $row): ?>
                <tr>
                  <td><?php echo $row->gal_id ?></td>
                  <td><?php echo $row->gal_name ?></td>
                  <td><?php echo $row->cat_name ?></td>
                  <td><?php echo $row->des_name ?></td>
                  <td><figure class="img-polaroid"><img src="/webapplication/public/gal_img/<?php echo $row->picture ?>" style="width:150px;height:120px;"></figure></td>
                  <td>
                    <a href="/webapplication/index.php/Galleries/gallery_detail?id=<?php echo($row->gal_id)?>" class="btn btn-info">Update</a></br></br>
                    <a href="/webapplication/index.php/Galleries/delete_gallery?id=<?php echo($row->gal_id)?>" class="btn btn-danger">Delete</a>
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
