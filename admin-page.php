<?php
require_once('database.php');
// require_once('getScoutName.php');

// require_once('team-details.php');
// echo '<script type="text/javascript">jsFunction();</script>';
//id

// $id = $_GET['id'];
// Get products
// $queryProducts = "SELECT * FROM team_played_for WHERE teamID like '$id' ";


$queryContracts = "SELECT * FROM player";
$queryPlayer = "SELECT * from scout ";
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


    <!-- players for loop -->



    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Position</th>
                <th scope="col">Draft Year</th>
                <th scope="col">Picture Url</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <?php
        $count = 0;
        foreach ($contracts as $contract): ?>

            <tr>
                <th scope="row">
                    <?php echo $contract['playerID'] ?>
                </th>
                <td>
                    <?php echo $contract['player_name'] ?>
                </td>
                <td>
                    <?php echo $contract['player_birth_date'] ?>
                </td>
                <td>
                    <?php echo $contract['position'] ?>
                </td>
                <td>
                    <?php echo $contract['player_draft_year'] ?>
                </td>
                <td>
                    <?php echo $contract['player_picture'] ?>
                </td>

            </tr>
        <?php endforeach; ?>


        </div>
        </div>
        <a type="button" class="btn btn-primary" href="./add.php">Add</a>




        </main><!-- /.container -->
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>