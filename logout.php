<?php
session_start();
	unset($_SESSION['previlage']);
    unset($_SESSION['money']);
    unset($_SESSION["name"]); 
    unset($_SESSION["name1"]);
    unset($_SESSION['LAST_ACTIVITY']); 
    unset($_SESSION["sid"]);
    unset($_SESSION['employee_id']);
	session_destroy();
echo "<script>
window.location.href='logout.html';
alert('Logged out Successfully ');
</script>";
?>