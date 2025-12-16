<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Vulnerable (SQL Injection Demo)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            background-color: #f8d7da; /* Latar belakang merah muda lembut */
            height: 100vh;
            width: 110vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-danger">
                    <div class="card-header bg-danger text-white text-center">
                        <h4><i class="fas fa-exclamation-triangle"></i> VULNERABLE LOGIN</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="alert alert-warning text-center" role="alert">
                            <strong>Peringatan!</strong><br>
                            Halaman ini rentan terhadap serangan SQL Injection.
                        </div>

                        <form action="/login/vuln" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan username..." required>
                                </div>
                                <div class="form-text text-danger">Input ini tidak difilter!</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan password...">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-danger w-100">
                                <i class="fas fa-skull"></i> Login (Unsafe)
                            </button>
                        </form>
                    </div>
                    <div class="card-footer text-center text-muted">
                        <small>Simulasi UAS Keamanan Sistem - UNNES</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>