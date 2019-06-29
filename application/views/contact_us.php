<div id="slider_wrapper">
    <img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
    <div class="slider_bot">
        <div class="page_title">Contacts</div>
        <div class="breadcrumbs1">
            <div class="breadcrumbs1_inner"><a href="<?php echo base_url() . 'Users/home' ?>">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Contacts
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h1>Our Address</h1>
                <figure class="google_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3881.8163110760224!2d103.8544562!3d13.3616952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31101754895eb311%3A0x9c9c4b6c39b3301b!2sFast+Air+Ticket+%26+Tour!5e0!3m2!1sen!2skh!4v1535188687154"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </figure>

                <h1>OUR OFFICE</h1>
                <table width="100%" border="0px">
                    <tr>
                        <td width="50%">
                            <h3><b>Fast Air Ticket & Tour (FAT)</b></h3>
                            <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;#60, Sivatha Street, Mondul II Village, Sangkat Svay
                                Dangkum,<br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;Siem Reap City, Siem Reap Province, Cambodia 17252.<br/>
                                <br/>
                                Tel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+855 17 800 058 <br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +855 98 256 539 <br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +855 63 765 765<br/>
                                <br/>
                                E-mail: <a href="mailto:fastairticket@gmail.com"> fastairticket@gmail.com </a>
                            </p>
                        </td>
                        <td>
                            <figure>
                                <img src="/webapplication/public/other_image/_nameCard.jpg"
                                     style="margin-left:40px; width:45%;">
                            </figure>
                        </td>
                    <tr/>
                </table>

                <h1>Contact Form</h1>
                <p style="text-align: justify;">We have received your message and would like to thank you for writing to
                    us. If your inquiry is urgent, please use the telephone number listed above to talk to one of our
                    staff. Otherwise, we will reply by email as soon as possible.</p>
                <b/>
                <div id="note"></div>
                <div id="fields">
                    <form id="ajax-contact-form" class="form-horizontal"
                          action="<?php echo base_url() . 'Contacts/create_contact' ?>" method="post">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-xs-6 col-md-4">
                                <div class="input-group input-group-sm">
                                    <input class="form-control" type="text" id="inputName" name="name" placeholder="Full Name:" required>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <div class="input-group input-group-sm">
                                    <input class="form-control" type="email" id="inputEmail" name="email" placeholder="Email:" required>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <div class="input-group input-group-sm">
                                    <input class="form-control" type="text" id="inputPhone" name="phone" placeholder="Phone:" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-9">
                                <div class="control-group">
                                    <label class="control-label" for="inputMessage">Message:</label>
                                    <div class="controls">
                                        <textarea class="span9" id="inputMessage" name="content" placeholder="Message:" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="submit">Submit</button>
                    </form>
                </div>

            </div>
            <div class="col-xs-6 col-md-3">

                <h1>Testimonials</h1>

                <div class="testimonial1">
                    <div class="txt1">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="txt2">
                        <span>Alex Williams</span><br><a href="#">http://demolink.org</a>
                    </div>
                </div>

                <div class="testimonial1">
                    <div class="txt1">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="txt2">
                        <span>Jesica Smith</span><br><a href="#">http://demolink.org</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
