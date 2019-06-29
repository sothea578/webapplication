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
                <i class="fa fa-table"></i> Service Package data table
            </div>
            <div class="card-body"><a href="<?php echo base_url() . 'Services/new_package' ?>"> Create new
                    package </a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Picture</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Picture</th>
                            <th>Option</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($package as $row): ?>
                            <tr id="<?php echo $row->pkg_id ?>">
                                <td><?php echo $row->pkg_id ?></td>
                                <td><?php echo $row->pkg_name ?></td>
                                <td><?php echo $row->serv_type ?></td>
                                <td>
                                    <div class="cont"><?php echo $row->pkg_desc ?></div>
                                </td>
                                <td>
                                    <figure><img src="/webapplication/public/serv_img/<?php echo $row->pkg_pic ?>"
                                                 style="width:150px;height:120px;"></figure>
                                </td>
                                <td>
                                    <a href="<?php echo base_url() . 'Services/package_detail_admin?id=' . $row->pkg_id ?>"
                                       class="btn btn-info">Update</a>
                                    <button type="submit" class="btn btn-danger remove">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(".remove").click(function () {
            var id = $(this).parents("tr").attr("id");
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this Package!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: '<?php echo base_url(); ?>Services/delete_package?id=' + id,
                            type: 'DELETE',
                            error: function () {
                                alert('Something is wrong');
                            },
                            success: function (data) {
                                $("#" + id).remove();
                                swal("Deleted!", "", "success");
                            }
                        });
                    } else {
                        swal("Cancelled", "", "error");
                    }
                });
        });
    </script>
