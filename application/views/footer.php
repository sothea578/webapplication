<div class="bot1">
<div class="container">
<div class="row">
<div class="span3">
	<div class="bot1_title">follow us</div>
	<div class="social_wrapper">
		<ul class="social clearfix">
        <!-- <li><a href="#"><img src="/webapplication/assets/bootstraps/images/social_ic1.png"></a></li>-->
		    <li><a href="https://www.facebook.com/Fast-Air-Ticket-Tour-1630411597253277/" target=_blank;><img src="/webapplication/assets/bootstraps/images/social_ic2.png"></a></li>
		    <li><a href="#"><img src="/webapplication/assets/bootstraps/images/social_ic3.png"></a></li>		    
		    <li><a href="#"><img src="/webapplication/assets/bootstraps/images/social_ic4.png"></a></li>	
		    <li><a href="#"><img src="/webapplication/assets/bootstraps/images/social_ic5.png"></a></li>	
		    <li><a href="#"><img src="/webapplication/assets/bootstraps/images/social_ic6.png"></a></li>	
		</ul>
	</div>
</div>
<div class="span3">
	<div class="bot1_title">Destinations</div>
	<ul class="ul0">
	  	<?php foreach($result as $row) : ?>
  		<li><a href="/webapplication/index.php/Destinations/each_destination?id=<?php echo($row->cat_id)?>"><?php echo $row->cat_name ?></a></li>	
		<?php endforeach; ?>
	</ul>
</div>
<div class="span3">
	<div class="bot1_title">Contacts</div>
	<div class="bot1_txt1">
		Call for more information:<br>
		<span>+855 17 800 058</span><br>

		Sivatha Street,Mondul II<br>
Siem Reap City, Cambodia.<br>
Telephone: +855 17 800 058<br>
E-mail: <a href="mailto:fastairticket@gmail.com">fastairticket@gmail.com</a>
	</div>
</div>
</div>	
</div>	
</div>

<footer>
<div class="container">
<div class="row">
<div class="span12">
<div class="copyright"><b>Copyright   © 2018  <a href="#">FAT Travels & Tours</a>. All rights reserved.&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Privacy Policy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Terms of Use</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="https://gridgum.com/themes/tag/free-css-templates/">Free CSS Templates</a></b></div>
</div>	
</div>	
</div>	
</footer>

	
</div>
<script type="text/javascript" src="/webapplication/assets/bootstraps/js/bootstrap.js"></script>
</body>
</html>
