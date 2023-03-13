<?php
require_once('database.php');
// echo '<script type="text/javascript">jsFunction();</script>';
//id

$id = $_GET['id'];
// Get products
// $queryProducts = "SELECT * FROM team_played_for WHERE teamID like '$id' ";
$queryProducts = "SELECT * FROM  player ,team_played_for  WHERE  player.playerID = team_played_for.playerID and teamID like '$id' ";
$queryScouts = "SELECT * FROM scout ,team_worked_for WHERE scout.scoutID = team_worked_for.scoutID and teamID like '$id'";
$statement = $db->prepare($queryProducts);
$statement2 = $db->prepare($queryScouts);
$statement->execute();
$statement2->execute();
$products = $statement->fetchAll();
$scouts = $statement2->fetchAll();
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light mont-bold" aria-label="Eighth navbar example">
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
                            <a class="nav-link" aria-current="page" href="players-page.php">Players</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="teams-page.php">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contact-form.php">Contact-form</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <h1 class='text-center'>
            <?= $id ?>
        </h1>
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Players
            </button>
        </p>


        <!-- players for loop -->

        <div class="collapse" id="collapseExample">
            <div class="row row-cols-1 row-cols-md-2 g-4">


                <?php foreach ($products as $product): ?>
                    <div class="col">
                        <div class="card">
                            <!-- <img src="" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title ">
                                <a href="#" class="text-decoration-none"   onclick="ContentPagePlayers('<?php echo $product['playerID']?>'); return false" ><?php echo $product['player_name']; ?></a>
                                </h5>
                                <p class="card-text">
                                    <?php echo $product['contract_start_year']; ?> -
                                    <?php echo $product['contract_end_year']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <!-- collapse button for scouts -->
        <p>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2"
                aria-expanded="false" aria-controls="collapseExample">
                Scouts
            </button>
        </p>

         <!-- scouts for loop -->
        <div class="collapse" id="collapseExample2">
            <div class="row row-cols-1 row-cols-md-2 g-4">


                <?php foreach ($scouts as $scout): ?>
                    <div class="col">
                        <div class="card">
                            <!-- <img src="" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title">
                                <a href="#" class="text-decoration-none"  onclick="ContentPageScouts('<?php echo $scout['scoutID']?>'); return false"  class="stretched-link"><?php echo $scout['scout_name']; ?></a>

                                </h5>
                                <p class="card-text">
                                    <?php echo $scout['work_start_year']; ?> -
                                    <?php echo $scout['work_end_year']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

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