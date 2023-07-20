<?php
session_start();

?>

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

table {
	
  width: 90%;
  table-layout: fixed;
  font-family: 'Times new roman', sans-serif;
}

.tbl-header {
  margin-top:-60px;
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
tr:nth-child(odd){
   background-color:#e2e2e2;
}

tr:nth-child(even){
   background-color:#fff;
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
h1{
	margin:100px;
}
.close:hover{
 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
 background-color:  red;
}
.close{
	border-radius:20px;
	font-size:20px;
    width:100px;
	height:43px;
	background-color: white;	
}
.boxed {
  border: 4px solid black ;
  width:70px;
  border-radius:20px;
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
    </header><div class="parallax" style="background-color:#3aaf9f;">
        <div class="container">
		 <div class="row">
<h1><b><center style="margin-top:-80px;font-family:times new roman;font-size:30px;">MAINTAINANCE DETAILS</h1> 
 </b>

<section style="margin:50px -200px;margin-top:-50px;"> <!--for demo wrap-->

<center>
<div  class="tbl-header" style="width:1600px;">

<table cellpadding="0" cellspacing="0" border="1">
  <thead>
    <tr>
      <th style="width:100px;">SI.NO</th>
	  <th style="width:150px;">DOOR NO.</th>
      <th>DATE</th>
      <th>NATURE OF WORK</th>
      <th>TOTAL CHARGES</th>
      <th>ADVANCE</th>
	  <th>REMAINING ADVANCE</th>
	 
    </tr>
  </thead>
</table>
</div>
<div  class="tbl-content" style="width:1600px;">
<table cellpadding="0" cellspacing="0" border="1">
  <tbody>
 
<?php
								include 'config.php';
								$sql1 = "select * from maintain where door_no='".$_SESSION['dno']."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
									
								{ 
								$sl+=1;
		                        $id=$row1[0];
								$dno=$row1['door_no'];
								$date=$row1['date'];
								$nature_work=$row1['nature_work'];
								$totalcharge=$row1['totalcharge'];
								$advance=$row1['advance'];
								$remaining_advance=$row1['remaining_advance'];
								
			?>
    <tr>
	
	<td style="width:100px;"><?php echo $sl; ?></td>
	<td style="width:150px;"><?php echo $dno; ?></td>
	<td><?php echo $date; ?></td>
	<td><?php echo $nature_work; ?></td>
	<td><?php echo $totalcharge; ?></td>
	<td><?php echo $advance; ?></td>
	<td><?php echo $remaining_advance; ?></td>

	</tr>
	 <?php
				}
				}
				else
				{
echo "<script> alert('Maintainence charges are not yet applied.. '); </script>";	
echo "<script> location.href='userpayment.php'; </script>";
			}
				?>
				
  </tbody>

</table>
<br><div class="boxed">
  <a href="userpayment.php"><b>BACK</a></b>
  </div>

</div>

</section>



</div>

</div>

<script>
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</body>
</html>
