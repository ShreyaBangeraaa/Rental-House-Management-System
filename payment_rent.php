<?php 
session_start();
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
	height:200%;
overflow-y:auto;
overflow-x:hidden;

}

.wrapper{
	margin-top:-320px;
  max-width: 880px;
  width: 100%;
  height: 590px;
  background: #fff;
  padding: 60px 20px;
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
  width: 150px;
   height:70px;
  
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
  
}
.btn{
	margin:2px 150px;
}
.wrapper .form .btnn{
  width: 150px;
   height:70px;
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
}
.btnn{
	margin:-70px 500px;
}
.wrapper .form .btnnn{
  width: 150px;
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
  width: 150px;
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
table {
	
  width: 90%;
  table-layout: fixed;
  font-family: 'Times new roman', sans-serif;
}

.tbl-header {
  margin-top:-60px;
}

.tbl-content {
  height: 350px;
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
    </header><div class="parallax" style="background-color:#3aaf9f;">
        <div class="container">
		 <div class="row">
<div class="wrapper">
  
  <div class="form">
  
  <?php
					include 'config.php';
					$sql1 = "select * from rentusers where useremail='".$_SESSION['rentuser']."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					if($num1 > 0)
					{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$id=$row1[0];
							$name=$row1[2];
							$phone=$row1[3];
							$amt=$row1[6];
							
						}
					}
							?>
							<form method="post">
    <div class="input_field">
								<h2><b><center>RENT PAYMENT DETAILS</h2></center></b><br>

	      <label>DOOR NUMBER&nbsp;:&nbsp;<input type="text" class="input" name="dno" value="<?php echo $_SESSION['dno']; ?>" readonly="true"></label>
      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME&nbsp;:&nbsp;<input type="text"   name="name" class="input" value="<?php echo $name; ?>" readonly="true"></label><br><br>
   
      <label>AMOUNT&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="amt" class="input" value="<?php echo $amt; ?>"readonly="true"></label>
      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE&nbsp;:&nbsp;<input type="date"  name="date" class="input" value=""></label><br><br>
     
	 <label>AMOUNT PAID&nbsp;:&nbsp;<input type="text"   name="amountpaid" class="input" value="" required></label>
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month:</label>
          <select class="input" name="month" width="100%" required>  
		  <option value="">select</option>
		  <option value="January">January</option>
  <option value="February">February</option>
    <option value="march">March</option>
	  <option value="april">April</option> 
	  <option value="may">May</option>
	  
 <option value="june">June</option> 
<option value="July">July</option>
<option value="august">August</option>
<option value="september">September</option>
<option value="october">October</option>
<option value="november">November</option>
<option value="december">December</option> 
</select>
    </div>
	<div class="input_field">
	          <label>Select mode of payment:</label>
        
		  <select id="p" onchange="if (this.value=='Credit/Debit card'){this.form['card'].style.visibility='visible'}else {this.form['card'].style.visibility='hidden'};" class="input" name="paid" width="100%">
              <option value="">Select</option>
              <option value="Cash">Cash payment</option>
              <option value="Credit/Debit card">Credit/Debit card</option>
            </select>
        
	</div>
	<div class="input_field">
	
         
		 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input id="card" type="text" class="input" name="card" style="visibility:hidden;" placeholder="card No: XXXX-XXXX-XXXX"><br><br>
           <input type="submit" value="SUBMIT" class="btn" name="submit" style="font-size:20px;width:170px;">
      <a href="userpayment.php" value="<?php echo $dno?>"></a>
   
	          <a href="userhome.php"> <p class="btnn" name="back" style="font-size:20px;width:170px;">Back</p></a>	
	 </div>
    </div>
  </div>
  </form>
</div>
<?php 
include("config.php");

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) {


	// Check press or not Post Comment Button
    $dno = $_POST['dno']; 
	$date = $_POST['date']; 
	$name = $_POST['name'];
    $phone1 = $_POST['phone']; 
	$amt1= $_POST['amt']; 
	$amountpaid= $_POST['amountpaid'];
	$month= $_POST['month'];
	$balance= $amt1-$amountpaid;
	$paymentmode = $_POST['paid'];
    $card = $_POST['card'];	

					include 'config.php';
					$sql0 = "select date from rent where door_no='".$dno."' and month='".$month."'";
					$result0 = mysqli_query($con,$sql0);
					$num0=mysqlI_num_rows($result0);
					if($num0 > 0)
					{ 
						while($row0 = mysqli_fetch_array($result0))
						{ 
							$odate=$row0[0];									
						}
					}

	$od=date('Y',strtotime($odate));
	$nd=date('Y',strtotime($date));
	if($od==$nd)
	{
		echo "<script>alert('Alrady Paid for selected month')</script>";
		
	}
	else
	{
	$sql = "INSERT INTO rent (door_no,date,name,phone,amount,amountpaid,month,balance,paymentmode,cardnumber)
			VALUES ('".$dno."','".$date."','".$name."', '".$phone1."','".$amt1."','".$amountpaid."','".$month."','".$balance."','".$paymentmode."','".$card."')";
	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "<script>alert('Submitted')</script>";
	} else {
		echo "<script>alert(' Not submitted.')</script>";
	}
	}
}
?>
<div class="tb" style="margin-top:550px;margin-left:-150px;">
<br><br><br>
<div  class="tbl-header"  style="width:1600px;margin:0px 20px;">
<table cellpadding="0" cellspacing="0" border="1">
  <thead>
    <tr>
      
	  <th>DOOR NO.</th>
	  <th> DATE</th>
	   <th> NAME</th>
      <th>MONTH</th>
     <th>BALANCE</th>
	<th style="width:250px;"></th> 
	<th></th>
    </tr>
  </thead>
</table>
</div>
<div  class="tbl-content" style="width:1600px;margin:0px 20px;">
<table cellpadding="0" cellspacing="0" border="1">
  <tbody> 
  <?php
								include 'config.php';
								$sql1 = "select * from rent where balance>0 and door_no='".$_SESSION['dno']."'";
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
								$name=$row1['name'];
								$month=$row1['month'];
								$balance=$row1['balance'];
								
								
			?>
    <tr>
	
	<td><?php echo $dno; ?></td>
<td><?php echo $date; ?></td>	
<td><?php echo $name; ?></td>
	<td><?php echo $month; ?></td>
	<td><?php echo $balance; ?></td>
	<form method="get" action="#">
	<input type="text" name="id" value="<?php echo $id; ?>" hidden="true">
    <td style="width:250px;"><input type="number" name="paid" required="" max="<?php echo $balance; ?>" min="1"></td>			
<td><input type="submit" name="balancepaid" value="SUBMIT" style="font-size:20px;" required=""></td>
	</form>
	</tr>
	
 <?php 
								}
								}
								else
			{
				?>
				<td style="width:100px;" colspan="5">No Records</td>
				<?php
			}
								if(isset($_GET['balancepaid']))
								{
									include 'config.php';
									$paid=$_GET['paid'];
									$id=$_GET['id'];
									$sql2 = "update rent set amountpaid=amountpaid+'$paid', balance=balance-'$paid' where id='".$id."'";
									$result1 = mysqli_query($con,$sql2);
									echo "<script> location.href='payment_rent.php'; </script>";

								}								?>

  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>

                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
					function changeDropdown()
					{
						$("#pay").change(function(){
                      
                          if($(this).val=="Cash")
						  {
							  $("#card").show();
						  }
						  else
						  {
							 $("#card").hide();
						  }
						}
					}
                  </script>						  

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


</body>
</html>