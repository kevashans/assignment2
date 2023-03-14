<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="login.css"> -->
    <link href="mystyle.css" rel="stylesheet">

    <title>Login Page</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>LOGIN</h3>
                </div>
            </div>
            <form action="validate-login.php" method="post">
                <div class="login-box">

                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Username" name="username" value="">
                    </div>

                    <div class="textbox">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="Password" name="password" value="">
                    </div>

                    <input class="button" type="submit" name="login" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!-- <body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form">
          <input type="text" placeholder="username"/>
          <input type="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>
    </div>
</body>
</body> -->