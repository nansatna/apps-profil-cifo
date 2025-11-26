<section class="bg-primary text-white py-5" >
  <div class="container text-center" data-aos="zoom-in">
    <h1 class="fw-bold">Paket & Harga</h1>
    <p class="lead mt-3">
      Pilih paket terbaik kami untuk memenuhi kebutuhan Anda.  
      Layanan profesional, harga bersahabat.
    </p>
    <a href="#paket" class="btn btn-light btn-lg mt-3">Lihat Paket</a>
  </div>
</section>

<!-- Section Paket Harga -->
<section id="paket" class="py-5 bg-light" data-aos="fade-right">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Pilih Paket Anda</h2>
      <p class="text-muted">Sesuaikan kebutuhan dan dapatkan manfaat terbaik</p>
    </div>

    <div class="row g-4">

    <?php foreach ($DataPaketDanHarga as $paket) : ?>
  <div class="col-md-4">
    <div class="card shadow-sm border-<?= ($paket['btn_class'] == 'btn btn-primary') ? 'warning border-3' : 'primary border-2'; ?>">
      <div class="card-body text-center">
        
        <h5 class="card-title fw-bold"><?= $paket["nama"]; ?></h5>
        <h6>
      <?php foreach ($paket["mbps"] as $kecepatan) : ?>
        <?php if(!empty($kecepatan["lama"])): ?>
        <del class="text-muted"><?= $kecepatan["lama"]; ?></del>
      <?php endif; ?>
      <span class="fw-bold text-primary"><?= $kecepatan["baru"]; ?></span>
      <?php endforeach; ?>
        </h6>
        <h2 class="fw-bold text-primary"><?= $paket["harga"]; ?></h2>
        <p class="text-muted"><?= $paket["periode"]; ?></p>

        <ul class="list-unstyled mt-3 mb-4">
          <?php foreach ($paket["fitur"] as $fitur) : ?>
            <li>✔ <?= $fitur; ?></li>
          <?php endforeach; ?>
        </ul>

        <a href="#" class="<?= $paket["btn_class"]; ?>"><?= $paket["button"]; ?></a>

      </div>
    </div>
  </div>
<?php endforeach; ?>


      

    </div>

  </div>
</section>

<!-- Section Hubungi Kami -->
<!-- Section Hubungi Kami -->
<section id="hubungi" class="py-5 bg-primary text-white position-relative overflow-hidden" data-aos="fade-up">
  <div class="container text-center">

    <!-- Decorative Circles -->
    <div class="circle-1"></div>
    <div class="circle-2"></div>

    <h2 class="fw-bold display-6">Butuh Bantuan?</h2>
    <p class="lead mt-3 px-lg-5 mx-lg-5">
      Kami siap membantu Anda! Dapatkan informasi lengkap, dukungan teknis,
      serta layanan pelanggan dengan cepat dan ramah.
    </p>

    <div class="mt-4">
      <a href="/bantuan/contact" class="btn btn-light btn-lg shadow-sm px-4">
        🔎 Kunjungi Halaman Bantuan
      </a>
    </div>

    <div class="mt-4">
      <a href="https://wa.me/628000000000" class="btn btn-success btn-sm me-2 shadow-sm">
        💬 WhatsApp
      </a>
      <a href="tel:+628000000000" class="btn btn-outline-light btn-sm shadow-sm">
        📞 Telepon
      </a>
    </div>

  </div>
</section>


