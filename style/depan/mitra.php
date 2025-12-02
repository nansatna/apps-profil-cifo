<style>
        /* Gaya Dasar */
        body {
            font-family: 'Poppins', sans-serif; /* Mengganti font yang lebih modern */
            margin: 0;
            padding: 0;
            background-color: #e9ecef; /* Latar belakang yang lebih terang */
            color: #343a40;
        }

        /* 1. Header (Hitam) - Dibuat lebih elegan */
        .header {
            background-color: #212529;
            color: white;
            padding: 15px 0; /* Padding lebih besar */
            box-shadow: 0 4px 10px rgba(0,0,0,0.4); /* Bayangan yang lebih dalam */
            position: sticky; /* Sticky header untuk navigasi mudah */
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-weight: 700; /* Lebih tebal */
            font-size: 1.8em; /* Ukuran lebih besar */
            color: #007bff; /* Logo diberi warna utama */
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            margin-left: 10px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s;
            border-radius: 6px;
        }
        .nav-links .active-menu {
            background-color: #007bff;
            box-shadow: 0 3px 8px rgba(0, 123, 255, 0.5);
        }
        .nav-links a:hover {
            background-color: #3f51b5; /* Warna hover baru */
            color: white;
        }

        /* 2. Judul Hero Section - Dengan Gradien */
        .hero {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); /* Gradien keren */
            color: white;
            padding: 80px 0; /* Padding lebih besar */
            text-align: center;
            /* border-bottom: 5px solid #0056b3; - Dihapus karena gradien sudah kuat */
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 15px;
            font-weight: 800;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        }
        .hero p {
            font-size: 1.2em;
            color: #cce5ff;
            max-width: 800px;
            margin: auto;
        }

        /* 3. Konten Utama */
        .content-container {
            max-width: 1200px; /* Dibuat lebih lebar */
            margin: 50px auto;
            padding: 0 20px;
        }
        .section-title {
            text-align: center;
            color: #212529;
            font-size: 2em;
            margin-bottom: 40px;
            font-weight: 700;
            position: relative;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #007bff;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* 4. Gaya Tampilan Card untuk Mitra - Lebih Profesional */
        .mitra-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px; /* Jarak antar card */
        }
        .mitra-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            padding: 30px;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1); /* Transisi yang lebih halus */
            border-left: 5px solid #007bff; /* Garis samping sebagai penanda */
            position: relative;
            overflow: hidden;
        }
        .mitra-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.2);
        }
        .mitra-card h3 {
            color: #212529;
            margin-top: 0;
            font-size: 1.5em;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .mitra-card .icon {
            color: #007bff;
            font-size: 24px;
            margin-right: 10px;
        }
        .mitra-card .category {
            display: inline-block;
            background-color: #e6f0ff;
            color: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.85em;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .mitra-card p strong {
            display: block;
            color: #212529;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: 600;
            border-bottom: 1px dashed #ced4da;
            padding-bottom: 5px;
        }
        .mitra-card p {
            font-size: 1em;
            color: #5a6470;
            line-height: 1.6;
        }

        /* 5. Footer Sederhana */
        .footer {
            background-color: #212529;
            color: #adb5bd;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            font-size: 0.9em;
        }

        /* Responsive untuk layar kecil */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                padding: 10px 20px;
            }
            .nav-links {
                margin-top: 10px;
            }
            .nav-links a {
                display: block;
                text-align: center;
                margin: 5px 0;
            }
            .hero h1 {
                font-size: 2.5em;
            }
            .mitra-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>