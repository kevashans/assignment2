<?php
require_once('database.php');

         
  // Check connection
  if($db === false){
      die("ERROR: Could not connect. "
          . mysqli_connect_error());
  }



$errors = '';
$myemail = 'D00251772@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['ID'])  ||
   empty($_POST['name']) ||
   empty($_POST['position'])||
   empty($_POST['draft'])||
   empty($_POST['DOB']))
{
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder


$ID = $_POST['ID'];
$name = $_POST['name'];
$position = $_POST['position'];
$draft = $_POST['draft'];
$DOB = $_POST['DOB'];

$sqlQuery = "INSERT INTO player VALUES ('$ID', '$name', '$position', '$draft', '$DOB')";

// if(mysqli_query($db, $sqlQuery)){
//     echo "<h3>data stored in a database successfully."
//         . " Please browse your localhost php my admin"
//         . " to view the updated data</h3>";

// } else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($db);
// }
$statement = $db->prepare($sqlQuery);
if($statement->execute()){
    header('Location: add-succesful.php');
}
$statement->closeCursor();
// if (!preg_match(
// "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
// $email_address))
// {
//     $errors .= "\n Error: Invalid email address";
// }

// if( empty($errors))
// {
//         $to = $myemail;
//         $email_subject = "Contact form submission: $name";
//         $email_body = "You have received a new message. ".
//         " Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message \n $phone \n $birthday";

//         mail($to,$email_subject,$email_body,$headers);
//         //redirect to the 'thank you' page
//         header('Location: contact-form-thank-you.html');
// }
// mysqli_close($conn);
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
// echo nl2br($errors);
?>
</body>
</html>