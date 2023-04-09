<html>

<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="../css/coin_detailed.css">
</head>

<body> <a href="home.php">Back</a>
    <header>
        <h1>Crypto Coin Info</h1>
        <ul>
            <li><a href="home.php">Home</a></li>
        </ul>
    </header>
    <?php
    $id = $_GET['id'];
    require_once '../api/api_repository.php';
    require_once '../api/entities/crypto.php';
 
    $api_repository = new ApiRepository();
    $json_data = $api_repository->getObjectById($id);

    $crypto = new Crypto($json_data->data->$id);
    echo "<br> ";
    echo "<br> ";
    echo "crypto name: " . $crypto->name;
    echo "<br> ";
    echo "crypto symbol: " . $crypto->symbol;
    echo "<br> ";
    echo "crypto slug: " . $crypto->slug;
    echo "<br> ";
    echo "crypto num_market_pairs: " . $crypto->num_market_pairs;
    echo "<br> ";
    echo "crypto date_added: " . $crypto->date_added;
    echo "<br> ";
    echo "crypto tags: " . $crypto->tags;

    ?>

    <main>

    </main>
    <footer>
        <p>Copyright © 2023 Crypto Coin Info</p>
    </footer>
</body>

</html>