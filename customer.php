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

// ===== BAB 13 - FORM GET FILTER REPORT =====

$keyword = $_GET['keyword'] ?? '';
$typeFilter = $_GET['type'] ?? '';

$filteredCustomers = [];

foreach ($customers as $customer) {

    $matchKeyword = $keyword === '' ||
        stripos($customer['name'], $keyword) !== false;

    $matchType = $typeFilter === '' ||
        $customer['type'] === $typeFilter;

    if ($matchKeyword && $matchType) {
        $filteredCustomers[] = $customer;
    }
}

$totalMember = 0;
$totalVIP = 0;

foreach ($customers as $customer) {
    if ($customer['type'] === 'member') {
        $totalMember++;
    }

    if ($customer['type'] === 'vip') {
        $totalVIP++;
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Customer - Coffee MAS REY</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
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

            <div class="row g-3 mb-4">

                <div class="col-md-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h6>Total Customer</h6>
                            <h3><?= count($customers) ?></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h6>Total Member</h6>
                            <h3><?= $totalMember ?></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-warning text-dark">
                        <div class="card-body">
                            <h6>Total VIP</h6>
                            <h3><?= $totalVIP ?></h3>
                        </div>
                    </div>
                </div>

            </div>

            <!-- FORM GET FILTER REPORT -->

            <form method="GET" class="mb-3">

                <div class="row g-2">

                    <div class="col-md-5">
                        <input
                            type="text"
                            name="keyword"
                            class="form-control"
                            placeholder="Cari nama customer..."
                            value="<?= htmlspecialchars($keyword) ?>">
                    </div>

                    <div class="col-md-4">

                        <select name="type" class="form-select">

                            <option value="">Semua Tipe</option>

                            <option value="regular"
                                <?= $typeFilter === 'regular' ? 'selected' : '' ?>>
                                Regular
                            </option>

                            <option value="member"
                                <?= $typeFilter === 'member' ? 'selected' : '' ?>>
                                Member
                            </option>

                            <option value="vip"
                                <?= $typeFilter === 'vip' ? 'selected' : '' ?>>
                                VIP
                            </option>

                        </select>

                    </div>

                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary w-100">
                            Filter
                        </button>
                    </div>

                </div>

            </form>

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

                        <?php if (count($filteredCustomers) === 0): ?>

                            <tr>
                                <td colspan="5" class="text-center">
                                    Data customer tidak ditemukan
                                </td>
                            </tr>

                        <?php endif; ?>

                        <?php foreach ($filteredCustomers as $index => $customer): ?>

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