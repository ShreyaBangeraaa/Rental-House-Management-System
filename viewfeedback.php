
<?php 
session_start();
if(isset($_SESSION['owner']))
{
?>
<?php
include 'config.php';
error_reporting(0); // For not showing any error
if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form
	$sql = "INSERT INTO ownercomment (name,email,comment)
			VALUES ('$name', '$email','$comment')";
	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}
?>

<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Comment System in PHP - Pure Coding</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #EAEDED ;
}

.wrapper {
    padding: 20px;
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.3);
    width: 600px;
    min-height: 400px;
    margin: 20px 0;
}

.wrapper .row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
}

.wrapper .form .row .input-group {
    padding: 0 10px;
    display: block;
}

.wrapper .form .row .input-group:first-child {
    padding-left: 0;
}

.wrapper .form .row .input-group:last-child {
    padding-right: 0;
}

.wrapper .form .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 50px;
}

.wrapper .form .input-group label {
    font-weight: 600;
    margin-bottom: 5px;
    display: block;
}

.wrapper .form .input-group .btn {
    margin: 20px 10px;
    display: block;
    padding: .7rem 2rem;
    opacity: .8;
    color: #FFF;
    background: #a8cf45;
    border: none;
    outline: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 1rem;
    transition: .3s ease-in;
}

.wrapper .form .input-group .btn:hover {
    opacity: 1;
}

.wrapper .form .input-group input, .wrapper .form .input-group textarea {
    width: 100%;
    height: 100%;
    border: 1px solid #00b894;
    outline: none;
    padding: 5px 10px;
}

.wrapper .form .input-group.textarea {
    height: 150px;
}

.wrapper .form .input-group.textarea textarea {
    resize: none;
}

.wrapper .prev-comments {
    margin-top: 50px;
}

.wrapper .prev-comments .single-item {
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    padding: 10px 20px;
    text-align: left;
    margin-bottom: 25px;
}

.wrapper .prev-comments .single-item h4 {
    font-size: 1.3rem;
    font-weight: 800;
    color: #111;
}

.wrapper .prev-comments .single-item a {
    margin: 10px 0;
    font-size: 1rem;
    color: #111;
    text-decoration: none;
    display: inline-block;
}

.wrapper .prev-comments .single-item p {
    font-size: .9rem;
    color: #111;
}
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
</style>
</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->

   
	<div class="parallax first-section" style="box-radius:20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
				<div class="wrapper" style="border-radius:20px;">
	 
    <div class="title" >
	      <a href="ownercomment.php"><i class="fa fa-close" style="margin-top:20px;float:right;color:black;font-size:25px;"></i></a> 
     <div class="title" style="margin-top:-10px;color:black;font-size:25px;">Renters Feedback<br>
    <center><b><br></b></center>
    </div>
	
		
		<div class="prev-comments">
			<?php 
			$sql = "SELECT * FROM  comment where ownername='".$_SESSION['owner']."'";
			$result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h5><?php echo $row['name']; ?></h5>
				<a href="mailto:<?php echo $row['email']; ?>"></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php
				}
			}
			else{
				 echo "<script>alert('No Feedbacks');</script>";
				 echo "<script> location.href='ownerhome.php'; </script>";

			}
			?>
		</div>
	</div>
	<script>
	
	</script>
</body>
</html>
<?php
}
else
{
	echo"<script>location.href='ownerlogin.php';</script>";
}
	?>