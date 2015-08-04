<?php
include('config.php');//Configuration file imported
//Data recieved from the previous page
$email=mysqli_real_escape_string($con, $_POST['email']);
$country_code=mysqli_real_escape_string($con, $_POST['Country_code']);
$user=mysqli_real_escape_string($con, $_POST['user_name']);
$fname=mysqli_real_escape_string($con, $_POST['first_name']);
$enumc=mysqli_real_escape_string($con, $_POST['no_of_employees']);
$company=mysqli_real_escape_string($con, $_POST['Name_of_company']);
$designation=mysqli_real_escape_string($con, $_POST['Designation']);
$url=mysqli_real_escape_string($con, $_POST['website']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$w2=mysqli_real_escape_string($con, $_POST['re_password']);
$mobile=mysqli_real_escape_string($con, $_POST['Phone_Number']);
//checking for data loss
if($password=="" || $email=="" || $country_code=="" ||$user=="" || $fname=="" || $enumc=="" || $company=="" || $designation=="" || $url=="" || $w2=="" || $mobile=="")
{

$val++;
echo "<script>
window.location.href='/Login/index1.php';
alert('Some Error occured.Try Again.');
</script>";
} else {
if(mysqli_real_escape_string($con, $_POST['usage_mode'])=="")
{
if($password!=$w2)
{
$val++;
echo "<script>
window.location.href='/Login/index1.php';
alert('Password Mismatch.Try Again.');
</script>";
}
//Database query
$result1 = mysqli_query ($con,"SELECT * FROM admin_db");
while($row1 = mysqli_fetch_array($result1))
  {

  	if($email==$row1['email'])
  	{
$val++;
  		echo "<script>
window.location.href='/Login/index1.php';
alert('Email already registered');
</script>";
}
	
if($user==$row1['full_name'])
{
$val++;
	echo "<script>
window.location.href='/Login/index1.php';
alert('Username already registered');
</script>";	
}
if($mobile==$row1['mobile_number'])	
	{
$val++;
	echo "<script>
window.location.href='/Login/index1.php';
alert('Mobile number already registered');
</script>";
}
	}}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Plan Sheet</title>


  <link rel="stylesheet" href="css/foundation.min.css" /> 
    <link rel="stylesheet" href="css/style.css" /> 
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:600' rel='stylesheet' type='text/css'> 

  <script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>
<div id="top"  data-magellan-expedition="fixed">
	<div class="row">
		<div class="large-12 columns">
			<nav class="top-bar">
			  <ul class="title-area">
			   <li class="name logo">
			      <a href="http://www.thrivembs.com"><img src="img/logo.png"  width="340" height="130" alt=""></a>
			    </li>
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			  </ul>
			
			  <section class="top-bar-section">
			    <ul class="right" id="menu">
			      <li data-magellan-arrival="features"><a href="/Erp/index.html#ADMIN">ADMIN</a></li>
			      <li data-magellan-arrival="product"><a href="/Erp/index.html#RMSt">RMS</a></li>
			      <li data-magellan-arrival="pricing"><a href="/Erp/index.html#JOB PORTAL">JOB PORTAL</a></li>
			      <li data-magellan-arrival="contact"><a href="/Erp/index.html#HR">HR</a></li>
				  <li data-magellan-arrival="PAYROLL"><a href="/Erp/index.html#PAYROLL">PAYROLL</a></li>
				   <li data-magellan-arrival="CRM"><a href="/Erp/index.html#CRM">CRM</a></li>
			      <li data-magellan-arrival="FINANCE"><a href="/Erp/index.html#FINANCE">FINANCE</a></li>
			      <li data-magellan-arrival="CONTACTUS"><a href="/Erp/index.html#CONTACTUS">CONTACT US</a></li>
		
			    </ul>
			  </section>
			</nav>
			
					
		</div>
		
	</div>
</div>

<div id="#" class="section pricing gray" data-magellan-destination="#">
	
</div>
	<div class="row price-table">
	 <!---From Opened--->
	<form method="POST" action="create_account_backend_page.php">
<input type="text" name="email" id="email" value="<?php echo $email ; ?>" hidden/>
<input type="text" name="country_code" id="country_code" value="<?php echo $country_code; ?>" hidden/>
<input type="text" name="user" id="user" value="<?php echo $user ; ?>" hidden/>
<input type="text" name="fname" id="fname" value="<?php echo $fname ; ?>" hidden/>
<input type="text" name="enumc" id="enumc" value="<?php echo $enumc ; ?>" hidden/>
<input type="text" name="company" id="company" value="<?php echo $company ; ?>" hidden/>
<input type="text" name="designation" id="designation" value="<?php echo $designation ; ?>" hidden/>
<input type="text" name="url" id="url" value="<?php echo $url ; ?>" hidden/>
<input type="text" name="password" id="password" value="<?php echo $password; ?>" hidden/>
<input type="text" name="mobile" id="mobile" value="<?php echo $mobile ; ?>" hidden/>
<input type="text" name="Finance" id="Finance" value="22" hidden/>
<input type="text" name="CRM" id="CRM" value="22" hidden/>
<input type="text" name="subuser" id="subuser" value="1" hidden/>
		<div class="large-4 columns">
			<ul class="pricing-table featured">
			  <li class="title">C Business One</li>
			  <li class="description">I'm self-employed</li>
			  <li class="price">$9/month</li>
			   <li class="price">1 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">Finance</li>
				  <li class="bullet-item">CRM</li>
				  <li class="bullet-item">Freelancer</li>
				   <li class="bullet-item">Lite Support Plan</li>
			  </ul>
			   <li class="price">15-DAY TRIAL</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
	</form>
	 <!--Form Closed--->
	  <!---From Opened--->
	  <form method="POST" action="create_account_backend_page.php">
<input type="text" name="email" id="email" value="<?php echo $email ; ?>" hidden/>
<input type="text" name="country_code" id="country_code" value="<?php echo $country_code; ?>" hidden/>
<input type="text" name="user" id="user" value="<?php echo $user ; ?>" hidden/>
<input type="text" name="fname" id="fname" value="<?php echo $fname ; ?>" hidden/>
<input type="text" name="enumc" id="enumc" value="<?php echo $enumc ; ?>" hidden/>
<input type="text" name="company" id="company" value="<?php echo $company ; ?>" hidden/>
<input type="text" name="designation" id="designation" value="<?php echo $designation ; ?>" hidden/>
<input type="text" name="url" id="url" value="<?php echo $url ; ?>" hidden/>
<input type="text" name="w1" id="w1" value="<?php echo $w1 ; ?>" hidden/>
<input type="text" name="w2" id="w2" value="<?php echo $w2 ; ?>" hidden/>
<input type="text" name="mobile" id="mobile" value="<?php echo $mobile ; ?>" hidden/>
<input type="text" name="password" id="password" value="<?php echo $password; ?>" hidden/>
<input type="text" name="Finance" id="Finance" value="22" hidden/>
<input type="text" name="CRM" id="CRM" value="22" hidden/>
<input type="text" name="HR" id="HR" value="22" hidden/>
<input type="text" name="subuser" id="subuser" value="5" hidden/>
		<div class="large-4 columns" style="margin-top:-15px;">
			<ul class="pricing-table featured1">
			  <li class="title">C Business Plus</li>
			  <li class="description">I've got a small business</li>
			  <li class="price">$19/month</li>
			   <li class="price">1 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">Finance</li>
				  <li class="bullet-item">CRM</li>
				  <li class="bullet-item">HR/Payroll</li>
				   <li class="bullet-item">Lite Support Plan</li>
			  </ul>
			   <li class="price">15-DAY TRIAL</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
       <!--Form Closed--->
      <!---From Opened--->
      <form method="POST" action="create_account_backend_page.php">
<input type="text" name="email" id="email" value="<?php echo $email ; ?>" hidden/>
<input type="text" name="country_code" id="country_code" value="<?php echo $country_code; ?>" hidden/>
<input type="text" name="user" id="user" value="<?php echo $user ; ?>" hidden/>
<input type="text" name="fname" id="fname" value="<?php echo $fname ; ?>" hidden/>
<input type="text" name="enumc" id="enumc" value="<?php echo $enumc ; ?>" hidden/>
<input type="text" name="company" id="company" value="<?php echo $company ; ?>" hidden/>
<input type="text" name="designation" id="designation" value="<?php echo $designation ; ?>" hidden/>
<input type="text" name="url" id="url" value="<?php echo $url ; ?>" hidden/>
<input type="text" name="password" id="password" value="<?php echo $password ; ?>" hidden/>
<input type="text" name="w2" id="w2" value="<?php echo $w2 ; ?>" hidden/>
<input type="text" name="mobile" id="mobile" value="<?php echo $mobile ; ?>" hidden/>
<input type="text" name="RMS" id="RMS" value="22" hidden/>
<input type="text" name="Job_portal" id="Job_portal" value="22" hidden/>
<input type="text" name="subuser" id="subuser" value="5" hidden/>
		<div class="large-4 columns" style="margin-top:-15px;">
			<ul class="pricing-table featured3">
			  <li class="title">Job Seeker Plus</li>
			  <li class="description">5 User Account</li>
			  <li class="price">$19/month</li>
			   <li class="price">5 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">RMS</li>
				  <li class="bullet-item">Job Portal</li>
				  <li class="bullet-item">Consultant</li>
				   <li class="bullet-item">Lite Support Plan</li>
			  </ul>
			   <li class="price">15-DAY TRIAL</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
	   <!--Form Closed--->
	   <!---From Opened--->
      <form method="POST" action="create_account_backend_page.php">
<input type="text" name="email" id="email" value="<?php echo $email ; ?>" hidden/>
<input type="text" name="country_code" id="country_code" value="<?php echo $country_code; ?>" hidden/>
<input type="text" name="user" id="user" value="<?php echo $user ; ?>" hidden/>
<input type="text" name="fname" id="fname" value="<?php echo $fname ; ?>" hidden/>
<input type="text" name="enumc" id="enumc" value="<?php echo $enumc ; ?>" hidden/>
<input type="text" name="company" id="company" value="<?php echo $company ; ?>" hidden/>
<input type="text" name="designation" id="designation" value="<?php echo $designation ; ?>" hidden/>
<input type="text" name="url" id="url" value="<?php echo $url ; ?>" hidden/>
<input type="text" name="password" id="password" value="<?php echo $password; ?>" hidden/>
<input type="text" name="w2" id="w2" value="<?php echo $w2 ; ?>" hidden/>
<input type="text" name="mobile" id="mobile" value="<?php echo $mobile ; ?>" hidden/>
<input type="text" name="Finance" id="Finance" value="22" hidden/>
<input type="text" name="CRM" id="CRM" value="22" hidden/>
<input type="text" name="HR" id="HR" value="22" hidden/>
<input type="text" name="subuser" id="subuser" value="1" hidden/>
		<div class="large-4 columns">
			<ul class="pricing-table featured4">
			  <li class="title">Company One</li>
			  <li class="description">I run a company with employees</li>
			  <li class="price">$25/month</li>
			   <li class="price">5 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">Finance</li>
				  <li class="bullet-item">CRM</li>
				  <li class="bullet-item">Payroll</li>
				    <li class="bullet-item">HR</li>
				   <li class="bullet-item">Lite Support Plan</li>
				    <li class="bullet-item"></li>
				     <li class="bullet-item"></li>
				      <li class="bullet-item"></li>
				     
			  </ul>
			   <li class="price">15-DAY TRIAL</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
       <!--Form Closed--->
      <!---From Opened--->
      <form method="POST" action="create_account_backend_page.php">
	  <input type="text" name="email" id="email" value="<?php echo $email ; ?>" hidden/>
<input type="text" name="country_code" id="country_code" value="<?php echo $country_code; ?>" hidden/>
<input type="text" name="user" id="user" value="<?php echo $user ; ?>" hidden/>
<input type="text" name="fname" id="fname" value="<?php echo $fname ; ?>" hidden/>
<input type="text" name="enumc" id="enumc" value="<?php echo $enumc ; ?>" hidden/>
<input type="text" name="company" id="company" value="<?php echo $company ; ?>" hidden/>
<input type="text" name="designation" id="designation" value="<?php echo $designation ; ?>" hidden/>
<input type="text" name="url" id="url" value="<?php echo $url ; ?>" hidden/>
<input type="text" name="password" id="password" value="<?php echo $password ; ?>" hidden/>
<input type="text" name="mobile" id="mobile" value="<?php echo $mobile ; ?>" hidden/>
<input type="text" name="RMS" id="RMS" value="22" hidden/>
<input type="text" name="Job_portal" id="Job_portal" value="22" hidden/>
<input type="text" name="subuser" id="subuser" value="1" hidden/>
		<div class="large-4 columns">
			<ul class="pricing-table featured5">
			  <li class="title">Job Seeker</li>
			  <li class="description">1 User Account</li>
			  <li class="price">$9/month</li>
			   <li class="price">1 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">RMS</li>
				  <li class="bullet-item">Job Portal</li>
				   <li class="bullet-item">Lite Support Plan</li>
				   <li class="bullet-item"></li>
				    <li class="bullet-item"></li>
				     <li class="bullet-item"></li>
				      <li class="bullet-item"></li>
				       <li class="bullet-item"></li>
				        <li class="bullet-item"></li>
			  </ul>
			   <li class="price">15-DAY TRIAL</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
	   <!--Form Closed--->
      <!---From Opened--->
	<form method="POST" action="create_account_backend_page.php">
<input type="text" name="email" id="email" value="<?php echo $email ; ?>" hidden/>
<input type="text" name="country_code" id="country_code" value="<?php echo $country_code; ?>" hidden/>
<input type="text" name="user" id="user" value="<?php echo $user ; ?>" hidden/>
<input type="text" name="fname" id="fname" value="<?php echo $fname ; ?>" hidden/>
<input type="text" name="enumc" id="enumc" value="<?php echo $enumc ; ?>" hidden/>
<input type="text" name="company" id="company" value="<?php echo $company ; ?>" hidden/>
<input type="text" name="designation" id="designation" value="<?php echo $designation ; ?>" hidden/>
<input type="text" name="url" id="url" value="<?php echo $url ; ?>" hidden/>
<input type="text" name="password" id="password" value="<?php echo $password; ?>" hidden/>
<input type="text" name="w2" id="w2" value="<?php echo $w2 ; ?>" hidden/>
<input type="text" name="mobile" id="mobile" value="<?php echo $mobile ; ?>" hidden/>
<input type="text" name="Finance" id="Finance" value="22" hidden/>
<input type="text" name="CRM" id="CRM" value="22" hidden/>
<input type="text" name="HR" id="HR" value="22" hidden/>
<input type="text" name="RMS" id="RMS" value="22" hidden/>
<input type="text" name="Job_portal" id="Job_portal" value="22" hidden/>
<input type="text" name="subuser" id="subuser" value="5" hidden/>	
		
		<div class="large-4 columns">
			<ul class="pricing-table featured6">
			  <li class="title">Company Plus</li>
			  <li class="description">I run a company with HR Staff</li>
			  <li class="price">$39/month</li>
			   <li class="price">5 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">Finance</li>
				  <li class="bullet-item">CRM</li>
				  <li class="bullet-item">Payroll</li>
				  <li class="bullet-item">RMS</li>
				  <li class="bullet-item">Job Portal</li>
	            	          <li class="bullet-item">HR</li>
				   <li class="bullet-item">Lite Support Plan</li>
			  </ul>
			   <li class="price">15-DAY TRIAL</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
	   <!--Form Closed--->
	</div>
	
</div>


<footer>
	<div class="row">
		<div class="large-6 columns">
			<ul class="inline-list" style="font-size:13px;width:850px;">
			
			  <li class="copyright"> <a href="http://www.thrivembs.com/Erp/footer.html#TERMS AND CONDITIONS">Terms & Conditions</a></li>
			  <li class="copyright"> |</li>
			   <li class="copyright"> <a href="http://www.thrivembs.com/Erp/footer.html#PRIVACY POLICY">Privacy Policy</a></li>
			 <li class="copyright"> |</li>
			  <li class="copyright"><a href="http://www.thrivembs.com/Erp/footer.html#USER ACCOUNT POLICY">User Account Policy</a></li>
			  <li class="copyright"> |</li>
			   <li class="copyright"> <a href="http://www.thrivembs.com/Erp/footer.html#PAYMENT POLICY">Payment Policy</a></li>
			   <li class="copyright"> |</li>
			   

			   <li class="copyright"> <a href="http://thrivesmarter.com/">All Rights Reserved &copy;THRIVE SMARTER</a></li>
			   </font>
  			</ul>
		</div>
		<div class="large-6 columns">
			<ul class="inline-list social-media right" style="margin-left:50px;">
				<li><a href="#" class="icon icon-facebook"></a></li>
				<li><a href="#" class="icon icon-twitter"></a></li>
				<li><a href="#" class="icon icon-linkedin"></a></li>
		
			</ul>
		</div>
	</div>
</footer>			
			
  <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="js/foundation.min.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
  <script src="js/jquery.localscroll-1.2.7.js" type="text/javascript"></script>
  <script src="js/jquery.scrollTo-1.4.3.1.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/flexslider.css"> <!-- Flex slider -->
  <script src="js/jquery.flexslider.js" type="text/javascript"></script><!-- Flex slider -->
  <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
<?php } ?>