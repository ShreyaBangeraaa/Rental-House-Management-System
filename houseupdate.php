<?php 
session_start();
if(isset($_SESSION['owner']))
{
	$id = $_GET['update'];
	echo $id;
?><br>
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
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
 
  padding: 0 10px;
}
.wrapper{
  width: 900px;
  margin: 180px 150px;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 5px 50px;
    background: linear-gradient(to bottom left, #00cc66 0%, #99ff66 100%);

  height:620px;
  border-radius:20px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 35px;
  color:black;
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
   width: 150px;
   color: #000000;
   margin-right: 10px;
  font-size: 14px;
 
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 30%;
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
  width: 30%;
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
  width: 40%;
  padding:2px ;
  font-size: 25px; 
  border: 20px;
  background: white;
  color: black;
  cursor: pointer;
  border-radius: 20px;
  outline: none;
  margin:10px 200px;
 
  
}


.wrapper .form .inputfield .btn:hover{
  background:#397CD8;
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
</style>
</head>
<body class="realestate_version">

  

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
	
    
	<div class="parallax first-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm" style="margin-top:100px;">
				<?php
					
					include 'config.php';
					$sql1 = "select * from house where id='".$id."'";
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
				<div class="wrapper" style="margin-top:100px;">
    <div class="title">
      Enter Room Details Here
    </div>
    <div class="form" >
       
	    
     <form action="#" method="POST" enctype="multipart/form-data">
		    <div class="inputfield">
          <label>Owner Email:</label>
          <input type="text" class="input" name="owner" value="<?php echo $_SESSION['owner'];?> ">
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;Total rooms:</label>
          <input type="text" class="input" name="totalroom" value="<?php echo $totalroom;?>">
       </div>
 
	   <div class="inputfield">
          <label>Rent:</label>
          <input type="text" class="input" name="rent" value="<?php echo $rent;?>">
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;Advance Amount:</label>
          <input type="text" class="input" name="advance" value="<?php echo $advance;?>">
       </div> 
	   
          
       
	   <div class="inputfield">
          <label>Parking lot available:</label>
          <input type="radio" class="input" value="yes" name="parking" <?php if($parking=='yes'){?> checked="check"<?php }?>>Yes
		  <input type="radio" class="input" name="parking" value="no" <?php if($parking=='no'){?> checked="check"<?php }?>>No
<br>
       </div>

        <div class="inputfield">
          <label>Room type:</label>
          <div class="custom_select">
            <select id="ddlModels" name="types" value="<?php echo $types;?> ">
              <option value="">Select</option>
              <option value="1 BHK" <?php if($types=='1 BHK'){?> selected="true"<?php }?>>1 BHK</option>
              <option value="2 BHK" <?php if($types=='2 BHK'){?> selected="true"<?php }?>>2 BHK</option>
			  <option value="3 BHK" <?php if($types=='3 BHK'){?> selected="true"<?php }?>>3 BHK</option>
			  <!--<option value="4">Other</option>-->
            </select>
			
          </div><br>
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;Square feet:</label>
          <input type="text" class="input" name="square" value="<?php echo $square;?>">
       </div> 
	    <br>
      <div class="inputfield">
	  <label>Address:</label>
          <textarea class="input" name="address"><?php echo $address;?></textarea>
          <label>&nbsp;&nbsp;&nbsp;&nbsp;Near by:</label>
          <input type="text" class="input" name="nearby" value="<?php echo $nearby;?>">
		  </div>
		  <div class="inputfield">
		  <label>Agreement:</label>
          <input type="text" class="input" name="agreement" value="<?php echo $agreement;?>">
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;Status:</label>
          <div class="custom_select">
            <select id="ddlModels" name="status" value="<?php echo $status;?> ">
              <option value="">Select</option>
              <option value="AVAILABLE">AVAILABLE</OPTION>
              <option value="UN AVAILABLE">UN AVAILABLE</OPTION>
            </select>
		  </div>
		   </div>
     <div class="inputfield">
           <label>Upload Image</label>
		  <img src="uploads/<?php echo $image_name;?>" style="width:80px;height:50px;">
    <input type="file" class="input" name="image" value="<?php echo $image_name;?>"><br>
       </div> 
         
   <div class="inputfield" style="height:70px;align:center;">
     <input type="submit" value="UPDATE" class="btn" name="update">
         <br><br>
         <br><br>
      
      </div>
	  
	   </form>
	   
                   
                </div>
				<?php 
				$temp=$image_name;
						}
					}
					if(isset($_POST['update']))
					{
						
					$name=$_POST['owner'];
					$totalroom=$_POST['totalroom'];
							$rent=$_POST['rent'];
							$advance=$_POST['advance'];
							$parking=$_POST['parking'];
							$types=$_POST['types'];
                            $square=$_POST['square'];
						    $address=$_POST['address'];
							$nearby=$_POST['nearby'];
							$agreement=$_POST['agreement'];
							$image_name = $_FILES['image']['name'];
						    $tmp_name=$_FILES['image']['tmp_name'];
                            $folder="uploads/".$image_name;
		                    move_uploaded_file($tmp_name,$folder);
						    if($image_name=="")
							{
								$image_name=$temp;
							}
						   $status=$_POST['status'];
					$sql2 = "UPDATE house SET Owner='".$name."',Totalroom='".$totalroom."', Rent='".$rent."',Advance='".$advance."',Parking='".$parking."',Type='".$types."',Square='".$square."',Address='".$address."',Nearby='".$nearby."',Agreement='".$agreement."',image='".$image_name."',status='".$status."' WHERE id='".$id."'";
					
					// Execute query
					mysqli_query($con, $sql2)or die(mysqli_error($con));
					echo "<script>
								alert('Update Successful');
							</script>";
							
							echo "<script> location.href='viewhouse.php'; </script>";
					}
					?>
				<div class="col-md-6 col-sm-12">
                    <!---<div class="big-tagline clearfix">
                        <h2>Sell Your Property with CITY Real Estate</h2>
                        <p class="lead">With CITY Real Estate responsive landing page template, you can promote your all property & real estate projects. </p>
                        <a data-scroll href="#gallery" class="btn btn-light btn-radius grd1 btn-brd" style="text-align:center;">View Gallery</a>
                    </div>--->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
					 
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <!-- class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    


 <!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius" style="margin-top:700px;"><i class="fa fa-angle-up" ></i></a>

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
	echo "<script> location.href='ownerlogin.php'; </script>";
}
?>