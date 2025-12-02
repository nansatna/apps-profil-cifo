<style>
        /* Custom CSS untuk mempercantik tampilan standar Bootstrap */
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Card Hover Effect */
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 10px;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .icon-box {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
    </style>

    <section id="solutions" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase">Layanan Kami</h6>
                <h2 class="fw-bold">Produk & Solusi Unggulan</h2>
                <div class="mx-auto bg-primary" style="height: 3px; width: 60px; margin-top: 10px;"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 service-card p-3 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box"><i class="bi bi-code-slash"></i></div>
                            <h4 class="card-title fw-bold">Custom Software Dev</h4>
                            <p class="card-text text-muted">Pengembangan aplikasi web dan mobile yang disesuaikan dengan kebutuhan spesifik bisnis Anda menggunakan teknologi terbaru.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 service-card p-3 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box"><i class="bi bi-cloud-check-fill"></i></div>
                            <h4 class="card-title fw-bold">Cloud Infrastructure</h4>
                            <p class="card-text text-muted">Migrasi dan manajemen server berbasis Cloud (AWS/Azure/GCP) untuk skalabilitas dan aksesibilitas data yang lebih baik.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 service-card p-3 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box"><i class="bi bi-shield-lock-fill"></i></div>
                            <h4 class="card-title fw-bold">Cyber Security</h4>
                            <p class="card-text text-muted">Proteksi data perusahaan dari serangan siber dengan layanan audit keamanan, firewall, dan enkripsi tingkat lanjut.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 service-card p-3 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box"><i class="bi bi-people-fill"></i></div>
                            <h4 class="card-title fw-bold">IT Consulting</h4>
                            <p class="card-text text-muted">Konsultasi strategis untuk transformasi digital, perencanaan arsitektur sistem, dan optimalisasi biaya IT.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 service-card p-3 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box"><i class="bi bi-graph-up-arrow"></i></div>
                            <h4 class="card-title fw-bold">Data Analytics & BI</h4>
                            <p class="card-text text-muted">Ubah data mentah menjadi wawasan bisnis yang berharga dengan dashboard interaktif dan pelaporan otomatis.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 service-card p-3 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box"><i class="bi bi-router-fill"></i></div>
                            <h4 class="card-title fw-bold">IoT Solutions</h4>
                            <p class="card-text text-muted">Integrasi perangkat cerdas (Internet of Things) untuk otomasi industri dan monitoring sistem secara real-time.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Team Working" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h6 class="text-primary fw-bold text-uppercase">Mengapa PT Informatika?</h6>
                    <h2 class="mb-4 fw-bold">Mitra Teknologi Terpercaya Anda</h2>
                    <p class="text-muted">Kami tidak hanya sekadar vendor, tetapi mitra yang peduli dengan pertumbuhan bisnis Anda melalui teknologi.</p>
                    
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-primary fs-4"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold">Tim Ahli Bersertifikat</h5>
                            <p class="text-muted small">Didukung oleh teknisi dan developer yang memiliki sertifikasi internasional.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-primary fs-4"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold">Dukungan 24/7</h5>
                            <p class="text-muted small">Layanan monitoring dan support teknis yang selalu siap kapanpun Anda butuhkan.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-primary fs-4"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold">Harga Kompetitif</h5>
                            <p class="text-muted small">Solusi enterprise dengan biaya yang terukur dan transparan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="fw-bold mb-3">Siap Mengembangkan Bisnis Anda?</h2>
            <p class="lead mb-4">Diskusikan kebutuhan IT perusahaan Anda dengan tim konsultan kami secara gratis.</p>
            <button class="btn btn-light btn-lg text-primary fw-bold px-5">Hubungi Kami Sekarang</button>
        </div>
    </section>