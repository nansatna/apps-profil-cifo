<?php
// 1. Load Data

// 2. LOGIKA ROUTING (Controller)
global $var;
// Cek jika ada slug di URL (misal: /produk/fintech/payment-gateway)
if (!empty($var[0])) {
    // Panggil file detailFintech.php
    include 'detailFintech.php';
    return; // Hentikan eksekusi agar list di bawah tidak muncul
}

// 3. JIKA TIDAK ADA SLUG -> TAMPILKAN DAFTAR LAYANAN (Kode Lama Anda)
?>



<main>
    <div class="py-5 latar-hero-modern border-bottom">
        <div class="container px-5 position-relative" style="z-index: 1;">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="text-center text-xl-start">
                        <div class="badge bg-primary bg-opacity-10 text-primary mb-3 rounded-pill px-3 py-2 fw-semibold">
                            Solusi Digital Terpercaya
                        </div>
                        <h1 class="display-5 fw-bolder mb-3 text-dark">
                            Solusi <span class="teks-judul-gradien">Fintech Inovatif</span> <br>untuk Masa Depan Bisnis Anda
                        </h1>
                        <p class="lead fw-normal text-secondary mb-4" style="line-height: 1.8;">
                            CIFO menghadirkan layanan teknologi finansial terdepan untuk mendorong efisiensi, keamanan, dan pertumbuhan bisnis Anda di era digital yang serba cepat.
                        </p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3 rounded-pill shadow-sm" href="#daftar-layanan">Lihat Layanan</a>
                            <a class="btn btn-outline-dark btn-lg px-4 rounded-pill" href="/bantuan/contact">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="https://e2consulting.co.id/wp-content/uploads/2019/09/fintech-1000x640.jpg" class="img-fluid rounded-4 shadow-lg" style="transform: rotate(2deg); border: 4px solid white;" alt="Ilustrasi Fintech CIFO">
                </div>
            </div>
        </div>
    </div>

    <section id="daftar-layanan" class="py-5 bg-white">
        <div class="container px-5 my-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bolder display-6">Layanan Unggulan</h2>
                <p class="lead text-secondary mx-auto" style="max-width: 600px;">
                    Kami menawarkan serangkaian solusi yang dapat disesuaikan dengan kebutuhan spesifik ekosistem keuangan Anda.
                </p>
            </div>
            
            <div class="row gx-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
                <?php 
                $delay_animasi = 0; 
                // Loop data array yang baru
                foreach ($layanan_fintech as $key => $layanan) : 
                    $delay_animasi += 100;
                ?>
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay_animasi; ?>">
                    <div class="kartu-layanan-cifo p-4 d-flex flex-column">
                        <div class="wadah-ikon-layanan bg-<?php echo $layanan['warna']; ?> bg-opacity-10 text-<?php echo $layanan['warna']; ?>">
                            <i class="bi <?php echo $layanan['ikon']; ?> fs-2"></i>
                        </div>
                        <div class="mb-4">
                            <h3 class="h4 fw-bold mb-3"><?php echo $layanan['judul']; ?></h3>
                            <p class="text-secondary mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                                <?php echo $layanan['deskripsi']; ?>
                            </p>
                        </div>
                        <div class="mt-auto">
                            <!-- PERHATIKAN HREF INI: Mengarah ke slug detail -->
                            <a class="tautan-aksi-modern text-<?php echo $layanan['warna']; ?>" href="/produk/fintech/<?php echo $layanan['slug']; ?>">
                                Pelajari Detail
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Section Hubungi Kami Tetap Sama -->
    <section id="hubungi-kami" class="py-5 bg-white">
        <div class="container px-5" data-aos="zoom-in">
            <div class="bg-cta-modern p-5 text-center text-white shadow-lg position-relative overflow-hidden">
                <div style="position: absolute; top: -50px; left: -50px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                <div style="position: absolute; bottom: -30px; right: -30px; width: 200px; height: 200px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>
                <div class="position-relative z-1">
                    <h2 class="display-6 fw-bold mb-3">Siap Mengembangkan Bisnis Anda?</h2>
                    <p class="lead mb-4 opacity-75 mx-auto" style="max-width: 700px;">
                        Diskusikan kebutuhan spesifik Anda dengan tim ahli CIFO.
                    </p>
                    <a class="btn btn-light btn-lg rounded-pill px-5 fw-bold shadow-sm" href="/bantuan/contact">
                        Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>