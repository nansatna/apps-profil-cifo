<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - PT. Citra Jelajah Informatika</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
            min-height: 100vh;
        }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }

        header {
            background: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            text-align: center;
            border: 1px solid #e0e0e0;
        }
        header h1 { color: #000; font-size: 2.5rem; margin-bottom: .5rem; }
        header p { color: #666; font-size: 1.1rem; }

        .timeline { position: relative; padding: 2rem 0; }
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background: #e0e0e0;
        }
        .timeline-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            position: relative;
        }
        .timeline-item:nth-child(even) { flex-direction: row-reverse; }

        .timeline-content {
            width: 45%;
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: .3s ease;
            border: 1px solid #e0e0e0;
        }
        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            border-color: #ccc;
        }

        .timeline-year {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: #000;
            color: #fff;
            padding: 1rem 1.5rem;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            z-index: 10;
        }

        .timeline-content h3 { color: #000; margin-bottom: 1rem; font-size: 1.5rem; }
        .timeline-content p { color: #555; line-height: 1.8; }

        .milestone-badge {
            display: inline-block;
            background: #000;
            color: #fff;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: .85rem;
            margin-top: .5rem;
            font-weight: 600;
        }

        .vision-section {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            margin-top: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border: 1px solid #e0e0e0;
        }

        .vision-section h2 {
            color: #000;
            margin-bottom: 1rem;
            text-align: center;
            font-size: 2rem;
        }

        .vision-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .vision-card {
            background: #f9f9f9;
            color: #000;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            transition: .3s ease;
            border: 1px solid #e0e0e0;
        }
        .vision-card:hover {
            transform: scale(1.05);
            background: #000;
            color: #fff;
            border-color: #000;
        }

        @media (max-width:768px) {
            .timeline::before { left: 30px; }
            .timeline-item { flex-direction: column !important; }
            .timeline-content { width: 100%; margin-left: 60px; }
            .timeline-year { left: 30px; transform: none; }
            header h1 { font-size: 1.8rem; }
        }
    </style>
</head>

<body>
<?php
$sejarah = [
    [
        'tahun' => '2010',
        'judul' => 'Pendirian Perusahaan',
        'deskripsi' => 'PT Citra Jelajah Informatika (CIFO) didirikan pada 17 Februari 2010 sebagai Network Integrator yang menyediakan layanan pembangunan jaringan dan infrastruktur teknologi.',
        'milestone' => 'Pendirian'
    ],
    [
        'tahun' => '2013',
        'judul' => 'Ekspansi Infrastruktur',
        'deskripsi' => 'CIFO memperluas layanan dengan membangun infrastruktur mandiri berbasis fiber optic, menyediakan layanan internet cepat untuk korporasi dan institusi.',
        'milestone' => 'Infrastruktur'
    ],
    [
        'tahun' => '2016',
        'judul' => 'Diversifikasi Layanan',
        'deskripsi' => 'CIFO mulai menyediakan berbagai layanan TI seperti solusi software, sistem untuk sekolah, hotel, pemerintahan, serta mendukung kebutuhan digitalisasi pelanggan.',
        'milestone' => 'Pertumbuhan'
    ],
    [
        'tahun' => '2019',
        'judul' => 'Memperkuat Ekosistem Digital',
        'deskripsi' => 'CIFO memperluas kehadiran dalam layanan pendidikan, data analytics, fintech, serta memperkuat solusi untuk dunia usaha dan pemerintahan.',
        'milestone' => 'Ekspansi Digital'
    ],
    [
        'tahun' => '2023',
        'judul' => 'Era Transformasi Teknologi',
        'deskripsi' => 'CIFO mengoptimalkan layanan digital dengan berbagai solusi inovatif, meningkatkan kualitas layanan internet, software, dan pendukung ekosistem bisnis di Indonesia.',
        'milestone' => 'Transformasi'
    ]
];

$visi_misi = [
    ['judul'=>'Inovasi','deskripsi'=>'Menghadirkan solusi digital modern dan berkelanjutan.'],
    ['judul'=>'Kualitas','deskripsi'=>'Berkomitmen memberikan layanan terbaik untuk pelanggan.'],
    ['judul'=>'Kepercayaan','deskripsi'=>'Membangun hubungan jangka panjang berbasis integritas.'],
    ['judul'=>'Pertumbuhan','deskripsi'=>'Tumbuh bersama pelanggan dalam era digital.'],
];
?>

<div class="container">
    <header>
        <h1>Sejarah Citra Jelajah Informatika (CIFO)</h1>
        <p>Perjalanan Kami dalam Inovasi Teknologi Sejak 2010</p>
    </header>

    <div class="timeline">
        <?php foreach ($sejarah as $item): ?>
        <div class="timeline-item">
            <div class="timeline-year"><?= $item['tahun']; ?></div>
            <div class="timeline-content">
                <h3><?= $item['judul']; ?></h3>
                <p><?= $item['deskripsi']; ?></p>
                <span class="milestone-badge"><?= $item['milestone']; ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="vision-section">
        <h2>Nilai-Nilai Kami</h2>
        <div class="vision-grid">
            <?php foreach ($visi_misi as $nilai): ?>
            <div class="vision-card">
                <h4><?= $nilai['judul']; ?></h4>
                <p><?= $nilai['deskripsi']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
</body>
</html>
