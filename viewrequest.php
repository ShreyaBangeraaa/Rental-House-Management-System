<?php
session_start();
if(isset($_SESSION['owner']))
{
?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CITY Real Estate - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

*{
  margin: 0;
  padding: 0;   
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
  background-color:green;
  padding: 0 10px;
}
.wrapper{
  max-width: 650px;
  width: 100%;
  background: #fff;
  margin: 95px auto;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 30px;
  background: #a8cf45;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 35px;
  color: white;
  text-transform: uppercase;
  text-align: center;
  font-family:Montserrat;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #000000;
   margin-right: 10px;
  font-size: 14px;
 
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 150%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #fec107;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #fec107;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 17px; 
  border: 10px;
  background: white;
  color: #00000;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
  
  
}

.wrapper .form .inputfield .btn:hover{
  background:#a8cf45;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}

.dropbtn {
  background-color: transparent;
  color: black;
  padding: 8px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:#a8cf45;
  min-width: 104px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.9);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #a8cf45}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #a8cf45;
}
</style>
</head>
<body class="realestate_version">

    <!-- LOADER -->
	
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->
	<?php include('ownerheader.php')?>

    

	<ul class='slideshow'>
		<li>
			<span>Summer</span>
		</li>
		<li>		
			<span>Fall</span>
		</li>
		<li>		
			<span>Winter</span>
		</li>
		<li>
			<span>Spring</span>
		</li>
	</ul>
	
    
	<div class="parallax first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
				<h1 style="color:white;"><b>USERS REQUEST</h1></b>
	<div class="tablee" style="background-color:white;width:900px;">			
	
	<table border="3"  class="table" >
	<thead>
	<tr>
	<th>SI.No</th>
	<th>NAME</th>
	<th>PHONE NUMBER</th>
	<th>E-MAIL</th>
     <th>ADDRESS</th>	
	</tr>
	</thead>
	<tbody>
	
	<tr>
	
	<td><label name="sino">number</label></td>
	<td><label name="name">name</label></td>
	<td><label name="phone">phone</label></td>
	<td><label name="email">email</label></td>
	<td><label name="address">address</label></td>
	<td><a href="confirm.php"><input type="submit" name="submit" value="CONFIRM" style="height:35px;width:180px;background-color:#a8cf45;color:black"><label name="confirm"></label></a>
	<td><a href="deleterequest.php"><input type="submit" name="submit" value="DELETE" onsubmit="return confirm('Are you sure want to delete?')" style="height:35px;width:180px;background-color:red;color:black"><label name="delete"></label></a>


	</tr>
	
	</tbody>
	</table>
	</div>
                    <!--div class="contact_form">
                        <h3><i class="fa fa-envelope-o grd1 global-radius"></i> QUICK APPOINTMENT</h3>
                        <form id="contactform1" class="row" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name1" id="first_name1" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name1" id="last_name1" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email1" id="email1" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone1" id="phone1" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Time</label>
                                    <select name="select_service1" id="select_service1" class="selectpicker form-control" data-style="btn-white">
                                        <option value="selecttime">Select Time</option>
                                        <option value="Weekdays">Weekdays</option>
                                        <option value="Weekend">Weekend</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">What is max price?</label>
                                    <select name="select_price1" id="select_price1" class="selectpicker form-control" data-style="btn-white">
                                        <option value="$100 - $2000">$100 - $2000</option>
                                        <option value="$2000 - $4000">$2000 - $4000</option>
                                        <option value="$4000 - $10000">$4000 - $10000</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get an Appointment</button>
                                </div>
                            </fieldset>
                        </form>
                    </div-->
                </div>
				<div class="col-md-6 col-sm-12">
                    <!---<div class="big-tagline clearfix">
                        <h2>Sell Your Property with CITY Real Estate</h2>
                        <p class="lead">With CITY Real Estate responsive landing page template, you can promote your all property & real estate projects. </p>
                        <a data-scroll href="#gallery" class="btn btn-light btn-radius grd1 btn-brd" style="text-align:center;">View Gallery</a>
                    </div>--->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div class="about-box">
		<div class="container">
			<div class="row">
				<div class="top-feature owl-carousel owl-theme">
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-01.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Full Furnished</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-02.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Living Inside a Nature</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi.</p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-03.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Luxurious Fittings</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-04.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Non Stop Security</a></h4>
							<p>Lorem Is a dummy Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
				</div>
			</div>
			
			<hr class="hr1">
			
			<div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="uploads/about_bg.jpg" alt="" class="img-responsive">                        
                    </div><!-- end media -->
                </div>
				<div class="col-md-6">
					<div class="message-box right-ab">
                        <h4>Awards Winning Real Estate Company</h4>
                        <h2>Welcome to Rental Site</h2>
                        <p>Rental house available with each and every facilities.</p>
						<p>Surrounded by greenary. Schools,COlleges,multi-gym,swimming pool,stores ad etc..  </p>
						<a href="#" class="btn btn-light btn-radius grd1 btn-brd"> Read More </a>
                    </div>
				</div>
			</div>
			
		</div>
	</div>

    <div id="agent" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_02.png');">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Agent Details</h3>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div><!-- end col -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>The Agent</h4>
                        <h2>Jenny Martines</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

                        <a href="#contact" data-scroll class="btn btn-light global-radius btn-brd grd1 effect-1">Contact Me</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/agent.jpg" alt="" class="img-responsive">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="agencies_meta clearfix">
                        <span><i class="fa fa-envelope "></i> <a href="mailto:support@rental.com">support@rental.com</a></span>
                        <span><i class="fa fa-link "></i> <a href="#">www.rental.com</a></span>
                        <span><i class="fa fa-phone-square "></i> +91 9005432678</span>
                        <span><i class="fa fa-print "></i>+91 8907321166</span>
                        <span><i class="fa fa-facebook-square "></i> <a href="#">facebook.com/tagline</a></span>
                        <span><i class="fa fa-twitter-square "></i> <a href="#">twitter.com/tagline</a></span>
                    </div><!-- end agencies_meta -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>

    <div id="testimonials" class="section lb">
        <div class="container">
            <!--div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Happy Customers</h3>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div><!-- end col -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <!-- class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
								
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <!--div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <!-- class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <!--div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <!--div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <!-- class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="logo.png" style="width:350px;height;350px" alt="">
                        </div>
                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Info Link</h3>
                        </div>

                        <ul class="twitter-widget footer-links">
                            <li><a href="#"> Home </a></li>
                            <li><a href="#"> About Us </a></li>
							<li><a href="#"> Contact</a></li>
							<li><a href="#"> Login</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
				<div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@rentalsite.com</a></li>
                            <li><a href="#">www.rentalsite.com</a></li>
                            <li>SDM College Road,Ujire</li>
                            <li>+919005432678</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Social</h3>
                        </div>
                        <ul class="footer-links">
						<li><a href="#"><i class="fa fa-whatsapp"></i> Whatsapp</a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">City Real Estate</a> Design By : <a href="https://html.design/">Hash Infotech</a></p>
                </div>

                <div class="footer-right">
                    <form method="get" action="#">
                        <input placeholder="Subscribe our newsletter.." name="search">
                        <i class="fa fa-envelope-o"></i>
                    </form>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>
<?php
}
else
{
	echo"<script>location.href='ownerlogin.php';</script>";
}
	?>