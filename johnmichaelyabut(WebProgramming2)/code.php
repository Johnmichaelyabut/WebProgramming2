	<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mess = $_POST['message'];
		
	/*
	* Array for Validation and configuration
	*/
	$config = array("_name" => $name, "_email"=>$email, "_mess"=>$mess);
	/*
	* Declaring new object of Message class
	*/
	$message = new Message($config);
		$_name = $message->getName();
		$_email = $message->getEmail();
		$_message = $message->getMessage();
	/*
	* Inserting datas
	*/
	$insert = MessageDAO::createMessage($_message, $_email, $_name);
		if($insert){
			echo "<script>alert('Message Sent!!');window.location.href='front.php'</script>";
			
		}else{
			echo 'errr';
		}
	 ?>
