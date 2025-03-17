<?php include "dummy.php"; 
include "navbar.php";

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil - Home</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: black;">
       <section class="hero">
    <div class="hero-text">
      <h1 class="fw-bold">Sewa Mobil</h1>
      <p style="color: white;">Rasakan sensasi berkendara dengan mobil terbaik<br> dan nikmati pengalaman yang tak terlupakan.</p>
      <a href="#" class="btn">Sewa Sekarang</a>
    </div>
    <div class="hero-image">
      <img src="./img/heros.jpg" alt="Mobil Sport">
    </div>
  </section>
    <!-- Produk -->
    <section id="produk" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Mobil Yang Tersedia</h2>
            <div class="row mt-4">
                <?php foreach ($produk as $p) : ?>
                    <div class="col-md-4">
                        <div class="card d-flex flex-column h-100">
                            <img src="./img/<?= $p['gambar']; ?>" class="card-img-top">
                            <div class="card-body flex-grow-1">
                                <h5 class="card-title fw-bold"><?= $p['nama']; ?></h5>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <p class="card-text style">Rp. <?= $p['harga']; ?></p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <a href="transaksi.php?id=<?= $p['nama']; ?>" class="btn btn-dark mt-4">Rental Sekarang</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Menyediakan Perentalan Mobil Dengan harga yang terjangkau</p>
            <ul class="list-unstyled">
                <li>Alamat: Jl. Raya No. 123, Jakarta</li>
                <li>Telepon: +62 7209 2938 838</li>
                <li>Email: supersport@gmail.com</li>
            </ul>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Kiranne. All Rights Reserved.</p>
    </footer>

    <!-- Link ke Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>