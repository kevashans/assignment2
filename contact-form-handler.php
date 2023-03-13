<?php

$errors = '';
$myemail = 'D00251772@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['phone'])||
   empty($_POST['birthday'])||
   empty($_POST['message'])||
   empty($_POST['field'])||
   empty($_POST['address1'])||
   empty($_POST['address2'])||
   empty($_POST['city'])||
   empty($_POST['eirCode']))
{
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$field = $_POST['field'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$eircode = $_POST['eircode'];


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n Field: $field  \n Message: $message \n phone: $phone \nDOB: $birthday \nAddress: $address1,$address2,$city,$eircode";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.html');
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>