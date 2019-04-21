<!DOCTYPE html>
<?php 
	if(isset($_POST['go'])){
		$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "crescent";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
			$result= mysqli_query($conn,"SELECT * From edunew Where Adhaar_No = '$_POST[search]'");
			while($rowval=mysqli_fetch_array($result)){
				
				$Adhaar_No = $rowval['Adhaar_No'];
				$First_Name = $rowval['First_Name'];
				$Last_Name = $rowval['Last_Name'];
				$Date_of_birth = $rowval['Date_of_birth'];
				$Age = $rowval['Age'];
				$Father_name= $rowval['Father_name'];
				$Mobile_No= $rowval['Mobile_No'];
				$Address = $rowval['Address'];
				$Institution = $rowval['Institution'];
				$Course_Applied = $rowval['Course_Applied'];
				$Course_Duration = $rowval['Course_Duration'];
				$Fees_Structure = $rowval['Fees_Structure'];
			}	
		}
	}
	?>

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
              <a href="../index.php" class="site_title"><img src="images/crescent.jpg" height="45%" width="15%"/> <span>CRESENT</span></a>
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
                  <li><a  href="../main.php"><img src="images/whitehome.png" height="10%" width="10%"/> HOME </a>
                  </li>
                  <li><a><img src="images/white-cross.png" height="10%" width="10%"/> MEDICAL AID</a>
                    <ul class="nav child_menu">
                      <li><a href="medi.php">NEW USER</a></li>
                      <li><a href="mediold.php">EXISTING USER</a></li>
                    </ul>
                  </li>
				   <li><a><img src="images/edu.png" height="10%" width="10%"/> EDUCATIONAL AID</a>
                    <ul class="nav child_menu">
                      <li><a href="edunew.php">NEW USER</a></li>
                      <li><a href="eduold.php">EXISTING USER</a></li>
                    </ul>
                  </li>
				  <li><a><img src="images/jewel.png" height="10%" width="10%"/> JEWEL LOAN</a>
                    <ul class="nav child_menu">
                      <li><a href="jewelloan.php">NEW USER</a></li>
                      <li><a href="jewelloanold.php">EXISTING USER</a></li>
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
                    <li><a href="../index.php"> Log Out</a></li>
                  </ul>
                </li>
				<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
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
			
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="search" >
                    <span class="input-group-btn">
                      <button class="btn btn-default" name="go" id="go" type="submit">Go!</button>
					  
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
                    <h2><b>Search Form</b><small>Search Details of existing Applicant</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    

                      <div class="form-group">
                         <div class="form-group">
                        <div class="col"><label style="padding-left:36px;"><strong>Adhaar No.:&nbsp;</strong></label><input type="text" name="Adhaar_No" value="<?php echo $Adhaar_No;?>" style="padding-bottom:6px;width:240px;"><label style="padding-left:44px;"><strong>Application No.:&nbsp;</strong></label><input name="Application_No" type="text" style="padding-bottom:6px;width:200px;"></div>
                      </div>
						<div class="form-group">
                        <div class="col"><label style="margin-left:36px"><strong>First Name:&nbsp;</strong></label><input type="text" name="First_Name" value="<?php echo $First_Name;?>" style="padding-bottom:6px;width:180px;"><label style="padding-left:75px;"><strong>Last Name:&nbsp;</strong></label><input type="text" name="Last_Name" value="<?php echo $Last_Name;?>" style="padding-bottom:6px;width:180px;"><label style="padding-left:70px;"><strong>Date of birth:&nbsp;</strong></label><input type="text" name="Date_of_birth" value="<?php echo $Date_of_birth;?>" style="padding-bottom:6px;width:128px;"><label style="margin-left:20px"><strong>Age:&nbsp;</strong></label><input type="number" name="Age" value="<?php echo $Age;?>" style="padding-bottom:6px;width:40px;"></div>
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:26px"><strong>Father Name:&nbsp;</strong></label><input type="text" name="Father_name" value="<?php echo $Father_name;?>" style="padding-bottom:6px;width:200px;"><label style="padding-left:55px;"><strong>Mobile No.:&nbsp;</strong></label><input type="text" name="Mobile_No" value="<?php echo $Mobile_No;?>" style="padding-bottom:6px;width:200px;"><label style="padding-left:50px;"><strong>Address:&nbsp;</strong></label><input type="text" name="Address" value="<?php echo $Address;?>" style="padding-bottom:6px;width:230px;"></div>
					</div>
					<div class="form-group">	
						<div class="col"><label style="margin-left:27px"><strong>Institution Name:&nbsp;</strong></label><input name="Instituion" type="text" value="<?php echo $Institution;?>" style="padding-bottom:6px;width:270px;"><label style="padding-left:35px;"><strong>Course_Applied:&nbsp;</strong></label><input type="text" name="Course_Applied" value="<?php echo $Course_Applied;?>" style="padding-bottom:6px;width:70px;"><label style="padding-left:30px;"><strong>Course_Duration:&nbsp;</strong></label><input type="text" name="Course_Duration" value="<?php echo $Course_Duration;?>" style="padding-bottom:6px;width:70px;"><label style="padding-left:35px;"><strong>Fee Structure:&nbsp;</strong></label><input type="text" name="Fees_Structure" value="<?php echo $Fees_Structure;?>" style="padding-bottom:6px;width:80px;">
                    </div>
					</div>
		
                    
                      
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
						 
                          <button type="button" onclick="showInput()" class="btn btn-success">New Application</button>
                        </div>
                      </div>

                    
                  </div>
				  
				  </div>
				  </br>
				<span id="demo" style="display:none;">
				  <div class="x_panel">
					<div class="x_content">
                    <br />
                    

					<div>
					<div>
					<div class="form-group">
					
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:37px"><strong>Course Studying:&nbsp;</strong></label><input name="currentcourse" type="text" style="padding-bottom:6px;width:100px;"><label style="padding-left:30px;"><strong>Institution:&nbsp;</strong></label><input name="CurrentInstitution" type="text" style="padding-bottom:6px;width:270px;"><label style="padding-left:50px;"><strong>Marks Obtained&nbsp;</strong></label><input name="Marks_Obtained" type="text" style="padding-bottom:6px;width:70px;"><label style="padding-left:50px;"><strong>Attendence Percentage:&nbsp;</strong></label><input name="Attendence" type="text" style="padding-bottom:6px;width:70px;"></div>
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:37px"><strong>Institution Name:&nbsp;</strong></label><input name="Instituion_Name" type="text" style="padding-bottom:6px;width:270px;"><label style="padding-left:35px;"><strong>Course_Applied:&nbsp;</strong></label><input type="text" name="Course_Applied" style="padding-bottom:6px;width:70px;"><label style="padding-left:30px;"><strong>Course_Duration:&nbsp;</strong></label><input type="text" name="Course_Duration" style="padding-bottom:6px;width:70px;"><label style="padding-left:35px;"><strong>Fee Structure:&nbsp;</strong></label><input type="text" name="Fees_Structure" style="padding-bottom:6px;width:80px;"></div>
					</div>
                      </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
						
                          <button type="submit" name="adde" id="adde" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    
                  </div>
                </div>
				</span>
                </div>
				<span id="demo1" style="display:none;">

					<table border="5" style="border-collapse: collapse;width: 100%;color: #000000;font-family: monospace;font-size: 20px;text-align:center;">
					 <tr>
					  <th style="text-align: center;">Application No.</th> 
					  <th style="text-align: center;">Adhaar Id</th> 
					  <th style="text-align: center;">Course </th>
					  <th style="text-align: center;">Course Duration</th>
					  <th style="text-align: center;">Fees Structure</th>
					  
					 </tr>
					 <?php
					$conn = mysqli_connect("localhost", "root", "", "crescent");
					  // Check connection
					  if ($conn->connect_error) {
					   die("Connection failed: " . $conn->connect_error);
					  } 
					  $sql = "SELECT eduaid.Application_No, eduaid.Adhaar_No, eduaid.Course_Applied, eduaid.Course_Duration, eduaid.Fees_Structure
					FROM eduaid
					INNER JOIN edunew ON eduaid.Adhaar_No=edunew.Adhaar_No Where eduaid.Adhaar_No  = '$Adhaar_No' ;

					";
					  $result = $conn->query($sql);
					  if ($result->num_rows > 0) {
					   
					   while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["Application_No"]. "</td><td>" . $row["Adhaar_No"] . "</td><td>". $row["Course_Applied"]. "</td><td>" . $row["Course_Duration"] . "</td><td>" . $row["Fees_Structure"] . "</td></tr>";
					}
					echo "</table>";
					} else { echo ""; }
					$conn->close();
					?>
					</table>

                    
                  
                
				
				
				
				  </span>
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
<?php
	if(isset($_POST['adde'])){
		$Adhaar_No = $_POST['Adhaar_No'];
							$Application_No = $_POST['Application_No'];
							$Marks_Obtained = $_POST['Marks_Obtained'];
							$Course_Applied = $_POST['Course_Applied'];
							$Course_Duration = $_POST['Course_Duration'];
							$Instituion_Name= $_POST['Instituion_Name'];
							$Fees_Structure = $_POST['Fees_Structure'];
							$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

							if ( !empty($Adhaar_No) || !empty($Application_No) || !empty($Marks_Obtained) || !empty($Course_Applied) || !empty($Course_Duration) || !empty($Instituion_Name) || !empty($Fees_Structure))  {
								
								$host = "localhost";
								$dbUsername = "root";
								$dbPassword = "";
								$dbname = "crescent";
								//create connection
								$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
								if (mysqli_connect_error()) {
								 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
								} else {
									
								 $SELECT = "SELECT Application_No From eduaid Where Application_No = ? Limit 1";
								 $INSERT = "INSERT Into eduaid (Application_No, Adhaar_No, Marks_Obtained, Course_Applied, Course_Duration, Instituion_Name, Fees_Structure, ) values('$Application_No','$Adhaar_No','$Marks_Obtained','$Course_Applied','$Course_Duration','$Instituion_Name','$Fees_Structure')";
								 //Prepare statement
								 $stmt = $conn->prepare($SELECT);
								 $stmt->bind_param("s", $Application_No);
								 $stmt->execute();
								 $stmt->bind_result($Application_No);
								 $stmt->store_result();
								 $rnum = $stmt->num_rows;
								 if($rnum==0) {
								  $stmt->close();
								  $stmt = $conn->prepare($INSERT);
								  $stmt->execute();
								  $text="Inserted Successfully";
								  echo '<script type="text/javascript">alert("Inserted Successfully")</script>';
								  
								 } else {
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
	}
?>
