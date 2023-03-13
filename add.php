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
	<form method="POST" name="contactform" action="add-handler.php">
		<p>
			<label for='ID'>Player ID:</label> <br>
			<input type="text" name="ID">
		</p>
		<p>
			<label for='name'>Player name:</label> <br>
			<input type="text" name="name"> <br>
		</p>
		<p>
			<label for='picture'>Picture:</label> <br>
			<input type="text" name="picture"> <br>
		</p>
		<p>
			<label for='position'>Player Position:</label> <br>
			<input type="text" name="position">
		</p>
		<p>
			<label for="draft">Draft Year:</label><br><br>
            <input type="number" name="draft" min="1900" max="2023" step="1" />		</p>
		<P>
			<label for="DOB">DOB:</label>
			<input type="date" name="DOB">
		</P>
		<input type="submit" value="Submit"><br>
	</form>

    

	<!-- <script language="JavaScript">
		var frmvalidator = new Validator("contactform");
		frmvalidator.addValidation("name", "req", "Please provide your name");
		frmvalidator.addValidation("email", "req", "Please provide your email");
		frmvalidator.addValidation("email", "email", "Please enter a valid email address");
		frmvalidator.addValidation("phone", "phone", "Please enter a valid phone number"); 
	</script> -->

</body>

</html>