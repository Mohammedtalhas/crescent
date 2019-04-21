<!DOCTYPE html>
<?php 
	$conn=mysqli_connect("localhost","root","")or die("conection error");
mysqli_select_db($conn,"crescent")or die("dbase error");
	if(isset($_POST['go'])){
		
			$result= mysqli_query($conn,"SELECT * From medinew Where aadhar_id = '$_POST[search]'");
			while($rowval=mysqli_fetch_array($result)){
				$Adhaar_id = $rowval['aadhar_id'];
				$First_Name = $rowval['First_Name'];
				$Last_Name = $rowval['Last_Name'];
				$Date_of_birth = $rowval['Date_of_birth'];
				$Age = $rowval['Age'];
				$Mobile_No= $rowval['Mobile_No'];
				$Address = $rowval['Address'];
				$Town_City = $rowval['Town_City'];  
				
				
			}	
			$result1= mysqli_query($conn,"SELECT MAX(Application_No) AS high From mediaid;");
			while($rowval=mysqli_fetch_array($result1)){
				$Application = $rowval['high'];
				 
				
			}
		
	 }elseif(isset($_POST['goo'])){
		
			$result= mysqli_query($conn,"SELECT * From mediaid Where Application_No = '$_POST[seearch]'");
			echo'<script>document.getElementById("demo2").style.display = "block";</script>';
			
			while($rowval=mysqli_fetch_array($result)){
				$Aadhaar_id = $rowval['aadhar_id'];
				$Application_Noo = $rowval['Application_No'];
				$Detailss = $rowval['Details'];
				$Amount_Sanctionedd = $rowval['Amount_Sanctioned'];
				$Date_of_Transaction = $rowval['Date_of_transaction'];
				$stattus = $rowval['Status'];  
				
				
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
	<script>
		$(document).ready(function(){  
		  $('#add').click(function(){  
			   var image_name = $('#image').val();  
			   if(image_name == '')  
			   {  
					alert("Please Select Image");  
					return false;  
			   }  
			   else  
			   {  
					var extension = $('#image').val().split('.').pop().toLowerCase();  
					if( jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
					{  
						 alert('Invalid Image File');  
						 $('#image').val('');  
						 return false;  
					}  
			   }  
		  });  
	 }); 
	
	</script>
	<script>
	function hi(){
		 
		document.getElementById("bton").onclick=null;
		var element = document.getElementById("myDIV");
   element.classList.toggle("mystyle");
		 
	}
	</script>
	
	 <script language="JavaScript">
	
    function showInput() {
	if(document.getElementById("Age").value != ""){
		if(document.getElementById("demo").style.display == "none"){
			
			document.getElementById("demo").style.display = "block";
			
		}else{
			document.getElementById("demo").style.display = "none";
		}      
   }
}
   
	function showInput2() {
		if(document.getElementById("demo1").style.display == "none"){
			
			document.getElementById("demo1").style.display = "block";
		}else{
			document.getElementById("demo1").style.display = "none";
		}      
    }
	function demo() {
		if(document.getElementById("demo1").style.display == "none"){
		document.getElementById("demo2").style.display = "block";
		}
		if(document.getElementById("goo").onclick = true ){
			document.getElementById("demo2").style.display = "block";
		}
		
			
    }
	function showInput1() {
		if(document.getElementById("go").onclick = true ){
			document.forms['demo-form1'].submit();
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
		<form id="demo-form1" method="post" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>MEDICAL AID</h3>
              </div>
			<span id="hii" style="display:block;">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="search" >
					
                    <span class="input-group-btn">
                      <button class="btn btn-default" name="go" id="go" onclick="showInput1()" type="submit">Go!</button> 

                    </span>
					
                  </div>
                </div>
              </div>
			 </span>
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
                        <div class="col"><label style="margin-left:30px"><strong>Adhaar No.:&nbsp;</strong></label><input type="text" name="aadhar_id" maxlength="12" value="<?php echo $Adhaar_id;?>" style="padding-bottom:6px;width:240px;" readonly></div>
                      </div>
						<div class="form-group">
                        <div class="col"><label style="margin-left:36px"><strong>First Name:&nbsp;</strong></label><input type="text" name="First_Name" value="<?php echo $First_Name;?>" style="padding-bottom:6px;width:180px;" readonly><label style="padding-left:55px;"><strong>Last Name:&nbsp;</strong></label><input type="text" name="Last_Name" value="<?php echo $Last_Name;?>" style="padding-bottom:6px;width:180px;" readonly><label style="padding-left:70px;"><strong>Date of birth:&nbsp;</strong></label><input type="text" name="Date_of_birth" value="<?php echo $Date_of_birth;?>" style="padding-bottom:6px;width:128px;" readonly><label style="margin-left:20px"><strong>Age:&nbsp;</strong></label><input type="number" id="Age" name="Age" value="<?php echo $Age;?>" readonly style="padding-bottom:6px;width:40px;"></div>
					</div>
					<div class="form-group">
                        <label style="padding-left:35px;"><strong>Mobile No.:&nbsp;</strong></label><input type="text" name="Mobile_No" value="<?php echo $Mobile_No;?>" style="padding-bottom:6px;width:200px;" readonly><label style="padding-left:50px;"><strong>Address:&nbsp;</strong></label><input type="text" name="Address" value="<?php echo $Address;?>" style="padding-bottom:6px;width:230px;" readonly><label style="padding-left:55px;"><strong>Town/City: &nbsp;</strong></label><input type="text" name="Town_City" value="<?php echo $Town_City;?>" style="padding-bottom:6px;width:200px;" readonly></div>
					</div>
					 
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" onclick="demo()" type="button">Update Application</button>
						  <button class="btn btn-primary"onclick="showInput2()" type="button" >Check History</button>
						  <button type="button" name="inc" id="inc" onclick="showInput();" class="btn btn-success">New Application</button>
                        </div>
                      </div>
						
                  </div>
				  
				  <span id="demo1" style="display:none;">
				   <div class="x_panel">
					<div class="x_content">
					
                    <br />
                    <link href="../production/css/image.css" rel="stylesheet">
					
					<table border="1" style="border-collapse: collapse;width: 100%;color: #000000;font-family: monospace;font-size: 20px;text-align: center;">
					 <tr>
					  <th style="text-align: center;">Application No.</th> 
					  <th style="text-align: center;">Adhaar Id</th> 
					  <th style="text-align: center;">Amount Sanctioned</th>
					  <th style="text-align: center;">Amount Sanctioned in Words</th>
					  <th style="text-align: center;"> Details </th>
					  <th style="text-align: center;"> Date </th>
					  <th style="text-align: center;"> Concern Letter </th>
					  <th style="text-align: center;"> Discharge Report </th>
					  
					 </tr>
					 <?php
					$conn = mysqli_connect("localhost", "root", "", "crescent");
					  // Check connection
					  if ($conn->connect_error) {
					   die("Connection failed: " . $conn->connect_error);
					  } 
					  $sql = "SELECT mediaid.Application_No, mediaid.aadhar_id, mediaid.Amount_Sanctioned,mediaid.Amount_Sanctioned_words,mediaid.Details,mediaid.Date_of_transaction,mediaid.name,mediaid.Status
					FROM mediaid
					INNER JOIN medinew ON mediaid.aadhar_id=medinew.aadhar_id Where mediaid.aadhar_id  = '$Adhaar_id' ;

					";
					  $result = $conn->query($sql);
					  if ($result->num_rows > 0) {
					   
					   while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["Application_No"]. "</td><td>" . $row["aadhar_id"] . "</td><td>". $row["Amount_Sanctioned"]. "</td><td>" . $row["Amount_Sanctioned_words"] . "</td><td>" . $row["Details"] . "</td><td>" . $row["Date_of_transaction"] . "</td>";
						echo '<td><img class="myImg" id="myImg" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="50" width="50" class="img-thumnail" />"</td><td>' . $row["Status"] . '</td></tr>';
					}
					echo "</table>";
					} else { echo ""; }
					$conn->close();
					?>
					</table>

                    
                  <div id="myModal" class="modal">
				  <span class="close">&times;</span>
				  <img class="modal-content" id="img01">
				  <div id="caption"></div>
					</div>

					<script>
					// Get the modal
					
					var modal = document.getElementById("myModal");
					var i;
				
					var img = document.getElementsByClassName("myImg");
					var modalImg = document.getElementById("img01");

					 for(i=0;i< img.length;i++)
					   {    
						img[i].onclick = function(){
						modal.style.display = "block";
						   modalImg.src = this.src;
						   document.getElementById("hii").style.display = "none";

					 }
					}
					
					var span = document.getElementsByClassName("close")[0];


					span.onclick = function() { 
					   modal.style.display = "none";
					   document.getElementById("hii").style.display = "block";
					}

					</script>
                
				  </div>
				  </div>
				
				
				  </span>
				  </br>
				  </br>
				  
				  <span id="demo" style="display:none;">
				  
					<div class="x_panel">
					<div class="x_content">
                    <br />
                    

					
					<div id="deme">
					<div class="form-group">
					<label style="padding-left:100px;"><strong>Application No.:&nbsp;</strong></label><input name="Application_No" type="text" style="padding-bottom:6px;width:200px;" value="<?php echo $Application+1; ?>" readonly><label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
						 <input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction" style="padding-bottom:6px;width:128px;"> 
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:37px"><strong>Details of Medical Report:&nbsp;</strong></label><input name="Details" type="textarea" style="padding-bottom:6px;width:765px;"></div>
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:70px"><strong>Amount Sanctioned:&nbsp;</strong></label><input name="Amount_Sanctioned" type="text" style="padding-bottom:6px;width:200px;"> <label style="padding-left:70px;"><strong>Discharge Report:&nbsp;</strong></label><select name="status">
        <option></option>
		<option value="submitted">Submitted</option>
		<option value="not submitted">Not Submitted</option></select>
	<input type="file" name="image" id="image" style="margin-left:70px" > </div>
					
                      </div>
                      </div>
					  
					
						
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" name="pd" id="pd" type="submit">Print</button>
						  <button type="submit" name="add" id="add" class="btn btn-success">Submit</button>
						  
						  
                        </div>
                      </div>

                    
                  </div>
                </div>
				
				
				</form>
				  </span>
				  </span>
				  </br>
				  </br>
				  
				  <span id="demo2" style="display:none;">
					<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="seearch" >
					
                    <span class="input-group-btn">
                      <button class="btn btn-default" name="goo" id="goo" type="submit">Go!</button> 

                    </span>
					
                  </div>
                </div>
					<div class="x_panel">
					<div class="x_content">
                    <br />
                    

					
					<div id="deme">
					<div class="form-group">
					<label style="padding-left:100px;"><strong>Application No.:&nbsp;</strong></label><input  type="text" style="padding-bottom:6px;width:200px;" name="App_No" value="<?php echo $Application_Noo; ?>" readonly><label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
						 <input type="text" value="<?php echo $Date_of_Transaction; ?>"   style="padding-bottom:6px;width:128px;"> 
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:37px"><strong>Details of Medical Report:&nbsp;</strong></label><input type="textarea" value="<?php echo $Detailss; ?>" style="padding-bottom:6px;width:765px;"></div>
					</div>
					<div class="form-group">
                        <div class="col"><label style="margin-left:70px"><strong>Amount Sanctioned:&nbsp;</strong></label><input  type="text" value="<?php echo $Amount_Sanctionedd; ?>" style="padding-bottom:6px;width:200px;"><label style="padding-left:70px;"><strong>Discharge Report:&nbsp;</strong></label><select name="Stats"  >
        <option></option>
		<option value="submitted">Submitted</option>
		<option value="not submitted">Not Submitted</option></select> <input type="file" style="margin-left:70px" > </div>
					
                      </div>
                      </div>
					  
					
						
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" name="pd" id="pd" type="submit">Print</button>
						  <button type="submit" name="addd" id="addd" class="btn btn-success">Submit</button>
						  
						  
                        </div>
                      </div>

                    
                  </div>
                </div>
				
				
				</form>
				  </span>
				  
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
if(isset($_POST['add'])){
							
							function getIndianCurrency(float $number)
							{
								$decimal = round($number - ($no = floor($number)), 2) * 100;
								$hundred = null;
								$digits_length = strlen($no);
								$i = 0;
								$str = array();
								$words = array(0 => '', 1 => 'one', 2 => 'two',
									3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
									7 => 'seven', 8 => 'eight', 9 => 'nine',
									10 => 'ten', 11 => 'eleven', 12 => 'twelve',
									13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
									16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
									19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
									40 => 'forty', 50 => 'fifty', 60 => 'sixty',
									70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
								$digits = array('', 'hundred','thousand','lakh', 'crore');

								while( $i < $digits_length ) {
									$divider = ($i == 2) ? 10 : 100;
									$number = floor($no % $divider);
									$no = floor($no / $divider);
									$i += $divider == 10 ? 1 : 2;
									if ($number) {
										$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
										$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
										$str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
									} else $str[] = null;
								}

								$rupees = implode('', array_reverse($str));
								$paise = '';

								if ($decimal) {
									$paise = 'and ';
									$decimal_length = strlen($decimal);

									if ($decimal_length == 2) {
										if ($decimal >= 20) {
											$dc = $decimal % 10;
											$td = $decimal - $dc;
											$ps = ($dc == 0) ? '' : '-' . $words[$dc];

											$paise .= $words[$td] . $ps;
										} else {
											$paise .= $words[$decimal];
										}
									} else {
										$paise .= $words[$decimal % 10];
									}

									$paise .= ' paise';
								}

								return ($rupees ? $rupees . 'rupees ' : '') . $paise ;
							}
							$aadhar_id = $_POST['aadhar_id'];
							$Application_No = $_POST['Application_No'];
							$Date_of_transaction = $_POST['Date_of_transaction'];
							$Details = $_POST['Details'];
							$Amount_Sanctioned = $_POST['Amount_Sanctioned'];
							$Amount_Sanctioned_words= getIndianCurrency($Amount_Sanctioned);
							$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
							$status = $_POST['status'];

							if ( !empty($aadhar_id) || !empty($Application_No) || !empty($Date_of_transaction) || !empty($Details) || !empty($Amount_Sanctioned) || !empty($Amount_Sanctioned_words) || !empty($file))  {
								
								$host = "localhost";
								$dbUsername = "root";
								$dbPassword = "";
								$dbname = "crescent";
								//create connection
								$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
								if (mysqli_connect_error()) {
								 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
								} else {
								 
								 $SELECT = "SELECT Application_No From mediaid Where Application_No = ? Limit 1";
								 $INSERT = "INSERT Into mediaid (Application_No, aadhar_id, Details, Amount_Sanctioned, Amount_Sanctioned_words, Date_of_transaction, name, Status) values('$Application_No','$aadhar_id', '$Details', '$Amount_Sanctioned', '$Amount_Sanctioned_words', ' $Date_of_transaction', '$file', '$status')";
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
								  
								  echo '<script type="text/javascript">if (confirm("Do you want to print?")) {
									  
									  window.open("http://localhost/cres/production/medical.php");
									  
									  
} else {
  txt = "You pressed Cancel!";
}</script>';
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
		 
		 }elseif(isset($_POST['addd'])){
			 $App_No=$_POST['App_No'];
			 $stats=$_POST['Stats'];
			 if ( !empty($App_No)){
								$host = "localhost";
								$dbUsername = "root";
								$dbPassword = "";
								$dbname = "crescent";
								//create connection
								$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
								if (mysqli_connect_error()) {
								 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
								} else {
									$INSERT = "UPDATE mediaid SET Status='$stats' WHERE Application_No = '$App_No';";
								 //Prepare statement
								 if(mysqli_query($conn,$INSERT)){
								  
								  echo '<script type="text/javascript">alert("Inserted Successfullly!!!!")</script>';
								 } else {
								  $text="Someone already register using this id";
								  echo '<script type="text/javascript">alert("'.$text.'")</script>';
								 }
								}
							} else {
							 echo "All field are required";
							 die();
							}
			 
		 }
			
		 ?>