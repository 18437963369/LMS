﻿<?php
session_start();
if(!isset($_SESSION['admin_name'])){
	echo "<script>window.location.href='login.php';</script>";
}
?>
