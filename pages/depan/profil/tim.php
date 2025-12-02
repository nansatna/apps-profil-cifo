<?php 
include 'data/profil/tim.php'; 
include 'style/profil/tim.php';
?>

<section class="hero-section">
    <div class="background-overlay"></div>
    <div class="hero-content">
        <h1 class="animated-text">Kenali Tim Kami</h1>
        <p class="animated-text delay-1">Direktur dan Pimpinan di Semua Perusahaan CIFO Group</p>
    </div>
</section>

<section class="team-section">
    <h2 class="fw-bold " data-aos="fade-left">Tim Kami</h2>
    <p data-aos="fade-left">Direktur dan Pimpinan di Semua Perusahaan CIFO Group</p>
    
    <!-- 2. Struktur HTML & Integrasi PHP -->
    <div class="team-carousel" data-aos="zoom-in">
        
        <?php 
        // Melakukan loop untuk setiap anggota tim dalam array
        foreach ($team_members as $member) : 
        ?>
        
        <!-- Kartu Tim dibuat secara dinamis -->
        <div class="team-card">
            <div class="card-image">
                <!-- Data diakses menggunakan sintaks PHP pendek -->
                <img src="<?= htmlspecialchars($member['image']) ?>" alt="Foto <?= htmlspecialchars($member['name']) ?>">
            </div>
            <div class="card-info">
                <h3><?= htmlspecialchars($member['name']) ?></h3>
                <p class="role"><?= htmlspecialchars($member['role']) ?></p>
                <p class="bio-short"><?= htmlspecialchars($member['bio']) ?></p>
            </div>
        </div>
        
        <?php endforeach; ?>
        
    </div>
</section>