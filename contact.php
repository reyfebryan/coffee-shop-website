<?php

$pesan_berhasil = "";

if (isset($_POST['kirim'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $pesan_berhasil = "Terima kasih, $nama. Pesan kamu sudah berhasil dikirim.";

}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee MAS REY</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>
        <div class="container">

            <div class="logo">
                <img src="assets/img/logo.jpeg" alt="Coffee Mas Rey">
            </div>

            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="testimoni.html">Testimoni</a></li>
                    <li><a href="payment.html">Payment</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <section class="contact">

        <div class="container">

            <h1>Contact Us</h1>

            <p>
                Hubungi kami jika ada Keluhan.
                <br>
                Silahkan ISI FORM TERSEBUT
            </p>

            <p><strong>📍 Alamat:</strong> Jl. Pemuda III No. 34</p>

            <p><strong>📞 WhatsApp:</strong> 0823-1234-3472</p>

            <p><strong>📧 Email:</strong> coffeemasrey@gmail.com</p>

            <p><strong>🕒 Jam Operasional:</strong> 08.00 - 22.00</p>


            
            <?php if ($pesan_berhasil != "") { ?>

                <p>
                    <strong>
                        <?php echo $pesan_berhasil; ?>
                    </strong>
                </p>

            <?php } ?>


            
            <form method="POST" action="contact.php">

                <input
                    type="text"
                    name="nama"
                    placeholder="Nama"
                    required
                >

                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    required
                >

                <textarea
                    name="pesan"
                    placeholder="Tulis pesan..."
                    rows="5"
                    required
                ></textarea>

                <button type="submit" name="kirim">
                    Kirim Pesan
                </button>

            </form>

        </div>

    </section>

</body>

</html>
