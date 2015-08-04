<?php 
include('config.php');

ob_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{


$name=mysql_real_escape_string($_POST['name']);
$email=mysql_real_escape_string($_POST['email']);

$message=mysql_real_escape_string($_POST['message']);

$query1= mysql_query("INSERT INTO contact_form(name,email,message)
VALUES ('$name','$email','$message')");

$result=mysql_query($query1);
if ($result ==1 ) 
{
echo "<script>
window.location.href='index.html';
alert('we will contact you shortly');
</script>";
}
else
{
echo "<script>
window.location.href='index.html';
alert('we will contact you shortly ');
</script>";

}

}

$from_fullname= "Post Master";
$from_email= "postman@thrivesmarter.com";
$to = "operations@thrivesmarter.com";
$headers .= 'CC: g.sheshan@yahoo.in' . "\r\n";
$subject = " contact form";
$txt = "\n Name : $name \n Email : $email \n Message : $message";
$headers   .= "From: $from_fullname <$from_email>\r\n";
       $headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
       $headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n";

mail($to,$subject,$txt,$headers);

?>