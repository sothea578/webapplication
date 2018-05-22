<head>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/webapplication/assets/register_login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/webapplication/assets/register_login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/webapplication/assets/register_login/css/form-elements.css">
        <link rel="stylesheet" href="/webapplication/assets/register_login/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/webapplication/assets/register_login/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/webapplication/assets/register_login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/webapplication/assets/register_login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/webapplication/assets/register_login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/webapplication/assets/register_login/ico/apple-touch-icon-57-precomposed.png">

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
	                            <div class="form-bottom">
				                    <form role="form" action="/webapplication/index.php/Users/user_login" method="post" class="login-form">
				                    	<?php if(! is_null($msg)) echo $msg;?>
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
				                        </div>
				                        <button herf="/webapplication/index.php/Users/home" 
				                        type="submit" class="btn">Login</button>
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
	                            <div class="form-bottom">
	                            	<?php echo validation_errors(); ?>
				                    <form role="form" action="/webapplication/index.php/Users/user_register" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username" value="<?php echo set_value('username');?>">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password" value="<?php echo set_value('password');?>">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-fullname">Full name</label>
				                        	<input type="text" name="fullname" placeholder="Full name..." class="form-fullname form-control" id="fullname" value="<?php echo set_value('fullname');?>">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-fullname">Sex</label>
				                        	<select name="sex" value="<?php echo set_value('sex');?>" id="sex">
  												<option class="form-sex form-control">Male</option>
  												<option class="form-sex form-control">Female</option>
  												<option class="form-sex form-control">Other...</option>
											</select>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Date of birth</label>
				                        	<input type="date" name="dob" placeholder="Date of birth..." class="form-dob form-control" id="dob" value="<?php echo set_value('dob');?>">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="email" name="email" placeholder="Email..." class="form-email form-control" id="email" value="<?php echo set_value('email');?>">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-tel">Phone number</label>
				                        	<input type="text" name="phone" placeholder="Phone number..." class="form-tel form-control" id="phone" value="<?php echo set_value('phone');?>">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-address">Address</label>
				                        	<textarea type="text" name="address" placeholder="Address..." 
				                        				class="form-address form-control" id="address" value="<?php echo set_value('address');?>"></textarea>
				                        </div>
				                        <button type="submit" class="btn">Register</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <script src="/webapplication/assets/register_login/js/jquery-1.11.1.min.js"></script>
        <script src="/webapplication/assets/register_login/bootstrap/js/bootstrap.min.js"></script>
        <script src="/webapplication/assets/register_login/js/jquery.backstretch.min.js"></script>
        <script src="/webapplication/assets/register_login/js/scripts.js"></script>
