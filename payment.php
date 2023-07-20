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
  
overflow-y:auto;
overflow-x:hidden;
  padding: 0 10px;
  height:1000px;
}
.wrapper{
  max-width: 650px;
  width: 50%;
  background: #fff;
  margin: 30px auto;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 30px;
 background: #fafafa;
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
  width: 80%;
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
  width: 100%;
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
button {
  margin: 4px 0;
  width: 200px;
  height: 60px;
  text-align: center;
  padding: 8px 0 8px 8;
  background: #3aaf9f;
  color: #eee;
  font-size: 22px;
  border-style: none;
  border-bottom: 3px solid #3160B6;
  transition: all .2s linear;
  border-radius:20px;
}
.back {
  margin: 4px 0;
  width: 200px;
  height: 60px;
  text-align: center;
  padding: 8px 0 8px 8;
  background: #3aaf9f;
  color: #eee;
  font-size: 22px;
  border-style: none;
  border-bottom: 3px solid #3160B6;
  transition: all .2s linear;
  border-radius:20px;
}
button:hover {
  background: #3aaf9f;
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

    <!-- LOADER -->
	
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
	<?php include('userheader.php')?>     
	
	<div class="parallax" style="background-color: #3aaf9f;">
        <div class="container">
            <div class="row">

	<div class="wrapper" style="margin-top:5px;"><a href="userpayment.php"> <i class="fa fa-close" style="font-size:25px;color:black;float:right;margin-top:-20px;margin-right:-0px;"></i></a>
  
<div class="title" style="color:black">
      Electricity paid details
	  
    </div>
    <div class="form">
     <form action="" method="post"
           enctype="multipart/form-data">
		     <?php 
			 
				 
								include 'config.php';
								
								$sql1 = "select * from rentusers where door_no='".$_SESSION['dno']."'";
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
								$rr=$row1['rr'];
								
			?>
			 
			 <div class="inputfield">
          <label>Door Number</label>
          <input type="text" class="input" name="dno" value="<?php echo $_SESSION['dno']; ?>" readonly="true">
       </div>
	   <div class="inputfield">
          <label>RR number:</label>
          <input type="text" class="input" name="rr" value="<?php echo $rr;?>" readonly="true">
       </div>
	   <div class="inputfield">
          <label>Month:</label>
        
		  <select class="input" name="month" width="100%" required>
              <option value="">Select Month</option>
              <option value="Jan">January</option>
              <option value="Feb">February</option>
			  <option value="Mar">March</option>
			   <option value="Apr">April</option>
              <option value="May">May</option>
			  <option value="Jun">June</option>
			   <option value="Jul">July</option>
              <option value="Aug">August</option>
			  <option value="Sept">September</option>
			   <option value="Oct">October</option>
              <option value="Nov">November</option>
			  <option value="Dec">December</option>
            </select>
        
	</div>
	<div class="inputfield">
          <label>Date of Payment:</label>
          <input type="date" class="input" name="date" required>
       </div>
	   <div class="inputfield">
          <label>Amount:</label>
          <input type="text" class="input" name="amount" required>
       </div>
	   
	    
	   <div class="inputfield">
          <label>Amount paid:</label>
          <input type="text" class="input" name="amountpaid" required>
       </div>
	   
	   <div class="inputfield">
          <label>Upload paid bill Image :</label>
       <input type="file" class="input" name="image" required>
   </div> 
      <br><br><div class="inputfield" style="color:white;">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="submit">SUBMIT<a href="userpayment.php"> </button></a>
      </div>
	   </form>
	    <?php
								}
						}								
include 'config.php';
error_reporting(0);
if(isset($_POST['submit']))
{
	    $dno=$_POST['dno'];
	    $date=$_POST['date'];	
		$Month=$_POST['month'];
		$Amount=$_POST['amount'];
		$RR=$_POST['rr'];
		$amountpaid=$_POST['amountpaid'];
		$balance=$Amount-$amountpaid;
		$image_name = $_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $folder="uploads/".$image_name;
		move_uploaded_file($tmp_name,$folder);
       include 'config.php';
					$sql0 = "select date from electricity where door_no='".$dno."' and month='".$Month."'";
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
	    $query="insert into electricity(door_no,date,month,amount,rr,amountpaid,balance,image) values('".$dno."','".$date."','".$Month."','".$Amount."','".$RR."','".$amountpaid."','".$balance."','".$image_name."')";
				$result = mysqli_query($con, $query);
	           if ($result) {
		       echo "<script>alert('Submitted.')</script>";
	            } else
					{
	        	       echo "<script>alert(' Not submitted.')</script>";
            	    }
	        	}
}
?>
    </div>
	
</div>
            </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
 <?php 
								
								if(isset($_GET['balancepaid']))
								{
									include 'config.php';
									$paid=$_GET['paid'];
									$id=$_GET['id'];
									$sql2 = "update electricity set amountpaid=amountpaid+'$paid', balance=balance-'$paid' where id='".$id."'";
									$result1 = mysqli_query($con,$sql2);
									echo "<script> location.href='payment.php'; </script>";

								}								?>

  </tbody>
</table>
</div>
</div>
	
	
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