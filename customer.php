<?php


$customers = [
    [
        'id' => 1,
        'name' => 'Andi Saputra',
        'email' => 'andi@gmail.com',
        'phone' => '081234567890',
        'type' => 'regular'
    ],
    [
        'id' => 2,
        'name' => 'Budi Santoso',
        'email' => 'budi@gmail.com',
        'phone' => '082345678901',
        'type' => 'member'
    ],
    [
        'id' => 3,
        'name' => 'Citra Amelia',
        'email' => 'citra@gmail.com',
        'phone' => '083456789012',
        'type' => 'vip'
    ],
    [
        'id' => 4,
        'name' => 'Dimas Pratama',
        'email' => 'dimas@gmail.com',
        'phone' => '084567890123',
        'type' => 'regular'
    ],
    [
        'id' => 5,
        'name' => 'Siti Rahma',
        'email' => 'siti@gmail.com',
        'phone' => '085678901234',
        'type' => 'member'
    ]
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer - Coffee MAS REY</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <h3 class="mb-2">Data Customer Coffee MAS REY</h3>
    <p class="text-muted">
        Daftar pelanggan Coffee Shop MAS REY
    </p>

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Tipe Customer</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($customers as $index => $customer): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>

                                <td>
                                    <?= htmlspecialchars($customer['name']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($customer['email']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($customer['phone']) ?>
                                </td>

                                <td>
                                    <?php if ($customer['type'] === 'vip'): ?>
                                        <span class="badge bg-warning text-dark">
                                            VIP
                                        </span>

                                    <?php elseif ($customer['type'] === 'member'): ?>
                                        <span class="badge bg-success">
                                            Member
                                        </span>

                                    <?php else: ?>
                                        <span class="badge bg-secondary">
                                            Regular
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

            <p class="mb-0 text-muted">
                Total Customer: <?= count($customers) ?> orang
            </p>

        </div>
    </div>

    <a href="index.php" class="btn btn-dark mt-3">
        Kembali ke Home
    </a>

</div>

</body>
</html>