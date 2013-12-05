<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<head>
		<title>GuestBook</title>
	</head>
	<body>
		<center>	
		<div class = "span4 well" style = "margin-left:370px;margin-top:100px;background-image:url(back.jpg)">
			<div class = "well span3" style = "background-image:url(log.png)"><h3><font face = "Adobe Caslon Pro Bold" >Post New Message</font></h3></div>
			<div class = "well span3">
				<form method = "POST" action = "code.php" name = "mailling">
				<div>
				Name:
				<input type = "text" name = "name" style ="height:30px" placeholder = "Name..." autofocus>
				</div>
				<div>
				Email:
				<input type = "text" name = "email" style ="height:30px" placeholder = "Email...">
				</div>
				<div>
				Message:
				<textarea name = "message" placeholder = "Message..."></textarea>	
				</div>
				<div>
					<input class = "btn btn-access" type = "submit" value = "POST Message" onclick = "return validate()"></td></tr>
				</form>
				<a href="mid.php">	<input class = "btn btn-success" type = "button" value = "View Messages" style = "margin-top:10px"></a>
				</div>
				</div>
			</div>
		</div>
		<script>
			function validate(){
				var a=document.forms["mailling"]["name"].value;
				var b=document.forms["mailling"]["email"].value;
				var c=document.forms["mailling"]["message"].value;

				if (a==null || a=="")
				{
					alert("Name must be filled out");
					return false;
				}
				if (b==null || b=="")
				{
					alert("Enter the Email");
					return false;
				}
				if (c==null || c=="")
				{
					alert("Write your message");
					return false;
				}
	   	    }
   		</script>
		</center>
	</body>
</html>