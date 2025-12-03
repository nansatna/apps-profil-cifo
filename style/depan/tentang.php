<style>
        /* Definisi Warna Utama */
        :root {
            --primary-color: #0d47a1; /* Dark Blue */
            --accent-color: #ffc107; /* Yellow/Gold Accent */
        }

        /* Gaya Khusus Bagian Hero */
        .hero-section {
            /* * URL GAMBAR BARU DI SINI:
             * Menggunakan gambar bertema Transformasi Digital/Cityscape.
             * Warna overlay (rgba) diperkuat agar teks putih tetap terbaca jelas.
             */
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.8)), url(https://www.cifo.co.id/assets/uploads/media-uploader/home-pic-11728020318.png) no-repeat center center;
            background-size: cover;
            background-attachment: fixed; /* Efek parallax ringan */
            color: white;
            padding: 6rem 0; 
            border-radius: 0 0 50px 50px; 
            margin-bottom: 3rem;
        }

        /* Styling Judul dan Teks Utama */
        .display-3 {
            font-weight: 800; /* Lebih tebal */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Shadow pada teks agar menonjol */
        }

        /* Kartu Visi Misi & Nilai Inti */
        .custom-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: none;
            border-radius: 15px; 
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        .custom-card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        /* Icon Styling */
        .icon-large {
            font-size: 3rem;
            color: var(--accent-color);
            margin-bottom: 15px;
        }

        /* Bagian Footer */
        .footer-custom {
            background-color: #1a237e; 
            color: #e3f2fd;
        }
    </style>