<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT * FROM player';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>NBDATA</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->

  <link href="mystyle.css" rel="stylesheet">



  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>





  <!-- <div class="test">helo</div> -->
  <div class="bgimage">
    

      <!-- <div class="leftmenu">
                <h4> NICK </h4>
            </div> -->

      <nav class="navbar navbar-expand-md mont-bold nav-opacity" aria-label="Eighth navbar example">
        <div class="container ">
          <a class="navbar-brand" href="index.php">NBDATA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
            aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <span class="d-flex">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="players-page.php">Players</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="teams-page.php">Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="contact-form.php">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a href="Login.php"><img class="logo" src="./img/user.png"></img></a>
                </li>

              </ul>
            </span>
          </div>
        </div>
      </nav>


    
    <div class="text">
      <h2>NBDATA</h2>
      <h3> Explore Our Nba Scouting Database </h3>
      <a href="players-page.php"><button class="btn btn-primary"> Players</button></a>
      <a href ="teams-page.php"><button class="btn btn-primary"> Teams</button></a>
    </div>

  </div>

  <main class="container mont">

    <!------ Include the above in your HEAD tag ---------->

    <!-- <div class="how-section1 mt-5">
      <div class="row">
        <div class="col-md-6 how-img">
          <img src="https://image.ibb.co/dDW27U/Work_Section2_freelance_img1.png" class="rounded-circle img-fluid"
            alt="" />
        </div>
        <div class="col-md-6">
          <h4>Find rewarding projects</h4>
          <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own
            freelance
            business.</h4>
          <p class="text-muted">Freedom to work on ideal projects. On GetLance, you run your own business and choose
            your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search
            projects, and respond to client invitations.
            Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price
            for great work.
            More and more success. The greater the success you have on projects, the more likely you are to get hired
            by
            clients that use GetLance.</p>
        </div>
      </div>

    </div> -->

  </main><!-- /.container -->
  <script src="js/bootstrap.bundle.min.js"></script>

  <?php include('footer.php'); ?>
</body>


</html>