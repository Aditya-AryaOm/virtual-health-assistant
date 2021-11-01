<?php 
include 'config.php';
session_start(); 
$id= $_SESSION['id'];
if(!isset($_SESSION['username'])) {
     header('location: index.php');
}
if(isset($_POST['schedular'])) {

	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$blood=$_POST["blood"];
	$smoke=$_POST["smoke"];


		$qRegisterUser = "UPDATE patient set age='$age', gender='$gender', blood='$blood', smoke='$smoke' WHERE id='$id'";
            mysqli_query($conn, $qRegisterUser);

            header('location: dailySchedule.php');

        

}

?>
<html>
<head>
	<title>Healthy Life Schedular</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Mulitple Steps Form Animation With JQuery & CSS3"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>	

	<script type="text/javascript" src="http://jquerypost.com/cdn/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/velocity.js"></script>
	<script type="text/javascript" src="js/snap_svg.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="jquery-ui.min.js"></script>

</head>
<body style="background-color:#02B290;">
	
	<div class="wrapper">
	
		
		<!--  start Form Steps  -->
		<div class="steps" id="steps">
			<span class="step_nb"></span>
			<p class="form_title">Please Fill The field Bellow</p>
			<form action="schedular.php" method="POST" id="myform" autocomplete="off">
				<ul>
					<li class="current_step">
						<input type="number" class="text_field" id="age" name="age" placeholder="Enter Your Age"/>					
					</li>
					<li>
						<input type="text" class="text_field" id="gender" name="gender" placeholder="Enter You Gender (Male or Female)"/>	
					</li>
					<li>
						<input type="text" class="text_field" id="blood" name="blood" placeholder="Enter Your Blood Group (A+, A- etc...)"/>	
					</li>
					<li>
						<input type="text" class="text_field" id="smoke" name="smoke" placeholder="Do You Smoke ? (y/n)"/>	
						<input type="hidden" name="schedular">
					</li>
					
				</ul>
			</form>
			<span class="note">Note : you can hit "Enter" to move to next step</span>
		</div><!--  End Form Steps  -->
		<div id="preloader"></div>
</body>
</html>