<?php
// Pastikan data sudah di-load oleh parent (fintech.php)
// Jika belum yakin, require ulang saja (aman karena require_once)


global $var;
$slug = $var[0] ?? '';

// Ambil data berdasarkan slug
// Karena struktur array kita sudah associative ['slug' => data], pemanggilannya mudah:
$produk = $layanan_fintech[$slug] ?? null;

if (!$produk) {
    echo "<div class='container py-5 text-center mt-5'>
            <h3 class='fw-bold text-muted'>Layanan tidak ditemukan</h3>
            <a href='/produk/fintech' class='btn btn-primary mt-3'>Kembali ke Fintech</a>
          </div>";
    return;
}
?>

<div class="wrapper-detail-fintech bg-white">
    
    <!-- Bagian Header (Hero Kecil) -->
    <section class="hero-detail-produk pt-5 pb-4">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb small">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none text-muted">Home</a></li>
                    <li class="breadcrumb-item"><a href="/produk/fintech" class="text-decoration-none text-muted">Fintech</a></li>
                    <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Detail</li>
                </ol>
            </nav>

            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center mb-3">
                        <div class="ikon-wrapper-besar bg-<?php echo $produk['warna']; ?> text-white me-4">
                            <i class="bi <?php echo $produk['ikon']; ?> fs-1"></i>
                        </div>
                        <div>
                            <span class="badge bg-<?php echo $produk['warna']; ?> bg-opacity-10 text-<?php echo $produk['warna']; ?> px-3 py-2 rounded-pill mb-2">
                                Solusi CIFO
                            </span>
                            <h1 class="judul-detail-produk display-6 mb-0"><?php echo $produk['judul']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Konten & Sidebar -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                
                <!-- KONTEN KIRI -->
                <div class="col-lg-8">
                    <!-- Gambar -->
                    <div class="mb-5 position-relative">
                        <img src="<?php echo $produk['img']; ?>" class="img-fluid w-100 object-fit-cover gambar-detail-fintech" style="height: 400px;" alt="<?php echo $produk['judul']; ?>">
                    </div>

                    <!-- Teks Artikel -->
                    <div class="konten-fintech">
                        <p class="lead text-dark fw-semibold">
                            <?php echo $produk['deskripsi']; ?>
                        </p>
                        <hr class="my-4 border-light">
                        <?php echo $produk['konten']; ?>
                    </div>

                    <!-- Tombol Navigasi -->
                    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
                        <a href="/produk/fintech" class="btn btn-outline-secondary rounded-pill px-4 fw-bold">
                            <i class="bi bi-arrow-left me-2"></i> Kembali
                        </a>
                        <a href="/bantuan/contact" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">
                            Konsultasi Layanan Ini <i class="bi bi-whatsapp ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- SIDEBAR KANAN -->
                <div class="col-lg-4">
                    <div class="position-sticky" style="top: 2rem;">
                        
                        <!-- Navigasi Layanan Lain -->
                        <div class="card card-nav-fintech border-0 shadow-sm mb-4">
                            <div class="card-header bg-white py-3 border-bottom">
                                <h6 class="fw-bold mb-0 text-dark">Layanan Fintech Lainnya</h6>
                            </div>
                            <div class="list-group list-group-flush">
                                <?php foreach($layanan_fintech as $key => $item): ?>
                                    <a href="/produk/detailFintech/<?php echo $item['slug']; ?>" 
                                       class="link-fintech-nav <?php echo ($slug == $item['slug']) ? 'active' : ''; ?>">
                                       <i class="bi <?php echo $item['ikon']; ?> me-3 opacity-75"></i>
                                       <?php echo $item['judul']; ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Banner CTA Kecil -->
                        <div class="card bg-dark text-white border-0 rounded-4 overflow-hidden shadow">
                            <div class="card-body p-4 text-center position-relative">
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-25"></div>
                                <div class="position-relative z-1">
                                    <i class="bi bi-chat-square-text fs-1 mb-3 d-block text-info"></i>
                                    <h5 class="fw-bold">Butuh Demo Produk?</h5>
                                    <p class="small text-white-50 mb-3">Jadwalkan demo gratis dengan tim produk kami.</p>
                                    <a href="#" class="btn btn-light btn-sm w-100 rounded-pill fw-bold text-primary">Jadwal Demo</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</div>