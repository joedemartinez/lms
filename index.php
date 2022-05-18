<?php
require('dbconn.php');

if (isset($_SESSION['RollNo'])) {
	# code...
	if ($_SESSION['RollNo'] === 'admin') {
		// code...
		header('location:admin/dashboard.php');
	}else{
		header('location:student/dashboard.php');
	}
	
}
?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Library Management System </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Management System" />
		<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
		<script type="text/javascript" src="assets/js/jquery.js"></script>	
		<script type="text/javascript" src="assets/js/sweetalert2@11.js"></script>	
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="assets/css/homePage.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
	
	<h3><p><img src="assets/images/logo.png" alt="Logo" width="100" height="100" ></p> LMS</h3>

	<div class="container">

		<div class="login" id="loginPage">
			<h2>Sign In</h2>
			<form action="index.php" method="post">
				<input type="text" name="studentID" placeholder="Student ID" required="" autocomplete="off">
				<input type="password" name="password" placeholder="Password (min 8)" required="" minlength="8" autocomplete="off">
			
				<div class="send-button">
					<!--<form>-->
						<input type="submit" name="signin"; value="Sign In">
				</div>
			</form>
			<p>Don't Have An Account? <a class="underline signup_in_Toggle" href="#">Sign Up Here!</a></p>
			<div class="clear"></div>
		</div>

		<!-- <div class="register" id="registerPage" style="display: none;">
			<h2>Sign Up</h2>
			<form action="index.php" method="post">

				<input type="text" name="studentID_reg" placeholder="Student ID" required="">
				<input type="password" name="Password_reg" placeholder="Password (min 8)" required="" minlength="8" autocomplete="off">
				<input type="password" name="Password_conf" placeholder="Password Confirmation (min 8)" required="" minlength="8" autocomplete="off">
			
				<br>
				<div class="send-button">
				    <input type="submit" name="signup" value="Sign Up">
				</div>
			</form>
			<p>Already Have An Account? <a class="underline signup_in_Toggle" href="#">Sign In Here!</a></p>
			<div class="clear"></div>
		</div> -->

		<div class="clear"></div>
	</div>

<?php
	if(isset($_POST['signin'])){
		//data submitted
		$u=$_POST['studentID'];
	 	$p=$_POST['password'];

	 	$sql="SELECT * FROM lms_DB.user where RollNo='$u'";

	 	$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		//data in db
		$x=$row['Password'];
		$y=$row['Type'];
		$i = $row['Name'];


		//authenticate credentials
		if(password_verify($p, $x)){
			//echo "Login Successful";
	   		$_SESSION['RollNo']=$u;
	   		$_SESSION['Name']=$i;
	   		$_SESSION['Type']=$y;
	   		$_SESSION['pageTitle'] = 'LMS';

	   		if($y=='Admin')
	   			header('location:admin/dashboard.php');
	  		else
	  			header('location:student/dashboard.php');
		}else { 
			echo  "<script type='text/javascript'>Swal.fire('Invalid Credentials!!! Try Again')</script>";
		}
	}
   

	// if(isset($_POST['signup'])){
	// 	$password= password_hash($_POST['Password'], PASSWORD_DEFAULT);
	// 	$rollno=$_POST['RollNo'];

	// 	$sql="insert into lms_DB.user (Name,Type,Category,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rollno','$email','$mobno','$password')";

	// 	if ($conn->query($sql) === TRUE) {
	// 		echo "<script type='text/javascript'>alert('Registration Successful')</script>";
	// 	}else {
	// 		//echo "Error: " . $sql . "<br>" . $conn->error;
	// 		echo "<script type='text/javascript'>alert('User Exists')</script>";
	// 	}
	// }

?>



<script type="text/javascript">
//signIn/SignUp toggle
	$(document).ready(function(){
		$(document).on("click", ".signup_in_Toggle", function(e){
	    	e.preventDefault();
			if (document.getElementById('loginPage').style.display == 'block') {
		        document.getElementById('registerPage').style.display='block';
		        document.getElementById('loginPage').style.display='none';
		    }
		    else{
		        document.getElementById('loginPage').style.display='block';
		        document.getElementById('registerPage').style.display='none';
		    }
		});
	});

</script>

</body>
<!-- //Body -->

</html>