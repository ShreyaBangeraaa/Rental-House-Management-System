<?php 
session_start();
if(isset($_SESSION['owner']))
{
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
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
 
  padding: 0 10px;
}
.wrapper{
  width: 900px; 
  margin: 150px 100px;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 5px 50px;
    background: linear-gradient(to bottom left, #00cc66 0%, #99ff66 100%);

  border-radius:20px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 35px;
  color:black;
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
   width: 150px;
   color: #000000;
   margin-right: 10px;
  font-size: 14px;
 
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 30%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 10px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 110%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 30%;
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
  width: 40%;
   padding:2px ;
  font-size: 20px; 
  border: 20px;
  background: white;
  color: black;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
  margin:10px 200px;
 
  
}


.wrapper .form .inputfield .btn:hover{
  background:#397CD8;
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
						 <li><a class="active" href="addhome1.php">Add House</a></li>
						 <li><a href="viewhouse.php">View House</a></li>
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
    </header>
	
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
	
    
	<div class="parallax first-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm" style="margin-top:100px;">
				<div class="wrapper">
    <div class="title">
      Enter House Details Here
    </div>
    <div class="form" >
       
	    
     <form action="#"
           method="post"
           enctype="multipart/form-data">
		    <div class="inputfield">
          <label>Owner Email:</label>
          <input type="text" class="input" name="owner" value="<?php echo $_SESSION['owner'];?> ">
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;Total rooms:</label>
          <input type="text" class="input" name="totalroom" required>
       </div>
			 
          
       
	   
        <!--<div class="inputfield">
          <label>Room for:</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="input" value="family" name="roomfor">Family
		  <input type="radio" class="input" name="roomfor" value="bachelour">Bachelour

       </div>---> 
	   <div class="inputfield">
          <label>Rent:</label>
          <input type="text" class="input" name="rent" required>
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;Advance Amount:</label>
          <input type="text" class="input" name="advance" required>
       </div> 
	   
          
       
	   <div class="inputfield">
          <label>Parking lot available:</label>
          <input type="radio" class="input" value="yes" name="parking" required>Yes
		  <input type="radio" class="input" name="parking" value="no" required>No

       </div>

        <div class="inputfield">
          <label>Room type:</label>
          <div class="custom_select">
            <select id="ddlModels" name="types" required >
              <option value="">Select</option>
              <option value="1 BHK">1 BHK</option>
              <option value="2 BHK">2 BHK</option>
			  <option value="3 BHK">3 BHK</option>
			  <!--<option value="4">Other</option>-->
            </select>
			
          </div>
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;Square feet:</label>
          <input type="text" class="input" name="square" required>
       </div> 
	    
      <div class="inputfield">
	  <label>Address:</label>
          <textarea class="input" name="address"required></textarea>
          <label>&nbsp;&nbsp;&nbsp;&nbsp;Near by:</label>
          <input type="text" class="input" style="text-transform: capitalize;" name="nearby" required>
		  </div>
		  <div class="inputfield">
		  <label>Agreement:</label>
          <input type="text" class="input" name="agreement" required>
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;Upload Image</label>
    <input type="file" class="input" name="image" required>
       </div> 
   <div class="inputfield">
	  <label>Rules & regulations:</label>
          <textarea class="input" name="rules" style="width:650px;"></textarea>
		  </div>
      <br><div class="inputfield">
       <input type="submit" value="SUBMIT" class="btn" name="submit" style="border-radius:10px;height:35px;">
      
       
      </div>
	   </div>
	   </form>
	   <?php
if(isset($_POST['submit']))
{
	
	error_reporting(1);
	include("config.php");
	   $Owner=$_POST['owner'];
		$Totalroom=$_POST['totalroom'];
		$Rent=$_POST['rent'];
		$Advance=$_POST['advance'];
		$Parking=$_POST['parking'];
        $Type=$_POST['types'];
		$Square=$_POST['square'];
		$Address=$_POST['address'];
		$Nearby=$_POST['nearby'];
	    $Agreement=$_POST['agreement'];
	
		$image_name = $_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $folder="uploads/".$image_name;
		move_uploaded_file($tmp_name,$folder);
			$rules=$_POST['rules'];
				// Insert into Database
				$query = "insert into house(Owner,Totalroom,Rent,Advance,Parking,Type,Square,Address,Nearby,Agreement,image,rules) values('".$Owner."','".$Totalroom."','".$Rent."','".$Advance."','".$Parking."','".$Type."','".$Square."','".$Address."','".$Nearby."','".$Agreement."','".$image_name."','".$rules."')";
				mysqli_query($con,$query) or die(mysqli_error($con));
            
			echo "<script>
				alert('House Details Added.');
			</script>";
			
		}			
	
?>
                   
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


    <a href="#" id="scroll-to-top" class="dmtop global-radius" style="margin-top:700px;"><i class="fa fa-angle-up" ></i></a>

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