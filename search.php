<?php
session_start();
$rentuser=$_SESSION['rentuser'];
if(isset($_POST['searchname']))
{
	$searchname=$_POST['searchname'];
	$_SESSION['sname']=$searchname;
}
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
.search_wrap{
	width: 500px;
	margin: 38px auto;
}

.search_wrap .search_box{
	position: relative;
	width: 500px;
	height: 60px;
	margin:5px 370px;
	margin-top:-90px;
}

.search_wrap .search_box .input{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	padding: 10px 20px;
	border-radius: 3px;
	font-size: 18px;
}

.search_wrap .search_box .btn{
	position: absolute;
	top: 0;
	right: 0;
	width: 60px;
	height: 100%;
	background: #a8cf45;
	z-index: 1;
	cursor: pointer;
}

.search_wrap .search_box .btn:hover{
	background: #a8cf45;	
}

.search_wrap .search_box .btn.btn_common .fas{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: #fff;
	font-size: 25px;
}

.search_wrap.search_wrap_1 .search_box .btn{
	right: 0;
	border-top-right-radius: 3px;
	border-bottom-right-radius: 3px;
}

.search_wrap.search_wrap_1 .search_box .input,
{
	padding-right: 80px;
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
                        <li><a href="userhome.php">Home</a></li>
                        <li><a href="userabout.php">About us</a></li>
                         <li><a class="active" href="searchroom.php">Search House</a></li>
						 <li><a href="myrequest.php">My Request</a></li>								
                    <li><a href="userpayment.php">My Rentals</a></li>
			             <li><a href="comment.php">Feedback</a></li>
						 <li>
							<div class="dropdown">
								<button class="dropbtn">&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
								<div class="dropdown-content">
									<a href="profile.php">Profile</a>
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
		<div class="containerr">
		<div class="search_wrap search_wrap_1">
			<div class="search_box">
				<form method="post" action="#">
				<input type="text" name="searchname" class="input" placeholder="search...">
				<button class="btn btn_common" type="submit" name="search">
					<i class="fa fa-search" style="height:50px;";></i>
				</button>
				</form>
			</div>
		</div>
					
					
				</div>
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</div>

	<div id="features" class="section wb">
	

	<div class="container">
	
		<div class="section-title row text-center">
		
			<div class="col-md-8 col-md-offset-2">
			
				<small>Your Dream House</small>
				<h3>House Details</h3>
				<p class="lead">.</p>
			</div><!-- end col -->
		</div><!-- end title -->
		
		<hr class="invis"> 

		<div class="row">
		<?php
								include 'config.php';
								$searchn=substr($_SESSION['sname'],0,2);
								$sql1 = "select * from house where Nearby='".$_SESSION['sname']."' AND status='AVAILABLE'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1==0)
								{
									$sql1 = "select * from house where Nearby LIKE '".$searchn."%' AND status='AVAILABLE'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
								}
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
								<form method="post" action="#">
								<input type="text" name="hid[]" value="<?php echo $id; ?>" hidden="true">
								<input type="text" name="owner[]" value="<?php echo $Owner;?>" hidden="true">
								<span class="prop-user-agent">
									<i class="fa fa-user" aria-hidden="true"></i>
									Owner :<?php echo $Owner; ?>&nbsp;&nbsp;&nbsp;&nbsp; 
								</span>
							</div>
							<button type="submit" class="btn"><b>&nbsp;&nbsp;REQUEST</nutton></b>
							</form>
						</div>
						
					</div>
				</div><!-- end service -->
			</div>

			<?php
				}
				}
				else
				{
					?>
					<h2>No result For Your Search</h2>
					<?php
				}
				?>
				<?php
								if(isset($_POST['owner']))
								{
									
									error_reporting(1);
	                                include("config.php");
	                                //$houseid=$_POST['houseid'];
		                          //  $owneremail=$_POST['owner'];
		                            $rentuser=$_POST['useremail'];
									foreach ($_POST['owner'] as $key => $owner) 
									{	
										$owneremail=$owner;	
									}
									foreach ($_POST['hid'] as $key => $hid) 
									{	
										$houseid=$hid;	
									}
									$sql2 = "insert into booking(houseid,owneremail,useremail)values('".$houseid."','".$owneremail."','".$_SESSION['rentuser']."')";								
									mysqli_query($con,$sql2) or die(mysqli_error($con));
								   echo "<script> alert('Request sent...'); </script>";


								}
								?>
		

		
				
		
		
	</div>
</div>

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