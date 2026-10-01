<?php

$status = "paid";

switch ($status) {
    case "paid":
        $statusText = "Pembayaran Berhasil";
        break;

    case "pending":
        $statusText = "Menunggu Pembayaran";
        break;

    case "cancel":
        $statusText = "Pembayaran Dibatalkan";
        break;

    default:
        $statusText = "Status Tidak Diketahui";
        break;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Coffee MAS REY</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<section class="payment">
    <h2>Payment</h2>
    <p>Metode Pembayaran</p>

    <div class="payment-container">

        <div class="payment-card">
            <h3>QRIS</h3>
            <p>Scan QRIS untuk melakukan pembayaran.</p>

            <img src="assets/img/qwris.jpeg" alt="QRIS Coffee MAS REY">

            <p><b>Nama:</b> Coffee MAS REY</p>
        </div>

        <div class="payment-card">
            <h3>Transfer Bank</h3>
            <p><b>BCA</b></p>
            <p>8810675790</p>
            <p>a.n Coffee MAS REY</p>

            <p><b>BRI</b></p>
            <p>0987654321</p>
            <p>a.n Coffee MAS REY</p>
        </div>

        <div class="payment-card">
            <h3>Cash</h3>
            <p>Pembayaran langsung di tempat.</p>
            <p>Silakan datang ke Coffee MAS REY.</p>
        </div>

        <!-- Tambahan dari materi Switch Case -->
        <div class="payment-card">
            <h3>Status Pembayaran</h3>
            <p><b><?php echo $statusText; ?></b></p>
        </div>

    </div>
</section>

</body>

</html>