<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	MessageDAO::rejectMessage($id);
	echo "<script>alert('Message Rejected!!');window.location.href='back.php';</script>";
 ?>