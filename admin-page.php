<?php
require_once('database.php');
// require_once('getScoutName.php');

// require_once('team-details.php');
// echo '<script type="text/javascript">jsFunction();</script>';
//id

// $id = $_GET['id'];
// Get products
// $queryProducts = "SELECT * FROM team_played_for WHERE teamID like '$id' ";
$deletePlayer = null;
if (isset($_GET['delete'])) {
    $deletePlayer = $_GET['delete'];
    $queryDelete = "DELETE FROM player WHERE playerID like '%$deletePlayer%'";
    $statement = $db->prepare($queryDelete);
    $statement->execute();
    $statement->closeCursor();

}
$reportPlayer = null;
$reportScout = null;
if (isset($_GET['deletePlayer']) and isset($_GET['deleteScout'])) {
    $reportPlayer = $_GET['deletePlayer'];
    $reportScout= $_GET['deleteScout'];

    $queryDelete = "DELETE FROM reports WHERE playerID like '%$reportPlayer%' and scoutID like '%$reportScout%'";
    $statement = $db->prepare($queryDelete);
    $statement->execute();
    $statement->closeCursor();

}

$queryContracts = "SELECT * FROM player";
$queryReport = "SELECT * from reports";
$statement = $db->prepare($queryContracts);
$statement2 = $db->prepare($queryReport);
$statement->execute();
$statement2->execute();
$contracts = $statement->fetchAll();
$reports = $statement2->fetchAll();
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
    <!-- <link href="mystyle.css" rel="stylesheet"> -->
    <script type="text/javascript" src="./js/myFunctions.js"></script>
</head>

<body>


    <!-- players for loop -->


    <a type="button" class="btn btn-primary" href="./add.php">Add Player</a>

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

        //PLAYERS
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
                <td>
                    <button onclick="DeletePlayer('<?php echo $contract['playerID'] ?>')">DELETE</button>
                </td>

            </tr>
        <?php endforeach; ?>

    </table>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">PlayerId</th>
                <th scope="col">ScoutId</th>
                <th scope="col">season</th>
                <th scope="col">Positives</th>
                <th scope="col">Negatives</th>
                

            </tr>
        </thead>
        <?php
        $count = 0;

        //PLAYERS
        foreach ($reports as $report): ?>

            <tr>
                <th scope="row">
                    <?php echo $report['playerID'] ?>
                </th>
                <td>
                    <?php echo $report['scoutID'] ?>
                </td>
                <td>
                    <?php echo $report['season'] ?>
                </td>
                <td>
                    <?php echo $report['positives'] ?>
                </td>
                <td>
                    <?php echo $report['negatives'] ?>
                </td>
                <td>
                    <button onclick="DeleteReport('<?php echo $report['playerID'] ?>', '<?php echo $report['scoutID'] ?>')">DELETE</button>
                </td>

            </tr>
        <?php endforeach; ?>

    </table>

    </div>
    </div>




    </main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>