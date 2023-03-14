<?php
require_once('database.php');
// require_once('getScoutName.php');

// require_once('team-details.php');
// echo '<script type="text/javascript">jsFunction();</script>';
//id

$id = $_GET['id'];
// Get products
// $queryProducts = "SELECT * FROM team_played_for WHERE teamID like '$id' ";

$queryContracts = "SELECT * FROM team_played_for ,player,team WHERE team_played_for.playerID = player.playerID and team_played_for.teamID = team.teamID and player.playerID like '$id'";
$queryPlayer = "SELECT player_name FROM player where playerID like '$id' ";
$statement = $db->prepare($queryContracts);
$statement2 = $db->prepare($queryPlayer);
$statement->execute();
$statement2->execute();
$contracts = $statement->fetchAll();
$Players = $statement2->fetchAll();
$statement->closeCursor();
$statement2->closeCursor();
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
        <h1 class='text-center'>
            <?php foreach ($Players as $Player) ?>
            <p>
                <?php echo $Player['player_name'] ?>
            </p>

        </h1>

        <select name="cars" id="cars">
            <?php foreach ($contracts as $contract): ?>
                <option value="<?php echo $contract['contract_start_year']; ?>"><?php echo $contract['contract_start_year']; ?></option>
            <?php endforeach; ?>
        </select>
        <p>
            <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Contracts
            </button>
        </p>


        <!-- players for loop -->

        <div class="collapse" id="collapseExample">
            <div class="row row-cols-1 row-cols-md-2 g-4">


                <?php
                $count = 0; foreach ($contracts as $contract): ?>

                    <div class="col">

                        <div class="card">
                            <?php $count++; ?>
                            <!-- <img src="" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="#" onclick="ContentPage('<?php echo $contract['teamID'] ?>'); return false"
                                        class="stretched-link"><?php echo $contract['team_name']; ?></a>
                                </h5>
                                <p class="card-text">

                                <h6>
                                    <?php echo $contract['contract_start_year']; ?> -
                                    <?php echo $contract['contract_end_year']; ?><br>
                                    Yearly salary :
                                    <?php echo $contract['contract_yearly_salary']; ?>M


                                </h6>




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