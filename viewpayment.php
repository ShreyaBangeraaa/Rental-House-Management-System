
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
.button{
	width:280px;
	height:50px;
	border-radius:30px;
	border:2px solid #a8cf45;
    margin:10px 50px;	
}
.button:hover{
	background-color:#a8cf45;
}
.payment{

	background-color:#000000;
	width:400px;
	border-radius: 30px;
	box-shadow:10px 8px 20px 10px rgba(0, 0, 0, 0.20);
	margin: 250px 100px;	
	font-family:'Open Sans',times new roman;
	height:390px;
	position: absolute;
    left: 0;
    top: 0;
	margin:200px 450px;
  
}
	
	
</style>
</head>
<body class="realestate_version">

    
    <?php include('ownerheader.php')?>

	
	<ul class='slidesho'>
		
	</ul>
	
    
	<div class="parallax first-n" style="background-image:url('images/house5.jpg');width:100%;height:100%;">

        <div class="container">
		 <div class="row">
		 	<?php if(isset($_GET['viewpayment']))
			{
				$_SESSION['dno']=$_GET['viewpayment'];
			}?>
		<div class="payment">
		<br><a href="ownerrentdtl.php"  style="color:black;font-size:18px;"><button class="button" style="height:70px;">RENT PAID DETAILS</button></a>
        <br><br><a href="ownerelect.php" style="color:black; font-size:18px;"><button class="button" style="height:70px;">ELECTRICITY PAID DETAILS</button></a>
        <br><br><a href="ownermaintain.php" style="color:black; font-size:18px;"><button class="button" style="height:70px;">MAINTAINANCE CHARGES</button></a>
		</div>

           </div>
		   </div>
		   </div>
                
                              
	
	

</body>
</html>