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
	 <script language="JavaScript">
    function showInput() {
		if(document.getElementById("demo").style.display == "none"){
			
			document.getElementById("demo").style.display = "block";
		}else{
			document.getElementById("demo").style.display = "none";
		}      
    }
  </script>
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
		<form id="demo-form1" method="post"  data-parsley-validate class="form-horizontal form-label-left">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>EDUCATIONAL AID</h3>
              </div>
			<form id="demo-form" method="post" data-parsley-validate class="form-horizontal form-label-left">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="search" >
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Go!</button>
					  <?php 
		$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "crescent";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
			$result= mysqli_query($conn,"SELECT * From edunew Where Applicant_Id = '$_POST[search]'");
			while($rowval=mysqli_fetch_array($result)){
				$Applicant_Id = $rowval['Applicant_Id'];
				$Adhaar_No = $rowval['Adhaar_No'];
				$First_Name = $rowval['First_Name'];
				$Last_Name = $rowval['Last_Name'];
				$Date_of_birth = $rowval['Date_of_birth'];
				$Age = $rowval['Age'];
				$Father_name= $rowval['Father_name'];
				$Mobile_No= $rowval['Mobile_no'];
				$Address = $rowval['Address'];
			}	
		}
	?>
                    </span>
                  </div>
                </div>
              </div>
			  
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Serach Form</b><small>Search Details of existing Applicant</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    

                      <div class="form-group">
                         <div class="form-group">
                        <div class="col"><label style="margin-left:30px"><strong>Applicant Id:&nbsp;</strong></label><input type="text" name="Applicant_Id" placeholder="Applicant id"value="<?php echo $Applicant_Id;?>" style="padding-bottom:6px;width:200px;"><label style="padding-left:71px;"><strong>Adhaar No.:&nbsp;</strong></label><input type="text" name="Adhaar_No" value="<?php echo $Adhaar_No;?>" style="padding-bottom:6px;width:240px;"></div>
                      </div>
						<div class="form-group">
                        <div class="col"><label style="margin-left:36px"><strong>First Name:&nbsp;</strong></label><input type="text" name="First_Name" value="<?php echo $First_Name;?>" style="padding-bottom:6px;width:180px;"><label style="padding-left:75px;"><strong>Last Name:&nbsp;</strong></label><input type="text" name="Last_Name" value="<?php echo $Last_Name;?>" style="padding-bottom:6px;width:180px;"><label style="padding-left:70px;"><strong>Date of birth:&nbsp;</strong></label><input type="text" name="Date_of_birth" value="<?php echo $Date_of_birth;?>" style="padding-bottom:6px;width:128px;"><label style="margin-left:20px"><strong>Age:&nbsp;</strong></label><input type="number" name="Age" value="<?php echo $Age;?>" style="padding-bottom:6px;width:40px;"></div>
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:26px"><strong>Father Name:&nbsp;</strong></label><input type="text" name="Father_name" value="<?php echo $Father_name;?>" style="padding-bottom:6px;width:200px;"><label style="padding-left:55px;"><strong>Mobile No.:&nbsp;</strong></label><input type="text" name="Mobile_No" value="<?php echo $Mobile_No;?>" style="padding-bottom:6px;width:200px;"><label style="padding-left:50px;"><strong>Address:&nbsp;</strong></label><input type="text" name="Address" value="<?php echo $Address;?>" style="padding-bottom:6px;width:230px;"></div>
					</div>
				
                      </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
						  </form>
                          <button type="button" onclick="showInput()" class="btn btn-success">New Application</button>
                        </div>
                      </div>

                    
                  </div>
				<span id="demo" style="display:none;">
				  <div class="x_panel">
					<div class="x_content">
                    <br />
                    

					<div>
					<div>
					<div class="form-group">
					<label style="padding-left:44px;"><strong>Application No.:&nbsp;</strong></label><input type="text" style="padding-bottom:6px;width:200px;">
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:37px"><strong>Marks Obtained:&nbsp;</strong></label><input type="text" style="padding-bottom:6px;width:200px;"><label style="padding-left:45px;"><strong>Course Applied:&nbsp;</strong></label><input type="text" style="padding-bottom:6px;width:200px;"><label style="padding-left:50px;"><strong>course Duration&nbsp;</strong></label><input type="text" style="padding-bottom:6px;width:100px;"></div>
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:33px"><strong>Institution Name:&nbsp;</strong></label><input type="text" style="padding-bottom:6px;width:350px;"><label style="padding-left:75px;"><strong>Fee Structure:&nbsp;</strong></label><input type="text" style="padding-bottom:6px;width:100px;"></div>
					</div>
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

                    
                  </div>
                </div>
				</span>
                </div>
              </div>
            </div>
			</form>
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

