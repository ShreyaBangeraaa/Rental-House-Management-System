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
						 <li><a href="viewhouse.php">View House</a></li>
						 <li><a class="active" href="viewrequests.php">View Request</a></li>      
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
				
				<p class="lead"><center><h3 style="font-size:50px;">REQUESTS</p></h3>
			</div><!-- end col -->
		
		
		 

		<div class="row">
		<?php
								include 'config.php';
								$sql1 = "select booking.id,house.Owner, house.Rent, house.Address, house.Nearby, house.image, user.username, user.phone,booking.useremail, user.address, user.adhar, user.nation, booking.houseid,house.Type, booking.id from house inner join booking on house.id=booking.houseid inner join user on user.email=booking.useremail where booking.Owneremail='".$_SESSION['owner']."' and booking.status !='rejected'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
									
								{ 
								$sl+=1;
								$id=$row1[0];
								$Owner=$row1[1];
								$Rent=$row1[2];
								$Address=$row1[3];
								$Nearby=$row1[4];
								$image=$row1[5];
								$username=$row1[6];
								$phone=$row1[7];
								$email=$row1[8];
								$useraddress=$row1[9];
								  $adhar=$row1[10];
							   $nation=$row1[11];
								$houseid=$row1[12];
								$Types=$row1[13];      
								$bid=$row1[14];      
                             
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
								<div class="info">
									<p><span>Rent:<?php echo $Rent; ?></span>
									<p><b>USER DETAILS:</b></p>
									<p>User Name:<span><?php echo $username; ?></span></p>
									<p>Phone:<span><?php echo $phone; ?></span></p>
									<p>Email:<span><?php echo $email; ?></span></p>
									<p>Address:<span><?php echo $useraddress; ?></span></p>
								<p>Adhar Number:<span><?php echo $adhar; ?></span></p>	
                               <p>Nationality:<span><?php echo $nation; ?></span></p>								
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
									Owner:<?php echo $Owner; ?>
								</span>
							</div>
							<div class="pull-right">
							<form method="get" action="">
								<span class="prop-date">
									<i class="fa fa-delete" aria-hidden="true"></i>
                                    <a href="viewrequest1.php?update=<?php echo $houseid;?>&bid=<?php echo $bid;?>"
									 class="btn">ACCEPT</a>								
                                     <a href="viewrequests.php?delete=<?php echo $id;?>" onclick="return confirm('Are you sure you want to reject?')" class="btn" name="delete">DELETE</a>
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
				else{
					  echo "<script> alert('No Requests'); </script>";
									echo "<script> location.href='ownerhome.php'; </script>";
				}
			   if(isset($_GET['delete']))
								{
									foreach ($_GET['delete'] as $key => $delete) 
									{	
										$id=$delete;	
									}
									$sql2 = "update booking set status='Rejected' where id='".$id."'";
									mysqli_query($con,$sql2) or die(mysqli_error($con));								
								   echo "<script> alert('Request rejected'); </script>";
									echo "<script> location.href='viewrequests.php'; </script>";
								}
				?>
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