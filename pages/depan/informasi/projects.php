<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Informasi Portofolio Proyek</title>


<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
body {
background-color: #f4f6f9;
}
.portfolio-card {
transition: transform .3s, box-shadow .3s;
}
.portfolio-card:hover {
transform: translateY(-5px);
box-shadow: 0 5px 18px rgba(0,0,0,.15);
}
</style>
</head>


<body>
<div class="container py-5">
<h2 class="text-center mb-4 fw-bold">Informasi Portofolio Proyek</h2>
<p class="text-center text-muted mb-5">Berikut adalah beberapa proyek yang telah kami selesaikan.</p>


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
</html>