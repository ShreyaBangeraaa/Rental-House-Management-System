<?php 
session_start();
if(isset($_GET['viewpayment']))
{
$_SESSION['dno']=$_GET['viewpayment'];
}
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
	
<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

*{
  margin: 0;
  padding: 0;   
  box-sizing: border-box;
  
}
body{
 
  padding: 0 10px;
}
.wrapper{
  max-width: 650px;
  width: 100%;
  background: #fff;
  margin: 95px auto;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 15px;
  background: #a8cf45;
   border-radius:20px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 35px;
  color: white;
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
   width: 200px;
   color: #000000;
   margin-right: 10px;
  font-size: 14px;
 
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 150%;
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
  width: 100%;
   padding: 8px 10px;
  font-size: 17px; 
  border: 10px;
  background: white;
  color: #00000;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
  
  
}

.wrapper .form .inputfield .btn:hover{
  background:#a8cf45;
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
	height:310px;
	position: absolute;
    left: 0;
    top: 0;
	margin:200px 80px;
  
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
			<!--<div class="payment">
		<br><a href="ownerrentdtl.php" style="color:black;"><button class="button">RENT PAID DETAILS</button></a>
        <br><br><a href="ownerelect.php" style="color:black;"><button class="button">ELECTRICITY PAID DETAILS</button></a>
        <br><br><a href="ownermaintain.php" style="color:black;"><button class="button">MAINTAINANCE CHARGES</button></a>
		</div>-->
                <div class="col-md-6 wow slideInLeft nohidden-xs nohidden-sm">
				
	<div class="wrapper" style="margin-right:50px;margin-top:190px;">
	<a href="viewuser.php"><i class="fa fa-close" style="float:right;margin-top:-10px;margin-right:-10px;font-size:25px;color:black"></a></i>
    <div class="title" style="color:black">
     Maintainance charges
	  
    </div>
	
    <div class="form">
<?php
					include 'config.php';
					$sql1 = "select * from rentusers where door_no='".$_SESSION['dno']."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					
					if($num1 > 0)
					{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$id=$row1[0];
							$door_no=$row1[1];
							$advance=$row1[7];
							
						}
						
					}
					else{
						
					}
							?>
       <div class="inputfield">
	   <a href="userview.php"></a>
     <form action="" method="post" enctype="multipart/form-data">
		     
       
	</div>
	   <div class="inputfield">
          <label>Door Number:</label>
          <input type="text" class="input" name="dno" value="<?php echo $_SESSION['dno'];?>">
       </div>
	   
	   <div class="inputfield">
          <label>Date:</label>
          <input type="date" class="input" name="date" required>
       </div> 
	    <div class="inputfield">
          <label>Nature of work:</label>
		   <select input type="text" class="input" name="nature_work" required>
       
		   <option value="">Select</option>
              <option value="painting">Painting</option>
              <option value="pluming">Pluming</option>
			  <option value="wiring">Wiring</option>
			    <option value="window/door repair">Window/door repair</option>
				<option value="truss">Truss Work</option>
				<option value="compound">Compound Works</option>
	
            </select>
        
	</div>
	   
	   <div class="inputfield">
          <label>Total charges:</label>
      <input type="text" class="input" name="totalcharge" required>
   </div> 
   <div class="inputfield">
          <label>Advance:</label>
     <input type="text" class="input" name="advance" value="<?php echo $advance;?>" >
   </div> 
 
        
   <div class="inputfield">
       <input type="submit" value="SUBMIT" class="btn" name="submit" >
      </div>
	  
    </div>
	<?php 
include("config.php");

error_reporting(0); // For not showing any error
	
if (isset($_POST['submit'])) 
   { // Check press or not Post Comment Button
    $dno = $_POST['dno']; 
	$date = $_POST['date'];
    $nature_work = $_POST['nature_work']; 
	$totalcharge= $_POST['totalcharge']+5000; 
	$advance = $_POST['advance'];
    $remain = $advance-$totalcharge;
	
	$sql = "INSERT INTO maintain (door_no,date,nature_work,totalcharge,advance,remaining_advance)
			VALUES ('".$dno."', '".$date."', '".$nature_work."','".$totalcharge."','".$advance."','".$remain."')";
   $result = mysqli_query($con, $sql);
	if ($result) {
		echo "<script>alert('Submitted.')</script>";
	} else {
		echo "<script>alert(' Not submitted.')</script>";
	}

 

$sql2 = "UPDATE rentusers SET advance='".$remain."' WHERE door_no='".$_SESSION['dno']."'";	
	
	$result = mysqli_query($con, $sql2);
	if ($result) {
		echo "<script>alert('updated.')</script>";
									echo "<script> location.href='viewuser.php'; </script>";

		
	}
   }
?>

 </form>   
</div>
               
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