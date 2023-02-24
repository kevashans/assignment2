<!DOCTYPE HTML>
<html>

<head>
	<title>Contact us</title>
	<!-- define some style elements-->
	<style>
		h1 {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 16px;
			font-weight: bold;
		}

		label,
		a {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
		}
	</style>
</head>
</head>

<body>
	<h1>Contact us</h1>
	<form method="POST" name="contactform" action="contact-form-handler.php">
		<p>
			<label for='name'>Your Name:</label> <br>
			<input type="text" name="name">
		</p>
		<p>
			<label for='email'>Email Address:</label> <br>
			<input type="text" name="email"> <br>
		</p>
		<p>
			<label for='message'>Message:</label> <br>
			<textarea name="message"></textarea>
		</p>
		<p>
			<label for="phone">Enter a phone number:</label><br><br>
			<input type="tel" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
		</p>
		<P>
			<label for="birthday">Birthday:</label>
			<input type="date" name="birthday">
		</P>
		<input type="submit" value="Submit"><br>
	</form>

	<script language="JavaScript">
		var frmvalidator = new Validator("contactform");
		frmvalidator.addValidation("name", "req", "Please provide your name");
		frmvalidator.addValidation("email", "req", "Please provide your email");
		frmvalidator.addValidation("email", "email", "Please enter a valid email address");
		frmvalidator.addValidation("phone", "phone", "Please enter a valid phone number"); 
	</script>

</body>

</html>