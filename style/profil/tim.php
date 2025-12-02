<style>

        /* Styling Dasar Hero Section */
.hero-section {
    position: relative; /* Penting untuk penempatan overlay */
    height: 100vh; /* Mengambil seluruh tinggi viewport */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    overflow: hidden; /* Penting untuk memastikan tidak ada scroll horizontal dari blur */

    /* Gambar Latar Belakang Perusahaan */
    background-image: url('https://dorandev.com/wp-content/uploads/2024/01/Profil-Perusahaan-4.jpg'); /* Ganti dengan URL gambar Anda */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Efek Blur dan Gelap pada Gambar Latar Belakang */
.background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(8px); /* Efek blur utama */
    background-color: rgba(0, 0, 0, 0.5); /* Overlay gelap agar teks lebih mudah dibaca */
    z-index: 1; /* Pastikan overlay di bawah konten hero */
}

/* Konten Hero (Teks dan Tombol) */
.hero-content {
    position: relative; /* Penting agar konten di atas overlay */
    z-index: 2;
    padding: 20px;
    max-width: 900px;
    color: white; /* Warna teks putih agar kontras dengan background gelap */
}

/* Styling Font */
.hero-content h1 {
    font-family: 'Montserrat', sans-serif; /* Contoh font modern */
    font-size: 3.8rem;
    margin-bottom: 0.8rem;
    line-height: 1.2;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Tambah bayangan teks agar lebih menonjol */
}

.hero-content p {
    font-family: 'Open Sans', sans-serif; /* Contoh font sekunder */
    font-size: 1.6rem;
    margin-bottom: 2.5rem;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
}

/* Styling Tombol */
.hero-button {
    display: inline-block;
    padding: 14px 35px;
    background-color: #007bff; /* Contoh warna tombol (biru) */
    color: white;
    text-decoration: none;
    border-radius: 50px; /* Bentuk tombol lebih bulat */
    font-size: 1.1rem;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.hero-button:hover {
    background-color: #0056b3;
    transform: translateY(-3px); /* Efek sedikit naik saat hover */
}

/* --- Animasi Font --- */

/* Mendefinisikan Keyframes untuk Animasi Geser & Pudar */
@keyframes slideUpFadeIn {
    from {
        opacity: 0; /* Mulai dari tidak terlihat */
        transform: translateY(30px); /* Geser 30px ke bawah */
        filter: blur(5px); /* Sedikit blur saat mulai */
    }
    to {
        opacity: 1; /* Akhiri dengan terlihat penuh */
        transform: translateY(0); /* Kembali ke posisi normal */
        filter: blur(0); /* Tanpa blur saat akhir */
    }
}

/* Menerapkan Animasi ke Teks */
.animated-text {
    opacity: 0; /* Sembunyikan elemen secara default */
    animation: slideUpFadeIn 1s cubic-bezier(0.23, 1, 0.32, 1) forwards; /* Custom easing */
}

/* Penundaan Animasi (Delay) */
.hero-content h1.animated-text {
    animation-delay: 0.5s; /* Mulai animasi 0.5 detik setelah halaman dimuat */
}

.animated-text.delay-1 {
    animation-delay: 1.2s; /* Mulai animasi 1.2 detik setelah halaman dimuat */
}

/* (Opsional) Impor Font dari Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@400&display=swap');

        /* Menggunakan font sistem standar */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            line-height: 1.6;
        }

        /* --- Bagian Utama Section --- */
        .team-section {
            padding: 60px 0;
            text-align: center;
            background-color: #f9f9f9;
        }

        .team-section h2 {
            margin-bottom: 40px;
            font-size: 2.5em;
            color: #333;
        }

        /* --- Wadah Carousel dan Efek Geser --- */
        .team-carousel {
            display: flex;
            overflow-x: scroll; /* Aktifkan geseran horizontal */
            overflow-y: hidden;
            padding: 20px 5%; /* Jarak di kanan kiri untuk melihat tepi kartu berikutnya */
            gap: 20px;       /* Jarak antar kartu */
            
            /* PENTING: Scroll Snapping untuk geseran kartu yang rapi */
            scroll-snap-type: x mandatory; 
            -webkit-overflow-scrolling: touch; 
            
            /* Sembunyikan scrollbar bawaan */
            scrollbar-width: none; /* Firefox */
        }
        .team-carousel::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }

        /* --- Tampilan Kartu Tim --- */
        .team-card {
            /* Lebar tetap 300px per kartu */
            flex: 0 0 300px; 
            width: 300px;
            
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: transform 0.3s ease-in-out;
            
            /* Titik penguncian geseran */
            scroll-snap-align: start; 
            
            /* Tambahkan efek hover */
            cursor: pointer;
        }
        .team-card:hover {
             transform: translateY(-8px); /* Sedikit naik saat di-hover */
        }

        .card-image {
            width: 100%;
            aspect-ratio: 4 / 3; /* Rasio aspek gambar 4:3 */
            overflow: hidden;
            border-radius: 12px 12px 0 0; 
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Pastikan gambar mengisi penuh wadah */
            display: block;
        }

        .card-info {
            padding: 20px;
        }

        .card-info h3 {
            margin: 0 0 5px 0;
        }

        .card-info .role {
            color: #6c757d;
            font-weight: 500;
            margin-bottom: 10px;
            font-size: 0.95em;
        }
        
        .card-info .bio-short {
            font-size: 0.9em;
            color: #555;
        }

        /* --- Responsif (Di Ponsel) --- */
        @media (max-width: 768px) {
            .team-card {
                /* Kartu mengambil 85% lebar layar ponsel */
                flex: 0 0 85vw; 
                width: 85vw;
            }
        }
    </style>