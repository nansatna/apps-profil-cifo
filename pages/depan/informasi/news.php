<?php
// Ambil variabel global dari route.php
global $var; 

// Cek apakah ada slug di URL (misal: /informasi/news/judul-berita)
// Jika ada, langsung panggil file detail dan hentikan script ini.
if (!empty($var[0])) {
    include 'detail.php';
    return; // Stop eksekusi agar list tidak muncul di bawah detail
}

// --- JIKA TIDAK ADA SLUG, TAMPILKAN DAFTAR BERITA DI BAWAH INI ---

require_once 'data/depan/informasi/berita.php';
$list_berita = array_values($data_berita); // Konversi ke array biasa
?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary">Berita & Artikel</h1>
            <p class="text-muted">Informasi terbaru seputar kegiatan dan inovasi CIFO</p>
        </div>

        <div class="row g-4">
            <?php foreach($list_berita as $item): ?>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-top">
                    <img src="<?= $item['img'] ?>" class="card-img-top object-fit-cover" height="220" alt="<?= $item['judul'] ?>">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-primary w-auto align-self-start mb-2"><?= $item['kategori'] ?></span>
                        <h5 class="card-title fw-bold mb-3"><?= $item['judul'] ?></h5>
                        <div class="small text-muted mb-3">
                            <i class="bi bi-calendar3 me-1"></i> <?= $item['tanggal'] ?>
                        </div>
                        <p class="card-text text-muted small flex-grow-1">
                            <?= substr(strip_tags($item['konten']), 0, 100) ?>...
                        </p>
                        <a href="/informasi/detail/<?= $item['slug'] ?>" class="btn btn-outline-primary w-100 mt-3 stretched-link">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .hover-top { transition: transform 0.3s; }
    .hover-top:hover { transform: translateY(-5px); }
</style>