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
  <title>Starter Template · Bootstrap v5.0</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="mystyle.css" rel="stylesheet">


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="index.php">Site Title</a>
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
              <a class="nav-link" aria-current="page" href="players-page.php">Page 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="teams-page.php">Page 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contact-form.php">Page 3</a>
            </li>
          </ul>
        </span>
      </div>
    </div>
  </nav>



  <div class="test">helo</div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/lebron.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block my-caption">
          <h5>My Caption Title (1st Image)</h5>
          <p>The whole caption will only show up if the screen is at least medium size.</p>
        </div>
        <!-- <div>
            <h5 class="my-caption">test</div> -->
        </div> 
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/scout.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/contract.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <main class="container">

      <!------ Include the above in your HEAD tag ---------->

      <div class="how-section1">
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
        <div class="row">
          <div class="col-md-6">
            <h4>Get hired quickly</h4>
            <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
            <p class="text-muted">Streamlined hiring. GetLance’s sophisticated algorithms highlight projects you’re a
              great fit for.
              Top Rated and Rising Talent programs. Enjoy higher visibility with the added status of prestigious
              programs.
              Do substantial work with top clients. GetLance pricing encourages freelancers to use GetLance for repeat
              relationships with their clients.</p>
          </div>
          <div class="col-md-6 how-img">
            <img src="https://image.ibb.co/cHgKnU/Work_Section2_freelance_img2.png" class="rounded-circle img-fluid"
              alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 how-img">
            <img src="https://image.ibb.co/ctSLu9/Work_Section2_freelance_img3.png" class="rounded-circle img-fluid"
              alt="" />
          </div>
          <div class="col-md-6">
            <h4>Work efficiently, effectively.</h4>
            <h4 class="subheading">With GetLance, you have the freedom and flexibility to control when, where, and how
              you
              work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
            <p class="text-muted">Send and receive files. Deliver digital assets in a secure environment.
              Share feedback in real time. Use GetLance Messages to communicate via text, chat, or video.
              Use our mobile app. Many features can be accessed on your mobile phone when on the go.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h4>Get paid on time</h4>
            <h4 class="subheading">All projects include GetLance Payment Protection — helping ensure that you get paid
              for
              all work successfully completed through the freelancing website.</h4>
            <p class="text-muted">All invoices and payments happen through GetLance. Count on a simple and streamlined
              process.
              Hourly and fixed-price projects. For hourly work, submit timesheets through GetLance. For fixed-price
              jobs,
              set milestones and funds are released via GetLance escrow features.
              Multiple payment options. Choose a payment method that works best for you, from direct deposit or PayPal
              to
              wire transfer and more.</p>
          </div>
          <div class="col-md-6 how-img">
            <img src="https://image.ibb.co/gQ9iE9/Work_Section2_freelance_img4.png" class="rounded-circle img-fluid"
              alt="" />
          </div>
        </div>
      </div>

    </main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>