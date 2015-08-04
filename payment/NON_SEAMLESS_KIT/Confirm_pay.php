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
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="/user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/user/css/sb-admin.css" rel="stylesheet">

   
    <!-- Custom Fonts -->
    <link href="/user/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">                 
 <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
 <a class="navbar-brand" href="/user/index.php">ADMIN</a>
 
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

 
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $naqw; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/user/index.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       
                        <li>
                            <a href="/Erp/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" >
                    <li class="active">
                        <a href="/user/index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                        </h1>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-31 col-md-6">
                        <div class="panel panel-primary" style="width:140px;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                     <i class="fa fa-user fa-5x" style="margin-left:25px;"></i>
  
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="../Admin/Dashboard.php">
                                <div class="panel-footer">
                                    <span class="pull-left" style="margin-left: 25px; font-size:18px;"> ADMIN</span>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-31 col-md-6">
                        <div class="panel panel-green" style="width:140px;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-database fa-5x" style="margin-left:25px;"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="../RMS/Dashboard.php">
                                <div class="panel-footer">
                                    <span class="pull-left" style="margin-left: 30px; font-size:18px;">RMS</span>
                                   
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-31 col-md-6">
                        <div class="panel panel-yellow" style="width:140px;border-color: #de577b; ">
                            <div class="panel-heading" style="background:#de577b;border-color: #de577b;">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-search fa-5x" style="margin-left: 20px;"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="../Job_portal/Dashboard.php">
                                <div class="panel-footer">
                                    <span class="pull-left" style="margin-left: -8px; font-size:18px;color: #de577b;border-color: #de577b;">JOB PORTAL</span>
                                  
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-31 col-md-6">
                        <div class="panel panel-yellow" style="width:140px;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x" style="margin-left:15px;"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="../HR/Dashboard.php">
                                <div class="panel-footer">
                                    
<span class="pull-left" style="margin-left:42px ; font-size:18px;">HR</span>
                                   
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-31 col-md-6">
                        <div class="panel panel-yellow" style="width:140px; border-color: #847cc5; ">
                            <div class="panel-heading" style="background:#847cc5;border-color: #847cc5;">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-external-link fa-5x" style=margin-left:20px;"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="../Payroll/Dashboard.php">
                                <div class="panel-footer">
                                    <span class="pull-left" style="margin-left: 10px; font-size:18px;color: #847cc5;border-color: #847cc5;">PAYROLL</span>
                                   
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-31 col-md-6">
                        <div class="panel panel-yellow" style="width:140px;border-color: #77808a; ">
                            <div class="panel-heading" style="background:#77808a;border-color: #77808a;">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x" style="margin-left:20px;"></i>

                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="../CRM/Dashboard.php">
                                <div class="panel-footer" >
                                    <span class="pull-left" style="margin-left: 35px; font-size:18px;color: #77808a;border-color: #77808a;">CRM</span>
                                   
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-31 col-md-6">
                        <div class="panel panel-red" style="width:140px;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-usd fa-5x" style="margin-left: 30px;"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="../Finance/Dashboard.php">
                                <div class="panel-footer">
                                    <span class="pull-left" style="margin-left: 14px; font-size:18px;">FINANCE</span>
                                   
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Billing Information</h3>
                            </div>
                            <div class="panel-body">
<?php
include('config.php');
$first_name=mysqli_real_escape_string($con, $_POST['first_name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$mobile_number=mysqli_real_escape_string($con, $_POST['mobile_number']);
$company_name=mysqli_real_escape_string($con, $_POST['company_name']);
$address_1=mysqli_real_escape_string($con, $_POST['address_1']);
$city=mysqli_real_escape_string($con, $_POST['city']);
$state=mysqli_real_escape_string($con, $_POST['state']);
$country=mysqli_real_escape_string($con, $_POST['country']);
$pincode=mysqli_real_escape_string($con, $_POST['pincode']);
$currency=mysqli_real_escape_string($con, $_POST['currency']);
$plan_name=mysqli_real_escape_string($con, $_POST['plan_name']);
$order_id=mysqli_real_escape_string($con, $_POST['order_id']);
if(mysqli_real_escape_string($con, $_POST['subcription'])=='Month')
{
$price=mysqli_real_escape_string($con, $_POST['price']);
}else
{
$price1=mysqli_real_escape_string($con, $_POST['price']);
$price=$price1 * 12;
}
?>
                            
<div id="container2">

<div id="hea">
<h3 align="center"><b>BILL PAYMENT</b></h3>
</div>
<div id="bbd">
<form method="post" name="customerData" action="ccavRequestHandler.php">
<table  cellpadding="4" style="width:800px;height:400px;">
<tr><th colspan="3">COMPULSARY INFORMATION</th><th colspan="3">BILLING INFORMATION</th></tr>

<tr><td>Company Name</td><td>:</td><td><input type="text" name="company_name" value="<?php echo $company_name; ?>" readonly size="30px"/></td>
<td>Billing Name</td><td>:</td><td><input type="text" name="billing_name" readonly value="<?php echo $first_name; ?>" size="30px"/></td></tr>

<tr><td>Order Id</td><td>:</td><td><input type="text" name="order_id" value="<?php echo $order_id; ?>" readonly size="30px"/></td>
<td>Billing Address</td><td>:</td><td><input type="text" name="billing_address" value="<?php echo $address_1; ?>" readonly size="30px"/></td></tr>

<tr><td>Amount</td><td>:</td><td><input type="text" name="amount" value="<?php echo $price; ?>"  readonly size="30px"/></td>
<td>Billing City</td><td>:</td><td><input type="text" name="billing_city" value="<?php echo $city; ?>" readonly size="30px"/></td></tr>

<tr><td>Currency</td><td>:</td><td><input type="text" name="currency" value="<?php echo $currency; ?>" readonly size="30px"/></td>
<td>Billing State</td><td>:</td><td><input type="text" name="billing_state" value="<?php echo $state; ?>" readonly size="30px"/></td></tr>

<tr><td>Language</td><td>:</td><td><input type="text" name="language" readonly  value="EN" size="30px"/></td>
<td>Billing Zip</td><td>:</td><td><input type="text" name="billing_zip" value="<?php echo $pincode; ?>" readonly size="30px"/></td></tr>

<tr><td>Plan Name</td><td>:</td><td><input type="text" name="merchant_param1" readonly value="<?php echo $plan_name; ?>" size="30px"/></td>
<td>Billing Country</td><td>:</td><td><input type="text" name="billing_country" value="<?php echo $country; ?>" readonly size="30px"/></td></tr>

<td>Contact Number</td><td>:</td><td><input type="text" name="billing_tel" readonly value="<?php echo $mobile_number; ?>" size="30px"/></td>
<td>Billing Email</td><td>:</td><td><input type="text" name="billing_email" value="<?php echo $email; ?>" readonly size="30px"/></td></tr>

</table>
<input type="text" hidden name="merchant_id" value="49170" readonly size="30px"/>
<input type="text" hidden name="redirect_url" readonly value="http://www.thrivembs.com/payment/NON_SEAMLESS_KIT/ccavResponseHandler.php"
<input type="text" hidden name="cancel_url" readonly value="http://www.thrivembs.com/payment/NON_SEAMLESS_KIT/ccavResponseHandler.php" size="30px"/>
<br>
<INPUT TYPE="submit" id="butt" value="Continue To Payment >>" >
</form>
</div>
</div>
                            
                            
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                
                    </div>
                   
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <div id="footer">

<div id="navcontainer">
<ul>
			
			  <li> <a href="http://www.thrivembs.com/Erp/footer.html#TERMS AND CONDITIONS">Terms & Conditions</a></li>
			  <li> |</li>
			   <li> <a href="http://www.thrivembs.com/Erp/footer.html#PRIVACY POLICY">Privacy Policy</a></li>
			 <li> |</li>
			  <li><a href="http://www.thrivembs.com/Erp/footer.html#USER ACCOUNT POLICY">User Account Policy</a></li>
			  <li> |</li>
			   <li> <a href="http://www.thrivembs.com/Erp/footer.html#PAYMENT POLICY">Payment Policy</a></li>
			   <li> |</li>
			   

			   <li>   All Rights Reserved &copy;<a href="http://thrivesmarter.com/">  THRIVE SMARTER</a></li>
			  
  			</ul>
</div>
</div>
    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
    <script src="/user/js/bootstrap.min.js"></script>

    

</body>

</html>
<?php
}
else
{
header("location:/Login/login.php");	
}
?>