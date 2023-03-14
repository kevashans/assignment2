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
	<link href="mystyle.css" rel="stylesheet">

</head>


<body>
	<h1>Contact us</h1>
	<div class="register-photo">
		<div class="form-container">
			<div class="image-holder"></div>
			<form method="POST" name="contactform" action="contact-form-handler.php" id="form" required>
				<p>
					<label class="mont-bold" for='name'>Your Name:</label> <br>

					<input type="text" name="name" id="name" onkeyup="userValidation()" placeholder="John C Mather"
						required><br>
					<span id="uid_err"></span>
				</p>
				<p>
					<label class="mont-bold" for="phone">Enter a phone number:</label><br>
					<input type="tel" name="phone" id="phone" placeholder="123-45-6781" onkeyup="phoneValidation()"
						required>
					<span id="phoneError"></span>
				</p>
				<p>
					<label class="mont-bold" for='email'>Email Address:</label> <br>
					<input type="text" id="email" name="email" placeholder="ABCD@gmail.com" onkeyup="emailValidation()" required> <br>
					<span id="emailError"></span>
				</p>

				<P>
					<label class="mont-bold" for="birthday">DOB:</label><br>
					<input type="date" id="birthday" name="birthday" onsubmit="BirthDayValidation()" required>
					<span id="birthdayError"></span>
				</P>
				<p>
					<label class="mont-bold" for='email'>Address:</label> <br>
					<input type="text" id="address1" name="address1" placeholder="Adress Line 1" required> <br>
					<input type="text" id="address2" name="address2" placeholder="Address Line 2" required> <br>
					<input type="text" id="city" name="city" placeholder="City" requried>
					<input type="text" id="eirCode" onkeyup="eircodeValidation()" placeholder="Zip Code" name="eirCode"
						required><br>
					<span id="eircodeError"></span>


				</p>
				<p>
					<label class="mont-bold" for='field'>Field:</label> <br>
					<select name="field" id="field">
						<option value="Complaint">Complaint</option>
						<option value="Inquiry">Inquiry</option>
						<option value="Requests">Requests</option>
						<!-- <option value="audi">Audi</option> -->
					</select>
				</p>
				<p>
					<label class="mont-bold" for='message'>Message:</label> <br>
					<textarea name="message" cols="40" rows="10" required></textarea>
				</p>






				<input type="submit" value="Submit"><br>
			</form>
		</div>
	</div>

	<script language="JavaScript">
		var frmvalidator = new Validator("contactform");
		frmvalidator.addValidation("name", "req", "Please provide your name");
		frmvalidator.addValidation("email", "req", "Please provide your email");
		frmvalidator.addValidation("email", "email", "Please enter a valid email address");
		frmvalidator.addValidation("phone", "phone", "Please enter a valid phone number");
		frmvalidator.addValidation("borthday", "birthday", "Please select a date"); 
	</script>

</body>

</html>


<!-- <div class="register-photo">
		<div class="form-container">
			<div class="image-holder"></div>
			<form method="post">
				<h2 class="text-center"><strong>Create</strong> an account.</h2>
				<div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
				<div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
				<div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
				<div class="form-group">
					<div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
				</div>
				<div class="form-group"><button class="btn btn-success btn-block" type="submit">Sign Up</button></div><a class="already" href="#">You already have an account? Login here.</a></form>
		</div>
	</div> -->