<?php include 'Actions.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual Health Assistant</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">
    

    <link rel="shortcut icon" href="assets/landing_page/img/logo.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/landing_page/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/landing_page/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/landing_page/img/apple-touch-icon-114x114.png">

    <link rel="stylesheet" type="text/css"  href="assets/landing_page/css/animate.css">
    <link rel="stylesheet" type="text/css"  href="assets/landing_page/css/landing.css">

    <link rel="stylesheet" type="text/css"  href="assets/landing_page/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/landing_page/fonts/font-awesome/css/font-awesome.css">


    <link href="assets/landing_page/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="assets/landing_page/css/owl.theme.css" rel="stylesheet" media="screen">


    <link rel="stylesheet" type="text/css"  href="assets/landing_page/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/landing_page/css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="assets/landing_page/js/modernizr.custom.js"></script>

    <link href="assets/admin_page/pe-icon-7-stroke/css/pe-icon-7-stroke.css"
	rel="stylesheet" type="text/css" />
<!-- style css -->
<link href="assets/admin_page/dist/css/stylehealth.min.css?ts=<?=time()?>" rel="stylesheet" type="text/css" />

<style type="text/css">
    strong2{
        color: black;
        font-weight: bold;
        
    }
</style>

  </head>
  <body>
   
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Virtual Health Assistant</a>
        </div>

   
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>
            <li><a href="#tf-team" class="page-scroll">Signup</a></li>
        
            <li><a href="#tf-clients" class="page-scroll">Login</a></li>
           
          </ul>
        </div>
      </div>
    </nav>


    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Welcome on <strong><span class="color">Virtual Health Assistant</span></strong></h1>
                <p class="lead">I Am Here <strong>For Everything You Need</strong> To Give You <strong>A Healthy Life</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

  
 
    <div id="tf-about" class="text-center">
        <div class="container">
                <div class="section-title center">
                        <h2><strong>About Me</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                    </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/landing_page/img/aside.jpg" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <p class="intro">A Virtual Health Assistant, That Provide You Daily Schedule To Live Healthy Life. Also You Can Book Appointment with Doctor. </p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>To Help Everyone To Make Their Healthy Choices.</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
                    <div id="tf-team" class="text-center">
                        <div class="overlay">
                            <div class="container">
                                <div class="section-title center">
                                    <h2>Please <strong>Signup</strong></h2>
                                    <div class="line">
                                        <hr>
                                    </div>
                                </div>
                <div class="row">
                                
               
                
                <!----  Signup Module  ----->      
        <div class="container-center lg">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Patient Register</h3>
                            <small><strong>Please enter your data to register.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="index.php#tf-team" id="signupForm" method="post">
                        <div class="row">
                        <?php include 'errors.php'?>
                        </div><br><br>
                        <div class="row">
                         	<div class="form-group col-lg-6">
                                <strong2>Username</strong2>
                                <input type="text" id="username" class="form-control" name="username" value="<?php echo $username;?>">
                                <span class="help-block small">Your unique username</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <strong2>Password</strong2>
                                <input type="password" id="password" class="form-control" name="password">
                                <span class="help-block small">Your hard to guess password</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <strong2>Again type Password</strong2>
                                <input type="password" id="password2" class="form-control" name="password2">
                                <span class="help-block small">Retype password</span>
                            </div> 
                            <div class="form-group col-lg-6">
                                <strong2>Email Address</strong2>
                                <input type="text" id="emailid" class="form-control" name="email" value="<?php echo $email;?>">
                                <span class="help-block small">Your address email to contact</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <strong2>Firstname</strong2>
                                <input type="text" id="firstName" class="form-control" name="firstName" value="<?php echo $firstName;?>">
                                
                            </div>
                            <div class="form-group col-lg-6">
                                <strong2>Lastname</strong2>
                                <input type="text" id="lastName" class="form-control" name="lastName" value="<?php echo $lastName;?>">
                                
                            </div>
                             <div class="form-group col-lg-6">
                                <strong2>Phone No:</strong2>
                                <input type="number" id="phone" class="form-control" name="phoneNo" value="<?php echo $phoneNo;?>">
                            </div>
                           
                        </div>
                        <div align="center">
                            <input class="btn btn-primary" type="submit" name="registerPatientButton" value="Register">
                            <br><br>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
     



                               
                </div>
            </div>
        </div>
    </div>

    
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>If You Are <strong>Already Registered</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
            </div>
            
        </div>
    </div>


    <div id="tf-clients" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Please<strong> Login</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                
                
				<div class="row">
                    <!--- Login Module -------------->     
                <div class="container-center">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="view-header">
                                <div class="header-icon">
                                    <i class="pe-7s-unlock"></i>
                                </div>
                                <div class="header-title">
                                    <h3>Patient Login</h3>
                                    <small><strong>Please enter your credentials to login.</strong></small>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="index.php#tf-clients" id="loginForm" method="post">
                            <div class="row">
                                    <?php include 'errors.php'?>
                                </div><br><br>
                                <div class="form-group">
                                    <strong2 class="control-label" for="username">Username</strong2> <input
                                        type="text" placeholder="username"
                                        title="Please enter you username" value="<?php echo $username;?>"
                                        name="username" id="username" class="form-control">

                                </div>
                                <div class="form-group">
                                    <strong2 class="control-label" for="password">Password</strong2> <input
                                        type="password" title="Please enter your password"
                                        placeholder="******" value="" name="password"
                                        id="password" class="form-control"> <span
                                        class="help-block small">Your strong password</span>
                                </div>
                                <div>
                                    <input class="btn btn-primary" type="submit" name="loginPatientButton" value="Login"/>
                                    <a class="btn btn-warning" href="index.php#tf-team">Register</a>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                    <?php if(isset($_SESSION['username'])) :?>
                                        <h2>Already logged in ! </h2>
                                        <a class="btn btn-primary" href="dailySchedule.php">LOGIN NOW</a>
                                    <?php endif?>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!--- Login Module -------------->



                </div>     
            </div>
        </div>
    </div>

  
    <div id="tf-works">
        <div class="container"> 
            <div class="section-title text-center center">
                <h2>Developed By <strong>Aditya Gupta</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
            </div>
            
            </div>
        </div>
   


    




    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p> Developed by <a href="#">Aditya Gupta</a> </p>
            </div>
        </div>
    </nav>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/landing_page/js/jquery.1.11.1.js"></script>
   
    <script type="text/javascript" src="assets/landing_page/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/landing_page/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="assets/landing_page/js/jquery.isotope.js"></script>

    <script src="assets/landing_page/js/owl.carousel.js"></script>

   
    <script type="text/javascript" src="assets/landing_page/js/main.js"></script>

  </body>
</html>