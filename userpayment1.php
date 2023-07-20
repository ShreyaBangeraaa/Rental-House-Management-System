
<?php 
session_start();
if(isset($_GET['dno'])&&isset($_GET['owner']))
{
	$_SESSION['owner']=$_GET['owner'];
$_SESSION['dno']=$_GET['dno'];
}
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

	background-color:#000000;
	width:460px;
	border-radius: 30px;
	box-shadow:10px 8px 20px 10px rgba(0, 0, 0, 0.20);
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
	

	
</style>
</head>
<body class="realestate_version">

    
    <?php include('userheader.php')?>

	
	<ul class='slideshow'>
		
	</ul>
	
    
	<div class="parallax first-section" style="background-image:url('images/house4.jpg');width:100%;height:100%;">
        <div class="container">
		 <div class="row">
		<div class="payment" style="  background-color:rgb(0,0,0,0.9);padding:50px;">
		<?php
					include 'config.php';
					$sql1 = "select * from rentusers where useremail='".$_SESSION['rentuser']."'";
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
							$rent=$row1[6];
							$advance=$row1[7];
							$agreement=$row1[8];
							$dno=$row1[9];
							?>
							
							<?php
						}
			?>
	<a href="payment_rent.php" style="color:black;"><button class="button" style="margin-top:10px;">RENT PAYMENT</button></a>
    <a href="payment.php" style="color:black;"><button class="buttons" style="margin-top:-10px;">ELECTRICITY PAID DETAILS</button></a>
	<a href="waterbill.php" style="color:black;"><button class="button" style="margin-top:-10px;">WATER BILL PAID DETAILS</button></a> 
	<a href="maintenance.php" style="color:black;"><button class="button" style="margin-top:-10px;">MAINTAINANCE DETAILS</button></a>
	 <?php 
					}
					else
					{
						?>
				<br><a href="h.php" style="color:black;"><button class="button">RENT PAYMENT</button></a>
						<?php
					}
					?>
		</div>
           </div>
		   </div>
		   </div>

</body>
</html>