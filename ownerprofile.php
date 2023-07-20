<?php
session_start();
if(isset($_SESSION['owner']))
{
?>
<!DOCTYPE html>
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
*{
	box-sizing:border-box;
	
}
.wrapper{
	width:600px;
	margin:5% auto;
}
.form-area{
	display:flex;
	background:rgba(0,0,0,0.8);
	border-radius:25px;
	padding:1.3em;
}
.details-area{
	flex:1;
	order:1;
	margin-right:2em;
	}
	.details-area input{
		width:50%;
		background:tranparent;
		color:black;
		border-radius:40px;
		
		}
		.details-area input,
		.details-area button{
			padding:0.5em;
			margin-bottom:0.4em;
			
		}
		.details-area button{
			background:red;
			color:black;
			border:0;
			padding:15px 50px;
			font-size:17px;
			text-transform:uppercase;
		}
		
		label{
			color:#fff;
			text-transform:uppercase;
			line-height:50px;
			font-family:calibri;
			font-size:16px;
			
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
				<?php
					include 'config.php';
					$sql1 = "select * from owner where email='".$_SESSION['owner']."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					$sl=0;
					if($num1 > 0)
					{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$sl+=1;
							$id=$row1[0];
							$name=$row1['username'];
							$email=$row1['email'];
							$phone=$row1['phone'];
							$address=$row1['addres'];
					
			?>
				<div class="wrapper">
<form method="post" action="#" class="form-area" style="margin-bottom:-90px;" >
<div class="details-area" ><a href="ownerhome.php"><i class="fa fa-close" style="float:right;margin-right:-20px;margin-top:-10px;font-size:25px;color:white;"></i></a>
<h2 style="color:white;">MY PROFILE</h2>
<label for="name">Name</label>
<input type="text" name="username" value="<?php echo $name;?>" style="margin:0px 80px;width:310px;margin-bottom:0.8em;" >
<p><label for="phone">Phone number</label>
<input type="text" name="phone" value="<?php echo $phone;?>" style="margin:0px 10px;width:310px;">
<p><label for="email">Email</label>
<input type="text" name="email"  value="<?php echo $email;?>" style="margin:0px 75px; width:310px;"  readonly="true">
<p><label for="address">Address</label>
<textarea type="text" name="address" style="margin:0px 55px; width:310px;border-radius:20px;" ><?php echo $address; ?></textarea>

<p><center><button type="submit" name="update"style="border-radius:20px;">UPDATE</button></center>

</div>
</form>
</div>
<?php 
						}
					}
					if(isset($_POST['update']))
					{
					$name1=$_POST['username'];
					$email1=$_POST['email'];
					$phone1=$_POST['phone'];
					$address1=$_POST['address'];
					$sql = "UPDATE `owner` SET `username`='".$name1."',`phone`='".$phone1."', `addres`='".$address1."' WHERE `email`='".$_SESSION['owner']."'";
					
					
					// Execute query
					mysqli_query($con, $sql);
					echo "<script>
								alert('Update Successful');
							</script>";
							
							echo "<script> location.href='ownerprofile.php'; </script>";
					}
					?>

	

                    <!---<div class="contact_form">
                        <h3><i class="fa fa-envelope-o grd1 global-radius"></i> QUICK APPOINTMENT</h3>
                        <form id="contactform1" class="row" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name1" id="first_name1" class="form-control" placeholder="User name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name1" id="last_name1" class="form-control" placeholder="Phone  number">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email1" id="email1" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone1" id="phone1" class="form-control" placeholder="Address">
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">security Question</label>
                                    <select name="select_price1" id="select_price1" class="selectpicker form-control" data-style="btn-white">
                                        <option value="">Your nick name</option>
                                        <option value="">Favourite food</option>
                                       
                                    </select>
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone1" id="phone1" class="form-control" placeholder="password">
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone1" id="phone1" class="form-control" placeholder="Confirm PASSWORD">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get an Appointment</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>--->
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
	echo "<script> location.href='ownerlogin.php'; </script>";
}
?>