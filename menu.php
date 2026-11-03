<?php

class Product
{
    public $name;
    public $price;
    public $stock;
    public $image;
    public $status;
    public $discount = 0;

    public function getFormattedPrice()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    public function calculateSubtotal($qty)
    {
        return $this->price * $qty;
    }

    public function getStockStatus()
    {
        if ($this->stock > 0 && $this->status) {
            return 'Tersedia';
        }

        return 'Habis';
    }

    public function getCustomerLabel()
    {
        return 'Pelanggan Coffee Mas REY';
    }

    public function isActive()
    {
        return $this->stock > 0 && $this->status;
    }

    public function calculateDiscount()
    {
        return $this->price * $this->discount;
    }
}


// DATA PRODUK COFFEE MAS REY
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


$productObjects = [];

foreach ($products as $item) {

    $product = new Product();

    $product->name = $item["name"];
    $product->price = $item["price"];
    $product->stock = $item["stock"];
    $product->image = $item["image"];
    $product->status = $item["status"];

    $productObjects[] = $product;
}

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

<?php require 'header.php'; ?>

<section class="menu">

    <h2>Coffee Product</h2>

    <div class="search-menu">

        <input
            type="search"
            placeholder="Cari menu kopi..."
        >

        <button type="button">
        </button>

    </div>



    <div class="product-info">

        <p>
            <?php echo htmlspecialchars($products[0]["name"]); ?>
        </p>

        <p>
            <?php echo count($products); ?>
        </p>

    </div>


    <div class="menu-container">

        <?php foreach ($productObjects as $product) { ?>

            <div class="card">

                <img
                    src="<?php echo htmlspecialchars($product->image); ?>"
                    alt="<?php echo htmlspecialchars($product->name); ?>"
                >

                <div class="card-body">

                    <h3>
                        <?php echo htmlspecialchars($product->name); ?>
                    </h3>

                    <h4>
                        <?php echo $product->getFormattedPrice(); ?>
                    </h4>

                    <p>
                        <?php echo $product->stock; ?>
                    </p>

                    <p>
                        <?php echo $product->getStockStatus(); ?>
                    </p>

                    <?php if ($product->calculateDiscount() > 0) { ?>

                        <p>
                            Rp <?php echo number_format(
                                $product->calculateDiscount(),
                                0,
                                ',',
                                '.'
                            ); ?>
                        </p>

                    <?php } ?>



                    <form method="get">

                        <input
                            type="hidden"
                            name="product"
                            value="<?php echo htmlspecialchars($product->name); ?>"
                        >

                        <select name="qty" required>

                            <option value="">Pilih jumlah</option>

                            <?php for ($i = 1; $i <= 5; $i++) { ?>

                                <option
                                    value="<?php echo $i; ?>"
                                    <?php
                                    if (
                                        isset($_GET["product"], $_GET["qty"]) &&
                                        $_GET["product"] === $product->name &&
                                        (int) $_GET["qty"] === $i
                                    ) {
                                        echo 'selected';
                                    }
                                    ?>
                                >
                                    <?php echo $i; ?>
                                </option>

                            <?php } ?>

                        </select>

                        <button
                            type="submit"
                            <?php echo !$product->isActive() ? 'disabled' : ''; ?>
                        >
                    
                        </button>

                    </form>


                    <?php

                    if (
                        isset($_GET["product"], $_GET["qty"]) &&
                        $_GET["product"] === $product->name
                    ) {

                        $qty = filter_var(
                            $_GET["qty"],
                            FILTER_VALIDATE_INT
                        );

                        if (
                            $qty !== false &&
                            $qty >= 1 &&
                            $qty <= 5 &&
                            $qty <= $product->stock &&
                            $product->isActive()
                        ) {

                    ?>

                        <p class="subtotal">
                            Subtotal:
                            <strong>
                                Rp <?php echo number_format(
                                    $product->calculateSubtotal($qty),
                                    0,
                                    ',',
                                    '.'
                                ); ?>
                            </strong>
                        </p>

                    <?php

                        } elseif (
                            $qty !== false &&
                            $qty >= 1 &&
                            $qty <= 5 &&
                            $qty > $product->stock
                        ) {

                            echo '<p>Jumlah pesanan melebihi stok.</p>';

                        } else {

                            echo '<p>Pilih jumlah pesanan yang valid.</p>';

                        }
                    }

                    ?>

                </div>

            </div>

        <?php } ?>

    </div>

</section>

</body>

</html>