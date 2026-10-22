<?php
require_once 'function-helper.php';

$items = [
    [
        'name' => 'Americano',
        'price' => 20000,
        'qty' => 2,
        'discount' => 0
    ],
    [
        'name' => 'Caramel Machiato',
        'price' => 40000,
        'qty' => 2,
        'discount' => 5000
    ]
];

$status = 'paid';
$grandTotal = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Helper - Coffee Mas REY</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-4">
        <h3>Function Helper Coffee Mas REY</h3>

        <p>Status: <?= statusBadge($status); ?></p>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Item</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Diskon</th>
                    <th>Subtotal</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($items as $item): ?>
                    <?php
                    $subtotal = calculateSubtotal(
                        $item['price'],
                        $item['qty'],
                        $item['discount']
                    );

                    $grandTotal += $subtotal;
                    ?>

                    <tr>
                        <td><?= $item['name']; ?></td>
                        <td><?= rupiah($item['price']); ?></td>
                        <td><?= $item['qty']; ?></td>
                        <td><?= rupiah($item['discount']); ?></td>
                        <td><?= rupiah($subtotal); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="4">Grand Total</th>
                    <th><?= rupiah($grandTotal); ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>