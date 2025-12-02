<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Internet Fiber Optic</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            background: url('https://images.pexels.com/photos/373543/pexels-photo-373543.jpeg') center/cover no-repeat;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 0 0 8px rgba(0,0,0,0.6);
        }

        .card:hover {
            transform: scale(1.03);
            transition: 0.3s;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Layanan interne</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paket">Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#daftar">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <div class="hero">
        <h1 class="fw-bold">Layanan Internet Fiber Optic</h1>
    </div>

    <!-- PAKET INTERNET -->
    <section id="paket" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Paket Internet</h2>
            <div class="row g-4">
                
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h4>20 Mbps</h4>
                            <p class="text-muted">Cocok untuk rumah tangga</p>
                            <h3 class="text-primary">Rp 150.000</h3>
                            <button class="btn btn-primary mt-3">Pilih Paket</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h4>50 Mbps</h4>
                            <p class="text-muted">Streaming & Gaming</p>
                            <h3 class="text-primary">Rp 250.000</h3>
                            <button class="btn btn-primary mt-3">Pilih Paket</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h4>100 Mbps</h4>
                            <p class="text-muted">Bisnis & Smart Home</p>
                            <h3 class="text-primary">Rp 350.000</h3>
                            <button class="btn btn-primary mt-3">Pilih Paket</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FORM PENDAFTARAN -->
    <section id="daftar" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Form Pendaftaran</h2>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="p-4 shadow bg-white rounded">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" rows="3" placeholder="Masukkan alamat"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pilih Paket</label>
                            <select class="form-select">
                                <option>20 Mbps</option>
                                <option>50 Mbps</option>
                                <option>100 Mbps</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" placeholder="Contoh: 0812xxxxxxx">
                        </div>

                        <button class="btn btn-primary w-100">Kirim Pendaftaran</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
