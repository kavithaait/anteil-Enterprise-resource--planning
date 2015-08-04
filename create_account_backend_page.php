<?php 
include('config.php');
$val="0";
$hr;
$rms;
$crm;
$finance;
$jobportal;
$payroll;
$email=mysqli_real_escape_string($con, $_POST['email']);
$country_code=mysqli_real_escape_string($con, $_POST['country_code']);
$user=mysqli_real_escape_string($con, $_POST['user']);
$fname=mysqli_real_escape_string($con, $_POST['fname']);
$enumc=mysqli_real_escape_string($con, $_POST['enumc']);
$company=mysqli_real_escape_string($con, $_POST['company']);
$designation=mysqli_real_escape_string($con, $_POST['designation']);
$url=mysqli_real_escape_string($con, $_POST['website']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$mobile=mysqli_real_escape_string($con, $_POST['mobile']);
$rms=mysqli_real_escape_string($con, $_POST['RMS']);
$crm=mysqli_real_escape_string($con, $_POST['CRM']);
$hr=mysqli_real_escape_string($con, $_POST['HR']);
$jobportal=mysqli_real_escape_string($con, $_POST['Job_portal']);
$finance=mysqli_real_escape_string($con, $_POST['Finance']);
$subuser=mysqli_real_escape_string($con, $_POST['subuser']);
if($val==0)
{
ob_start();
		$to = "user@thrivembs.com";
		$subject = "welcome";
		$txt = "\n Name : $fname \n Password : $password \n Email ID: $email \n Phone Number: $country_code - $mobile \n Company : $company
		\n Size Of Company : $enumc \n Designation : $designation \n Website : $url \n Subuser : $subuser \n Time Period : $trail \n 
		Usage Mode : $t";
		$headers = "From: info@anteilinfotech.com" . "\r\n" .
		mail($to,$subject,$txt,$headers);

	$from_fullname     = "User From Thrive MBS";
	$from_email        = "user@thrivembs.com";
	$email_subject     = "Confirmation Mail";
	$email_message     = "Hello and welcome " . $user ."\nThank you for registering with ERP Services."."In the event you are unable to confirm your registration within the specified period, do not hesitate to write to us."."\nYour Username :". $user ."\n Your password :". $w1 ."\nTo login into your account use the follwing link :http://www.thrivembs.com/Login/login.php"."\nLook forward to serving your business needs.";
$time=time();
 $headers      = "From: $from_fullname <$from_email>\r\n";
    $headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n";   
$headers      = "From: $from_fullname <$from_email>\r\n";
$to=$email ; 
$vas = @mail($to, $email_subject, $email_message, $headers); 
$t=time();
$trail=mktime(0, 0, 0, date("m"), date("d")+1, date("y"));
if($vas && mysqli_query($con,"INSERT INTO admin_db (email,first_name,full_name,password,mobile_number,company_website,company_name,country_code,size_of_company,designation,rms,hr,finance,crm,jobportal,time_period,usage_mode,sub_user_count) VALUES ('$email','$fname','$user','$password','$mobile','$url','$company','$country_code','$enumc','$designation','$rms','$hr','$finance','$crm','$jobportal','$trail','t','$subuser')"))
{
echo "<script>
window.location.href='http://www.thrivembs.com/Login/login.php';
alert('Account Created Sucessfully');
</script>";
}
else
{
echo "<script>
window.location.href='http://www.thrivembs.com/Login/index1.php';
alert('Account Creation Failed.Please Retry.');
</script>";
}
}
else
{
echo "<script>
window.location.href='http://www.thrivembs.com/Login/index1.php';
alert('Account Creation Failed.Please try again');
</script>";
}
?>