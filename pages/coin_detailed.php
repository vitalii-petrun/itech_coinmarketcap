<html>

<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="../css/coin_detailed.css?v=2">
    <script src="../js/header.js" type="text/javascript" defer></script>
</head>

<body>
    <header-widget></header-widget>
    <div class='sized_box'> </div>

    <main>
        <?php
        $id = $_GET['id'];
        require_once '../api/api_repository.php';
        require_once '../api/entities/crypto.php';

        $api_repository = new ApiRepository();
        $coin = $api_repository->getObjectById($id);
        $metadata = $api_repository->getMetadataById($id);

        $crypto = new Crypto($coin->data, $id);
        $crypto->metadata = $metadata->data->$id;


        echo "<div class='coin_info'>";
        echo "<div class='left_side'>";
        echo "<div class='logo_row panel'>";
        echo "<img src='" . $crypto->metadata->logo . "' class='coin_logo'>";
        echo "<h1>" . $crypto->name . " (" . $crypto->symbol . ")" . "</h1>";
        echo "</div>";
        echo "<p class='description_text panel'>" . $crypto->metadata->description . "</p>";
        echo "<div class='links'>";
        echo "<a href='" . $crypto->metadata->urls->website[0] . "'>🔗 Website</a>";
        echo "<a href='" . $crypto->metadata->urls->twitter[0] . "'>🔗 Twitter </a>";
        echo "<a href='" . $crypto->metadata->urls->reddit[0] . "'  >🔗 Reddit</a>";
        echo "<a href='" . $crypto->metadata->urls->technical_doc[0] . "'  '>🔗 Whitepaper</a>";
        echo "</div>";
        echo "</div>";

        echo "<div class='price_changes_info  panel'>";
        echo "<h2>Price: " . round($crypto->quote->price, 2) . " $</h2>";
        echo "<h2>Circulating Supply: " . round($crypto->circulating_supply, 2) . " " . $crypto->symbol . "</h2>";
        echo "<h2>Market Cap: " . round($crypto->quote->market_cap, 2) . " $</h2>";
        echo "</div>";


        ?>

    </main>
    <footer>
        <p>Copyright © 2023 Crypto Coin Info</p>
    </footer>
</body>

</html>