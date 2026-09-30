<?php


// String
$productName = "Americano";

// Integer
$productPrice = 20000;
$productStock = 10;

// Float
$productDiscount = 0.10;

// Boolean
$isAvailable = true;

// Null
$productDescription = null;

// Gambar produk
$productImage = "assets/img/kupii.jpeg";


// ==========================================
// DATA PRODUK LAIN
// ==========================================

$product2Name = "Caramel Machiato";
$product2Price = 40000;
$product2Stock = 8;
$product2Image = "assets/img/ciato.jpeg";

$product3Name = "Butter Scooth";
$product3Price = 40000;
$product3Stock = 7;
$product3Image = "assets/img/ex.jpeg";

$product4Name = "Cappuccino";
$product4Price = 35000;
$product4Stock = 10;
$product4Image = "assets/img/rere.jpeg";

$product5Name = "Latte";
$product5Price = 35000;
$product5Stock = 9;
$product5Image = "assets/img/latteh.jpeg";

$product6Name = "Vanilla Latte";
$product6Price = 40000;
$product6Stock = 6;
$product6Image = "assets/img/V60.jpeg";

$product7Name = "Mocha";
$product7Price = 35000;
$product7Stock = 8;
$product7Image = "assets/img/mucha.jpeg";

$product8Name = "Spanish Latte";
$product8Price = 35000;
$product8Stock = 5;
$product8Image = "assets/img/spanish.jpeg";

$product9Name = "Espresso";
$product9Price = 15000;
$product9Stock = 12;
$product9Image = "assets/img/espresso.jpeg";

$product10Name = "V60";
$product10Price = 45000;
$product10Stock = 5;
$product10Image = "assets/img/V60.jpeg";

$product11Name = "Cold Brew";
$product11Price = 50000;
$product11Stock = 4;
$product11Image = "assets/img/cold brew.jpeg";

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

    <div class="search-menu">

        <input
            type="search"
            placeholder="Cari menu kopi..."
        >

        <button type="button">
            🔍 Search
        </button>

    </div>


    <div class="menu-container">


        <!-- ================================= -->
        <!-- AMERICANO -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $productImage; ?>"
                alt="<?php echo $productName; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $productName; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($productPrice, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $productStock; ?>
                </p>

                <p>
                    Status:

                    <?php

                    if ($isAvailable) {

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


        <!-- ================================= -->
        <!-- CARAMEL MACHIATO -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product2Image; ?>"
                alt="<?php echo $product2Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product2Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product2Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product2Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- BUTTER SCOOTH -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product3Image; ?>"
                alt="<?php echo $product3Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product3Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product3Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product3Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- CAPPUCCINO -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product4Image; ?>"
                alt="<?php echo $product4Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product4Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product4Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product4Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- LATTE -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product5Image; ?>"
                alt="<?php echo $product5Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product5Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product5Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product5Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- VANILLA LATTE -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product6Image; ?>"
                alt="<?php echo $product6Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product6Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product6Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product6Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- MOCHA -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product7Image; ?>"
                alt="<?php echo $product7Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product7Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product7Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product7Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- SPANISH LATTE -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product8Image; ?>"
                alt="<?php echo $product8Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product8Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product8Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product8Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- ESPRESSO -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product9Image; ?>"
                alt="<?php echo $product9Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product9Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product9Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product9Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- V60 -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product10Image; ?>"
                alt="<?php echo $product10Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product10Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product10Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product10Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


        <!-- ================================= -->
        <!-- COLD BREW -->
        <!-- ================================= -->

        <div class="card">

            <img
                src="<?php echo $product11Image; ?>"
                alt="<?php echo $product11Name; ?>"
            >

            <div class="card-body">

                <h3>
                    <?php echo $product11Name; ?>
                </h3>

                <h4>
                    Rp <?php echo number_format($product11Price, 0, ',', '.'); ?>
                </h4>

                <p>
                    Stok:
                    <?php echo $product11Stock; ?>
                </p>

                <p>Status: Tersedia</p>

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


    </div>

</section>

</body>

</html>