<?php
require_once('database.php');

         
  // Check connection
  if($db === false){
      die("ERROR: Could not connect. "
          . mysqli_connect_error());
  }



// Important: Create email headers to avoid spam folder


$ID = $_POST['ID'];
$name = $_POST['name'];
$position = $_POST['position'];
$draft = $_POST['draft'];
$DOB = $_POST['DOB'];
$picture = $_POST['picture'];

$sqlQuery = "INSERT INTO player VALUES ('$ID', '$name', '$DOB', '$position', '$draft','$picture')";

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
    header('Location: admin-page.php');
}else{
    
}
// $statement->closeCursor();
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