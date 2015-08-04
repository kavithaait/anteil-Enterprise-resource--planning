<?php
if($con=mysqli_connect("localhost","thrivemb","th@UGB#IWbs","thrivemb_erp"))
{	}
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query=mysql_connect("localhost","thrivemb","th@UGB#IWbs");
mysql_select_db("thrivemb_erp",$query);

$mysql_hostname = "localhost";
$mysql_user = "thrivemb";
$password_ = "th@UGB#IWbs";
$mysql_database = "thrivemb_erp";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $password_) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
?>