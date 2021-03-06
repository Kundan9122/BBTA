<!--
author: Surya s

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Travel Agency Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- For Testimonials slider -->
    <!-- //For Testimonials slider -->
    <!-- //custom-theme files-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //custom-theme files-->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- googlefonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- //googlefonts -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="css/bookingstyle.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>


    <!--/sticky-->

    <style>
        body {
            background-color: lightblue;
        }
    </style>

    <!-- w3-banner -->
    <div class="banner-1">

    </div>
    <!-- //banner -->
    <!-- main-section -->
    <div class="head agile">
        <div class="wthree_head_section">
            <h3 class="w3l_header">
                <center><b><u>Booking <span>Form</span></u></b></center>
            </h3>
        </div>
        <div class="login w3">
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item"><span>Flights</span></li>
                        <li class="resp-tab-item"><label>/</label><span>Trains</span></li>
                        <li class="resp-tab-item"><label>/</label><span>Hotels</span></li>
                        <li class="resp-tab-item"><label>/</label><span>Cabs</span></li>

                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content">
                            <div class="login-top agileinfo">
                                <h2><b>Book for flights</b></h2>

                                <form action="booking_flight.php" method="GET" name="form1">
                                    <div class="w3_agileits_main_grid w3l_main_grid">
                                        <div class="agileits_grid">
                                            <h5>Name * </h5>
                                            <div class="name">
                                                <input type="text" name="name" placeholder="Your Name" required="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="w3_agileits_main_grid w3l_main_grid">
                                        <div class="agileits_grid">
                                            <h5>E-mail </h5>
                                            <input type="email" name="email" placeholder="ex : yourmail@gmail.com" required="">
                                        </div>
                                    </div>

                                    <div class="fromtop">
                                        <div class="agileinfo_main_grid held">
                                            <div class="agileits_w3layouts_grid">
                                                <h5>From*</h5>
                                                <select id="category1" name="from" required="">
													<option value="Bangalore">Bangalore</option>
													<option value="Chennai">Chennai</option>
													<option value="Delhi">Delhi</option>
													<option value="Goa">Goa</option>
													<option value="Hyderabad">Hyderabad</option>
													<option value="Assam">Assam</option>
													<option value="Lucknow">Lucknow</option>
												</select>
                                            </div>
                                        </div>

                                        <div class="agileinfo_main_grid">
                                            <div class="agileits_w3layouts_grid">
                                                <h5>To*</h5>
                                                <select id="category1" name="to" required="">
													<option value="Chennai">Chennai</option>
													<option value="Bangalore">Bangalore</option>
													<option value="Delhi">Delhi</option>
													<option value="Goa">Goa</option>
													<option value="Hyderabad">Hyderabad</option>
													<option value="Assam">Assam</option>
													<option value="Lucknow">Lucknow</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="agileits_main_grid w3_agileits_main_grid held">
                                        <div class="wthree_grid">
                                            <h5>Adults*</h5>
                                            <select id="category1" name="adults" required="">
												    <option value="00">00</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
												</select>
                                        </div>
                                    </div>

                                    <div class="agileinfo_main_grid">
                                        <div class="agileits_w3layouts_grid">
                                            <h5>Children*</h5>
                                            <select id="category1" name="children" required="">
												    <option value="00">00</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
												</select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="agileinfo_main_grid1">
                                        <div class="agileits_w3layouts_grid mim">
                                            <h5>Travel Class*</h5>
                                            <select id="category2" name="class" required="">
													<option value="Economy">Economy class</option>
													<option value="PremiumEconomy">Premium Economy</option>
													<option value="Business">Business class</option>
													<option value="First">First Class</option>
												</select>
                                        </div>
                                    </div>

                                    <div class="agileits_w3layouts_main_grid w3ls_main_grid agileinfo_main_grid held">
                                        <div class="agileinfo_grid">
                                            <h5>Departure On*</h5>

                                            <div class="agileits_w3layouts_main_grid1">
                                                <input class="date" id="date" name="departure" type="date" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="agileinfo_main_grid">
                                        <div class="agileits_w3layouts_grid">
                                            <h5>Journey type*</h5>
                                            <select id="category1" name="type" required="">
													<option value="Oneway">One Way</option>
													<option value="Roundtrip">Round trip</option>
												</select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="aitssubmitw3ls">
                                        <center> <input type="submit" name="submit" value="BOOK"> </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-1 resp-tab-content">
                            <div class="login-top agileits">
                                <h3><b>Book for Trains</b></h3>
                                <div class="w3layouts-agileits">

                                    <div class="w3layoutscontactagileits">
                                        <form action="booking_train.php" method="GET">
                                            <div class="w3_agileits_main_grid w3l_main_grid">
                                                <div class="agileits_grid">
                                                    <h5>Name * </h5>
                                                    <div class="name">
                                                        <input type="text" name="name" placeholder="Your Name" required="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="w3_agileits_main_grid w3l_main_grid">
                                                <div class="agileits_grid">
                                                    <h5>E-mail </h5>
                                                    <input type="email" name="email" placeholder="ex : yourmail@gmail.com" required="">
                                                </div>
                                            </div>

                                            <div class="agileits_main_grid w3_agileits_main_grid held">
                                                <div class="wthree_grid">
                                                    <h5>Route</h5>
                                                    <select id="category" name="route" required="">
													<option value="none">None</option>
													<option value="Local">Local</option>
													<option value="Non-local">Non-local</option>
													
												</select>
                                                </div>
                                            </div>

                                            <div class="agileinfo_main_grid">
                                                <div class="agileits_w3layouts_grid">
                                                    <h5>Number of Passengers*</h5>
                                                    <select id="category1" name="pass" required="">
												    <option value="00">00</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
												</select>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="agileinfo_main_grid1">
                                                <div class="agileits_w3layouts_grid">
                                                    <h5>Day*</h5>
                                                    <select id="category2" name="day" required="">
													<option value="Sunday">Sunday</option>
													<option value="Monday">Monday</option>
													<option value="Tuesday">Tuesday</option>
													<option value="Wednesday">Wednesday</option>
													<option value="Thursday">Thursday</option>
													<option value="Friday">Friday</option>
													<option value="Saturday">Saturday</option>
												</select>
                                                </div>
                                            </div>
                                            <div class="fromtop">
                                                <div class="agileinfo_main_grid held">
                                                    <div class="agileits_w3layouts_grid">
                                                        <h5>From*</h5>
                                                        <select id="category1" name="from" required="">
													<option value="Bangalore">Bangalore</option>
													<option value="Chennai">Chennai</option>
													<option value="Delhi">Delhi</option>
													<option value="Goa">Goa</option>
													<option value="Hyderabad">Hyderabad</option>
													<option value="Assam">Assam</option>
													<option value="Lucknow">Lucknow</option>
												</select>
                                                    </div>
                                                </div>

                                                <div class="agileinfo_main_grid">
                                                    <div class="agileits_w3layouts_grid">
                                                        <h5>To*</h5>
                                                        <select id="category1" name="to" required="">
													<option value="Chennai">Chennai</option>
													<option value="Bangalore">Bangalore</option>
													<option value="Delhi">Delhi</option>
													<option value="Goa">Goa</option>
													<option value="Hyderabad">Hyderabad</option>
													<option value="Assam">Assam</option>
													<option value="Lucknow">Lucknow</option>
												</select>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>

                                            <div class="aitssubmitw3ls">
                                                <center> <input type="submit" name="submit" value="BOOK"> </center>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-1 resp-tab-content">
                            <div class="login-top agileits">
                                <h3><b>Book for Hotels</b></h3>
                                <div class="w3layouts_main_grid">
                                    <form action="booking_hotel.php" method="GET" class="w3_form_post">
                                        <div class="w3_agileits_main_grid w3l_main_grid">
                                            <div class="agileits_grid">
                                                <h5>Name * </h5>
                                                <div class="nam">
                                                    <input type="text" name="fname" placeholder="First name" required="">
                                                </div>
                                                <div class="nam1">
                                                    <input type="text" name="lname" placeholder="Last name" required="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="w3_agileits_main_grid w3l_main_grid">
                                            <div class="agileits_grid">
                                                <h5>E-mail </h5>
                                                <input type="email" name="email" placeholder="ex : yourmail@gmail.com" required="">
                                            </div>
                                        </div>
                                        <div class="agileits_main_grid w3_agileits_main_grid held">
                                            <div class="wthree_grid">
                                                <h5>Room Type</h5>
                                                <select id="category" name="type" required="">
													<option value="none">None</option>
													<option value="Single">Single Room</option>
													<option value="Double">Double Room</option>
													<option value="Suit">Suit Room</option>
													
												</select>
                                            </div>
                                        </div>

                                        <div class="agileinfo_main_grid">
                                            <div class="agileits_w3layouts_grid">
                                                <h5>Number of Guests *</h5>
                                                <select id="category1" name="guests" required="">
												    <option value="00">00</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                                            <div class="agileinfo_grid">
                                                <h5>Check In &amp; Time *</h5>

                                                <div class="agileits_w3layouts_main_gridl">
                                                    <input class="date" id="datepicker1" name="date" type="text" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                                                </div>
                                                <div class="agileits_w3layouts_main_gridr">
                                                    <input type="time" name="time" placeholder=" " required="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                                            <div class="agileinfo_grid">
                                                <h5>Check Out &amp; Time *</h5>

                                                <div class="agileits_w3layouts_main_gridl">
                                                    <input class="date" id="datepicker1" name="date2" type="text" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                                                </div>
                                                <div class="agileits_w3layouts_main_gridr">
                                                    <input type="time" name="time2" placeholder=" " required="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="w3_main_grid">

                                            <div class="w3_main_grid_right">
                                                <center> <input type="submit" value="BOOK"> </center>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <div class="tab-1 resp-tab-content">
                            <div class="login-top agileinfo">
                                <h2><b>Book for Cabs</h2><h5>*<u>Not applicable for outstation</u></b></h5>
                                    <div class="containerw3layouts-agileits">

                                        <div class="w3layoutscontactagileits">
                                            <form action="booking_cab.php" method="GET">
                                                <div class="w3_agileits_main_grid w3l_main_grid">
                                                    <div class="agileits_grid">
                                                        <h5>Name * </h5>
                                                        <div class="name">
                                                            <input type="text" name="name" placeholder="Your Name" required="">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_main_grid w3l_main_grid">
                                                    <div class="agileits_grid">
                                                        <h5>E-mail </h5>
                                                        <input type="email" name="email" placeholder="ex : yourmail@gmail.com" required="">
                                                    </div>
                                                </div>

                                                <div class="aitsphonew3ls agileinfow3ls">
                                                    <div class="aitsphonew3ls-lable wthreelable">
                                                        <label>Phone</label><span class="colon">:</span>
                                                    </div>
                                                    <div class="aitsphonew3ls-input wthreeinput">

                                                        <label class="aitsnumber"></label>
                                                        <input class="wthreeland" type="tel" pattern="[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}" title="Phone Number (Format: +99(99)9999-9999)" name="phone" required="">
                                                        <br>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                                                    <div class="agileinfo_grid">
                                                        <h5>Departure date &amp; Time *</h5>

                                                        <div class="agileits_w3layouts_main_gridl">
                                                            <input class="date" id="datepicker1" name="date" type="date" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                                                        </div>
                                                        <div class="agileits_w3layouts_main_gridr">
                                                            <input type="time" name="time" placeholder=" " required="">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                                                    <div class="agileinfo_grid">
                                                        <h5>Return date &amp; Time *</h5>

                                                        <div class="agileits_w3layouts_main_gridl">
                                                            <input class="date" id="datepicker1" name="date2" type="text" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                                                        </div>
                                                        <div class="agileits_w3layouts_main_gridr">
                                                            <input type="time" name="time2" placeholder=" " required="">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="aitspickupaddress agileinfow3ls">
                                                    <div class="aitspickupaddress-lable wthreelable">
                                                        <span class="agilepickup-lable">
																<label>Pickup</label>
																<label>Address</label>
															</span>
                                                        <span class="colon">:</span>
                                                    </div>
                                                    <div class="aitspickupaddress-input wthreeinput">
                                                        <textarea name="pickadd" placeholder="Pickup Address" required=""></textarea>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="aitsdestinationaddress agileinfow3ls">
                                                    <div class="aitsdestinationaddress-lable wthreelable">
                                                        <span class="agiledest-lable">
																<label>Destination</label>
																<label>Address</label>
															</span>
                                                        <span class="colon">:</span>
                                                    </div>
                                                    <div class="aitsdestinationaddress-input wthreeinput">
                                                        <textarea name="destadd" placeholder="Destination Address" required=""></textarea>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="w3lsjourneyaits agileinfow3ls">
                                                    <div class="w3lsjourneyaits-lable wthreelable">
                                                        <span class="aitsjourney-lable">
																<label>Journey</label>
																<label>Type</label>
															</span>
                                                        <span class="colon">:</span>
                                                    </div>
                                                    <div class="w3lsjourneyaits-input wthreeinput">
                                                        <select name="type">
																<option value="single">Single</option>
																<option value="two way">Round Trip</option>
															</select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="aitssubmitw3ls">
                                                    <center> <input type="submit" name="submit" value="BOOK"> </center>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- //main-section -->
    <!-- footer -->
    <!--
	<div class="footer">
		<div class="container">
			<div class="col-md-4 agile_footer_grid">
				<h3>Contact Info</h3>
				<ul class="w3_address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
				</ul>
			</div>
			<div class="col-md-4 agile_footer_grid">
				<h3>About Us</h3>
				<p>Donec purus neque, vulputate id est id, pretium semper enim. Morbi viverra 
					congue nisi vel pulvinar posuere sapien eros, sed faucibus.</p>
				<ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-4 agile_footer_grid">
				<h3>Latest News</h3>
				<ul class="agileits_w3layouts_footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Donec purus neque, vulputate 
							id est id</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Nullam fringilla sed quam vitae</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Cras libero arcu, accumsan ac </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Aenean porttitor accumsan</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Nullam sed turpis gravida</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="w3_agileits_footer_grids">
				<div class="col-md-12 wthree_footer_grid_right">
					<h3>Sign up for our Newsletter</h3>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="agileinfo_copyright">
		<p>© 2018 Travel Agency. All rights reserved | Design by cks</p>
	</div>
<!-- //footer -->

    <!-- bootstrap-modal-pop-up -->
    <!--	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Travel Agency
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- //js -->
    <!-- //here starts scrolling icon -->
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!-- here stars scrolling script -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling script -->
    <!-- //here ends scrolling icon -->

    <!-- scrolling script -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //scrolling script -->
    <!-- //Calendar -->
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!-- //Calendar -->
    <!--script-->
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });
    </script>
    <!--script-->
</body>

</html>