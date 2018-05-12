<div id="slider_wrapper">
<img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
<div class="page_title">Persional Information</div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="/webapplication/index.php/Users/home">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Persional Information</div>  
</div>
</div>
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span12">
<form role="form" action="/webapplication/index.php/Users/update_personal_info" method="post">
<h1>Edit personal information</h1>
<ul class="thumbnails" id="isotope-items">      
    <li class="span7 isotope-element isotope-filter1">
    <div class="thumb-isotope">
      <div class="thumbnail clearfix">
          <div class="">
                <?php foreach($result as $row): ?>
                	<div class="form-group">
    					<label class="col-sm-3 control-label no-padding-right" for="form-uname"> Username: </label>
    					<div class="col-sm-9">
 							<input type="text" id="uname" class="col-xs-10 col-sm-10" name="uname" value="<?php echo $row->user_name; ?>">
 						</div>
    				</div>

    				<div class="form-group">
    					<label class="col-sm-3 control-label no-padding-right" for="form-full-name"> Full Name: </label>
    					<div class="col-sm-9">
    						<input type="text" name="full_name" id="full_name" class="col-xs-10 col-sm-5" value="<?php echo $row->full_name; ?>">
    					</div>
    				</div>

       				<div class="form-group">
       					<label class="col-sm-3 control-label no-padding-right" for="form-sex"> Sex: </label>
    					<div class="col-sm-9">
    						<input type="text" name="sex" id="sex" class="col-xs-10 col-sm-5" value="<?php echo $row->sex; ?>">
    					</div>
       				</div>
        
        			<div class="form-group">
       					<label class="col-sm-3 control-label no-padding-right" for="form-user-dob"> Date of birth: </label>
    					<div class="col-sm-9">
    						<input type="date" name="dob" id="dob" class="col-xs-10 col-sm-5" value="<?php echo $row->user_dob; ?>">
    					</div>
       				</div>

					<div class="form-group">
       					<label class="col-sm-3 control-label no-padding-right" for="form-email"> Email: </label>
    					<div class="col-sm-9">
    						<input type="email" name="email" id="email" class="col-xs-10 col-sm-5" value="<?php echo $row->email; ?>">
    					</div>
       				</div>
        
        			<div class="form-group">
       					<label class="col-sm-3 control-label no-padding-right" for="form-phone-number"> Phone Number: </label>
    					<div class="col-sm-9">
    						<input type="text" name="tel" id="tel" class="col-xs-10 col-sm-5" value="<?php echo $row->phone_number; ?>">
    					</div>
       				</div>
        
        			<div class="form-group">
       					<label class="col-sm-3 control-label no-padding-right" for="form-address"> Address: </label>
    					<div class="col-sm-9">
    						<textarea type="text" name="add" id="add" class="col-xs-10 col-sm-5" value="add"><?php echo $row->address; ?></textarea>
    					</div>
       				</div>
                <?php endforeach; ?>
          </div>
          <div>
          <button type="submit" class="btn btn-info">
          Update</button>
          </div>
      </div>
    </div>
    </li>
</ul>
</form>
</div>
</div>  
</div>
</div>
