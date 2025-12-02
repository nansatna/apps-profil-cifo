<?php



global $var;
$slug = $var[0] ?? '';

$berita = $data_berita[$slug] ?? null;

// Jika berita tidak ditemukan
if (!$berita) {
    echo "<div class='container py-5 text-center'>
            <div class='py-5'>
                <h3 class='text-muted fw-bold'>Berita tidak ditemukan</h3>
                <a href='/informasi/news' class='btn btn-primary mt-3'>Kembali</a>
            </div>
          </div>";
    return;
}
?>




<section class="py-5 bg-white pembungkus-detail-berita">
    <div class="container">
        
        <nav aria-label="breadcrumb" class="mb-5">
            <ol class="breadcrumb bg-transparent p-0 m-0 small fw-semibold">
                <li class="breadcrumb-item" data-aos='fade-up' data-aos-delay='100'><a href="/" class="text-decoration-none text-secondary">Home</a></li>
                <li class="breadcrumb-item" data-aos='fade-up' data-aos-delay='200'><a href="/informasi/news" class="text-decoration-none text-secondary">Berita</a></li>
                <li class="breadcrumb-item active" style="color: var(--biru-cifo);" data-aos='fade-up' data-aos-delay='300'>Detail</li>
            </ol>
        </nav>

        <div class="row g-5">
            <div class="col-lg-8" data-aos='fade-up' data-aos-delay='100'>
                
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-2 fw-bold" 
                          style="background-color: #eaf4ff; color: var(--biru-cifo);">
                        <?= strtoupper($berita['kategori']) ?>
                    </span>
                </div>
                
                <h1 class="judul-artikel-besar mb-3 display-5"><?= $berita['judul'] ?></h1>
                
                <div class="info-meta d-flex align-items-center mb-4 pb-3 border-bottom">
                    <span class="me-4"><i class="bi bi-calendar3 me-2"></i> <?= $berita['tanggal'] ?></span>
                    <span><i class="bi bi-person-circle me-2"></i> <?= $berita['penulis'] ?></span>
                </div>

                <div class="overflow-hidden rounded-4 mb-5">
                    <img src="<?= $berita['img'] ?>" class="img-fluid w-100 object-fit-cover gambar-artikel-utama" style="max-height: 500px;" alt="<?= $berita['judul'] ?>">
                </div>

                <article class="blok-konten-artikel">
                    <?= $berita['konten'] ?>
                </article>

                <div class="mt-5 pt-4">
                    <a href="/informasi/news" class="tombol-kembali-cifo">
                        <i class="bi bi-arrow-left me-2"></i> Kembali ke Berita
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="position-sticky" style="top: 2rem;" data-aos='fade-left' data-aos-delay='200'>
                    
                    <div class="card kartu-samping-modern mb-4 p-3 border-0">
                        <div class="card-body">
                            <h6 class="fw-bold mb-4 text-uppercase small text-secondary ls-1">Berita Terbaru</h6>
                            <ul class="list-unstyled mb-0">
                                <?php 
                                $count = 0;
                                foreach($data_berita as $b): 
                                    if($count >= 4) break; 
                                    $count++;
                                ?>
                                <li class="mb-3 pb-3 border-bottom" style="border-color: #f0f0f0 !important;">
                                    <a href="/informasi/news/<?= $b['slug'] ?>" class="link-berita-samping mb-1 transisi-halus">
                                        <?= $b['judul'] ?>
                                    </a>
                                    <small class="text-muted" style="font-size: 0.8rem;"><?= $b['tanggal'] ?></small>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="card kotak-cta-biru border-0 p-4 text-center shadow">
                        <div class="card-body p-2 position-relative z-1">
                            <h4 class="fw-bold mb-2 text-white">Butuh Koneksi Cepat?</h4>
                            <p class="small text-white opacity-75 mb-4">Dapatkan layanan internet dedicated terbaik untuk perusahaan Anda.</p>
                            <a href="/bantuan/contact" class="btn tombol-cta-putih fw-bold rounded-pill px-4 w-100 shadow-sm">
                                Hubungi Kami
                            </a>
                        </div>
                        <div class="position-absolute bg-white opacity-25 rounded-circle" style="width: 150px; height: 150px; top: -50px; right: -50px;"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>