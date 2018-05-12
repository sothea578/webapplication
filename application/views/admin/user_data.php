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
          <i class="fa fa-table"></i> All user data table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Full name</th>
                  <th>Sex</th>
                  <th>DOB</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>Address</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Full name</th>
                  <th>Sex</th>
                  <th>DOB</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>Address</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($result as $row): ?>
                <tr>
                  <td><?php echo $row->user_id ?></td>
                  <td><?php echo $row->user_name ?></td>
                  <td><?php echo $row->full_name ?></td>
                  <td><?php echo $row->sex ?></td>
                  <td><?php echo $row->user_dob ?></td>
                  <td><?php echo $row->email ?></td>
                  <td><?php echo $row->phone_number ?></td>
                  <td><?php echo $row->address ?></td>
                  <td>
                    <a href="/webapplication/index.php/Admin/user_detail?id=<?php echo($row->user_id)?>" class="btn btn-info">Update</a><br/><br/>
                    <a href="/webapplication/index.php/Users/delete_user?id=<?php echo($row->user_id)?>" class="btn btn-danger">Delete</a>
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
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
