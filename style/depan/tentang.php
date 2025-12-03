    <style>
        /* Custom CSS untuk PT CIFO - TEMA BIRU */
        :root {
            --cifo-blue: #0062cc; /* Warna Biru Utama */
            --cifo-blue-dark: #004a99; /* Warna Biru untuk Hover */
            --cifo-dark: #333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .text-cifo-blue {
            color: var(--cifo-blue);
        }

        .bg-cifo-blue {
            background-color: var(--cifo-blue);
        }

        .btn-cifo {
            background-color: var(--cifo-blue);
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-cifo:hover {
            background-color: var(--cifo-blue-dark);
            color: white;
        }

        /* Hero Section Styles */
        .hero-section {
            /* Background sudah menggunakan foto data center dari request sebelumnya */
            background: linear-gradient(rgba(0, 40, 100, 0.8), rgba(0, 40, 100, 0.8)), url('https://placehold.co/1920x600/333/999?text=CIFO+Headquarters');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 98, 204, 0.15);
            transition: all 0.3s ease;
        }

        .section-padding {
            padding: 80px 0;
        }
    </style>