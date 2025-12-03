<?php
// Data dummy modern
$data = [
    [
        "judul" => "Workshop Digital Marketing",
        "tanggal" => "2025-03-10",
        "deskripsi" => "Pelatihan dasar strategi pemasaran digital untuk pelaku UMKM.",
        "foto" => "https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/06/10/3423913981.jpeg"
    ],
    [
        "judul" => "Festival Kuliner Lokal",
        "tanggal" => "2025-06-22",
        "deskripsi" => "Acara pengenalan produk kuliner unggulan daerah.",
        "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnWlBHjjH8PZKjInPjrORyOnjYIsz7C9uOcw&s"
    ],
    [
        "judul" => "Kegiatan Bakti Sosial",
        "tanggal" => "2025-08-15",
        "deskripsi" => "Pembagian sembako kepada warga kurang mampu.",
        "foto" => "https://nawabhakti.sch.id/media_library/posts/post-image-1658202741313.jpg"
    ],
    [
        "judul" => "Forum Kegiatan Pembahasan Dunia IT",
        "tanggal" => "2025-08-15",
        "deskripsi" => "Membahas tentang AI dan karier di dunia IT.",
        "foto" => "https://identitasunhas.com/wp-content/uploads/2025/03/WhatsApp-Image-2025-03-16-at-20.25.20_4a8a4a68.jpg"
    ]

    
];
?>

   
</head>

<body>

<div class="header py-8">
    <h1 class="fw-bold text-black">Dokumentasi Kegiatan</h1>
    <p class="mb-5 fw-bold text-primary">Kumpulan kegiatan terbaru yang telah dilaksanakan</p>
</div>

<div class="container">
    <div class="row g-4">

        <?php foreach ($data as $kegiatan) { ?>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="<?= $kegiatan['foto']; ?>" class="card-img-top" alt="Foto Kegiatan">

                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $kegiatan['judul']; ?></h5>

                        <p class="text-muted mb-1">
                            <small>
                                <?= date("d M Y", strtotime($kegiatan['tanggal'])); ?>
                            </small>
                        </p>

                        <p class="card-text"><?= $kegiatan['deskripsi']; ?></p>

                        <a href="#" class="btn btn-primary btn-sm w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php } ?>

</head>

<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="title-box">
                <h3>Tambah Dokumentasi Kegiatan</h3>
                <div class="title-accent"></div>
            </div>

            <div class="card shadow p-4">
                <form action="proses_input.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Judul Kegiatan</label>
                        <input type="text" name="judul" class="form-control" placeholder="Masukkan judul kegiatan..." required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Kegiatan</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4" placeholder="Tuliskan deskripsi kegiatan..." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Foto Dokumentasi</label>
                        <input type="file" name="foto" class="form-control" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 btn-custom">
                        Simpan Dokumentasi
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>


    </div>
</div>


