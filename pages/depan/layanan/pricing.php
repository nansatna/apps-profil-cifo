<style>
  :root {
    --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
    --card-hover-transform: translateY(-10px);
    --price-color: #0d6efd;
  }

  /* Hero Section Styling */
  .hero-section {
    background: var(--primary-gradient);
    position: relative;
    padding-bottom: 6rem; /* Space for the wave */
  }
  
  /* Shape Divider (Gelombang bawah hero) */
  .custom-shape-divider-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
  }
  .custom-shape-divider-bottom svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 60px;
  }
  .custom-shape-divider-bottom .shape-fill {
    fill: #f8f9fa; /* Sesuaikan dengan bg-light section berikutnya */
  }

  /* Pricing Cards */
  .pricing-card {
    transition: all 0.3s ease;
    border: none;
    border-radius: 15px;
    background: #fff;
    position: relative;
    overflow: hidden;
    z-index: 1;
  }

  .pricing-card:hover {
    transform: var(--card-hover-transform);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
  }

  /* Logic untuk Kartu Terlaris (Best Value) */
  .pricing-card.best-value {
    border: 2px solid #0d6efd;
    transform: scale(1.05); /* Sedikit lebih besar */
    z-index: 2;
  }
  .pricing-card.best-value:hover {
    transform: scale(1.05) translateY(-10px);
  }

  /* Ribbon Terlaris */
  .ribbon {
    position: absolute;
    top: 20px;
    right: -35px;
    transform: rotate(45deg);
    background-color: #ffc107;
    color: #000;
    padding: 5px 40px;
    font-size: 0.8rem;
    font-weight: bold;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }

  /* Typography Harga */
  .price-wrapper .currency {
    font-size: 1.2rem;
    vertical-align: top;
    font-weight: 500;
  }
  .price-wrapper .amount {
    font-size: 3rem;
    font-weight: 800;
    color: var(--price-color);
    line-height: 1;
  }
  .price-wrapper .period {
    font-size: 0.9rem;
    color: #6c757d;
  }

  /* List Fitur */
  .feature-list li {
    padding: 8px 0;
    border-bottom: 1px solid rgba(0,0,0,0.05);
  }
  .feature-list li:last-child {
    border-bottom: none;
  }
  .check-icon {
    color: #198754; /* Green */
    margin-right: 8px;
    font-weight: bold;
  }

  /* Contact Section Decoration */
  .circle-decoration {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    z-index: 0;
  }
  .circle-1 { width: 300px; height: 300px; top: -100px; left: -100px; }
  .circle-2 { width: 200px; height: 200px; bottom: -50px; right: -50px; }
</style>

<section class="hero-section text-white py-5">
  <div class="container text-center py-4" data-aos="zoom-in">
    <span class="badge bg-primary text-light mb-3 px-3 py-2 rounded-pill">Penawaran Spesial</span>
    <h1 class="fw-bold display-4">Paket Internet & Digital</h1>
    <p class="lead mt-3 mx-auto" style="max-width: 600px; opacity: 0.9;">
      Solusi konektivitas tanpa batas untuk rumah dan bisnis Anda. 
      Kecepatan stabil, harga transparan, tanpa biaya tersembunyi.
    </p>
    <a href="#paket" class="btn btn-light text-primary fw-bold btn-lg mt-4 px-5 shadow-sm rounded-pill">Lihat Pilihan Paket</a>
  </div>

  <div class="custom-shape-divider-bottom">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
  </div>
</section>

<section id="paket" class="py-5 bg-light" data-aos="fade-up" data-aos-delay="300">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark">Pilih Paket Terbaik</h2>
      <p class="text-muted">Sesuaikan dengan kebutuhan aktivitas digital Anda</p>
    </div>

    <div class="row g-4 align-items-center justify-content-center">

      <?php foreach ($DataPaketDanHarga as $paket) : 
          // Logic sederhana untuk menentukan style:
          // Jika tombolnya 'btn-primary', kita anggap ini paket Unggulan/Best Value
          $isBestValue = (strpos($paket['btn_class'], 'btn-primary') !== false);
          $cardClass = $isBestValue ? 'best-value shadow-lg' : 'shadow-sm';
          $headerBg = $isBestValue ? 'bg-primary text-white' : 'bg-white text-dark';
          // Memecah string harga untuk styling (Asumsi format: "Rp 300.000")
          // Jika format data Anda berbeda, sesuaikan bagian ini.
          $rawPrice = str_replace(['Rp', ' ', '.'], '', $paket["harga"]); 
      ?>
      
      <div class="col-md-4">
        <div class="card pricing-card h-100 <?= $cardClass; ?>">
          
          <?php if ($isBestValue) : ?>
            <div class="ribbon">POPULAR</div>
          <?php endif; ?>

          <div class="card-body text-center p-4 p-lg-5">
            
            <h5 class="fw-bold text-uppercase mb-3 tracking-wide text-primary"><?= $paket["nama"]; ?></h5>
            
            <div class="mb-4">
              <?php foreach ($paket["mbps"] as $kecepatan) : ?>
                <?php if(!empty($kecepatan["lama"])): ?>
                  <div class="text-decoration-line-through text-muted small mb-1">
                    <?= $kecepatan["lama"]; ?>
                  </div>
                <?php endif; ?>
                <span class="badge bg-light text-primary border border-primary fs-6 px-3 py-2 rounded-pill">
                  ⚡ <?= $kecepatan["baru"]; ?>
                </span>
              <?php endforeach; ?>
            </div>

            <div class="price-wrapper mb-2">
              <span class="currency">Rp</span>
              <span class="amount"><?= str_replace('Rp', '', $paket["harga"]); ?></span>
            </div>
            <p class="text-muted small"><?= $paket["periode"]; ?></p>

            <hr class="my-4 opacity-10">

            <ul class="list-unstyled feature-list text-start mb-5 mx-auto" style="max-width: 250px;">
              <?php foreach ($paket["fitur"] as $fitur) : ?>
                <li><i class="check-icon">✔</i> <?= $fitur; ?></li>
              <?php endforeach; ?>
            </ul>

            <div class="d-grid">
              <a href="#" class="<?= $paket["btn_class"]; ?> btn-lg rounded-pill fw-bold shadow-sm">
                <?= $paket["button"]; ?>
              </a>
            </div>

          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<section id="hubungi" class="py-5 bg-primary text-white position-relative overflow-hidden" data-aos="fade-up">
  <div class="circle-decoration circle-1"></div>
  <div class="circle-decoration circle-2"></div>

  <div class="container text-center position-relative z-1">
    <h2 class="fw-bold display-6 mb-3">Butuh Konsultasi Paket?</h2>
    <p class="lead mb-5 px-lg-5 mx-lg-5 opacity-75">
      Tim support kami siap 24/7 membantu Anda memilih layanan yang tepat atau menyelesaikan kendala teknis.
    </p>

    <div class="row justify-content-center g-3">
      <div class="col-auto">
        <a href="/bantuan/contact" class="btn btn-light text-primary btn-lg shadow px-4 rounded-pill">
          <i class="bi bi-question-circle me-2"></i>Pusat Bantuan
        </a>
      </div>
      <div class="col-auto">
        <a href="https://wa.me/628000000000" class="btn btn-success btn-lg shadow px-4 rounded-pill">
          <i class="bi bi-whatsapp me-2"></i>WhatsApp
        </a>
      </div>
      <div class="col-auto">
        <a href="tel:+628000000000" class="btn btn-outline-light btn-lg shadow px-4 rounded-pill">
          <i class="bi bi-telephone me-2"></i>Telepon
        </a>
      </div>
    </div>
  </div>
</section>