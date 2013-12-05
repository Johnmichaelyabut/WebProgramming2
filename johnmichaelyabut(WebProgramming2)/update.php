<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	MessageDAO::approveMessage($id);
	echo "<script>alert('Message Approved!!');window.location.href='back.php';</script>";
 ?>