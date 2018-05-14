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
          <i class="fa fa-table"></i> All contact user detail </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Contact ID</th>
                  <th>Full name</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>Messange</th>
                  <th>Contact date</th>
                  <th>Status</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Contact ID</th>
                  <th>Full name</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>Messange</th>
                  <th>Contact date</th>
                  <th>Status</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($result as $row): ?>
                <tr>
                  <td><?php echo $row->contact_id ?></td>
                  <td><?php echo $row->full_name ?></td>
                  <td><?php echo $row->email ?></td>
                  <td><?php echo $row->phone_num ?></td>
                  <td><?php echo $row->massage ?></td>
                  <td><?php echo $row->contact_date ?></td>
                  <td><?php echo $row->status ?></td>
                  <td>
                    <a href="/webapplication/index.php/Contacts/contact_detail?id=<?php echo($row->contact_id)?>" class="btn btn-info">Update</a><br/><br/>
                    <a href="/webapplication/index.php/Contacts/delete_contact?id=<?php echo($row->contact_id)?>" class="btn btn-danger">Delete</a>
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
