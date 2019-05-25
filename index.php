<?php 
session_start();
define('mai',TRUE);
require_once('production/includes/config.php');

if(isset($_POST['login']))
{    
    
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username 		= $_POST['username'];
		$password 	= $_POST['password'];
		
		
		
		$sql = "select * from users where username = '".$username."' and password = '".$password."'";
		$rs = mysqli_query($mysqli,$sql);
		$getNumRows = mysqli_num_rows($rs);
		
		if($getNumRows == 1)
		{
			$getUserRow = mysqli_fetch_assoc($rs);
			unset($getUserRow['password']);
			
			$_SESSION = $getUserRow;
						
			header('location:main.php?id=true');
			exit;
		}
		else
		{
			$errorMsg = "Wrong username or password";
		}
	}
}

if(isset($_GET['logout']) && $_GET['logout'] == true)
{
	session_destroy();
	header("location:index.php");
	exit;
}


if(isset($_GET['lmsg']) && $_GET['lmsg'] == true)
{
	$errorMsg = "Login required to access dashboard";
}

if (isset($_SESSION['previous'])) {
   if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
        session_destroy();
        ### or alternatively, you can use this for specific variables:
        ### unset($_SESSION['varname']);
   }
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="production/images/crescent.jpg" type="image/ico" />

    <title>CRESCENT WELFARE ASSOCIATION | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
	  <div>
	  <center><h3><img src="production/images/cres.png" height="10%" width="10%"> CRESCENT WELFARE ASSOCIATION </h3></center>
	  </div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
				<button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
				</form>
              <div class="clearfix"></div>

            

                <div class="clearfix"></div>
                <br />

                <div>

                  <p>Copyright © <a href="https://juntossoft.com"><b>juntos software solution.</b></a><br>
				  All rights reserved.</p>
                </div>
            
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
