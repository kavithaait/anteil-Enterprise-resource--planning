<?php include('Crypto.php')?>
<?php

	error_reporting(0);
	
	$workingKey='661D204843293A84435DDD4F3128B335';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		echo "<br>Thank you for Registering with Thrive Mobile Business Suite. Your transaction is successful. Your Activation Will be Processed within 4 hours.";
		//mail function
	include("config.php");
	ob_start();

	$to="boopathi@thrivesmarter.com";
	$from_fullname     = "Payment";
	$from_email        = "activation@thrivembs.com";
	$email_subject     = "Succcessful Payment";
	$email_message     = "Thank you for Registering with Thrive Mobile Business Suite. Your transaction is successful. Your Activation Will be Processed 		within 4 hours." .
	 <table cellspacing=4 cellpadding=4>
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	</table><br> . " ";

	$time=time();
 	$headers      = "From: $from_fullname <$from_email>\r\n";
    	$headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
    	$headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n";   
	$headers      = "From: $from_fullname <$from_email>\r\n";
	$vas = @mail($to, $email_subject, $email_message, $headers);

	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for Registering with Thrive Mobile Business Suite.We will keep you posted regarding the status of your order through e-mail";
	
	include("config.php");
	ob_start();

	$to="boopathi@thrivesmarter.com";
	$from_fullname     = "Payment";
	$from_email        = "activation@thrivembs.com";
	$email_subject     = "Succcessful Payment";
	$email_message     = "Thank you for Registering with Thrive Mobile Business Suite..However,the transaction has been Aborted." .
	<table cellspacing=4 cellpadding=4>
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	</table><br> ." ";
	
	$time=time();
 	$headers      = "From: $from_fullname <$from_email>\r\n";
    	$headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
    	$headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n";   
	$headers      = "From: $from_fullname <$from_email>\r\n";
	$vas = @mail($to, $email_subject, $email_message, $headers);
	}
	else if($order_status==="Failure")
	{
		echo "<br>Thank you for Registering with Thrive Mobile Business Suite..However,the transaction has been declined.";
		
		//mail function
		include("config.php");
	ob_start();

	$to="boopathi@thrivesmarter.com";
	$from_fullname     = "Payment";
	$from_email        = "activation@thrivembs.com";
	$email_subject     = "Succcessful Payment";
	$email_message     = "Thank you for Registering with Thrive Mobile Business Suite..However,the transaction has been declined." .
	<table cellspacing=4 cellpadding=4>
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	</table><br> ." ";
	
	$time=time();
 	$headers      = "From: $from_fullname <$from_email>\r\n";
    	$headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
    	$headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n";   
	$headers      = "From: $from_fullname <$from_email>\r\n";
	$vas = @mail($to, $email_subject, $email_message, $headers);
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";
	echo " <a href='http://www.thrivembs.com'>Home</a>";
	echo "</center>";
?>