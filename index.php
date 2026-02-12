<?php
$nama = "Auni Binti Jamil";
$matrik = "18DDT23F1082";
$kelas = "DDT6D";
$telefon = "012-5432923";
$alamat = "Politeknik Tuanku Syed Sirajuddin, Pauh Putra, 02600 Arau, Perlis";

$perkhidmatan = [
    "Pembangunan Sistem Web Berasaskan PHP & MySQL",
    "Pembangunan Aplikasi Desktop Menggunakan Java",
    "Reka Bentuk Sistem dan Database",
    "Analisis Keperluan Sistem (System Requirement & Design)"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil Profesional - <?php echo $nama; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <div class="row g-4">

            <!-- Kolum 1 -->
            <div class="col-12 col-md-3 col-lg-2">
                <img src="auni.jpeg" class="img-fluid rounded shadow" alt="Profile Image">
            </div>

            <!-- Kolum 2 -->
            <div class="col-12 col-md-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h4 class="card-title">Biodata</h4>
                        <hr>
                        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
                        <p><strong>No. Matrik:</strong> <?php echo $matrik; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $kelas; ?></p>
                        <p><strong>No. Telefon:</strong> <?php echo $telefon; ?></p>
                        <p><strong>Alamat Pejabat:</strong> <?php echo $alamat; ?></p>
                    </div>
                </div>
            </div>

            <!-- Kolum 3 -->
            <div class="col-12 col-md-5 col-lg-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h4 class="card-title">Perkhidmatan Profesional</h4>
                        <hr>

                        <p>
                            Saya menawarkan perkhidmatan berkaitan pembangunan sistem dan aplikasi
                            untuk tujuan pembelajaran dan projek kecil.
                        </p>

                        <ul>
                            <?php foreach ($perkhidmatan as $item) { ?>
                                <li><?php echo $item; ?></li>
                            <?php } ?>
                        </ul>

                        <a href="#" class="btn btn-primary mt-3">Hubungi Sekarang</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>