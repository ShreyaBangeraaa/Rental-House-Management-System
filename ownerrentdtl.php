<?php
session_start();
if(isset($_SESSION['owner']))
{
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


body{
	overflow-x:hidden;  
}
table {
	
  width: 100%;
 
  font-family: 'Times new roman', sans-serif;
}

.tbl-header {
  margin-top:100px;
}

.tbl-content {
  height: 320px;
  overflow-x: auto;
  
}

th {
  padding: 20px 15px;
  text-align: center;
  font-weight: 500;
  font-size: 19px;
  color: #fff;
  text-transform: captilize;
  background-color:#282828
}

td {
  padding: 17px;
  text-align:center;
  vertical-align: middle;
  font-weight: 300;
  font-size: 17px;
  color: #262626;
  border-bottom: solid 1px rgba(255, 255, 255, 0.1);
 }
tr{
	background-color:#9AFB84;
}



::-webkit-scrollbar {
  width: 0px;
}

::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.2);
}

::-webkit-scrollbar-thumb {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.2);
}
.boxed {
  border: 4px solid black ;
  width:70px;
  border-radius:20px;
}
.boxe {
  border: 3px solid green ;
  border-radius:20px;
    width:80px;
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
.box{  
  background-color: lightblue; 
  position: absolute; 
  height: 40px; 
  width: 70px; 
  left: 88%; 
  top: 10%; 
}
.box1{  
  background-color: #9AFB84; 
  position: absolute; 
  height: 40px; 
  width: 70px; 
  left: 83%; 
  top: 10%; 
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
						 <li><a href="viewrequests.php">View Request</a></li>      
                        <li><a class="active" href="viewuser.php">View Users</a></li>
                
                   
						
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

	<form method="post">
<div class="parallax" style="background-color:#EAEDED;">
<div class="box" style="margin-left:100px; ">
Pending</div>
<br><br><div class="box1" style="margin-left:100px; ">
&nbsp;&nbsp;
&nbsp;&nbsp;paid
</div>


        <div class="container">
		 <div class="row">
		 <form method="post" action="#">
		 <input type="text" name="door_no" placeholder="Enter Door Nmuber" style="margin:0 1300px;margin-top:10px;font-family:times new roman;font-size:20px;margin-left:-50px;" required=""><br>

<input type="submit" name="search" value="Search" style="margin:0 1300px;margin-top:5px;font-family:times new roman;font-size:20px;margin-left:-50px;">
		 <!---<select style="margin:0 1300px;margin-top:-10px;font-family:times new roman;font-size:25px;margin-left:-50px;" name="month"  onchange="javascript:this.form.submit()">
<option value="">Select a Month</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="may">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="september">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>--->
		
</form>
		<CENTER><H1 style="margin-top:-100px;font-family:times new roman;font-size:40px;"><b>RENT PAYMENT DETAILS</H1></B></H1>
		
		
<section> <!--for demo wrap-->
<section style="margin:0px -180px;margin-top:-20px;margin-left:-200px;"> <!--for demo wrap-->
<section> <!--for demo wrap-->

<center>
  <div class="tbl-header" style="width:1500px;margin-left:10px;">

    <table cellpadding="0" cellspacing="0" border="1">
      <thead>
        <tr>
          <tr>
	<th style="width:70px;">S.NO</th>
	<th style="width:130px;">Name</th>
	<th style="width:149px;">Phone NO.</th>
     <th style="width:100px;">Rent</th>	
     <th style="width:120px;">Advance</th>	
     <th style="width:120px;">Agreement</th>	
     <th style="width:100px;">Door No</th>
<th style="width:160px;">Date of Payment</th>	 
	      <th style="width:100px;">Month</th>	
     <th style="width:120px;">Amount paid</th>
     <th style="width:120px;">Balance</th>
	
	</tr>
        </tr>
      </thead>
</table>	  
  </div>
  <div class="tbl-content" style="width:1500px;margin-left:10px;margin-top:-10px;">
   <table cellpadding="0 " cellspacing="0" border="1">
      <tbody>
        <tr>
         <?php
								if(isset($_POST['search']))
								{
									
								include 'config.php';
								
								$dno=$_POST['door_no'];
								$_SESSION['dno']=$dno;
								$sql1 = "select rentusers.*,rent.date,rent.month,rent.amount,rent.balance,rent.amountpaid from rentusers inner join rent on rent.door_no=rentusers.door_no where rentusers.owneremail='".$_SESSION['owner']."'   and rent.door_no='$dno'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
									
								{ 
								$sl+=1;
		                        $id=$row1[0];
								$username=$row1['name'];
								$phone=$row1['phone'];
								$email=$row1['useremail'];
								$useraddress=$row1['useraddress'];
								$rent=$row1['rent'];
								$advance=$row1['advance'];
								$agreement=$row1['agreement'];
								$dno=$row1['door_no'];
								$date=$row1['date'];
								$amt=$row1['amount'];
								$mon=$row1['month'];
								$amountpaid=$row1['amountpaid'];
						     	$balance=$row1['balance'];						
			?>    
	<tr <?php if($amountpaid<$rent){ ?>style="background-color:lightblue;"<?php }?>>
	<td style="width:70px;"><?php echo $sl; ?></td>
	<td style="width:130px;"><?php echo $username; ?></td>
	<td style="width:149px;"><?php echo $phone; ?></td>
	<td style="width:100px;"><?php echo $rent; ?></td>
	<td style="width:120px;"><?php echo $advance; ?></td>
	<td style="width:120px;"><?php echo $agreement; ?></td>
	
	<td style="width:100px;"><b><?php echo $dno; ?></td></b>
		<td style="width:160px;"><?php echo $date; ?></td>

	<td style="width:100px;"><?php echo $mon;?></td>
	<td style="width:120px;"><?php echo $amountpaid; ?></td>
	<td style="width:120px;"><?php echo $balance; ?></td>
   
		</tr>
	 <?php	
				}
			}
			else
			{
				?>
				<td style="width:100px;" colspan="11">No Records</td>
				<?php
			}
								
								}
								
										else
{							
								include 'config.php';
								
								$sql1 = "select rentusers.*,rent.date,rent.month,rent.amount,rent.balance,rent.amountpaid from rentusers inner join rent on rent.door_no=rentusers.door_no where rentusers.owneremail='".$_SESSION['owner']."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
									
								{ 
								$sl+=1;
		                        $id=$row1[0];
								$username=$row1['name'];
								$phone=$row1['phone'];
								$email=$row1['useremail'];
								$useraddress=$row1['useraddress'];
								$rent=$row1['rent'];
								$advance=$row1['advance'];
								$agreement=$row1['agreement'];
								$dno=$row1['door_no'];
								$date=$row1['date'];
								$amt=$row1['amount'];
								$mon=$row1['month'];
								$amountpaid=$row1['amountpaid'];
							    $balance=$row1['balance'];	
								
								
			
	?>  					
		 
	<tr <?php if($amountpaid<$rent){ ?>style="background-color:lightblue;"<?php } ?>>
	<td style="width:70px;"><?php echo $sl; ?></td>
	<td style="width:130px;"><?php echo $username; ?></td>
	<td style="width:149px;"><?php echo $phone; ?></td>
	
	<td style="width:100px;"><?php echo $rent; ?></td>
	<td style="width:120px;"><?php echo $advance; ?></td>
	<td style="width:120px;"><?php echo $agreement; ?></td>
	<td style="width:100px;"><b><?php echo $dno; ?></td></b>
<td style="width:160px;"><?php echo $date; ?></td>
	<td style="width:100px;"><?php echo $mon; ?></td>
	<td style="width:120px;"><?php echo $amountpaid; ?></td>
	<td style="width:120px;"><?php echo $balance; ?></td>
   
		</tr>
	 <?php	
				}
			}
			else
			{
				?>
				<td style="width:100px;" colspan="8">No Records</td>
				<?php
			}
				
								}
								?>
					
        </tr>        
    
      </tbody>
    </table>
	
	
  </div>
</section>

<hr>
<section> <!--for demo wrap-->

<center>
  <div class="tbl-header" style="width:1500px;margin-left:10px;">
<h1 style="font-family:times new roman;"><b>Users Not Paid</h1></b>
    <table cellpadding="0" cellspacing="0" border="1">
      <thead>
        <tr>
          <tr>
	<th style="width:70px;">S.NO</th>
	<th style="width:145px;">Name</th>
	<th style="width:149px;">Phone NO.</th>
	
     <th style="width:200px;">Address</th>
     <th style="width:100px;">Rent</th>	
     <th style="width:120px;">Advance</th>	
     <th style="width:120px;">Agreement</th>	
     <th style="width:100px;">Door No</th>	
	
	</tr>
        </tr>
      </thead>
   
  </div>
  <div class="tbl-content" style="width:1500px;margin-left:10px;margin-top:-300px;">
   
      <tbody style="color:white;">
        <tr style="color:white;">
         <?php
		 if(isset($_SESSION['dno']))
									{
								include 'config.php';
								$sql1 = "SELECT ru.* FROM rentusers ru WHERE ru.door_no NOT IN (SELECT r.door_no FROM rent r) AND ru.door_no='".$_SESSION['dno']."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
									
								{ 
								$sl+=1;
		                        $id=$row1[0];
								$username=$row1['name'];
								$phone=$row1['phone'];
								$email=$row1['useremail'];
								$useraddress=$row1['useraddress'];
								$rent=$row1['rent'];
								$advance=$row1['advance'];
								$agreement=$row1['agreement'];
								$dno=$row1['door_no'];								
								
			?>    
	<tr style="background-color:white;">
	<td style="width:70px;"><?php echo $sl; ?></td>
	<td style="width:145px;"><?php echo $username; ?></td>
	<td style="width:149px;"><?php echo $phone; ?></td>
	
	<td style="width:200px;"><?php echo $useraddress; ?></td>
	<td style="width:100px;"><?php echo $rent; ?></td>
	<td style="width:120px;"><?php echo $advance; ?></td>
	<td style="width:120px;"><?php echo $agreement; ?></td>
	<td style="width:100px;"><b><?php echo $dno; ?></td></b>
	
	 <?php
				}
								}
				
				else
			{
				?>
				<td style="width:100px;" colspan="8">No Records</td>
				<?php
			}
									}
									
					?>
        </tr>        
    
      </tbody>
    </table>
	<br><div class="boxed">
  <a href="viewuser.php"><b>BACK</a></b>
  </div>
	
  </div>
</section>
</div>
</div>
</div>
</form>

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
<?php
}
else
{
	echo"<script>location.href='ownerlogin.php';</script>";
}
	?>