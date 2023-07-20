
<?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$email=$_POST['email'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO cmps (name,email,cmp)
		VALUES ('$name','$email','$message')";

	
	mysqli_query($con, $sql);
				echo "<script>
				alert('Feedback Succesfully sent.');
			</script>";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
	background:white;
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Roboto', sans-serif;
}

.wrapper {

	background:#a8cf45;
	border-radius: 20px;
	width: 500px;
	height:450px;
	display: flex;
	justify-content: center;
	align-items: center;
	
}
.feed{
	font-family: 'Roboto', sans-serif;
	font-size: 30px;
}
.wrapper .form input {
	background: white;
	color: white;
	font-size: 15px;
	width: 450px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	margin-bottom: 10px;
	margin-top: 20px;
	font-family: 'Roboto', sans-serif;
}

.wrapper .form textarea {
	background:white;
	color: white;
	font-size: 15px;
	width: 450px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	resize: none;
	font-family: 'Roboto', sans-serif;
}

.wrapper .form .btn {
	background: #222222;
	color: white;
	font-size: 15px;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 10px;
	width: 200px;
	border-radius: 20px;
	margin: 0 auto;
	display: block;
	margin-top: 5px;
	margin-bottom: 20px;
	opacity: 0.8;
	transition: 0.3s all ease;
}

.wrapper .form .btn:hover {
	opacity: 1;
}

.content {
	text-align: center;
	background: royalblue;
	color: white;
	padding: 10px;
	width: 500px;
	border-radius: 10px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}

.content p {
	margin-bottom: 15px;
	width: 450px;
}
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Comment System PHP | National Coding</title>
</head>
<body>
   <div class="feed">FEEDBACK </div>
	<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Enter your name" style="color:black;">
			<br>
			<input type="email" class="email" name="email" placeholder="Enter your Email" style="color:black;">
			<br>
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Comment/Feedback"style="color:black;"></textarea>
			<br>

			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	
	</div>
</body>
</html>