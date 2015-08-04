<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<html>

<head>

<script type="text/javascript">
function validateForm()
 {	

	var x = document.forms["contactform"]["name"].value;
    if (x==null || x=="" ) {
        alert("Required Name");
		return false;
		
    }
	if (x!=null && x.length<3 )
	{
        alert("Required Name Minimum 3 Characters");
		return false;
		
    }
  	
	var x = document.forms["contactform"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Required a valid Email Address");
        return false;
    }
	       
  
  
    
    
	var x = document.forms["contactform"]["message"].value;
    if (x==null || x=="") {
        alert("Required Message");
        return false;
    }
	if (x!=null && x.length<11 )
	{
        alert("Required Message Minimum 11 Character");
		return false;
		
    }
      	
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
}

function spacea(event) {
  var key = event.keyCode;
  return (key != 32);
}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Bank Details</title>

  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/ie.css" />
 <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  

  <script src="js/vendor/custom.modernizr.js"></script>
<script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var refferer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//thrivembs.com/livehelperchat/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+refferer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
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
			      <li data-magellan-arrival="ADMIN"><a href="#ADMIN">ADMIN</a></li>
			      <li data-magellan-arrival="RMS"><a href="#RMS">RMS</a></li>
			      <li data-magellan-arrival="JOB PORTAL"><a href="#JOB PORTAL">JOB PORTAL</a></li>
			      <li data-magellan-arrival="HR"><a href="#HR">HR</a></li>
				  <li data-magellan-arrival="PAYROLL"><a href="#PAYROLL">PAYROLL</a></li>
				   <li data-magellan-arrival="CRM"><a href="#CRM">CRM</a></li>
			      <li data-magellan-arrival="FINANCE"><a href="#FINANCE">FINANCE</a></li>
			      <li data-magellan-arrival="CONTACTUS"><a href="#CONTACTUS">CONTACT US</a></li>
		<li data-magellan-arrival="SUPPORT"><a href="http://thrivembs.com/support/index.php#SUPPORT">SUPPORT</a></li>
		<li data-magellan-arrival="PAYMENT"><a href="http://thrivembs.com/payment/Bank/bank.php#PAYMENT">PAYMENT</a></li>
			    </ul>
			  </section>
			</nav>
			
		<a class="download-btn1" href="http://www.thrivembs.com/job_front/" target="_blank" style="margin-right:15px;">JOB SEEKER</a>
						<a class="download-btn2" href="/Login/login.php" style="margin-right:15px;">LOGIN</a>				
		</div>
		
	</div>
</div>

<header id="header" >
	<div class="row">
    
    	<div class="large-6 columns">
			<div id="teaser-slider-2">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<img src="img/slides/iphoneshots-1.jpg" alt="Petrichor - slider">
									</li>
									<li>
										<img src="img/slides/iphoneshots-2.jpg" alt="Petrichor - slider">
									</li>
									<li>
										<img src="img/slides/iphoneshots.jpg" alt="Petrichor - slider">
									</li>
								</ul>
							</div> 
						</div>
		</div>
        
		<div class="large-6 columns">
			<h1>Create Your Thrive mobile business suite Account</h1>
			
	        <a class="download-btn" href="/Login/index1.php">Register Now</a>
		</div>
		
	</div>
</header>

<div id="ADMIN" class="section features" data-magellan-destination="ADMIN">
	<div class="row hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b"><br><br><br>
	<h2>ADMIN</h2>
		<figure style="float:left; margin-right:40px"><img src="img/erpSolution.jpg" alt=""></figure>	
                       <br />  
                        <ul class="unstyled">
<p align="justify" style="line-height:2em;">Thrivembs Admin Module is very important as it helps one to add users, delete users. It is responsible for managing sites and one can also manage total system effectively. This is total about administration rights and will help one in adding various numbers of users such as security, office staff  accountant and offers necessary access permission just like a mechanic fixing for issues. ERP administrator looks  after the whole system through applying vendor gives fixes to errors supporting technical  infrastructure and enhancements.  The main responsibilities of ERP administration module includes support, Managing all modules axis. It lets management work in a proper order.</p>
	</div>
</div>
<div id="RMS" class="section product gray" data-magellan-destination="RMS">
	<div class="row">
		<div class="large-12 columns">
		<br><br><br>
			<h2>RECRUITMENT MANAGEMENT SYSTEM</h2>
			<figure style="float:left; margin-right:50px"><img src="img/rms.jpg" alt=""></figure>
                   <br/>     <ul class="unstyled">
                          <p align="justify" style="line-height:2em;">Thrivembs RMS Module offers single screen for Recruitment Management Process. Allows for creation of Vacancies in the administration of company. Gathers database from the Job portal of Thrivembs ERP Module. The automotive compare the  vacancy recruitments and provides the suitable curriculum vitae(CV). The status of recruitment process in various recruitment procedure is maintained in the modules. RMS module ensure smart management for recruitment  department to carry out different level of recruitment.</p>
		</div>
	</div>
</div>

<div id="JOB PORTAL" class="section pricing gray" data-magellan-destination="JOB PORTAL">
	<div class="row">
		<div class="large-12 quotes columns"><br><br><br>
			<h2>JOB PORTAL</h2>
			<figure style="float:left;margin-right:40px;margin-top:-50px;"><img class="fright" src="img/img1.png"  alt="" width="400" height="400"></figure>	
                        
                        <ul class="unstyled">
<p align="justify" style="line-height:2em;">A job portal doesn't guarantee that you'll get a job. It's simply a job application tool that allows you to apply for jobs and connect with potential employers. Research job portals carefully before you agree to pay fees to use their job-hunting and job-application services. There are many free job portals, including those on commercial websites and private-company sites, so there's no need to pay for services. However, some job-portal agencies charge employers to list their job openings.
</p>
		</div>
	</div>
	
	
	</div>


<div id="HR"  class="section contact gray" data-magellan-destination="HR">
	
    
    <div class="row">
		<div class="large-12 columns"><br><br><br>
			<h2>HUMAN RESOURCE</h2>
			<figure style="float:left; margin-right:40px"><img src="img/connect.jpg" height="400" width="400" alt=""></figure>	
                        
                        <ul class="unstyled">
                          <p align="justify" style="line-height:2em;">Thrivembs Human Resource Module. Flybe ERP has a set of rich features and integrates seamlessly with other module. Thrivembs HR module offers you wide solutions for HR department making it possible for other department to access specific employee data. The HR module covers all the function required in business practice and is flexible enough to optimize the business processes by configuring to suit customer’s recruitment.

Thrivembs Human Resource management is a suite of interpreted solution designed to facilitate HR  operation by reducing time intensive administrative task and lowering cast by deploying self service applications.</p>
                          
                        </ul>
    
		
        </div>
        </div>
</div>
	<div id="PAYROLL" class="section product gray" data-magellan-destination="PAYROLL">
	<div class="row">
		<div class="large-12 columns">
			<br><br><br>
			<h2>PAY ROLL</h2>
			<figure style="float:left; margin-right:40px"><img src="img/industry.jpg" alt=""></figure>	
        <br/>                
                        <ul class="unstyled">
                          <p align="justify" style="line-height:2em;">Thrivembs Payroll Module has an extensive employee database with all details required to keep an accurate payroll system. This module can be added to, or deleted from depending on your recruitments. You can pay in to multiple employee accounts taken out additional tax, salary deduction or calculate superannuation. ERP software has a fully integrated payroll system. When your pays are run your chart of accounts general ledger is immediately updated including bank accounts expenses and liabilities. All leave Allowance deduction etc.. are immediately posted and recorded. It is fully integrated payroll suite.</strong></p>
                          
                        </ul>
		</div>
	</div>
</div>
<div id="CRM" class="section product gray" data-magellan-destination="CRM">
	<div class="row">
		<div class="large-12 columns">
			<br><br><br>
			<h2>CUSTOMER RELATIONSHIP MANAGEMENT</h2>
			 <figure style="float:left; margin-right:40px"><img src="img\CRM.jpg" width="300" height="150"></figure>	
                        
                        <ul class="unstyled">
<p align="justify" style="line-height:2em;">Customer relationship management (CRM) is a term that refers to practices, strategies and technologies that companies use to manage and analyze customer interactions and data throughout the customer lifecycle, with the goal of improving business relationships with customers, assisting in customer retention and driving sales growth. CRM systems are designed to compile information on customers across different channels -- or points of contact between the customer and the company.</p>
                          
                          
                        </ul>
		</div>
	</div>
</div>
<div id="FINANCE" class="section product gray" data-magellan-destination="FINANCE">
	<div class="row">
		<div class="large-12 columns">
			<br><br><br>
			<h2>FINANCE</h2>
			 <figure style="float:left; margin-right:40px"><img  src="img/finance.jpg" class="fright" width="400" height="250" alt=""></figure>	
                        
                        <ul class="unstyled">
                          <p align="justify" style="line-height:2em;">Thrivembs Finance Module is a module Program that gathers financial data and generates reports such as ledgers, trail balance, Overall balance sheet and financial statements. It helps for broad set of activities that helps an enterprise manage the importance aspects of its business. The information mode available through an ERP system Provides Visibility for key performance indicators required for meeting. Corporate objectives finance module can be used for purchase ports maintain and keep track of inventories. Overall it is an expert module down the current most have in a business.</p>
<br/>

                          
                        </ul>
		</div>
	</div>
</div>
<div id="CONTACTUS" class="section product gray" data-magellan-destination="CONTACTUS">
	<div class="row">
		<div class="large-12 columns">
			<br><br><br>
						<h2>Get in Touch</h2>
			
		<form method="post" action="send_form_email.php" id="contactform" onsubmit="return validateForm()">
					<div>
						<label for="name">Enter Your Name</label>
						<input type="text" class="input-field" id="name" name="name" style="background-color: #fff;display: block;padding: 0.5em;height:2.3125em;width: 100%;"value="">
					</div>
					<div>
						<label for="email">Enter Your E-mail ID</label>
						<input type="text" class="input-field" id="email"  style="background-color: #fff;display: block;padding: 0.5em;height:2.3125em;width: 100%;"name="email" onkeydown="return spacea(event);" value="">
					</div>
					<div>
						<label>Type Your Message</label>
						<textarea id="message"  style="background-color: #fff;display: block;padding: 0.5em;height:2.3125em;width: 100%;" name="message"></textarea>
					</div>
					<input type="submit"  id="submit" name="submit" value="SUBMIT"  value="Send Email" class="button" style="width:100%;">
					
				</form>

        </div>
        </div>
	<div id="pricing-table" class="section pricing gray" data-magellan-destination="pricing">
	<div class="row">
		<div class="large-12 quotes columns">
			
		</div>
	</div>
	<div class="row price-table">
		<div class="large-4 columns">
			 <div class="map">             
		 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24299.708115904683!2d-3.665582582141257!3d40.42073417773243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42289830845f35%3A0x1568942f3e4b077!2sVelazquez%2C+15!5e0!3m2!1sen!2sin!4v1403849916889" 
		 style="width:300px;height:250px;float:left;">
		 </iframe>
 </div>
		</div>
		<div class="large-4 columns">
			
          <h5>INDIAN OFFICE ADDRESS</h5>
           <p>
#19,8<sup>th</sup>&nbsp;Block, Dr.Rajkumar Road</br> JSS Layout</br>Mysore-570 019</br>
Website:&nbsp;www.thrivesmarter.com <br/>Email:&nbsp;infoin@thrivesmarter.com </p> 


<h5>FIND US</h5>
                <p>Mail Us : helpdesk@thrivembs.com</p>  
				
		</div>
		<div class="large-4 columns">
			 <h5>HEAD QUARTERS ADDRESS</h5>
            <p >

Velázquez, 15<br/> 28001 Madrid, Spain</br>

Fax :&nbsp;&nbsp;&nbsp; +34 91 431 55 69
          </P>  
		<h5>CALL US</h5>
                <p>Telephone : 0821 6888858
                 <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; +3491 7373749</p>

		</div>
	</div>
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
				<li><a href="" class="icon icon-facebook"></a></li>
				<li><a href="" class="icon icon-twitter"></a></li>
				<li><a href="" class="icon icon-linkedin"></a></li>
		
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