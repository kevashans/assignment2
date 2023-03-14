<?php
require_once('database.php');
// echo '<script type="text/javascript">jsFunction();</script>';
$search = null;
if (!empty($_GET['search'])) {
  $search = $_GET['search'];
}

$queryProducts = null;
// Get products
if ($search != "undefined") {
  $queryProducts = "SELECT * FROM team where team_name like '%$search%'";
} else {
  $queryProducts = "SELECT * FROM team where team_name like '%$search%'";
}
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
  <script type="text/javascript" src="./js/myFunctions.js"></script>
</head>

<body>
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
  <main class="container mt-5">

    <input id="search_input" type="text" placeholder="Search..." class="form-control rounded">
    <button onclick="searchTeam('search_input')" class="btn btn-outline-primary mt-2">Search</button>

    <div id="search results">
      <div class="starter-template text-center mt-3">


        <div class="row row-cols-1 row-cols-md-2 g-4">


          <?php foreach ($products as $product): ?>
            <div class="col">
              <div class="card">
                <img src="<?php echo $product["picture_url"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="#" onclick="ContentPage('<?php echo $product['teamID'] ?>'); return false"
                      value='<?php echo $product["teamID"] ?>' class="stretched-link"><?php echo $product['team_name']; ?></a>
                  </h5>
                  <p class="card-text">
                    <?php echo $product['team_salary']; ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </main><!-- /.container -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>



<!-- <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">

  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
        This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div> -->
<!-- </div> -->

<!-- <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
        </div> -->