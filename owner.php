<?php
 session_start();
 ?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<html lang="en">

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

.fa{
	font-size:15px;
	
}
</style>
</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <?php include('indexheader.php')?>

	
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
	
    
	<div class="parallax first-section" style="height:735px;">
	<p>
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form" style="margin-bottom:-140px;"></p>
					<a href="index.php"><i class="fa fa-close" style="float:right;margin-right:-20px;margin-top:-40px;font-size:25px;color:black;"></i></a>
                        <h3><i class="fa fa-envelope-o grd1 global-radius"></i> OWNER &nbsp;REGISTER</h3>
                        <form id="contactform1" class="row" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="Username" style="text-transform: capitalize;" class="form-control" placeholder="User name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phonenumber" pattern="^\d{10}$" title="accepts only numeric values with 10 digit." class="form-control" placeholder="Phone  number" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email"  class="form-control" placeholder="Your Email" required>
                                </div>								
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="address" style="text-transform: capitalize;"  class="form-control" placeholder="Address" required>
                                </div>
								 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    
									<select class="form-control" name="question" placeholder="Security Questions" required>
									<option>Security Questions</option>
									<option value="favourite food">Your favourite food</option>
									<option value="mother name">Your Mother name</option>
									<option value="nick name">Your Nick name</option>
									<option value="date of birth">Your Date of Birth</option>
									</select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="answer" style="text-transform: capitalize;" class="form-control" placeholder="Answer" required>
                                </div>
                              
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="password" pattern=".{6,}" title="Six or more characters" class="form-control" placeholder="Password" id="password" required >
									<span style="position:absolute;right:30px;transform:translate(0,-50%);top:30%;cursor:pointer;">
									<i class="fa fa-eye"  id="eye" onclick="toggle1()"></i>
									</span>									
                                </div>
								<script>
{
	var state=false;
	function toggle1(){
		if(state){
			document.getElementById("password").setAttribute("type","password");
			document.getElementById("eye").style.color='#7a797e';
			state=false;
		}
		else{
			document.getElementById("password").setAttribute("type","text");
			document.getElementById("eye").style.color='#5887ef';
			state=true;
		}
	}
}														
</script>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="cpassword"  class="form-control" placeholder="Confirm Password" id="cpassword" required>
									<span style="position:absolute;right:30px;transform:translate(0,-50%);top:30%;cursor:pointer;">
									<i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
									</span>									
                                </div>
								<script>
{
	var state=false;
	function toggle(){
		if(state){
			document.getElementById("cpassword").setAttribute("type","password");
			document.getElementById("eye").style.color='#7a797e';
			state=false;
		}
		else{
			document.getElementById("cpassword").setAttribute("type","text");
			document.getElementById("eye").style.color='#5887ef';
			state=true;
		}
	}
}														
</script>
									<div class="wthree-text">
						<label class="animm" >
							<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ownerterm.php">I Agree To The Terms & Conditions</p><input type="checkbox" style="margin-top:-30px;" class="checkbox" required=""></a>
						</label>
	
					</div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" name="submit"  class="btn btn-light btn-radius btn-brd grd1 btn-block">REGISTER</button>
                                </div>
								
							
									<br><br>Already have an account? <a href="ownerlogin.php"> &nbsp;&nbsp;<b>Login Now!</b></a><br><br>

<?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	
	$Email=$_POST['email'];

	$sql = "select * from owner where email='$Email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);

	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
		</script>";
			echo "<script> location.href='owner.php'; </script>";
	}
	else
	{
		$Name=$_POST['Username'];
		$Phone=$_POST['phonenumber'];
	
		$Email=$_POST['email'];
		$Address=$_POST['address'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
        $Password=$_POST['password'];
		
		if($_POST['password'] !=$_POST['cpassword']){
			echo"<script>
			alert('password invalid');
			</script>";
		}
		else{
			
		$query = "insert into owner(username,phone,email,addres,question,answer,password) values('".$Name."','".$Phone."','".$Email."','".$Address."','".$question."','".$answer."','".$Password."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='ownerlogin.php'; </script>";
		}

	}
}
?>
                            </fieldset>
                        </form>
                    </div>
                </div>
						
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->            
    <!---<div id="testimonials" class="section lb">
        <div class="container">
            <!--div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Happy Customers</h3>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div><!-- end col -->
            </div><!-- end title -->

            
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