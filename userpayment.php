<?php 
session_start();
$rentemail=$_SESSION['rentuser'];
if(isset($_GET['dno'])&&isset($_GET['owner']))
{
	$_SESSION['owner']=$_GET['owner'];
    $_SESSION['dno']=$_GET['dno'];
}
?>
<html>
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
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<style>

@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  text-decoration: none;

}

body{

}

.wrapper{
  max-width: 1450px;
  width: 100%;
  height: auto;
  background: #fff;
  padding: 60px 45px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  border-radius: 20px;
}

.wrapper .title{
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: #3aaf9f;
}

.wrapper .social_media{
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.wrapper .social_media .item{
  margin: 0 5px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border: 2px solid #eeeeee;
  border-radius: 50%;
  cursor: pointer;
  color: #eeeeee;
  transition: all 0.5s ease;
}

.wrapper .social_media .item:hover{
  border: 2px solid #3aaf9f;
  color: #3aaf9f;
}

.wrapper .form .input_field{
  position: relative;
  margin-bottom: 10px;
}

.wrapper .form .input_field .input{
  width:290px;
  padding: 12px;
  padding-left: 30px;
  border: none;
  background: #eeeeee;
  font-size:18px;
}

.wrapper .form .btn{
  width: 250px;
   height:70px;
  
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
  
}
.btn{
	margin:2px 50px;
}
.wrapper .form .btnn{
  width: 250px;
   height:70px;
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
}
.btnn{
	margin:-60px 1100px;
}
.wrapper .form .btnnn{
  width: 250px;
   height:70px;
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
}
.btnnn{
	margin:-70px 400px;
}
.wrapper .form .btnnnn{
  width: 250px;
   height:70px;
 
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
}
.btnnnn{
	 margin: -60px 760px;
}

.wrapper .form .btn a{
  color: #fff;
}
.wrapper .form .btnn a{
  color: #fff;
}
.wrapper .form  .btnnn a{
  color: #fff;
}
.wrapper .form  .btnnnn a{
  color: #fff;
}

.wrapper .form .input_field i{
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 14px;
  color: #1d2120;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #1d2120;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #1d2120;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #1d2120;
}
input[type=text]{
    width:350px;
    border:5px solid #3aaf9f;
    border-radius:4px;
    
    outline:none;
    padding:8px;
    box-sizing:border-box;
    transition:.3s;
	font-size:20px;
  }
  
  input[type=text]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 8px 0 dodgerBlue;
  }
  .button{
	width:280px;
	height:60px;
	border-radius:30px;
	border:2px solid #a8cf45;
    margin:60px 30px;	
}
.button:hover{
	background-color:#a8cf45;
}
.payment{

	width:460px;
	border-radius: 30px;
	margin: 170px 100px;	
	font-family:'Open Sans',times new roman;
	height:500px;
	position: absolute;
    left: 0;
    top: 0;
	
  
}
.buttons{
	width:280px;
	height:60px;
	border-radius:30px;
	border:2px solid #a8cf45;
    margin:60px 30px;	
}
.buttons:hover{
	background-color:#a8cf45;
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
                         <li><a href="searchroom.php">Search House</a></li>
						 <li><a href="myrequest.php">My Request</a></li>								
                    <li><a class="active" href="userpayment.php">My Rentals</a></li>
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
    </header><div class="parallax" style="background-color: #3aaf9f;">
        <div class="container">
		 <div class="row">
		 <?php
		include 'config.php';
					$sql1 = "select door_no from rentusers where useremail='".$_SESSION['rentuser']."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);		
				     if($num1 > 0)
				    	{   
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$drno=$row1[0];
						}
						}
						else
				{
					echo "<script>alert('You are not a rent user...')</script>";
					echo "<script> location.href='userhome.php'; </script>";
				}
							?>
<form method="post">
<label style="margin-left:230px;"><b>Your Door Number</label></b><input type="text" value="<?php echo $drno; ?>" name="dno" readonly="true" style="margin-top:10px;margin-left:10px;border-radius:20px;">
<?php
                    if(isset($_POST['dno']))
								{
								include 'config.php';	
								
								$dno=$_POST['dno'];
					include 'config.php';
					$sql1 = "select * from rentusers where useremail='".$_SESSION['rentuser']."' and door_no='".$dno."' ";
					
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);		
				     if($num1 > 0)
				    	{   
				        $sl=0;
				
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$sl+=1;
							$id=$row1[0];
							$owner=$row1[1];
							$name=$row1[2];
							$rent=$row1[6];
							$advance=$row1[7];
							$agreement=$row1[8];
							$dno=$row1[9];
					
				?>

<div class="wrapper">
  
  <div class="form">
  
  
    <div class="input_field">
	      <label>DOOR NUMBER&nbsp;:&nbsp;<input type="text" class="input" value="<?php echo $dno; ?>" readonly="true"></label>

      <label>NAME&nbsp;:&nbsp;<input type="text" class="input" value="<?php echo $name; ?>" readonly="true"></label>
     
    
      <label>OWNER EMAIL&nbsp;:&nbsp;<input type="text"  class="input" value="<?php echo $owner; ?>"  readonly="true"></label>
   <br><br><div class="input_field">

	 
      <label>ADVANCE&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input" value="<?php echo $advance; ?>"  readonly="true"></label>
      <label>RENT&nbsp;:&nbsp;&nbsp;&nbsp;<input type="text"  class="input" value="<?php echo $rent; ?>"  readonly="true"></label>
      <label>AGREEMENT&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input" value="<?php echo $agreement; ?>"  readonly="true"><label>

    </div>
    <br><div class="btn" style="font-size:20px;width:300px;">
      <a href="maintenance.php" value="<?php echo $dno?>">View Maintainence Charges</a>
    </div>

	  <div class="btnnn" style="font-size:20px;width:300px;">
	<a href="payment_rent.php?dno=<?php echo $dno; ?>&owner=<?php echo $owner; ?>">Update Rent Paid Details</a>
	</div>
		  <div class="btnnnn" style="font-size:20px;width:300px;">
	<a href="payment.php?dno=<?php echo $dno; ?>&owner=<?php echo $owner; ?>">Update Electricty Paid Detials</a>
    </div>
	 <div class="btnn" style="font-size:20px;width:300px;">
	<a href="userhome.php">BACK</a>
    </div>
  </div>
</div>

</div>

</div>
</div>
</div>
<?php
							}
				}
								
				
					}									
	?> 
</form>

</body>
</html>