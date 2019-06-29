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
                <i class="fa fa-table"></i> All user book tour data table
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label><a href="<?php echo base_url() . 'BookingTour/exportCSV' ?>">Export</a></label>
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th style="width: 20%">Destination</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Tour code</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Destination</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Tour code</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        </tfoot>
                        <tbody id="myTable">
                        <?php foreach ($result as $row): ?>
                            <tr id="<?php echo $row->id_bookTour ?>">
                                <td><?php echo $row->id_bookTour ?></td>
                                <td><?php echo $row->user_name ?></td>
                                <td><?php echo $row->email ?></td>
                                <td><?php echo $row->phone_number ?></td>
                                <td><?php echo $row->des_name ?></td>
                                <td><?php echo $row->des_price ?></td>
                                <td><?php echo $row->booking_date ?></td>
                                <td><?php echo $row->tour_code ?></td>
                                <td><?php echo $row->status ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'Admin/bookTour_user_detail?id=' . $row->id_bookTour ?>"
                                       class="btn btn-info">Update</a>
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
                    text: "You will not be able to recover this Booking!",
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
                            url: '<?php echo base_url(); ?>BookingTour/delete_book_tour?id=' + id,
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
