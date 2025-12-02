
<div class="container">
    <header class="sejarah-header">
        <h1>Sejarah Citra Jelajah Informatika (CIFO)</h1>
        <p>Perjalanan Kami dalam Inovasi Teknologi Sejak 2010</p>
    </header>

    <div class="timeline">
        <?php foreach ($sejarah as $item): ?>
        <div class="timeline-item">
            <div class="timeline-year"><?= htmlspecialchars($item['tahun']); ?></div>
            <div class="timeline-content">
                <h3><?= htmlspecialchars($item['judul']); ?></h3>
                <p><?= htmlspecialchars($item['deskripsi']); ?></p>
                <span class="milestone-badge"><?= htmlspecialchars($item['milestone']); ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="vision-section">
        <h2>Nilai-Nilai Kami</h2>
        <div class="vision-grid">
            <?php foreach ($visi_misi as $nilai): ?>
            <div class="vision-card">
                <h4><?= htmlspecialchars($nilai['judul']); ?></h4>
                <p><?= htmlspecialchars($nilai['deskripsi']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>