<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Secure Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #f0f2f5; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-shield-alt"></i> SecureApp</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center p-5">
                        <div class="mb-4">
                            <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                        </div>
                        <h2 class="text-success">Login Berhasil!</h2>
                        <p class="text-muted">Sistem keamanan memverifikasi kredensial Anda dengan benar.</p>
                        
                        <hr>
                        
                        <h4 class="my-4">Halo, <b>{{ $username }}</b></h4>
                        
                        <div class="alert alert-success d-inline-block">
                            <i class="fas fa-lock"></i> Koneksi Anda diamankan dengan Eloquent ORM
                        </div>

                        <div class="mt-4">
                            <a href="/secure" class="btn btn-secondary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>