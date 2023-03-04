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
	<script type="text/javascript" src="./js/myFunctions.js"></script>
</head>


<body>
	<h1>Contact us</h1>
	<form method="POST" name="contactform" action="contact-form-handler.php">
		<p>
			<label for='name'>Your Name:</label> <br>

			<input type="text" name="name" id="name" onkeyup="userValidation()" placeholder="John C Mather"><br>
			<span id="uid_err"></span>
		</p>
		<p>
			<label for='email'>Email Address:</label> <br>
			<input type="text" id="email" name="email" onkeyup="emailValidation()"> <br>
			<span id="emailError"></span>
		</p>
		<p>
			<label for='field'>Field:</label> <br>
			<select name="field" id="field">
				<option value="Complaint">Complaint</option>
				<option value="Inquiry">Inquiry</option>
				<option value="Requests">Requests</option>
				<!-- <option value="audi">Audi</option> -->
			</select>
		</p>
		<p>
			<label for='message'>Message:</label> <br>
			<textarea name="message"></textarea>
		</p>
		<p>
			<label for="phone">Enter a phone number:</label><br><br>
			<input type="tel" name="phone" id="phone" placeholder="123-45-6781" onkeyup="phoneValidation()" required>
			<span id="phoneError"></span>
		</p>
		<P>
			<label for="birthday">DOB:</label>
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