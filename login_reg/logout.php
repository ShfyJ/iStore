<?php
include('config.php');
session_destroy();
unset($_SESSION['uid']); // will delete just the name data

$session_uid='';
$_SESSION['uid']=''; 
if(empty($session_uid) && empty($_SESSION['uid']))
{
header('Location:footer.php');
//echo "<script>window.location='$url'	</script>";
}
?>