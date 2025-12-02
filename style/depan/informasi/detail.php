<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">


<style>
  :root {
  --biru-cifo: #0070f3; /* Warna Utama */
  --hitam-judul: #111827; /* Warna Judul Gelap */
  --abu-teks: #4b5563; /* Warna Teks Paragraf */
  --garis-tipis: #eaeaea; /* Border Halus */
  --putih-bersih: #ffffff;
}

.pembungkus-detail-berita {
  font-family: "Inter", sans-serif !important;
  color: var(--abu-teks);
}

.transisi-halus {
  transition: all 0.3s ease-in-out;
}

.judul-artikel-besar {
  color: var(--hitam-judul);
  font-weight: 800;
  letter-spacing: -0.03em;
  line-height: 1.2;
}

.info-meta {
  font-size: 0.9rem;
  color: #666;
}

.gambar-artikel-utama {
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  transition: transform 0.4s ease;
}

.gambar-artikel-utama:hover {
  transform: scale(1.02);
}

.blok-konten-artikel {
  color: #333;
  line-height: 1.8;
  font-size: 1.1rem;
}

.blok-konten-artikel p {
  margin-bottom: 1.5rem;
}

.blok-konten-artikel blockquote {
  border-left: 5px solid var(--biru-cifo);
  background: #f8f9fa;
  padding: 20px;
  border-radius: 0 10px 10px 0;
  font-style: italic;
  color: #555;
  transition: background 0.3s;
}

.blok-konten-artikel blockquote:hover {
  background: #f0f7ff;
}

.kartu-samping-modern {
  background: var(--putih-bersih);
  border: 1px solid var(--garis-tipis);
  border-radius: 12px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.kartu-samping-modern:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

.link-berita-samping {
  color: var(--hitam-judul);
  text-decoration: none;
  font-weight: 600;
  display: block;
  transition: color 0.2s, padding-left 0.2s;
}

.link-berita-samping:hover {
  color: var(--biru-cifo);
  padding-left: 8px;
}

.tombol-kembali-cifo {
  display: inline-flex;
  align-items: center;
  padding: 10px 25px;
  border: 2px solid var(--garis-tipis);
  border-radius: 50px;
  color: #555;
  text-decoration: none;
  font-weight: 600;
  background: white;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.tombol-kembali-cifo:hover {
  border-color: var(--biru-cifo);
  color: var(--biru-cifo);
  transform: translateX(-5px);
  box-shadow: 0 5px 15px rgba(0, 112, 243, 0.15);
}

.kotak-cta-biru {
  background: linear-gradient(135deg, #0070f3 0%, #0056b3 100%);
  color: white;
  border-radius: 16px;
  position: relative;
  overflow: hidden;
}

.tombol-cta-putih {
  background: white;
  color: var(--biru-cifo);
  border: none;
  transition: transform 0.2s;
}

.tombol-cta-putih:hover {
  background: #f8f9fa;
  color: var(--biru-cifo);
  transform: scale(1.05);
}

</style>