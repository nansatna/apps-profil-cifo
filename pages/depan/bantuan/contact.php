<?php
$status = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // proses kirim pesan
    $status = "Pesan berhasil dikirim!";
}
?>


<?php
// Variabel $status dikirim dari controller
// contoh controller:
// $status = "Pesan berhasil dikirim!";
?>



<div class="contact-container">

    <h2>Hubungi Kami</h2>
    <p class="contact-subtitle">Citra Jelajah Informatika (CIFO)</p>

    <?php if (!empty($status)): ?>
        <p class="contact-status"><?= htmlspecialchars($status) ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required placeholder="Masukkan nama anda...">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Masukkan email anda...">

        <label for="pesan">Pesan</label>
        <textarea id="pesan" name="pesan" required placeholder="Tulis pesan anda..."></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>

</div>
