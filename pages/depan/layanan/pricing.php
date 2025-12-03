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