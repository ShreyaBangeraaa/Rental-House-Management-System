<?php
session_start();
?>
<!DOCTYPE html>

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
.btn{
  color: black;
  padding: 15px;
  font-size: 18px;
  
  cursor: pointer;
}
</style>

</head>
<body class="realestate_version">
    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
 <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/2020.png"style="width:160px;height:170px;margin-top:-50px;margin-left:-40px;" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="ownerhome.php">Home</a></li>
                        <li><a href="ownerabout.php">About us</a></li>
                        <!---<li><a href="owner_info.html">Owner_info</a></li>-->
						 <li><a href="addhome1.php">Add House</a></li>
						 <li><a class="active" href="viewhouse.php">View House</a></li>
						 <li><a href="viewrequests.php">View Request</a></li>      
                        <li><a href="viewuser.php">View Users</a></li>
                
                   
						
                        <li><a href="ownercomment.php">Feedback</a></li>
                        
                        <!--<li><a class="active" href="properties.html">Properties</a></li>--->
						<li>
							<div class="dropdown">
								<button class="dropbtn">&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
								<div class="dropdown-content">
									<a href="ownerprofile.php">Profile</a>
									<a href="logout.php">Logout</a>
								</div>
							</div>  
						</li>
						

                        <!---<li class="social-links"><a href="#"><i class="fa fa-twitter global-radius"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-facebook global-radius"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-linkedin global-radius"></i></a></li>-->
					
                    </ul>
                </div>
            </div>
        </nav>
    </header>	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<!---<div class="col-md-12">
					<h2>Properties</h2>
					<!-- Breadcrumbs 
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Properties</li>
						</ul>
					</nav>
				</div>-->
			</div>
		</div>
	</div>

	<div id="features" class="section wb">
	<div class="container">
	
			<div class="col-md-8 col-md-offset-2">
				<p class="lead"><center><h1 style="font-size:40px;">House Details</p></h1></center>
			</div><!-- end col -->
		

		<div class="row">
		<?php
								include 'config.php';
								$sql1 = "select * from house where Owner='".$_SESSION['owner']."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$Owner=$row1['Owner'];
								$Totalroom=$row1['Totalroom'];
								$Rent=$row1['Rent'];
								$Advance=$row1['Advance'];
								$Parking=$row1['Parking'];
								$Types=$row1['Type'];
								$Square=$row1['Square'];
								$Address=$row1['Address'];
								$Nearby=$row1['Nearby'];
								$Agreement=$row1['Agreement'];
								$image=$row1['image'];
								$rules=$row1['rules'];
								$status=$row1['status'];
			?>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
			
				<div class="service-widget">
					<div class="property-main">
						<div class="property-wrap">
							<figure class="post-media wow fadeIn">
                      <a href="uploads/<?php echo $image; ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/<?php echo $image; ?>" alt="<?php echo $image; ?>" class="img-responsive" style="height:250px; width:380px;"></i>
								
								<div class="price">
									<span class="item-sub-price"><?php echo $Types; ?> </span> 
									
								</div>
							</figure>
							<div class="item-body">
								<h3><?php echo $Nearby; ?></h3>
								<h3><center><?php echo $status; ?></center></h3>
								<div class="info">
									<p><span>Rent:<?php echo $Rent; ?></span><p>Advance:<span>
									<?php echo $Advance; ?></span> <span><p>Square Feet:<?php echo $Square; ?></span> <span><p>Parking lot Available:<?php echo $Parking; ?></span> <span><p>Agreement:<?php echo $Agreement; ?></p></span><span><p>Total Rooms:<?php echo $Totalroom; ?></span></p>
									 
								</div>
								<div class="info">
									<p><span>Rules and regulations:<?php echo $rules; ?></span>
									 
								</div>
								<div class="adderess">
									<i class="fa fa-map-pin" aria-hidden="true"></i>
									<?php echo $Address; ?>
								</div>
							</div>
						</div>
						<div class="item-foot">
							<div class="pull-left">
								<span class="prop-user-agent">
									<i class="fa fa-user" aria-hidden="true"></i>
									Owner :<?php echo $Owner; ?>
								</span>
							</div>
							<div class="pull-right">
							<form method="get" action="">
								<span class="prop-date">
									<i class="fa fa-delete" aria-hidden="true"></i>
                                    <a href="houseupdate.php?update=<?php echo $id;?>"
									 class="btn">UPDATE</a>		
                                     <a href="viewhouse.php?delete=<?php echo $id;?>" onsubmit="return confirm('Are you sure you want to delete?')" class="btn">DELETE</a>
								</span>
								</form>
							</div>
							
						</div>
					</div>
				</div><!-- end service -->
			</div>
						<?php
				}
				}
				else
				{
						   echo "<script> alert('No House added'); </script>";
						   echo "<script> location.href='ownerhome.php'; </script>";

				}
				?>

			<?php
								if(isset($_GET['delete']))
								{
									$did=$_GET['delete'];
									$sql2 = "delete from house where id='".$did."'";
									mysqli_query($con,$sql2) or die(mysqli_error($con));
									
									$sql3 = "UPDATE booking SET delstatus='House Deleted' WHERE houseid='".$id."'";
					
									// Execute query
									mysqli_query($con, $sql3)or die(mysqli_error($con));
								
								   echo "<script> alert('House deleted'); </script>";
									echo "<script> location.href='viewhouse.php'; </script>";
								}
								?>
		</div><!-- end row -->
		
	</div><!-- end container -->
</div><!-- end section -->

     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title" style="margin-top:-130px;">
                       <img src="images/2020.png" style="width:270px;height:280px;margin-top:10px;" alt="">
							<p style="margin-top:-60px;"> The HomeKey is best application to find rented room in all over localty. The customer contact and the easy search of suitable place of House based on Money, Limited Person and suitable house.This app is best application for  making House rental an easy process through the online system. It involves offering and renting outlets for rent in particular area.</p>
                        </div>
                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Info Link</h3>
                        </div>

                        <ul class="twitter-widget footer-links">
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="homeabout.php"> About Us </a></li>
							<li><a href="contact.php"> Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
				<div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">homekeyrentals.com</a></li>
                            <li><a href="#">www.yourhomesite.com</a></li>
                            <li><p>Brill Brenhill</p> Hash Infotech kulashekhara,Mangalore</li>
                            <li>+919856997854</li>
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">City Real Estate</a> Design By : <a href="https://html.design/">html design</a></p>
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