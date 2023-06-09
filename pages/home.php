<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Crypto Prices</title>
    <link rel="stylesheet" type="text/css" href="../css/home_page_style.css?v=2">
    <script src="../js/header.js" type="text/javascript" defer></script>
    <script src="../js/price_change_cell_color.js" type="text/javascript" defer></script>
</head>

<body>
    <header-widget></header-widget>
    <div class='sized_box'> </div>
    <main>
        <?php
        require_once '../api/get_crypto_call.php';
        $result = getCryptoList();

        echo "<div class='table_container'> ";
        echo "<table id='crypto_table'>";
        echo "<tr>";
        echo "<th class='width-10'>#</th>";
        echo "<th class='width-80'>Name</th>";
        echo "<th>Price $</th>";
        echo "<th>1h %</th>";
        echo "<th>24h %</th>";
        echo "<th>7d %</th>";
        echo "<th>Circulating Supply</th>";
        echo "</tr>";
        foreach ($result as $item) {

            echo "<tr>";
            echo "<td class='width-10'>" . $item->cmc_rank . "</td>";
            $api_key = "1fb35cb2-ae58-412d-80a9-52d860a5a3ab";
            echo "<td class='width-80' ><a href='coin_detailed.php?id=$item->id'>" . '<img  src=' . $item->metadata->logo . '?CMC_PRO_API_KEY=" class="logo" .' . $api_key . '/>' . $item->name . ' (' . $item->symbol . ')' . "  </a></td>";
            echo "<td>" . round($item->quote->price, 2) . "</td>";
            echo "<td class='price-change'> " . round($item->quote->percent_change_1h, 2) . "</td>";
            echo "<td class='price-change'>" . round($item->quote->percent_change_24h, 2) . "</td>";
            echo "<td class='price-change'>" . round($item->quote->percent_change_7d, 2) . "</td>";
            echo "<td>" . round($item->circulating_supply, 1) . "</td>";
        }
        echo "</tr>";
        echo "</table>";
        echo "</div";
        ?>
    </main>
    <footer>
        <p>&copy; 2023 My Crypto Website. All rights reserved.</p>
    </footer>
</body>



</html>