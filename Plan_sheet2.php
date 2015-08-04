<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900))
{
echo "<script>
window.location.href='/Erp/logout.php';
alert('Session expired');
</script>";
}
$_SESSION['LAST_ACTIVITY'] = time();

$naqw=$_SESSION['name'];

include("config.php");
$result1 = mysqli_query ($con,"SELECT * FROM admin_db WHERE full_name='$naqw'");
$row1 = mysqli_fetch_array($result1);
$first_name=$row1['first_name'];
$email=$row1['email'];
$country_code=$row1['country_code'];
$mobile_number=$row1['mobile_number'];
$address_1=$row1['address_1'];
$address_2=$row1['address_2'];
$city=$row1['city'];
$state=$row1['state'];
$country=$row1['country'];
$pincode=$row1['pincode'];
$money=$row1['money'];
$company_name=$row1['company_name'];
$order_id=rand(10000000,99999999);
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
   <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <script src="js/vendor/custom.modernizr.js"></script>
  <script type="text/javascript">
   function month()
   {
   if(document.button.subcription)
   location='http://www.thrivembs.com/Erp/Plan_sheet1.php'
   }
   function year()
   {
   if(document.button.subcription)
   location='http://www.thrivembs.com/Erp/Plan_sheet2.php'
   }
   </script>
</head>
<body >
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

<div id="#" class="section pricing gray" data-magellan-destination="#" >
	
</div>
	<div class="row price-table" >
	 <!---From Opened--->
	<form method="POST" action="/payment/NON_SEAMLESS_KIT/Confirm_pay.php" name="button">
<input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" hidden/>
<input type="text" name="email" id="email" value="<?php echo $email; ?>" hidden/>
<input type="text" name="mobile_number" id="mobile_number" value="<?php echo $country_code . $mobile_number; ?>" hidden/>
<input type="text" name="company_name" id="company_name" value="<?php echo $company_name; ?>" hidden/>
<input type="text" name="address_1" id="address_1" value="<?php echo $address_1 . $address_2; ?>" hidden/>
<input type="text" name="city" id="city" value="<?php echo $city; ?>" hidden/>
<input type="text" name="state" id="state" value="<?php echo $state; ?>" hidden/>
<input type="text" name="country" id="country" value="<?php echo $country; ?>" hidden/>
<input type="text" name="pincode" id="pincode" value="<?php echo $pincode; ?>" hidden/>
<input type="text" name="currency" id="currency" value="INR" hidden/>
<input type="text" name="plan_name" id="plan_name" value="C Business One" hidden/>
<input type="text" name="price" id="price" value="9" hidden/>
<input type="text" name="order_id" id="order_id" value="<?php echo $order_id; ?>" hidden/>
		<div class="large-4 columns">
			<ul class="pricing-table featured">
			  <li class="title">C Business One</li>
			  <li class="description">I'm self-employed</li>
			  <li class="price">$108/Year</li>
			   <li class="price">1 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">Finance</li>
				  <li class="bullet-item">CRM</li>
				  <li class="bullet-item">Freelancer</li>
				   <li class="bullet-item">Lite Support Plan</li>
				   
			  </ul>
			   <li class="price">
			   <input type="radio" name="subcription"  onclick="month()">Monthly
			   <input type="radio" name="subcription" checked onclick="year()">Yearly</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Subscribe Now"></li>
			</ul>
		</div>
	</form>
	 <!--Form Closed--->
	  <!---From Opened--->
	  <form method="POST" action="/payment/NON_SEAMLESS_KIT/Confirm_pay.php">
<input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" hidden/>
<input type="text" name="email" id="email" value="<?php echo $email; ?>" hidden/>
<input type="text" name="mobile_number" id="mobile_number" value="<?php echo $country_code . $mobile_number; ?>" hidden/>
<input type="text" name="company_name" id="company_name" value="<?php echo $company_name; ?>" hidden/>
<input type="text" name="address_1" id="address_1" value="<?php echo $address_1 . $address_2; ?>" hidden/>
<input type="text" name="city" id="city" value="<?php echo $city; ?>" hidden/>
<input type="text" name="state" id="state" value="<?php echo $state; ?>" hidden/>
<input type="text" name="country" id="country" value="<?php echo $country; ?>" hidden/>
<input type="text" name="pincode" id="pincode" value="<?php echo $pincode; ?>" hidden/>
<input type="text" name="currency" id="currency" value="INR" hidden/>
<input type="text" name="plan_name" id="plan_name" value="C Business Plus" hidden/>
<input type="text" name="price" id="price" value="19" hidden/>
<input type="text" name="order_id" id="order_id" value="<?php echo $order_id; ?>" hidden/>
		<div class="large-4 columns" style="margin-top:-15px;">
			<ul class="pricing-table featured1">
			  <li class="title">C Business Plus</li>
			  <li class="description">I've got a small business</li>
			  <li class="price">$228/Year</li>
			   <li class="price">1 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">Finance</li>
				  <li class="bullet-item">CRM</li>
				  <li class="bullet-item">HR/Payroll</li>
				   <li class="bullet-item">Lite Support Plan</li>
			  </ul>
			   <li class="price">
			   <input type="radio" name="subcription" onclick="month()">Monthly
			   <input type="radio" name="subcription" checked onclick="year()">Yearly</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
       <!--Form Closed--->
      <!---From Opened--->
      <form method="POST" action="/payment/NON_SEAMLESS_KIT/Confirm_pay.php">
<input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" hidden/>
<input type="text" name="email" id="email" value="<?php echo $email; ?>" hidden/>
<input type="text" name="mobile_number" id="mobile_number" value="<?php echo $country_code . $mobile_number; ?>" hidden/>
<input type="text" name="company_name" id="company_name" value="<?php echo $company_name; ?>" hidden/>
<input type="text" name="address_1" id="address_1" value="<?php echo $address_1 . $address_2; ?>" hidden/>
<input type="text" name="city" id="city" value="<?php echo $city; ?>" hidden/>
<input type="text" name="state" id="state" value="<?php echo $state; ?>" hidden/>
<input type="text" name="country" id="country" value="<?php echo $country; ?>" hidden/>
<input type="text" name="pincode" id="pincode" value="<?php echo $pincode; ?>" hidden/>
<input type="text" name="currency" id="currency" value="INR" hidden/>
<input type="text" name="plan_name" id="plan_name" value="Job Seeker Plus" hidden/>
<input type="text" name="price" id="price" value="19" hidden/>
<input type="text" name="order_id" id="order_id" value="<?php echo $order_id; ?>" hidden/>
		<div class="large-4 columns" style="margin-top:-15px;">
			<ul class="pricing-table featured3">
			  <li class="title">Job Seeker Plus</li>
			  <li class="description">5 User Account</li>
			  <li class="price">$228/Year</li>
			   <li class="price">5 User</li>
  			  <a class="price-table-toggle">+ Show features</a>
  			  <ul class="price-table-features">
				  <li class="bullet-item">RMS</li>
				  <li class="bullet-item">Job Portal</li>
				  <li class="bullet-item">Consultant</li>
				   <li class="bullet-item">Lite Support Plan</li>
			  </ul>
			   <li class="price"><input type="radio" name="subcription"  onclick="month()">Monthly
			   <input type="radio" name="subcription" checked onclick="year()">Yearly</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
	   <!--Form Closed--->
	   <!---From Opened--->
      <form method="POST" action="/payment/NON_SEAMLESS_KIT/Confirm_pay.php">
<input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" hidden/>
<input type="text" name="email" id="email" value="<?php echo $email; ?>" hidden/>
<input type="text" name="mobile_number" id="mobile_number" value="<?php echo $country_code . $mobile_number; ?>" hidden/>
<input type="text" name="company_name" id="company_name" value="<?php echo $company_name; ?>" hidden/>
<input type="text" name="address_1" id="address_1" value="<?php echo $address_1 . $address_2; ?>" hidden/>
<input type="text" name="city" id="city" value="<?php echo $city; ?>" hidden/>
<input type="text" name="state" id="state" value="<?php echo $state; ?>" hidden/>
<input type="text" name="country" id="country" value="<?php echo $country; ?>" hidden/>
<input type="text" name="pincode" id="pincode" value="<?php echo $pincode; ?>" hidden/>
<input type="text" name="currency" id="currency" value="INR" hidden/>
<input type="text" name="plan_name" id="plan_name" value="Company one" hidden/>
<input type="text" name="price" id="price" value="25" hidden/>
<input type="text" name="order_id" id="order_id" value="<?php echo $order_id; ?>" hidden/>
		<div class="large-4 columns">
			<ul class="pricing-table featured4">
			  <li class="title">Company One</li>
			  <li class="description">I run a company with employees</li>
			  <li class="price">$300/Year</li>
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
			   <li class="price"><input type="radio" name="subcription"  onclick="month()">Monthly
			   <input type="radio" name="subcription" checked onclick="year()">Yearly</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
       <!--Form Closed--->
      <!---From Opened--->
      <form method="POST" action="/payment/NON_SEAMLESS_KIT/Confirm_pay.php">
<input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" hidden/>
<input type="text" name="email" id="email" value="<?php echo $email; ?>" hidden/>
<input type="text" name="mobile_number" id="mobile_number" value="<?php echo $country_code . $mobile_number; ?>" hidden/>
<input type="text" name="company_name" id="company_name" value="<?php echo $company_name; ?>" hidden/>
<input type="text" name="address_1" id="address_1" value="<?php echo $address_1 . $address_2; ?>" hidden/>
<input type="text" name="city" id="city" value="<?php echo $city; ?>" hidden/>
<input type="text" name="state" id="state" value="<?php echo $state; ?>" hidden/>
<input type="text" name="country" id="country" value="<?php echo $country; ?>" hidden/>
<input type="text" name="pincode" id="pincode" value="<?php echo $pincode; ?>" hidden/>
<input type="text" name="currency" id="currency" value="INR" hidden/>
<input type="text" name="plan_name" id="plan_name" value="Job Seeker" hidden/>
<input type="text" name="price" id="price" value="9" hidden/>
<input type="text" name="order_id" id="order_id" value="<?php echo $order_id; ?>" hidden/> 
		<div class="large-4 columns">
			<ul class="pricing-table featured5">
			  <li class="title">Job Seeker</li>
			  <li class="description">1 User Account</li>
			  <li class="price">$108/Year</li>
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
			   <li class="price"><input type="radio" name="subcription"  onclick="month()">Monthly
			   <input type="radio" name="subcription" checked onclick="year()">Yearly</li>
			  <li class="cta-button"><input type="submit" class="button secondary radius" value="Buy Now"></li>
			</ul>
		</div>
		</form>
	   <!--Form Closed--->
      <!---From Opened--->
	<form method="POST" action="/payment/NON_SEAMLESS_KIT/Confirm_pay.php">
<input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" hidden/>
<input type="text" name="email" id="email" value="<?php echo $email; ?>" hidden/>
<input type="text" name="mobile_number" id="mobile_number" value="<?php echo $country_code . $mobile_number; ?>" hidden/>
<input type="text" name="company_name" id="company_name" value="<?php echo $company_name; ?>" hidden/>
<input type="text" name="address_1" id="address_1" value="<?php echo $address_1 . $address_2; ?>" hidden/>
<input type="text" name="city" id="city" value="<?php echo $city; ?>" hidden/>
<input type="text" name="state" id="state" value="<?php echo $state; ?>" hidden/>
<input type="text" name="country" id="country" value="<?php echo $country; ?>" hidden/>
<input type="text" name="pincode" id="pincode" value="<?php echo $pincode; ?>" hidden/>
<input type="text" name="currency" id="currency" value="INR" hidden/>
<input type="text" name="plan_name" id="plan_name" value="Company Plus" hidden/>
<input type="text" name="price" id="price" value="39" hidden/>
<input type="text" name="order_id" id="order_id" value="<?php echo $order_id; ?>" hidden/>
		
		<div class="large-4 columns">
			<ul class="pricing-table featured6">
			  <li class="title">Company Plus</li>
			  <li class="description">I run a company with HR Staff</li>
			  <li class="price">$468/Year</li>
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
			   <li class="price"><input type="radio" name="subcription"  onclick="month()">Monthly
			   <input type="radio" name="subcription" checked onclick="year()">Yearly</li>
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
				<li><a href="https://www.facebook.com/thrivesmarter" class="icon icon-facebook"></a></li>
				<li><a href="https://twitter.com/thrivesmater" class="icon icon-twitter"></a></li>
				<li><a href="https://www.linkedin.com/company/thrive-smarter?trk=company_name" class="icon icon-linkedin"></a></li>
		
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
<?php
}
else
{
header("location:/Login/login.php");	
}
?>