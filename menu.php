<?php
$products = [

    [
        "name" => "Americano",
        "price" => 20000,
        "stock" => 10,
        "image" => "assets/img/kupii.jpeg",
        "status" => true
    ],

    [
        "name" => "Caramel Machiato",
        "price" => 40000,
        "stock" => 8,
        "image" => "assets/img/ciato.jpeg",
        "status" => true
    ],

    [
        "name" => "Butter Scooth",
        "price" => 40000,
        "stock" => 7,
        "image" => "assets/img/ex.jpeg",
        "status" => true
    ],

    [
        "name" => "Cappuccino",
        "price" => 35000,
        "stock" => 10,
        "image" => "assets/img/rere.jpeg",
        "status" => true
    ],

    [
        "name" => "Latte",
        "price" => 35000,
        "stock" => 9,
        "image" => "assets/img/latteh.jpeg",
        "status" => true
    ],

    [
        "name" => "Vanilla Latte",
        "price" => 40000,
        "stock" => 6,
        "image" => "assets/img/V60.jpeg",
        "status" => true
    ],

    [
        "name" => "Mocha",
        "price" => 35000,
        "stock" => 8,
        "image" => "assets/img/mucha.jpeg",
        "status" => true
    ],

    [
        "name" => "Spanish Latte",
        "price" => 35000,
        "stock" => 5,
        "image" => "assets/img/spanish.jpeg",
        "status" => true
    ],

    [
        "name" => "Espresso",
        "price" => 15000,
        "stock" => 12,
        "image" => "assets/img/espresso.jpeg",
        "status" => true
    ],

    [
        "name" => "V60",
        "price" => 45000,
        "stock" => 5,
        "image" => "assets/img/V60.jpeg",
        "status" => true
    ],

    [
        "name" => "Cold Brew",
        "price" => 50000,
        "stock" => 4,
        "image" => "assets/img/cold brew.jpeg",
        "status" => true
    ]

];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menu Coffee MAS REY</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<section class="menu">

    <h2>Coffee Product</h2>

    <!-- SEARCH -->
    <div class="search-menu">

        <input
            type="search"
            placeholder="Cari menu kopi..."
        >

        <button type="button">
            🔍 Search
        </button>

    </div>


    <!-- INFORMASI ARRAY -->
    <div class="product-info">

        <p>
            Produk pertama:
            <?php echo $products[0]["name"]; ?>
        </p>

        <p>
            Total produk:
            <?php echo count($products); ?>
        </p>

    </div>


    <!-- DAFTAR PRODUK -->

    <div class="menu-container">

        <?php foreach ($products as $product) { ?>

            <div class="card">

                <img
                    src="<?php echo $product["image"]; ?>"
                    alt="<?php echo $product["name"]; ?>"
                >

                <div class="card-body">

                    <h3>
                        <?php echo $product["name"]; ?>
                    </h3>

                    <h4>
                        Rp
                        <?php
                        echo number_format(
                            $product["price"],
                            0,
                            ',',
                            '.'
                        );
                        ?>
                    </h4>

                    <p>
                        Stok:
                        <?php echo $product["stock"]; ?>
                    </p>

                    <p>
                        Status:

                        <?php

                        if ($product["status"]) {

                            echo "Tersedia";

                        } else {

                            echo "Habis";

                        }

                        ?>

                    </p>

                    <select>

                        <option>Pilih jumlah</option>

                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>

                    </select>

                </div>

            </div>

        <?php } ?>

    </div>

</section>

</body>

</html>