<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/crescent.jpg" type="image/ico" />

    <title>CRESENT WELFARE ASSOCIATION | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><img src="images/crescent.jpg" height="45%" width="15%"/> <span>CRESENT</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/admin.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>ADMIN</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a  href="index.php"><img src="images/whitehome.png" height="10%" width="10%"/> HOME </a>
                  </li>
                  <li><a><img src="images/white-cross.png" height="10%" width="10%"/> MEDICAL AID</a>
                    <ul class="nav child_menu">
                      <li><a href="medi.php">NEW FORM</a></li>
                      <li><a href="mediold.php">SEARCH FORM</a></li>
                    </ul>
                  </li>
				   <li><a><img src="images/edu.png" height="10%" width="10%"/> EDUCATIONAL AID</a>
                    <ul class="nav child_menu">
                      <li><a href="edunew.php">NEW FORM</a></li>
                      <li><a href="eduold.php">SEARCH FORM</a></li>
                    </ul>
                  </li>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><img src="images/bars.png" height="30%" width="30%"/></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/admin.png" alt="">ADMIN
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login.html"> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>MEDICAL AID</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>New Form </b><small>Create New Entry</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="medi.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
					
					
					
					  <div class="form-group">
                        <div class="col">
						  
						  <label style="margin-left:45px;"><strong>Adhaar No.:&nbsp;</strong></label>
						  <input type="text" name="aadhar_id" style="padding-bottom:6px;width:200px;">
						</div>
                      </div>
						<div class="form-group">
                        <div class="col">
						 <label style="margin-left:45px"><strong>First Name:&nbsp;</strong></label>
						 <input type="text" name="First_Name"  style="padding-bottom:6px;width:200px;">
						 <label style="padding-left:75px;"><strong>Last Name:&nbsp;</strong></label>
 
 						 <input type="text" name="Last_Name" style="padding-bottom:6px;width:200px;"> 
						 <label style="padding-left:70px;"><strong>Date of birth:&nbsp;</strong></label>
						 <input type="date"  name="Date_of_birth" style="padding-bottom:6px;width:128px;">
						 <label style="margin-left:50px;"><strong>Age:&nbsp;</strong></label>
						 <input type="number" name="Age" style="padding-bottom:6px;width:70px;"></div>
					    </div>
                    </div>
                      <div class="form-group">
                        <div class="col"></div>
					</div>
						<div class="col"><label style="margin-left:50px"><strong>Mobile No.:&nbsp;</strong></label>
					<input type="text" name="Mobile_No" style="padding-bottom:6px;width:200px;">
					<label style="padding-left:90px;"><strong>Address:&nbsp;</strong></label>
					<input type="text" name="Address" style="padding-bottom:6px;width:200px;">
					<label style="padding-left:80px;"><strong>Town/City:*&nbsp;</strong></label>
					<input type="text" name="Town_City" style="padding-bottom:6px;width:130px;"></div>
					</div>
                      </div>
					  
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                   </form>
                  </div>
                </div>
              </div>
            </div>
		  </div>
		</div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright ©  <a href="https://juntossoft.com">juntos software solution.</a> All rights reserved. 
          </div>
          <div class="clearfix">
		  </div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
<?php
	
    $aadhar_id = $_POST['aadhar_id'];
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Date_of_birth = $_POST['Date_of_birth'];
    $Age = $_POST['Age'];
	$Mobile_No= $_POST['Mobile_No'];
	$Address = $_POST['Address'];
	$Town_City = $_POST['Town_City'];

	if ( !empty($aadhar_id) || !empty($First_Name) || !empty($Last_Name) || !empty($Date_of_birth) || !empty($Age) || !empty($Mobile_No) || !empty($Address) || !empty($Town_City))  {
        
		$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "crescent";
        //create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
			
         $SELECT = "SELECT aadhar_id From medinew Where aadhar_id = ? Limit 1";
         $INSERT = "INSERT Into medinew (aadhar_id, First_Name, Last_Name, Date_of_birth, Age, Mobile_No, Address, Town_City) values(?, ?, ?, ?, ?, ?, ?, ? )";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $aadhar_id);
         $stmt->execute();
		 $stmt->bind_result($aadhar_id);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
		if($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssssss", $aadhar_id, $First_Name, $Last_Name , $Date_of_birth, $Age, $Mobile_No, $Address, $Town_City);
          $stmt->execute();
          $text="Inserted Successfully";
		  echo '<script type="text/javascript">alert("'.$text.'")</script>';
		} 
		else
		{
		  $text="Someone already register using this id";
		  echo '<script type="text/javascript">alert("'.$text.'")</script>';
         }
         $stmt->close();
         $conn->close();
        }
    } else {
     echo "All field are required";
     die();
    }
?>


