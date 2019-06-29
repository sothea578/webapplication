<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title">Persional Information</div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Persional
                Information
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <form role="form" action="<?php echo base_url() . 'Users/update_personal_info' ?>" method="post">
                    <h1>Edit personal information</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group input-group-sm" style="margin-bottom: 20px">
                                <span class="input-group-addon" id="uname">Username</span>
                                <input type="text" name="uname" class="form-control" aria-describedby="uname"
                                       value="<?php echo $result->user_name; ?>" required>
                            </div>

                            <div class="input-group input-group-sm" style="margin-bottom: 20px">
                                <span class="input-group-addon" id="full_name">Full Name</span>
                                <input type="text" name="full_name" class="form-control" aria-describedby="full_name"
                                       value="<?php echo $result->full_name; ?>" required>
                            </div>

                            <?php
                            $options = array(
                                'F' => 'Female',
                                'M' => 'Male'
                            );
                            ?>

                            <div class="input-group input-group-sm" style="margin-bottom: 20px">
                                <span class="input-group-addon" id="sex">Sex</span>
                                <?php echo form_dropdown('sex', $options, $result->sex, 'class="form-control"'); ?>
                            </div>

                            <div class="input-group input-group-sm" style="margin-bottom: 20px">
                                <span class="input-group-addon" id="dob">Date of birth</span>
                                <input type="date" name="dob" class="form-control" aria-describedby="dob"
                                       value="<?php echo $result->user_dob; ?>" required>
                            </div>

                            <div class="input-group input-group-sm" style="margin-bottom: 20px">
                                <span class="input-group-addon" id="email">Email</span>
                                <input type="email" name="email" class="form-control" aria-describedby="email"
                                       value="<?php echo $result->email; ?>" required>
                            </div>

                            <div class="input-group input-group-sm" style="margin-bottom: 20px">
                                <span class="input-group-addon" id="tel">Phone Number</span>
                                <input type="text" name="tel" class="form-control" aria-describedby="tel"
                                       value="<?php echo $result->phone_number; ?>" required>
                            </div>

                            <div class="input-group input-group-sm" style="margin-bottom: 20px">
                                <span class="input-group-addon" id="add">Address</span>
                                <input type="text" name="add" class="form-control" aria-describedby="add"
                                       value="<?php echo $result->address; ?>" required>
                            </div>

                            <div>
                                <a class="btn btn-primary btn-sm"
                                   href="<?php echo base_url() . 'Users/personal_info' ?>" role="button">Back</a>
                                <button type="submit" class="btn btn-success btn-sm">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
