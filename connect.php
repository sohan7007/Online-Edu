<?php
session_start();
ob_start();
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"online_edu");
?>
