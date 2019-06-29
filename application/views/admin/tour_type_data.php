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
                <i class="fa fa-table"></i> Category data table
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label><a href="<?php echo base_url() . 'Tour_types/new_tour_type' ?>">Create new type of
                                tour</a></label>
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
                            <th>Destination</th>
                            <th>Code</th>
                            <th>People(PAX)</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Destination</th>
                            <th>Code</th>
                            <th>People(PAX)</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        </tfoot>
                        <tbody id="myTable">
                        <?php foreach ($tour as $row): ?>
                            <tr id="<?php echo $row->tour_type_id; ?>">
                                <td><?php echo $row->tour_type_id ?></td>
                                <td><?php echo $row->des_name ?></td>
                                <td><?php echo $row->tour_code ?></td>
                                <td><?php echo $row->people_amount ?></td>
                                <td><?php echo $row->status ?></td>
                                <td>
                                    <?php if ($row->tour_type_id != 1) { ?>
                                        <a href="<?php echo base_url() . 'Tour_types/tour_type_detail?id=' . $row->tour_type_id ?>"
                                           class="btn btn-info">Update</a>
                                        <button type="submit" class="btn btn-danger remove">Delete</button>
                                    <?php } ?>
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
                    text: "You will not be able to recover this Tour Type!",
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
                            url: '<?php echo base_url(); ?>Tour_types/delete_tour_type?id=' + id,
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