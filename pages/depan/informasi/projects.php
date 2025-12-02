
<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">



</head>


<body>
<div class="container py-5" data-aos="fade-up">
<h2 class="text-center mb-4 fw-bold">Informasi Portofolio Proyek</h2>
<p class="text-center text-muted mb-5">Berikut ini adalah beberapa proyek yang telah kami selesaikan.</p>


<div class="row g-4">
<?php foreach($projects as $project): ?>
<div class="col-md-4">
<div class="card h-100 portfolio-card">
<img src="<?= $project['image']; ?>" class="card-img-top" alt="<?= $project['title']; ?>">
<div class="card-body">
<h5 class="card-title fw-bold"><?= $project['title']; ?></h5>
<p class="mb-1"><strong>Klien:</strong> <?= $project['client']; ?></p>
<p class="mb-1"><strong>Tahun:</strong> <?= $project['year']; ?></p>
<p class="text-muted small"><?= $project['description']; ?></p>
</div>
<div class="card-footer text-center">

</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
