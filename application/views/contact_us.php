<div id="slider_wrapper">
<img src="images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
<div class="page_title">Contacts</div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="/webapplication/index.php/Users/home/">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Contacts</div>	
</div>
</div>
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h1>Our Address</h1>

<figure class="google_map">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1qx-GNCAa5XTJaUquaq2Tz57WNxAoMFLo" width="600" height="450" frameborder="2" style="border:0px" allowfullscreen></iframe>
</figure>

<h3>Travel & Tour Agency</h3>

<p>
	Sivatha Street,Mondul II<br>
Siem Reap City, Cambodia.<br>
Telephone: +855 17 800 058<br>
E-mail: <a href="mailto:fastairticket@gmail.com">fastairticket@gmail.com</a>
</p>


<h2>Contact Form</h2>

<div id="note"></div>
<div id="fields">
	<form id="ajax-contact-form" class="form-horizontal" action="/webapplication/index.php/Contacts/create_contact/" method="post">
		<div class="row">
			<div class="span3">
				<div class="control-group">
				    <label class="control-label" for="inputName">Your full name:</label>
				    <div class="controls">				      
				      <input class="span3" type="text" id="inputName" name="name" value="Your full name:" onBlur="if(this.value=='') this.value='Your full name:'" onFocus="if(this.value =='Your full name:' ) this.value=''">
				    </div>
				</div>				
			</div>	
			<div class="span3">
				<div class="control-group">
				    <label class="control-label" for="inputEmail">Your email:</label>
				    <div class="controls">				      
				      <input class="span3" type="text" id="inputEmail" name="email" value="Your email:" onBlur="if(this.value=='') this.value='Your email:'" onFocus="if(this.value =='Your email:' ) this.value=''">
				    </div>
				</div>
			</div>		
			<div class="span3">
				<div class="control-group">
				    <label class="control-label" for="inputPhone">Phone number:</label>
				    <div class="controls">				      
				      <input class="span3" type="text" id="inputPhone" name="phone" value="Phone number:" onBlur="if(this.value=='') this.value='Phone number:'" onFocus="if(this.value =='Phone number:' ) this.value=''">
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<div class="control-group">
				    <label class="control-label" for="inputMessage">Message:</label>
				    <div class="controls">				      				      
				      <textarea class="span9" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message:'" 
                        onFocus="if(this.value =='Message:' ) this.value=''">Message:</textarea>
				    </div>
				</div>
			</div>
		</div>
		<button type="submit" class="submit">Submit</button>
	</form>
</div>

</div>
<div class="span3">
	
<h2>Testimonials</h2>

<div class="testimonial1">
<div class="txt1">
	Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
</div>
<div class="txt2">
	<span>Alex Williams</span><br><a href="#">http://demolink.org</a>
</div>	
</div>

<div class="testimonial1">
<div class="txt1">
	Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
</div>
<div class="txt2">
	<span>Jesica Smith</span><br><a href="#">http://demolink.org</a>
</div>	
</div>





</div>	
</div>	
</div>	
</div>

<div id="content2">
<div class="container">
<div class="row">
<div class="span9">

</div>	
</div>	
</div>	
</div>
	
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
