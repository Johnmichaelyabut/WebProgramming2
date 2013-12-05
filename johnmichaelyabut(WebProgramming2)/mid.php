<?php 
	/*
	* building connection to cobfig.php
	* calling function in MessageDAO.php
	*/
	include "config.php";
	$rows = MessageDAO::getAllMessages();
?>
<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<head>
		<title>GuestBook</title>
	</head>
	<body>
		<div class = "span11 well" style = "margin-left:75px;margin-top:80px;background-image:url(back.jpg)">
			<div class = "span10 well" style = "background-image:url(log.png)">
				<center><h3><font face = "Adobe Caslon Pro Bold">Message(s)</font></h3></center>
			</div>
			<!-- Calling foreach function for retrieving datasss -->
			<?php foreach ($rows as $record): ?>

				<?php if( $record['is_approved']  == ('Y')){ ?>

				<div class = "span1 well" style = "width:780px;height:80px;background-image:url(log.png)">
					<div class = "span2 well">

						<?=$record['name']?><br> 
						<?=$record['date_posted']?>

					</div>
					<textarea style ="width:540px;height:80px;margin-left:20px">

						<?=$record['message']?>

					</textarea>
				</div>
				<?php }else{	}?>

				<?php endforeach;?>
				
				<a href="front.php"><input type = "submit" class = "btn btn-success" value = "Back" style = "width:200px;margin-left:200px;background-color:Orange;margin-bottom:20px"></a>
				<a href="back.php"><input type = "submit" class = "btn btn-success" value = "View Message Data" style = "width:200px;background-color:Red;margin-bottom:20px" ></a><br>		
		</div>
	</body>
</html>