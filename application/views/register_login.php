<head>
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="/webapplication/assets/register_login/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/webapplication/assets/register_login/css/style.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/webapplication/assets/register_login/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/webapplication/assets/register_login/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/webapplication/assets/register_login/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="/webapplication/assets/register_login/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="/webapplication/assets/register_login/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Login to our site</h3>
                                <p>Enter username and password to log in:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom register-login-form">
                            <form role="form" action="<?php echo base_url() . 'Users/user_login' ?>" method="post"
                                  class="login-form">
                                <?php if (!is_null($msg)) echo $msg; ?>
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="username">Username</label>
                                    <input type="text" name="username" placeholder="Username..."
                                           class="form-control" id="username" required>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..."
                                           class="form-password form-control" id="password" required>
                                </div>
                                <!--                                <input class="btn btn-primary" type="submit" value="Login">-->
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>

                    <div class="social-login">

                        <div class="social-login-buttons">
                            <a class="btn btn-link-1" href="#">
                                <i class="btn-link-1-facebook"></i> Facebook
                            </a>
                            <a class="btn btn-link-1" href="#">
                                <i class="btn-link-1-twitter"></i> Twitter
                            </a>
                            <a class="btn btn-link-1" href="#">
                                <i class="btn-link-1-google-plus"></i> Google Plus
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>

                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Register</h3>
                                <p>Fill in the form below to get instant access:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom register-login-form">
                            <?php echo validation_errors(); ?>
                            <form role="form" action="<?php echo base_url() . 'Users/user_register' ?>" method="post"
                                  class="registration-form">
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-username">Username</label>
                                    <input type="text" name="username" placeholder="Username..."
                                           class="form-username form-control" id="username"
                                           value="<?php echo set_value('username'); ?>" required>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..."
                                           class="form-password form-control" id="password"
                                           value="<?php echo set_value('password'); ?>" required>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-fullname">Full name</label>
                                    <input type="text" name="fullname" placeholder="Full name..."
                                           class="form-fullname form-control" id="fullname"
                                           value="<?php echo set_value('fullname'); ?>" required>
                                </div>

                                <?php
                                $options = array(
                                    'F' => 'Female',
                                    'M' => 'Male'
                                );
                                ?>

                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-fullname">Sex</label>
                                    <?php echo form_dropdown('sex', $options, '', 'class="form-control" id="sex"'); ?>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-email">Date of birth</label>
                                    <input type="date" name="dob" placeholder="Date of birth..."
                                           class="form-dob form-control" id="dob"
                                           value="<?php echo set_value('dob'); ?>" required>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input type="email" name="email" placeholder="Email..."
                                           class="form-email form-control" id="email"
                                           value="<?php echo set_value('email'); ?>" required>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-tel">Phone number</label>
                                    <input type="text" name="phone" placeholder="Phone number..."
                                           class="form-tel form-control" id="phone"
                                           value="<?php echo set_value('phone'); ?>" required>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="form-address">Address</label>
                                    <textarea type="text" name="address" placeholder="Address..."
                                              class="form-address form-control" id="address"
                                              value="<?php echo set_value('address'); ?>" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/webapplication/assets/bootstraps/js/bootstrap.js"></script>
