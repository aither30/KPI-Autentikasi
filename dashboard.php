<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Selamat datang, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong> di dashboard Anda!</h5>
                        <p class="card-text">Ini adalah halaman dashboard Anda. Silakan gunakan fitur yang tersedia.</p>
                        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sertakan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
