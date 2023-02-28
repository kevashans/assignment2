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

    <main class="container">
        <div class="starter-template text-center">

            <table class="table table-bordered table-striped text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Position</th>
                    <th>Draft year</th>

                </tr>

                <?php foreach ($products as $product): ?>
                    <tr>
                        <td>
                            <?php echo $product['playerID']; ?>
                        </td>
                        <td>
                            <?php echo $product['player_name']; ?>
                        </td>
                        <td>
                            <?php echo $product['player_birth_date']; ?>
                        </td>
                        <td>
                            <?php echo $product['position']; ?>
                        </td>
                        <td class="right">
                            <?php echo $product['player_draft_year']; ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

    </main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>