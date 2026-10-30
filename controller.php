<?php
class ProductController
{
    public function index()
    {
        return 'Menampilkan halaman list produk';
    }

    public function store()
    {
        return 'Menyimpan data produk';
    }
}

$controller = new ProductController();
$messageIndex = $controller->index();
$messageStore = $controller->store();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kenapa OOP Penting untuk Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <h3>Kenapa PHP OOP Penting untuk Laravel</h3>

    <div class="card">
        <div class="card-body">
            <p>Method index(): <?php echo $messageIndex; ?></p>
            <p>Method store(): <?php echo $messageStore; ?></p>
        </div>
    </div>

    <div class="alert alert-info mt-3">
        Di Laravel, kita biasanya memanggil method di dalam Controller.
    </div>
</div>
//test//
</body>
</html>