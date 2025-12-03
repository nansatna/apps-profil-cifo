
<!-- Import Font Inter & CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>
    /* File: style/depan/detailFintech.css */

:root {
    --biru-fintech: #0d6efd;
    --biru-muda: #e0f2fe;
    --teks-gelap: #0f172a;
    --teks-abu: #475569;
}

/* Global Font Override */
.wrapper-detail-fintech {
    font-family: 'Inter', sans-serif !important;
    color: var(--teks-abu);
}

/* Hero Section Kecil */
.hero-detail-produk {
    background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    padding-bottom: 3rem;
    border-bottom: 1px solid #f1f5f9;
}

.judul-detail-produk {
    color: var(--teks-gelap);
    font-weight: 800;
    letter-spacing: -0.025em;
    line-height: 1.2;
}

.ikon-wrapper-besar {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(13, 110, 253, 0.15);
}

/* Gambar Utama */
.gambar-detail-fintech {
    border-radius: 24px;
    box-shadow: 0 20px 40px -10px rgba(0,0,0,0.1);
    border: 4px solid #ffffff;
}

/* Konten Artikel */
.konten-fintech h4 {
    color: var(--teks-gelap);
    font-weight: 700;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.konten-fintech p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 1.5rem;
}

.konten-fintech ul {
    list-style: none;
    padding-left: 0;
    margin-bottom: 2rem;
}

.konten-fintech ul li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 10px;
    font-size: 1.05rem;
}

.konten-fintech ul li::before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 2px;
    color: var(--biru-fintech);
    font-weight: bold;
}

/* Sidebar Navigasi */
.card-nav-fintech {
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    overflow: hidden;
}

.link-fintech-nav {
    display: flex;
    align-items: center;
    padding: 15px 20px;
    text-decoration: none;
    color: var(--teks-abu);
    font-weight: 500;
    transition: all 0.2s;
    border-left: 3px solid transparent;
}

.link-fintech-nav:hover {
    background-color: #f8fafc;
    color: var(--biru-fintech);
    padding-left: 25px;
}

.link-fintech-nav.active {
    background-color: #eff6ff;
    color: var(--biru-fintech);
    border-left-color: var(--biru-fintech);
    font-weight: 700;
}
</style>