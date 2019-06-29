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
                <i class="fa fa-table"></i> Destination data table
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label><a href="<?php echo base_url() . 'Destinations/new_destination' ?>">Create new
                                Destination</a></label>
                    </div>
                    <div>
                        <input class="span6 form-control" id="myInput" type="text" placeholder="Search..">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 20%">Name</th>
                            <th>Picture</th>
                            <th>Detail</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Detail</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Option</th>
                        </tr>
                        </tfoot>
                        <tbody id="myTable">
                        <?php foreach ($result as $row): ?>
                            <tr id="<?php echo $row->des_id ?>">
                                <td><?php echo $row->des_id ?></td>
                                <td><?php echo $row->des_name ?></td>
                                <td>
                                    <figure><img src="/webapplication/public/des_img/<?php echo $row->des_pic ?>"
                                                 style="width:150px;height:120px;"></figure>
                                </td>
                                <td>
                                    <div class="cont"><?php echo $row->des_detail ?></div>
                                </td>
                                <td><?php echo $row->des_price ?></td>
                                <td><?php echo $row->cat_name ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'Destinations/des_detail_admin?id=' . $row->des_id ?>"
                                       class="btn btn-info">Detail</a>
                                    <button type="submit" class="btn btn-danger remove">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php echo $links ?>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(".remove").click(function () {
            var id = $(this).parents("tr").attr("id");
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this Destination!",
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
                            url: '<?php echo base_url(); ?>Destinations/delete_destination?id=' + id,
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

        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
