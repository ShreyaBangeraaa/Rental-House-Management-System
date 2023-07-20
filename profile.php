<?php
session_start();
if(isset($_SESSION['rentuser']))
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

    <?php include('userheader.php')?>

	
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
					$sql1 = "select * from user where email='".$_SESSION['rentuser']."'";
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
							$phone=$row1['phone'];
							$email=$row1['email'];
							$address=$row1['address'];
							$adhar=$row1['adhar'];
							$nation=$row1['nation'];
			?>
				<div class="wrapper" >
<form action="#" method="post" class="form-area" style="margin-bottom:-90px;" >
<div class="details-area" ><a href="userhome.php"><i class="fa fa-close" style="float:right;margin-right:-20px;margin-top:-10px;font-size:25px;color:white;"></i></a>
<h2 style="color:white;">MY PROFILE</h2>
<label for="name" >Name</label>
<input type="text" name="username"  value="<?php echo $name;?>" style="margin:0px 80px;width:310px;margin-bottom:0.8em;" >
<p><label for="phone">Phone number</label>
<input type="text" name="phone"  value="<?php echo $phone; ?>"  style="margin:0px 10px;width:310px;" >
<p><label for="email">Email</label>
<input type="text" name="email" id="email"  value="<?php echo $email; ?>"style="margin:0px 80px; width:310px;" readonly="true">
<p><label for="adhar">Adhar Number</label>
<input type="text" name="adhar" id="adhar"  value="<?php echo $adhar; ?>"style="margin:0px 10px; width:310px;" >
<p><label for="nation">Nationality</label>
<input type="text" name="nation" id="nation"  value="<?php echo $nation; ?>"style="margin:0px 30px; width:310px;" >
<p><label for="address" style="margin-top:-100px;">Address</label>
<textarea type="text" name="address"  style="margin:0px 55px; width:310px;border-radius:20px;" ><?php echo $address; ?></textarea>
<p><center><button type="submit" name="update" style="border-radius:20px;">UPDATE</button></center>

</div>
</form>
</div>
<?php 
						}
					}
					if(isset($_POST['update']))
					{
					$name1=$_POST['username'];
					$phone1=$_POST['phone'];
					$email1=$_POST['email'];
					$address1=$_POST['address'];
					$sql2 = "UPDATE `user` SET `username`='".$name1."',`phone`='".$phone1."', `address`='".$address1."' WHERE `email`='".$_SESSION['rentuser']."'";
					
					
					// Execute query
					mysqli_query($con, $sql2);
					echo "<script>
								alert('Upload Successful');
							</script>";
							
							echo "<script> location.href='profile.php'; </script>";
					}
					?>
                    
                </div>
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section---.

    

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

	
	
	
					
                        </div>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>
</html>
<?php
}
else
{
	echo "<script> location.href='userlogin.php'; </script>";
}
?>