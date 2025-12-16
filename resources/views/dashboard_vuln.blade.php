<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hacked Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #2c0b0e; color: #fff; } /* Latar gelap merah */
        .hacked-badge {
            position: absolute; top: 20px; right: 20px;
            border: 2px solid red; color: red; padding: 5px 15px;
            font-weight: bold; transform: rotate(15deg); font-size: 2rem;
            opacity: 0.7;
        }
    </style>
</head>
<body>
    <div class="hacked-badge">SYSTEM COMPROMISED</div>

    <div class="container mt-5">
        <div class="card bg-dark border-danger text-light shadow-lg">
            <div class="card-header bg-danger text-white">
                <h3><i class="fas fa-user-secret"></i> AKSES ADMIN DIBERIKAN (VULNERABLE)</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-danger">
                    <strong><i class="fas fa-exclamation-circle"></i> PERINGATAN KEAMANAN:</strong><br>
                    Anda berhasil masuk melalui celah SQL Injection!
                </div>

                <h4 class="mt-4">Selamat Datang, <span class="text-warning">{{ $username }}</span></h4>
                <p>Anda telah login tanpa mengetahui password asli.</p>

                <hr class="border-danger">

                <div class="bg-black p-3 rounded border border-secondary mt-3">
                    <h6 class="text-danger">Query yang tereksekusi di Database:</h6>
                    <code class="text-success" style="font-family: 'Courier New', monospace;">
                        {{ $query }}
                    </code>
                </div>
                
                <div class="mt-4 text-center">
                    <a href="/vuln" class="btn btn-outline-light btn-sm">Keluar / Coba Lagi</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>