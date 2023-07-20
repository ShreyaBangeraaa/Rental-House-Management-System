<?php
session_start();
$hid=$_GET['update'];
$bid=$_GET['bid'];
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
  <head>
  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form validation</title>
  </head>
  <body>
 
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
						 <li><a  class="active" href="viewrequests.php">View Request</a></li>      
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
    </header>	  <div class="parallax" style="background-color:#EAEDED;">
	 
        <div class="container">
            <div class="row">
	  <?php
					
					include 'config.php';
					$sql1 = "select * from house where id='".$hid."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					$sl=0;
					if($num1 > 0)
					{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$sl+=1;
							$id=$row1[0];
							$name=$row1['Owner'];
							$totalroom=$row1['Totalroom'];
							$rent=$row1['Rent'];
							$advance=$row1['Advance'];
							$parking=$row1['Parking'];
							$types=$row1['Type'];
                            $square=$row1['Square'];
						    $address=$row1['Address'];
							$nearby=$row1['Nearby'];
							$agreement=$row1['Agreement'];
						    $image_name=$row1['image'];
							$status=$row1['status'];
			?>
	  <?php
								include 'config.php';
								$hid=$_GET['update'];
								$sql1 = "select booking.id,house.Owner, house.Rent, house.Address, house.Nearby, house.image, user.username, user.phone, booking.useremail, user.address, booking.houseid,house.Type from house inner join booking on house.id=booking.houseid inner join user on user.email=booking.useremail where booking.Owneremail='".$_SESSION['owner']."' and booking.houseid='".$hid."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
									
								{ 
								$sl+=1;
								//$id=$row1[0];
								$Owner=$row1[1];
								//$Rent=$row1[2];
								//$Address=$row1[3];
								//$Nearby=$row1[4];
								//$image=$row1[5];
								$username=$row1[6];
								$phone=$row1[7];
								$email=$row1[8];
								$useraddress=$row1[9];
								//$houseid=$row1[10];
								//$Types=$row1[11];
								}
								}
			?>
	<?php
								include 'config.php';
								$hid=$_GET['update'];
								$sql1 = "select Rent,Advance,Agreement from house where Owner='".$_SESSION['owner']."' and id='".$hid."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								
								//$id=$row1[0];
								
								$Rent=$row1['Rent'];
								$Advance=$row1['Advance'];
								$Agreement=$row1['Agreement'];
		?>
		<form action="#" method="post">
		  
			<p>
				<label for="adv">Advance</label>
				<input id="advance" name="advance" type="text"  value="<?php echo $Advance; ?>">
			</p>
			<p>
				<label for="rent">Rent for month</label>
				<input id="rent" name="rent" type="text"  value="<?php echo $Rent; ?>">
			</p>
			<p>
				<label for="agree">Duration of agreement</label>
				<input id="agreement" name="agreement" type="text" value="<?php echo $Agreement; ?>">
			</p>
			<p>
				<label for="agree">Door No</label>
				<input id="dno" name="dno" type="text" required="">
			</p>
			<p>
				<label for="rr">RR Number</label>
				<input id="rr" name="rr" type="text" required="">
			</p>
			
			<p>
				<input type="submit" value="OK" id="submit" name="confirm">
			</p>
			</div>
		</div>
		</div>
		</form>
				<?php
								}
								}
								if(isset($_POST['confirm']))
								{
									
									 include("config.php");
                                    // $Advance=$_POST['advance'];
		                             //$Rent=$_POST['rent'];
		                             $dno=$_POST['dno'];
									  $rr=$_POST['rr'];
	                               	//$Agreement=$_POST['agreement'];
									$query = "insert into rentusers(owneremail,name,phone,useremail,useraddress,rent,advance,agreement,door_no,rr) values('".$Owner."','".$username."','".$phone."','".$email."','".$useraddress."','".$Rent."','".$Advance."','".$Agreement."','".$dno."','".$rr."')";
                                      mysqli_query($con,$query) or die(mysqli_error($con));
									  
									  $sql2 = "update house set status='NOT AVAILABLE' where id='".$hid."'";
									mysqli_query($con,$sql2) or die(mysqli_error($con));
								
									$sql2 = "update booking set status='Accepted' where id='".$bid."'";
									mysqli_query($con,$sql2) or die(mysqli_error($con));									
                                   												
		                              echo "<script>
				                      alert('Data inserted');</script>";
									  echo "<script>  location.href='viewuser.php';</script>"; 
									
								}
									}
					}
					
			           
								
				?>
									  
							 	
										
		
		<script src="https://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/app.js" type="text/javascript" charset="utf-8"></script>
	
	</head>
	<style>
	body {
		margin:95px 5px;
	height:1000px;
	font-family: sans-serif;
	font-size: 10px
}

form {
	background: #fff;
	padding: 2em 2em 2em;
	max-width: 450px;
	margin: 130px auto 0;
	box-shadow: 0 0 1em #222;
    margin-top:-100px;
	border-radius: 5px;
}

p {
	margin: 0 0 3em 0;
	position: relative;
}

label {
	display: block;
	font-size: 1.6em;
	margin: 0 0 .5em;
	color: #333;
}

input {
	display: block;
	box-sizing: border-box;
	width: 100%;
	outline: none
}

input[type="text"],
input[type="password"] {
	background: #f5f5f5;
	border: 1px solid #e5e5e5;
	font-size: 1.6em;
	padding: .8em .5em;
	border-radius: 5px;
}

input[type="text"]:focus,
input[type="password"]:focus {
	background: #fff
}

.left,
.right {
	border-radius: 5px;
	display: block;
	font-size: 1.3em;
	text-align: center;
	position: absolute;
	background: #2F558E;
	padding: 7px 10px;
	color: #fff;
}

.left {
	left: -60%;
	top: 18px;
	width: 200px;
}

.right {
	left: 105%;
	top: 25px;
	width: 160px;
}

.left:after,
.right:after {
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	top: 50%;
	pointer-events: none;
	border-color: rgba(136, 183, 213, 0);
	border-width: 8px;
	margin-top: -8px;
}

.right:after {
	right: 100%;
	border-right-color: #2F558E;
}

.left:after {
	left: 100%;
	border-left-color: #2F558E;
}

input[type="submit"] {
	background: #A8cF45;
	box-shadow: 0 3px 0 0 #A8cF45;
	border-radius: 5px;
	border: none;
	color: #fff;
	cursor: pointer;
	display: block;
	font-size: 2em;
	line-height: 1.6em;
	margin: 2em 0 0;
	outline: none;
	padding: .8em 0;
	text-shadow: 0 1px #68B25B;
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

</body>
</html>